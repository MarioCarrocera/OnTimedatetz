<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
$AdminPassword='OT2021Free';
include_once($base."OnTime.php");
$demo=new OnTime();
echo "**********+++++++++++ <br> Basic Table Demo <br> **********+++++++++++ <br> <br>";
echo "********** <br> Create Class  <br> ********** <br> <br>";
$demo->ot_error('basic content exist').'<br>';
echo "**********+++++++++++ <br> Conecting like admin <br> **********+++++++++++ <br> <br>";
echo "Connect('admin','OT2021Free') ";
$demo->Connect('admin',$AdminPassword);
echo  "<br>";$demo->ot_error("Connected!!!");echo "<br>";
echo "**********+++++++++++ <br> Date information <br> **********+++++++++++ <br> <br>";
echo "********** <br> Time Zones <br> ********** <br> <br>";
echo "ShwCntIn('TimeZone','date') ";
$demo->ot_show($demo->ShwCntIn('TimeZone','date'));
echo "********** <br> Formats <br> ********** <br> <br>";
echo "ShwCntIn('PhpFormat','date')";
$demo->ot_show($demo->ShwCntIn('PhpFormat','date'));
echo "********** <br> Now <br> ********** <br> <br>";
echo "Now() <br>";
echo $demo->Now();
echo "<br>  ********** <br> Now in tz<br> ********** <br> <br>";
echo "Nowin('Asia/Tokyo') <br>";
echo $demo->Nowin('Asia/Tokyo');
echo "<br> ********** <br> Clock <br> ********** <br> <br>";
echo "Clock() <br>";
echo $demo->Clock();
echo "<br> ********** <br> Clock with format <br> ********** <br> <br>";
echo "<Clock('H:i') <br>";
echo $demo->Clock('H:i');
echo "<br> ********** <br> Clock timezone in madrid <br> ********** <br> <br>";
echo "<br> ClockIn('Europe/Madrid','H:i P') <br>";
echo $demo->ClockIn('Europe/Madrid','h:i A   P');
echo "<br> ********** <br> Current Date Time like object <br> ********** <br> <br>";
echo '<br> $now=$demo->Date() <br>';
$now=$demo->date();
echo '<br> echo $now->format("l d F Y    H:i:s a   e") <br>';
echo $now->format("l d/F/Y  H:i:s a   e").'<br>';
echo "<br> ********** <br> Set date from string <br> ********** <br> <br>";
echo "DatStr('20210229') <br>";
echo $demo->DatStr('20210229');
echo  "<br>";$demo->ot_error("fecha ok!!!");echo "<br>";
echo "DatStr('20210226') <br>";
echo $demo->DatStr('20210229');
echo  "<br>";$demo->ot_error("fecha ok!!!");echo "<br>";
echo "<br> ********** <br> Set date from string like object<br> ********** <br> <br>";
echo "DatObj('20210228') <br>";
$now = $demo->DatObj('20210228');

echo "**********+++++++++++ <br> Set up Date Format & Time zone <br> **********+++++++++++ <br> <br>";
echo "<br> ********** <br> Time Zone for System <br> ********** <br> <br>";
echo '<br> SetSysTz("America/Mexico_City") <br>';
$demo->SetSysTz("America/Mexico_City");
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";
echo "<br> ********** <br> Date Time format for System <br> ********** <br> <br>";
echo '<br> SetSysFmt("RFC850") <br>';
$demo->SetSysFmt("RFC850");
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";

echo "<br> ********** <br> Time Zone for My user <br> ********** <br> <br>";
echo '<br> SetMyTz("Europe/Madrid") <br>';
$demo->SetMyTz("Europe/Madrid");
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";
echo "<br> ********** <br> Date Time format for My User <br> ********** <br> <br>";
echo '<br> SetMyFmt("ATOM") <br>';
$demo->SetMyFmt("ATOM");
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";

echo "<br> ********** <br> Time Zone for an user <br> ********** <br> <br>";
echo '<br> SetUsrTz("America/Monterrey") <br>';
$demo->SetUsrTz("America/Monterrey",'Admin');
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";
echo "<br> ********** <br> Date Time format for an User <br> ********** <br> <br>";
echo '<br> SetUsrFmt("COOKIE") <br>';
$demo->SetUsrFmt("COOKIE",'Admin');
echo  "<br>";$demo->ot_error("Asigned!!!");echo "<br>";


echo "**********+++++++++++ <br> Validations <br> **********+++++++++++ <br> <br>";
echo "<br> ********** <br> date <br> ********** <br> <br>";
echo '<br> DatVal("20190229") <br>';
$demo->DatVal("20190229");
echo  "<br>";$demo->ot_error("Date OK!!!");echo "<br>";
echo '<br> DatVal("19650822") <br>';
$demo->DatVal("19650822");
echo  "<br>";$demo->ot_error("Date OK!!!");echo "<br>";
echo "<br> ********** <br> Time <br> ********** <br> <br>";
echo '<br> TmeVal("136102") <br>';
$demo->TmeVal("136102");
echo  "<br>";$demo->ot_error("Time OK!!!");echo "<br>";
echo '<br> TmeVal("082200") <br>';
$demo->TmeVal("082200");
echo  "<br>";$demo->ot_error("Time OK!!!");echo "<br>";
echo "<br> ********** <br> Date Time <br> ********** <br> <br>";
echo '<br> DatTmeVal("19650822136102") <br>';
$demo->DatTmeVal("19650822136102");
echo  "<br>";$demo->ot_error("Time OK!!!");echo "<br>";
echo '<br> DatTmeVal("01965082282200") <br>';
$demo->DatTmeVal("19650822082200");
echo  "<br>";$demo->ot_error("Time OK!!!");echo "<br>";



echo "<br>**********+++++++++++ <br> Demo Finish<br> **********+++++++++++ <br> <br>";
?>