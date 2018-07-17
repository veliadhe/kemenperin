<?php

include 'php/db.php';

if( isset($_POST['upload']) ){
    $tit = $_FILES['file']['name'];;
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];

    $filename = preg_replace('/\s+/', '%20', $tit);

    move_uploaded_file($file_tmp, 'uploads/' . $filename);
    //$file_error = $file['error'];

    $file_store = 'uploads/' . $filename ;

    global $link;
    $mem = mysqli_real_escape_string($link, $tit);
    //$tit = mysqli_real_escape_string($link, $tit);

    $query = "INSERT INTO upload(nama, alamat) VALUES ('$filename','$file_store')";
    if( mysqli_query($link,$query) ){
      echo "heyyyooo";
    }
    else{
      echo "kok salah";
    }
  }
?>
