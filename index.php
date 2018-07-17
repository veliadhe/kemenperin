<?php
    include ( 'he/PdfToText.phpclass' ) ;
    include 'php/db.php';

    $string = $_GET['query'];
    $sql = "SELECT * FROM upload ";
    $result = $link->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $pdf 	=  new PdfToText ( 'http://localhost/pkl/uploads/'. $row['nama'] ) ;
            //$string = "Azman";
            $data = $pdf->Text;
            if(strpos($data, $string) !== false){
                echo $string;
            }
            // else{
            // echo "failed";
            // }
        }
    }
            
    
    
?>