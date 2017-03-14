<?php 
require_once(dirname(__FILE__) . '/TemplateGenerator.php');

$d = ["","SZ","DS","#","#","#","CNWEB","www.cnweb.dz","chiheb.design@gmail.com ","+213560848546","#","","+213560848546"];
$t = new TemplateGenerator("Theme 1",$d);
// Generate Html Code
echo $t->get();
// Generate Html File
$t->file('test.html');

?>