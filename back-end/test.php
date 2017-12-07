<?php
$m_apiurl="https://api.themoviedb.org/3/search/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US&query=The%20Road%20Home&page=1&include_adult=false

";
$jsonStr = file_get_contents($m_apiurl);
$jsonObj = json_decode($jsonStr);
$result = $jsonObj->results;

//$array_merged = array_merge($m_result, $t_result);

$movieids = array();
$other_ids = array();
foreach($result as $movie) {
  $movieids[] = ($movie->id);
  $other_ids[] = ($movie->title);
}
print_r ($movieids);
print_r ($other_ids);


//parse_str(parse_url($url, PHP_URL_QUERY), $keywords);


/* //test code for recommendations
$ids = array();
$detail[] = array();
$ids[0] = 150;
$ids[1] = 550;
$i = 0;

foreach($ids as $key => $value){
  //if($i < 2){
  $m_apiurl = "https://api.themoviedb.org/3/movie/";
  $m_apiurl .= $value;
  $m_apiurl .= "?api_key=1753a8a0eee9f02ab07f902370f8f1ea";

  $detail[$key][0] = $value;

  $jsonStr = file_get_contents($m_apiurl);
  $jsonObj = json_decode($jsonStr);
  $detail[$key][1] = $jsonObj->poster_path;

}

print_r ($detail); */

//test code for search-advanced
$priority = array();
//$priority["12345"] = 5;
//$priority["123456"] = 6;

$ids = array();
$ids[0] = 12345;
$ids[1] = 123456;
$size =2;
for($i = 0; $i<$size; $i++){
  $temp = $ids[$i];
  //echo $i . "not yet";
  $priority[$temp] = 0;
  //echo $i . "mid";

  //echo $i . "done";
}
//problem: nested loop with inner if does not work, but works with inner for
//$j = 0;
/*
foreach($ids as $id){

  for($j=0; $j<4; $j++){
    echo "im in if";
    $temp = $id;
    echo $j . "not yet";
    echo ($priority[$temp] = $priority[$temp] + 5);
    echo $j . "mid";

    echo $j . "done";
    echo "</br>";
  }
}
*/
//print_r ($priority);
//echo $priority["12345"];
 ?>
