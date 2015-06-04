<?php
include "db.php";
//$username = 'admin';
				$query_b = mysql_query("SELECT sum(`amount`) volume, `stock` FROM `buy` WHERE `success`='1'  AND `username` = '".$username."' GROUP BY `stock`");
				$stockvalue = 0;
				while($row_b=mysql_fetch_array($query_b))
				{
				
				$query_s = mysql_query("SELECT sum(`amount`) volume, `stock` FROM `sell` WHERE `stock` = '".$row_b['stock']."' AND `username` = '".$username."' GROUP BY `stock` ");
				$row_s = mysql_fetch_array($query_s);
				$diff = $row_b['volume'] - $row_s['volume'];
				//print_r ($row_b['volume']);
				//var_dump ($row_s);
				//print_r ($diff);
				//$row_b['stock']
				//$diff
				$svalue = 0;
				$query1 = mysql_query("SELECT `last_data` FROM `stocks` WHERE `name`='".$row_b['stock']."'");
					$cvalue = mysql_fetch_row($query1);
					//print_r ($cvalue);
					$svalue = $cvalue[0]*$diff;
					
				
				$stockvalue = $stockvalue + $svalue;
				}
				//echo $stockvalue;
				?>