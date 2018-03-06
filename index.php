<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/headtags.php"); 
include ($_SERVER["DOCUMENT_ROOT"]."/frames/keywords.php"); 
	echo "<title> $titleconst"; echo $keywords[0][title]; echo "</title>";
	echo "<meta name='description' content='"; echo $keywords[0][description]; echo "'/>";
	echo "<meta name='keywords' content='"; echo $keywords[0][keywords]; echo "'/>";
	
include ($_SERVER["DOCUMENT_ROOT"]."/src/html.blocks/header.html");?>

<div id="content">
<?php
include ($_SERVER["DOCUMENT_ROOT"]."/frames/auto_array.php");

require('brands.php');
require('montazh.php');
require('zayavka.php'); 
require('contacts.php'); ?>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/frames/footer.html");
include ($_SERVER["DOCUMENT_ROOT"]."/frames/counters.html");?>