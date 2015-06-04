<?php
    include "db.php";
    
    function record_sort($records, $field, $reverse=true)
	{
   	 $hash = array();
   
   	 foreach($records as $record)
   	 {
    	    $hash[$record[$field]] = $record;
   	 }
   
   	 ($reverse)? krsort($hash) : ksort($hash);
   
    	 $records = array();
   
   	 foreach($hash as $record)
	    	{
   	     $records []= $record;
  	  }
   
    	return $records;
	}

    
    $score = array();
    $i = 1;
    $user_query = mysql_query("SELECT distinct(`username`) FROM `".$db."`.`profile`");
    while($row=mysql_fetch_array($user_query))
    {
    	$stockvalue = 0;
    	$username = $row['username'];
    	include "sort2.php";
    	$query_buy = mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`buy` where username='".$username."'");
	    $query_sell= mysql_query("SELECT sum(`rate`*`amount`) FROM `".$db."`.`sell` where `username`='".$username."' AND `success`='1'");
	    $buy= (mysql_fetch_row($query_buy));
    	$sell= (mysql_fetch_row($query_sell));
    	$inhand=$initial_balance-$buy[0]+$sell[0]+$stockvalue;
    	if ($username <> NULL && $username <> '' && $inhand > 0)
    	{
    	    $score[$i]['username'] = $username;
            $score[$i]['value'] = $inhand;
        }
        $i++;
    }
    $scores = record_sort($score, "value");
    //echo "<pre>";
    //print_r ($scores);
    //echo "</pre>";
    //return C;

?>
