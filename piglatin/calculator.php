<?php
class Calculator {
  public $num;
  public function form_submit($postArray) {     
    $text1 = isset($postArray['text1']) && !empty($postArray['text1']) ? $postArray['text1'] : null;
   $outputArr= preg_split("/[-\s:]/", $text1);
   echo "String is ".$text1;
   echo "<br>";
   echo "Converted String is ";
   foreach ($outputArr as $w) {
    $acronym = $w[0];
    $piglatinWord = substr($w, 1).$acronym.'ay';
    echo  $piglatinWord;
    echo "\n";
  }
}

    
}

$Db_process_obj = new Calculator;
$Db_process_obj->form_submit($_POST);
?>