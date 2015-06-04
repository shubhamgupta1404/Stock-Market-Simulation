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


date_default_timezone_set('Kolkata');
echo "Current Time: ".date('l jS \of F Y h:i:s A');
$current_time = time();
$start_time=strtotime( date('Y-m-d') . ' 9:00 am' );
$end_time=strtotime( date('Y-m-d') . ' 3:31 pm' );
//echo date();
echo "\n        **".date('l jS \of F Y h:i:s A')."** \n";

if($current_time > $start_time && $current_time < $end_time) {

echo "\n        **".date('l jS \of F Y h:i:s A')."** \n";
//var_dump ($initial_balance);
echo "Exchange                   : ".$stock_online." \n";
echo "Initial Balance            : ".$initial_balance." \n";

// $query=mysql_query("select name from stocks WHERE exchange_data='".$stock_online."'");
// $link = "http://www.google.com/ig/api?stock=";
// while($row = mysql_fetch_array($query))
// {
//     $link = $link."&stock=".$row[0];
// }
//http://www.google.com/ig/api?stock=MY_FIRST_SYMBOL&stock=MY_SECOND_SYMBOL
$urlx = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22AAPL%22%2C%22ADBE%22%2C%22ADSK%22%2C%22ALXN%22%2C%22AMZN%22%2C%22BIIB%22%2C%22BRCM%22%2C%22CA%22%2C%22CHKP%22%2C%22CHRW%22%2C%22CHTR%22%2C%22COST%22%2C%22CSCO%22%2C%22DISCA%22%2C%22DISH%22%2C%22DLTR%22%2C%22DTV%22%2C%22EBAY%22%2C%22EXPE%22%2C%22FB%22%2C%22FFIV%22%2C%22FOXA%22%2C%22GILD%22%2C%22GOOG%22%2C%22HSIC%22%2C%22INTC%22%2C%22ISRG%22%2C%22KRFT%22%2C%22MAR%22%2C%22MNST%22%2C%22MSFT%22%2C%22NVDA%22%2C%22PAYX%22%2C%22REGN%22%2C%22ROST%22%2C%22SNDK%22%2C%22SRCL%22%2C%22SYMC%22%2C%22TRIP%22%2C%22TSCO%22%2C%22TSLA%22%2C%22TXN%22%2C%22VOD%22%2C%22VRTX%22%2C%22WFM%22%2C%22YHOO%22)&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";

$urln = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.quotes%20where%20symbol%20in%20(%22AAPL%22%2C%22ADBE%22%2C%22ADSK%22%2C%22ALXN%22%2C%22AMZN%22%2C%22BIIB%22%2C%22BRCM%22%2C%22CA%22%2C%22CHKP%22%2C%22CHRW%22%2C%22CHTR%22%2C%22COST%22%2C%22CSCO%22%2C%22DISCA%22%2C%22DISH%22%2C%22DLTR%22%2C%22DTV%22%2C%22EBAY%22%2C%22EXPE%22%2C%22FB%22%2C%22FFIV%22%2C%22FOXA%22%2C%22GILD%22%2C%22GOOG%22%2C%22HSIC%22%2C%22INTC%22%2C%22ISRG%22%2C%22KRFT%22%2C%22MAR%22%2C%22MNST%22%2C%22MSFT%22%2C%22NVDA%22%2C%22PAYX%22%2C%22REGN%22%2C%22ROST%22%2C%22SNDK%22%2C%22SRCL%22%2C%22SYMC%22%2C%22TRIP%22%2C%22TSCO%22%2C%22TSLA%22%2C%22TXN%22%2C%22VOD%22%2C%22VRTX%22%2C%22WFM%22%2C%22YHOO%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";

$url = "./stocks.json";
//$current=copy($urlx, "current_stocks.xml");
//$backup=copy("current_stocks.xml", "stocks_backup/stocks_backup".time().".xml");

///if ($current) $flag_copy = 'SUCCESS';
//else $flag_copy = 'ERROR';

//echo "XML(remote) --> XML(local) : ".$flag_copy."\n";

$x1 = file_get_contents($url);
$xn = file_get_contents($urln);
// echo "<br/><br/>".$xn."<br/>";
$x2 = json_decode($xn, TRUE);

if($x2) {echo "sahi";}else echo "jskgahdjasgd";

echo "completed<br/>";
// echo $x2['query']['count']."<br/>";
// $xmlUrl = "current_stocks.xml";
// $xmlStr = file_get_contents($xmlUrl);
// $xmlObj = simplexml_load_string($xmlStr);
// $arrXml = objectsIntoArray($xmlObj);

// $sql_count = mysql_query("SELECT count( * ) count FROM `stocks` ");
// $count = mysql_fetch_row($sql_count);

for ($i=0; $i<$x2['query']['count']; $i++){
	$result = mysql_query("UPDATE `".$db."`.`stocks` SET `pretty_symbol_data`='".$x2['query']['results']['quote'][$i]['symbol']."',`symbol_lookup_url_data`='',`company_data`='".$x2['query']['results']['quote'][$i]['Name']."',`exchange_data`='".$x2['query']['results']['quote'][$i]['StockExchange']."',`exchange_timezone_data`='',`exchange_utc_offset_data`='',`exchange_closing_data`='',`divisor_data`='',`currency_data`='USD',`last_data`='".$x2['query']['results']['quote'][$i]['LastTradePriceOnly']."',`high_data`='".$x2['query']['results']['quote'][$i]['DaysHigh']."',`low_data`='".$x2['query']['results']['quote'][$i]['DaysLow']."',`volume_data`='".$x2['query']['results']['quote'][$i]['Volume']."',`avg_volume_data`='".$x2['query']['results']['quote'][$i]['AverageDailyVolume']."',`market_cap_data`='".$x2['query']['results']['quote'][$i]['MarketCapRealtime']."' ,`open_data`='".$x2['query']['results']['quote'][$i]['Open']."' ,`y_close_data`='".$x2['query']['results']['quote'][$i]['PreviousClose']."' ,`change_data`='' ,`perc_change_data`='".$x2['query']['results']['quote'][$i]['ChangeRealtime']."' ,`delay_data`='' ,`trade_timestamp_data`='' ,`trade_date_utc_data`='' ,`trade_time_utc_data`='' ,`current_date_utc_data`='' ,`current_time_utc_data`='' ,`symbol_url_data`='' ,`chart_url_data`='' ,`disclaimer_url_data`='' ,`ecn_url_data`='' ,`isld_last_data`='' ,`isld_trade_date_utc_data`='' ,`isld_trade_time_utc_data`='',`brut_last_data`='' ,`brut_trade_date_utc_data`='',`brut_trade_time_utc_data`='' ,`daylight_savings_data`='' WHERE `stocks`.`name`= '".$x2['query']['results']['quote'][$i]['symbol']."'");
	
	if($result){
		echo $i."_Success <br />";
	}else{
		 echo $i."_Error <br />";
	}
	if ($result) $flag = 'SUCCESS';
	else $flag = 'ERROR';
}

// for($i=0; $i<$count[0]; $i++)
// {
// $result = mysql_query("UPDATE `".$db."`.`stocks` SET `pretty_symbol_data`='".$arrXml['finance'][$i]['pretty_symbol']['@attributes']['data']."',`symbol_lookup_url_data`='".$arrXml['finance'][$i]['symbol_lookup_url']['@attributes']['data']."',`company_data`='".$arrXml['finance'][$i]['company']['@attributes']['data']."',`exchange_data`='".$arrXml['finance'][$i]['exchange']['@attributes']['data']."',`exchange_timezone_data`='".$arrXml['finance'][$i]['exchange_timezone']['@attributes']['data']."',`exchange_utc_offset_data`='".$arrXml['finance'][$i]['exchange_utc_offset']['@attributes']['data']."',`exchange_closing_data`='".$arrXml['finance'][$i]['exchange_closing']['@attributes']['data']."',`divisor_data`='".$arrXml['finance'][$i]['divisor']['@attributes']['data']."' ,`currency_data`='".$arrXml['finance'][$i]['currency']['@attributes']['data']."' ,`last_data`='".$arrXml['finance'][$i]['last']['@attributes']['data']."' ,`high_data`='".$arrXml['finance'][$i]['high']['@attributes']['data']."' ,`low_data`='".$arrXml['finance'][$i]['low']['@attributes']['data']."' ,`volume_data`='".$arrXml['finance'][$i]['volume']['@attributes']['data']."' ,`avg_volume_data`='".$arrXml['finance'][$i]['avg_volume']['@attributes']['data']."' ,`market_cap_data`='".$arrXml['finance'][$i]['market_cap']['@attributes']['data']."' ,`open_data`='".$arrXml['finance'][$i]['open']['@attributes']['data']."' ,`y_close_data`='".$arrXml['finance'][$i]['y_close']['@attributes']['data']."' ,`change_data`='".$arrXml['finance'][$i]['change']['@attributes']['data']."' ,`perc_change_data`='".$arrXml['finance'][$i]['perc_change']['@attributes']['data']."' ,`delay_data`='".$arrXml['finance'][$i]['delay']['@attributes']['data']."' ,`trade_timestamp_data`='".$arrXml['finance'][$i]['trade_timestamp']['@attributes']['data']."' ,`trade_date_utc_data`='".$arrXml['finance'][$i]['trade_date_utc']['@attributes']['data']."' ,`trade_time_utc_data`='".$arrXml['finance'][$i]['current_date_utc']['@attributes']['data']."' ,`current_date_utc_data`='".$arrXml['finance'][$i]['current_time_utc']['@attributes']['data']."' ,`current_time_utc_data`='".$arrXml['finance'][$i]['symbol_url']['@attributes']['data']."' ,`symbol_url_data`='".$arrXml['finance'][$i]['chart_url']['@attributes']['data']."' ,`chart_url_data`='".$arrXml['finance'][$i]['disclaimer_url']['@attributes']['data']."' ,`disclaimer_url_data`='".$arrXml['finance'][$i]['ecn_url']['@attributes']['data']."' ,`ecn_url_data`='".$arrXml['finance'][$i]['isld_last']['@attributes']['data']."' ,`isld_last_data`='".$arrXml['finance'][$i]['isld_trade_date_utc']['@attributes']['data']."' ,`isld_trade_date_utc_data`='".$arrXml['finance'][$i]['isld_trade_time_utc']['@attributes']['data']."' ,`isld_trade_time_utc_data`='".$arrXml['finance'][$i]['brut_last']['@attributes']['data']."',`brut_last_data`='".$arrXml['finance'][$i]['brut_trade_date_utc']['@attributes']['data']."' ,`brut_trade_date_utc_data`='".$arrXml['finance'][$i]['brut_trade_time_utc']['@attributes']['data']."',`brut_trade_time_utc_data`='".$arrXml['finance'][$i]['daylight_savings']['@attributes']['data']."' ,`daylight_savings_data`='".$arrXml['finance'][$i]['symbol']['@attributes']['data']."' WHERE `stocks`.`name`= '".$arrXml['finance'][$i]['symbol']['@attributes']['data']."'");

// /*
// echo $i."<br />";
// var_dump ($result);
// echo "<br /><HR />";
// if ($result)
    // echo $i."_Success <br />";
// else
    // echo $i."_Error <br />";
// */
// if ($result) $flag = 'SUCCESS';
// else $flag = 'ERROR';
// }


echo "XML --> MySQL              : ".$flag."\n";
echo "Number of stocks Parsed    : ".$i."\n";

include "compare.php";
}
else 
{
echo "\n";
echo "                      Market closed!                    ";
echo "\n";
}

echo " \n------------------------------------------------------------------------ \n";

?>
