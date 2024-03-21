<?php

// Carregar o autoloader do Composer
require 'vendor/autoload.php';

// Usar a classe mPDF
use Mpdf\Mpdf;

// Criar uma instância do mPDF
$mpdf = new Mpdf();

// Adicionar conteúdo ao PDF
$mpdf->WriteHTML('<h1>Meu primeiro PDF com mPDF</h1>');

// Gerar o PDF
$mpdf->Output('meu_pdf.pdf', 'D');
