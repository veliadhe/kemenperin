<?php
    include ( 'he/PdfToText.phpclass' ) ;
    include "doc2txt.class.php";
    include 'php/db.php';

    $string = $_GET['query'];
    $sql = "SELECT * FROM upload ";
    $result = $link->query($sql);

    $file_ext  = $result['extension'];

    
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($file_ext == "pdf") {
                    $pdf 	=  new PdfToText ( 'http://localhost/pkl/uploads/'. $row['nama'] ) ;
                    //$string = "Azman";
                    $data = $pdf->Text;
                    if(strpos($data, $string) !== false){
                        echo $string;
                    }
                else {
                    $docObj = new DocxConversion($row['alamat']);
                    // $docObj = new DocxConversion("switchgender.doc");

                    $txt = $docObj->convertToText();
                    echo $txt;
                }
                // else{
                // echo "failed";
                // }
            }
        }
    }

?>