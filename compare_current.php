<?php
include "db.php";
$query_count = '0';
$query_exec = '0';
$query_sell = mysql_query("SELECT * FROM `".$db."`.`sell` WHERE `success`='0'");
$query_buy = mysql_query("SELECT * FROM `".$db."`.`buy` WHERE `success`='0'");
while ($row_buy = mysql_fetch_array($query_buy))
{
    //echo "SELECT `last_data` FROM `stocks` WHERE `name`='".$row_buy['stock']."' <br />";
    $query1_buy = mysql_query("SELECT `".$db."`.`last_data` FROM `stocks` WHERE `name`='".$row_buy['stock']."'");
    $query_count++;
    $result= mysql_fetch_row($query1_buy);
    if ($result[0] <= $row_buy['rate'])
    {
    $update=mysql_query("UPDATE `".$db."`.`buy` SET `success` = '1' WHERE `buy`.`sl` = ".$row_buy['sl']);
    //echo "UPDATE `sms`.`buy` SET `success` = '1' WHERE `buy`.`sl` = ".$row_buy['sl'];
    $query_count++;
    $query_exec++;
    }
}

while ($row_sell = mysql_fetch_array($query_sell))
{
    //echo "SELECT `last_data` FROM `stocks` WHERE `name`='".$row_sell['stock']."' <br />";
    $query1_sell = mysql_query("SELECT `".$db."`.`last_data` FROM `stocks` WHERE `name`='".$row_sell['stock']."'");
    $query_count++;
    $result= mysql_fetch_row($query1_sell);
    if ($result[0] >= $row_sell['rate'])
    {
    $update=mysql_query("UPDATE `".$db."`.`sell` SET `success` = '1' WHERE `sell`.`sl` = ".$row_sell['sl']);
    //echo "UPDATE `sms`.`sell` SET `success` = '1' WHERE `sell`.`sl` = ".$row_sell['sl'];
    $query_count++;
    $query_exec++;
    }
}
//echo "Queries run                : ".$query_count."\n";
//echo "Transactions Executed      : ".$query_exec."\n";
?>
