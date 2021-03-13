<?php
ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

function nf($file, $to)
{
	if (file_exists($file)) {
		if (file_exists($to.'/'.$file)) {
			echo 'Delete '. $file .'<br>';
			unlink($to.'/'.$file);
		}
		if (rename($file,$to.'/'.$file)) {
			echo 'Move '.$file .'<br>';
			return(TRUE);
		} else {
			echo 'Move Fail'.'<br>';
			return(FALSE);
		}
	} else {
		echo 'File not found'.'<br>';
		return(FALSE);
	}
}

$files= array('OnTime.php','OnTimetmp.php','OnTimeAllways.php','OnTimeDateA.php','OnTimeDateB.php','OTidate.php','OnTimeFunctions.php','OnTimeContent.php');
echo 'Start '.'<br>';

$base='ontime';

$back = TRUE;
foreach ($files as $x) {
	echo 'Move '.$x.'<br>';
	if (!nf($x,$base)) {
		$back = FALSE;
	}
}
if ($back) {
	include_once($base."/OnTimetmp.php");
	$install = new OnTime();
	$install->Connect('admin','OT2021Free');
	$install->InstallDate();
	$install->DiscConnect();
	$install->Connect('admin','OT2021Free');
	$install->InstallDate2();	
	unlink($base."/OnTimetmp.php");	
	unlink($base."/OTidate.php");		
	echo 'Delete '. basename($_SERVER['PHP_SELF']).'<br>';
	unlink(basename($_SERVER['PHP_SELF']));
}
echo 'End ';

?>