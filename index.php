<?php
    include 'view.php';
    include 'he/PdfToText.phpclass';
    include "doc2txt.class.php";
    include 'php/db.php';

    $string = $_GET['query'];
    $sql = "SELECT * FROM upload ";
    $result = $link->query($sql);


    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $fileArray = pathinfo($row['nama']);
            $file_ext  = $fileArray['extension'];
            if($file_ext == "pdf") {
                $pdf  =  new PdfToText ( 'http://localhost/perin/kemenperin/uploads/'. $row['nama'] ) ;
                //$string = "Azman";
                $data = $pdf->Text;
                if(strpos($data, $string) !== false){
                    // echo $string;

                    $c="10";

                    print context_find($data, $string, $c)."\n";

                }
            }
            else {

                $docObj = new DocxConversion($row['alamat']);
                // $docObj = new DocxConversion("switchgender.doc");

                $txt = $docObj->convertToText();
                if(strpos($txt, $string) !== false){
                    echo $string;
                }
                // echo $txt;
            }
            // else{
            // echo "failed";
            // }
        }
    }


    

?>