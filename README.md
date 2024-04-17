# README - Criação de PDF com Dompdf

## Autoria

Este projeto foi desenvolvido por mim [Gabriela Arcasi] como parte de minhas responsabilidades na [Fundação Logosófica - Filial Flamboyant].

## Introdução

Este código PHP utiliza a biblioteca Dompdf para criar arquivos PDF a partir de templates HTML. Ele foi desenvolvido para facilitar a criação de PDFs com base em dados dinâmicos, eliminando a necessidade de usar ferramentas manuais.

## Segurança

Os campos que contêm informações confidenciais, como caminhos de arquivos e variáveis de configuração, estão ocultados com --- neste README.

## Funcionalidade

O código permite criar PDFs com as seguintes características:

- Criação a partir de template HTML: O código utiliza um template HTML como base para a criação do PDF. Você pode personalizar o template para incluir seus próprios layouts, imagens e textos.
- Substituição de variáveis: O código permite substituir variáveis no template HTML por valores dinâmicos. Isso significa que você pode gerar PDFs personalizados para cada caso de uso.
- Formatação automática: O Dompdf garante que o layout do HTML seja convertido corretamente para o PDF, preservando formatações como fontes, cores e espaçamentos.

## Requisitos

Para utilizar este código, você precisará de:

- Hospedagem com suporte a PHP: O código precisa ser executado em um servidor com suporte a PHP.
- Biblioteca Dompdf: A biblioteca Dompdf precisa ser baixada e incluída no seu projeto. Você pode encontrar instruções de download e instalação no site oficial da biblioteca: https://github.com/dompdf
- Template HTML: Você precisará de um template HTML com a estrutura desejada para o seu PDF.
