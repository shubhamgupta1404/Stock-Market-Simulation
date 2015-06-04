<?php
include "db1.php";
include "admin/config.php";

function objectsIntoArray($arrObjData, $arrSkipIndices = array())
{
    $arrData = array();
    if (is_object($arrObjData)) {
        $arrObjData = get_object_vars($arrObjData);
    }
    if (is_array($arrObjData)) {
        foreach ($arrObjData as $index => $value) {
            if (is_object($value) || is_array($value)) {
                $value = objectsIntoArray($value, $arrSkipIndices);
            }
            if (in_array($index, $arrSkipIndices)) {
                continue;
            }
            $arrData[$index] = $value;
        }
    }
    return $arrData;
}

echo "\n        **".date('l jS \of F Y h:i:s A')."** \n";
//var_dump ($initial_balance);
echo "Exchange                   : ".$stock_online." \n";
echo "Initial Balance            : ".$initial_balance." \n";

$query=mysql_query("select name from stocks WHERE exchange_data='".$stock_online."'");
$link = "http://www.google.com/ig/api?stock=";
while($row = mysql_fetch_array($query))
{
    $link = $link."&stock=".$row[0];
}
//http://www.google.com/ig/api?stock=MY_FIRST_SYMBOL&stock=MY_SECOND_SYMBOL
$current=copy($link, "current_stocks.xml");
$backup=copy("current_stocks.xml", "stocks_backup/stocks_backup".time().".xml");

if ($current) $flag_copy = 'SUCCESS';
else $flag_copy = 'ERROR';

echo "XML(remote) --> XML(local) : ".$flag_copy."\n";


$xmlUrl = "current_stocks.xml";
$xmlStr = file_get_contents($xmlUrl);
$xmlObj = simplexml_load_string($xmlStr);
$arrXml = objectsIntoArray($xmlObj);

$sql_count = mysql_query("SELECT count( * ) count FROM `stocks` ");
$count = mysql_fetch_row($sql_count);

for($i=0; $i<$count[0]; $i++)
{
$result = mysql_query("UPDATE `".$db."`.`stocks` SET `pretty_symbol_data`='".$arrXml['finance'][$i]['pretty_symbol']['@attributes']['data']."',`symbol_lookup_url_data`='".$arrXml['finance'][$i]['symbol_lookup_url']['@attributes']['data']."',`company_data`='".$arrXml['finance'][$i]['company']['@attributes']['data']."',`exchange_data`='".$arrXml['finance'][$i]['exchange']['@attributes']['data']."',`exchange_timezone_data`='".$arrXml['finance'][$i]['exchange_timezone']['@attributes']['data']."',`exchange_utc_offset_data`='".$arrXml['finance'][$i]['exchange_utc_offset']['@attributes']['data']."',`exchange_closing_data`='".$arrXml['finance'][$i]['exchange_closing']['@attributes']['data']."',`divisor_data`='".$arrXml['finance'][$i]['divisor']['@attributes']['data']."' ,`currency_data`='".$arrXml['finance'][$i]['currency']['@attributes']['data']."' ,`last_data`='".$arrXml['finance'][$i]['last']['@attributes']['data']."' ,`high_data`='".$arrXml['finance'][$i]['high']['@attributes']['data']."' ,`low_data`='".$arrXml['finance'][$i]['low']['@attributes']['data']."' ,`volume_data`='".$arrXml['finance'][$i]['volume']['@attributes']['data']."' ,`avg_volume_data`='".$arrXml['finance'][$i]['avg_volume']['@attributes']['data']."' ,`market_cap_data`='".$arrXml['finance'][$i]['market_cap']['@attributes']['data']."' ,`open_data`='".$arrXml['finance'][$i]['open']['@attributes']['data']."' ,`y_close_data`='".$arrXml['finance'][$i]['y_close']['@attributes']['data']."' ,`change_data`='".$arrXml['finance'][$i]['change']['@attributes']['data']."' ,`perc_change_data`='".$arrXml['finance'][$i]['perc_change']['@attributes']['data']."' ,`delay_data`='".$arrXml['finance'][$i]['delay']['@attributes']['data']."' ,`trade_timestamp_data`='".$arrXml['finance'][$i]['trade_timestamp']['@attributes']['data']."' ,`trade_date_utc_data`='".$arrXml['finance'][$i]['trade_date_utc']['@attributes']['data']."' ,`trade_time_utc_data`='".$arrXml['finance'][$i]['current_date_utc']['@attributes']['data']."' ,`current_date_utc_data`='".$arrXml['finance'][$i]['current_time_utc']['@attributes']['data']."' ,`current_time_utc_data`='".$arrXml['finance'][$i]['symbol_url']['@attributes']['data']."' ,`symbol_url_data`='".$arrXml['finance'][$i]['chart_url']['@attributes']['data']."' ,`chart_url_data`='".$arrXml['finance'][$i]['disclaimer_url']['@attributes']['data']."' ,`disclaimer_url_data`='".$arrXml['finance'][$i]['ecn_url']['@attributes']['data']."' ,`ecn_url_data`='".$arrXml['finance'][$i]['isld_last']['@attributes']['data']."' ,`isld_last_data`='".$arrXml['finance'][$i]['isld_trade_date_utc']['@attributes']['data']."' ,`isld_trade_date_utc_data`='".$arrXml['finance'][$i]['isld_trade_time_utc']['@attributes']['data']."' ,`isld_trade_time_utc_data`='".$arrXml['finance'][$i]['brut_last']['@attributes']['data']."',`brut_last_data`='".$arrXml['finance'][$i]['brut_trade_date_utc']['@attributes']['data']."' ,`brut_trade_date_utc_data`='".$arrXml['finance'][$i]['brut_trade_time_utc']['@attributes']['data']."',`brut_trade_time_utc_data`='".$arrXml['finance'][$i]['daylight_savings']['@attributes']['data']."' ,`daylight_savings_data`='".$arrXml['finance'][$i]['symbol']['@attributes']['data']."' WHERE `stocks`.`name`= '".$arrXml['finance'][$i]['symbol']['@attributes']['data']."'");

/*
echo $i."<br />";
var_dump ($result);
echo "<br /><HR />";
if ($result)
    echo $i."_Success <br />";
else
    echo $i."_Error <br />";
*/
if ($result) $flag = 'SUCCESS';
else $flag = 'ERROR';
}
echo "XML --> MySQL              : ".$flag."\n";
echo "Number of stocks Parsed    : ".$i."\n";

include "compare.php";
echo " \n------------------------------------------------------------------------ \n";
?>
