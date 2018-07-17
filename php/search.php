<?php 
  require 'db.php';
  if (isset($_POST['search_term'])){
        $search_term = mysql_real_escape_string(htmlentities($_POST['search_term']));
        if(!empty($search_term)){
            echo $search_term;
        }
  }
?>