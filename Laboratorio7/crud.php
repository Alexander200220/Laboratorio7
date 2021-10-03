<?php
include_once 'db.php';

/* code for data insert */
if (isset($_POST['save']))
{

	$ti = $MySQLiconn->real_escape_string($_POST['ti']);
	$au = $MySQLiconn->real_escape_string($_POST['au']);
	$an = $MySQLiconn->real_escape_string($_POST['an']);
	$es = $MySQLiconn->real_escape_string($_POST['es']);
	$ed = $MySQLiconn->real_escape_string($_POST['ed']);
	$url = $MySQLiconn->real_escape_string($_POST['url']);
	$SQL = $MySQLiconn->query("INSERT INTO data(ti,au,an,es,ed,url)VALUES('$ti','$au','$an','$es','$ed','$url')");


	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

/* code for data insert */


/* code for date delete */
if(isset($_GET['del']))
{
	$SQL = $MySQLiconn->query("DELETE FROM data WHERE id=".$_GET['del']);
	header("Location: index.php");
}
/* code for data delete */



/* code for date update */
if(isset($_GET['edit']))
{
	$SQL = $MySQLiconn->query("SELECT * FROM data WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
	
}

if(isset($_POST['update']))
{
	$SQL = $MySQLiconn->query("UPDATE data SET ti='".$_POST['ti']."', au='".$_POST['au']."', an='".$_POST['an']."', es='".$_POST['es']."', ed='".$_POST['ed']."',url='".$_POST['url']."' WHERE id=".$_GET['edit']);
}
/* code for data update */

?>
