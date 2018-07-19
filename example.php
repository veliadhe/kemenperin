<?php
include "doc2txt.class.php";

$docObj = new DocxConversion("Salinan dari Olivia.pptx");

$txt = $docObj->convertToText();
echo $txt;





?>