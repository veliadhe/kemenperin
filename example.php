<?php
/* 
this example is used to convert any doc format to text
author: Gourav Mehta
author's email: gouravmehta@gmail.com
author's phone: +91-9888316141
*/ 
  
include "doc2txt.class.php";

$docObj = new DocxConversion("Salinan dari Olivia.pptx");
// $docObj = new DocxConversion("switchgender.doc");

$txt = $docObj->convertToText();
echo $txt;





?>