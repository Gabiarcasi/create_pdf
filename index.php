<?php
global $CFG, $aDEBUG, $variaveis;

require_once $CFG->dirroot . '/-----/dompdf/vendor/autoload.php';
require_once $CFG->dirroot . '/-----/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

function createPDF($variaveis, $file_path) {

    $dir_html  = "../-----/modelo_pdf.html";

    $dompdf = new Dompdf(['enable_remote' => true]);

    $html = file_get_contents($dir_html);

    foreach ($variaveis as $key => $value) {
        if (in_array($key, ['date_start_dth', 'date_end_dth', 'pdf_update_at'])) {
            $value = substr($value, 0, 10);
            $date = DateTime::createFromFormat('Y-m-d', $value);
            $value = $date->format('d/m/Y');
        }
        $html = str_replace('$' . $key, $value, $html);
    }
	
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->set_option('isRemoteEnabled', true);
    $dompdf->set_option('isHtml5ParserEnabled', true);
    $dompdf->loadHtml($html);
    $dompdf->render();

    $output = $dompdf->output();
    file_put_contents($file_path, $output);

	return $html;
}
?>
