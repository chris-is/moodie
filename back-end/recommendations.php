<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];

  try { 
    //ADD COMMENTS!
    $query = "SELECT * from Users where sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $user['username'];

    //$movieid = $request->getParam('movieid');
    $query = "SELECT happy, angry, smart, excited, relaxed, shocked, scared, sad, hungry FROM Userratings WHERE username = ?";

    $stmt = $db->prepare($query);
    $stmt->execute([$username]);

    //The resulting array contains all rows (ratings for each movie the user has rated)
    $ratings = $stmt->fetchAll();

    //Test
    //print_r($ratings);


    $count = array();

    //reset($ratings);
    //$result = $mysqli->query($query);

    /*while ($row = $result->fetch_assoc()){
      $ratings[] = array($row);
    }*/
    $twoarray = array();
    $i=0;
    foreach($ratings as $x)
    {
          //$ratings2[] = $y;
        $twoarray[$i]['happy'] = $x['happy'];
        $twoarray[$i]['angry'] = $x['angry'];
        $twoarray[$i]['smart'] = $x['smart'];
        $twoarray[$i]['excited'] = $x['excited'];
        $twoarray[$i]['relaxed'] = $x['relaxed'];
        $twoarray[$i]['shocked'] = $x['shocked'];
        $twoarray[$i]['scared'] = $x['scared'];
        $twoarray[$i]['sad'] = $x['sad'];
        $twoarray[$i]['hungry'] = $x['hungry'];
        $i++;
      
    }
    
    $happy = 0;
    $angry = 0;
    $smart = 0;
    $excited = 0;
    $relaxed = 0;
    $shocked = 0;
    $scared = 0;
    $sad = 0;
    $hungry = 0;

    //print_r($twoarray);
    //$temp = json_encode($ratings2);
    //print_r($2Darray);
    //$array = json_decode($temp);

    $temp = json_encode($twoarray);
    $array = json_decode($temp);
    //print_r($twoarray);
    
    foreach($array as $value)
    {

       $happy = $happy + $value->happy;
       $angry = $angry + $value->angry;
       $smart = $smart + $value->smart;
       $excited = $excited + $value->excited;
       $relaxed = $relaxed + $value->relaxed;
       $shocked = $shocked + $value->shocked;
       $scared = $scared + $value->scared;
       $sad = $sad + $value->sad;
       $hungry = $hungry + $value->hungry;
    }


    //ADDING ALL FREQUENCIES
    
    $total = $happy + $angry + $smart + $excited + $relaxed + $shocked + $scared + $sad + $hungry;


    //COMPUTING WEIGHT
    $happy = $happy/$total;
    $angry = $angry/$total;
    $smart = $smart/$total;
    $excited = $excited/$total;
    $relaxed = $relaxed/$total;
    $shocked = $shocked/$total;
    $scared = $scared/$total;
    $sad = $sad/$total;
    $hungry = $hungry/$total;


    
    $query2 = "SELECT movieid, happy, angry, smart, excited, relaxed, shocked, scared, sad, hungry, bored FROM Movies";

    $stmt = $db->prepare($query2);
    $stmt->execute();

    //ratings2 corresponds to all movie ratings
    $ratings2 = $stmt->fetchAll();

    //print_r($ratings2);

    
    $i=1;

    //$row = $ratings2->fetch(PDO::FETCH_ASSOC);
    //print_r($row);
    foreach($ratings2 as $row)
    {
      $movieid[$i] = $row['movieid'];
      $happy2[$i] = $row['happy'];
      $angry2[$i] = $row['angry'];
      $smart2[$i] = $row['smart'];
      $excited2[$i] = $row['excited'];
      $relaxed2[$i] = $row['relaxed'];
      $shocked2[$i] = $row['shocked'];
      $scared2[$i] = $row['scared'];
      $sad2[$i] = $row['sad'];
      $hungry2[$i] = $row['hungry'];
      $i++; 
    }

    
    //MULTIPLY EACH 

    $counterHappy = count($happy2);
    $i=1;
    while($i <= $counterHappy)
    {
      $happy2[$i] = $happy2[$i] * $happy;
      $i++;
    }

    $counterAngry = count($angry2);
    $i=1;
    while($i <= $counterAngry)
    {
      $angry2[$i] = $angry2[$i] * $angry;
      $i++;
    }

    $counterSmart = count($smart2);
    $i=1;
    while($i <= $counterSmart)
    {
      $smart2[$i] = $smart2[$i] * $smart;
      $i++;
    }

    $counterExcited = count($excited2);
    $i=1;
    while($i <= $counterExcited)
    {
      $excited2[$i] = $excited2[$i] * $excited;
      $i++;
    }

    $counterRelaxed = count($relaxed2);
    $i=1;
    while($i <= $counterRelaxed)
    {
      $relaxed2[$i] = $relaxed2[$i] * $relaxed;
      $i++;
    }  

    $counterShocked = count($shocked2);
    $i=1;
    while($i <= $counterShocked)
    {
      $shocked2[$i] = $shocked2[$i] * $angry;
      $i++;
    }  

    $counterScared = count($scared2);
    $i=1;
    while($i <= $counterScared)
    {
      $scared2[$i] = $scared2[$i] * $scared;
      $i++;
    }

    $counterSad = count($sad2);
    $i=1;
    while($i <= $counterSad)
    {
      $sad2[$i] = $sad2[$i] * $sad;
      $i++;
    }

    $counterHungry = count($hungry2);
    $i=1;
    while($i <= $counterHungry)
    {
      $hungry2[$i] = $hungry2[$i] * $hungry;
      $i++;
    }

    //Count number of movies
    $countMovie = count($movieid);
    $i=1;

    while($i <= $countMovie)
    {
      $total2[] = $happy2[$i] + $angry2[$i] + $smart2[$i] + $excited2[$i] + $relaxed2[$i] + $shocked2[$i] + $scared2[$i] + $sad2[$i] + $hungry2[$i];
      $i++;
    }


    $i = 1;
    while($i <= $countMovie)
    {
      $recArray[$movieid[$i]] = $total2[$i-1]; 
      $i++;
    }

    
    arsort($recArray);

    /*for($i = 0; $i < 10; $i++)
    {
      $resultArray[] = $recArray as $x => $x_value;
    }
    */
    $i = 0;
    foreach($recArray as $x => $x_value) {
      if($i < 10){
      $resultArray[] = $x;
      $i++;
      }
    }

  }
  catch(Exception $e) {
    echo "Error while getting recommendations.";
  }

?>