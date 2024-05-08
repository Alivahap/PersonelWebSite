<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;


class CvController extends Controller
{

    public function index()
    {
        return view('cv.index');
    }

    public function generateCv(Request $request)
    {

        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'education' => 'required|string',
        ]);



     /*   
       
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
         
        $header = $section->addHeader();
        $header->addText('This is my fabulous header!');
         
        $footer = $section->addFooter();
        $footer->addText('Footer text goes here.');
         
        $textrun = $section->addTextRun();
        $textrun->addText('Some text. ');
        $textrun->addText('And more Text in this Paragraph.');
         
        $textrun = $section->addTextRun();
        $textrun->addText('New Paragraph! ', ['bold' => true]);
        $textrun->addText('With text...', ['italic' => true]);
         
        $rows = 10;
        $cols = 5;
        $section->addText('Basic table', ['size' => 16, 'bold' => true]);
         
        $table = $section->addTable();
        for ($row = 1; $row <= 8; $row++) { $table->addRow();
            for ($cell = 1; $cell <= 5; $cell++) { $table->addCell(1750)->addText("Row {$row}, Cell {$cell}");
            }
        }
         
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('MyDocument.docx');

*/



// PHPWord objesini oluşturma
$phpWord = new PhpWord();

// Yeni bir sekme oluşturma
$section = $phpWord->addSection();

// Arka plan rengini ayarlama
//$section->getStyle()->setBackgroundColor('F2F2F2');

// Fotoğraf ekleme
//$section->addImage('path/to/your/photo.jpg', array('width' => 100, 'height' => 100, 'marginTop' => 20, 'marginLeft' => 20));

// Varolan bir DOCX dosyasını yükle
$docxFilePath = public_path('ozgecmis.docx');
$phpWord = IOFactory::load($docxFilePath);

// İçeriği değiştir (örneğin "ali"yi "ahmet" ile değiştir)
$section = $phpWord->getSections()[0];

$section->replaceText('ali', 'ahmet');

// Değiştirilmiş belgeyi kaydet
$modifiedDocxFilePath = 'modified_document.docx';
$phpWord->save($modifiedDocxFilePath);

echo "İçerik değiştirildi ve $modifiedDocxFilePath dosyasına kaydedildi.";




    }





}
