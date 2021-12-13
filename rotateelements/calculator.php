<?php
class Calculator {
  public function form_submit($postArray) {     
    $key1 = isset($postArray['key1']) && !empty($postArray['key1']) ? $postArray['key1'] : null;
    $numarray = isset($postArray['numarray']) && !empty($postArray['numarray']) ? $postArray['numarray'] : null;
    $outputArr= preg_split("/[-\s:]/", $numarray);
    $arlen = count($outputArr);
    if($key1 <= $arlen)
    {
    echo "<pre>";print_r($outputArr);
    for($i=0;$i<$key1;$i++)
    {
    array_push($outputArr, array_shift($outputArr));
    }
    echo "Rotated array is";
    echo "<br>";
    echo "<pre>";print_r($outputArr);
  }
  else{
    echo "Cannot rotate elements";
  }
}

    
}

$Db_process_obj = new Calculator;
$Db_process_obj->form_submit($_POST);
?>