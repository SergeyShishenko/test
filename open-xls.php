<?php
  require_once dirname(__FILE__) . '/./Classes/PHPExcel.php'; // Подключаем библиотеку PHPExcel
//   $phpexcel = new PHPExcel(); // Создаём объект PHPExcel
//   /* Каждый раз делаем активной 1-ю страницу и получаем её, потом записываем в неё данные */
//   $page = $phpexcel->setActiveSheetIndex(0); // Делаем активной первую страницу и получаем её
//   $page->setCellValue("A1", "Hello"); // Добавляем в ячейку A1 слово "Hello"
//   $page->setCellValue("A2", "World!"); // Добавляем в ячейку A2 слово "World!"
//   $page->setCellValue("B1", "MyRusakov.ru"); // Добавляем в ячейку B1 слово "MyRusakov.ru"
//   $page->setTitle("Test"); // Ставим заголовок "Test" на странице
//   /* Начинаем готовиться к записи информации в xlsx-файл */
//   $objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
//   /* Записываем в файл */
//   $objWriter->save("test.xlsx");

//   Использование PHPExcel :

//   include 'PHPExcel/IOFactory.php'; $inputFileType = 'Excel5'; $inputFileName = 'MyExcelFile.

//   Если ваш файл Excel – это Excel 2007 (xlsx) или позже, а не Excel 2003 (xls) или ранее

//  include 'PHPExcel/IOFactory.php';
 require_once dirname(__FILE__) . '/./Classes/PHPExcel/IOFactory.php';
  $inputFileType = 'Excel2007';
   $inputFileName = 'test.xlsx';
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
     $objPHPExcel = $objReader->load($inputFileName);
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'HTML');
       $objWriter->save('php://output');
        exit; 
?>