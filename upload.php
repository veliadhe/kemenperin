<?php

include 'php/db.php';
include ( 'he/PdfToText.phpclass' ) ;
include "doc2txt.class.php";

if( isset($_POST['upload']) ){
    $tit = $_FILES['file']['name'];;
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];

    $filename = preg_replace('/\s+/', '-', $tit);

    move_uploaded_file($file_tmp, 'uploads/' . $filename);
    //$file_error = $file['error'];

    $file_store = 'uploads/' . $filename ;

    $fileArray = pathinfo($file_store);
    $file_ext  = $fileArray['extension'];
    if($file_ext == "pdf") {

        $pdf 	=  new PdfToText ( $file_store ) ;

        $data = $pdf->Text;
    }
    else {
            $docObj = new DocxConversion($file_store);


            $data = $docObj->convertToText();
        }


    global $link;
    $mem = mysqli_real_escape_string($link, $tit);
    //$tit = mysqli_real_escape_string($link, $tit);

    $query = "INSERT INTO upload(nama, alamat, isi) VALUES ('$filename','$file_store', '$data')";
    if( mysqli_query($link,$query) ){
      echo "heyyyooo";
    }
    else{
      echo "kok salah";
    }
  }
  
?>
