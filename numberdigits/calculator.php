<?php
class Calculator {
  public function form_submit($postArray) {     
    $num1 = isset($postArray['val1']) && !empty($postArray['val1']) ? $postArray['val1'] : null;
    $array1 = str_split($num1);
    echo "<pre>"; 
    echo "Number is ".$num1;
    echo "<br>";
    echo "Resultant array is ";print_r($array1);
    
} 
}

$Db_process_obj = new Calculator;
$Db_process_obj->form_submit($_POST);
?>