<?php
    include ( 'he/PdfToText.phpclass' ) ;
    include "doc2txt.class.php";
    include 'php/db.php';

    $string = $_GET['query'];
    $sql = "SELECT * FROM upload ";
    $result = $link->query($sql);    

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $fileArray = pathinfo($row['alamat']);
            $file_ext  = $fileArray['extension'];
            if($file_ext == "pdf") {
                $pdf 	=  new PdfToText ( 'http://localhost/pkl/uploads/'. $row['nama'] ) ;
                $data = $pdf->Text;
                if(strpos($data, $string) !== false){
                    echo $string;
                }
            }
            else {
                    $docObj = new DocxConversion($row['alamat']);

                    $txt = $docObj->convertToText();
                    if(strpos($txt, $string) !== false){
                        echo $string;
                    }
                }
            }
        }
    

?>