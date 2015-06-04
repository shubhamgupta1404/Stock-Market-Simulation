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

$xmlUrl = $sensex;
$xmlStr = file_get_contents($xmlUrl);
$xmlObj = simplexml_load_string($xmlStr);
$arrXml = objectsIntoArray($xmlObj);
?>
<pre>
<?php
var_dump ($arrXml);
?>
</pre>
