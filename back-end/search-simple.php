<?php
echo "hey";
$userquery = $request->getParam('query');

try { 
  echo $userquery

  /*$jsonStr = file_get_contents($userquery);
  $jsonObj = json_decode($jsonStr);
  $result = $jsonObj->results;

  echo $result;*/

} 
catch(Exception $e) {
  echo "Something went wrong!";
}


?>