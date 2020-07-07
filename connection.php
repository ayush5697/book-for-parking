 <?php
 $dbhost='localhost';
 $dbuname='root';
 $dbpwd='';
 $db='db_parking';

$con = mysqli_connect($dbhost,$dbuname,$dbpwd,$db);
if(!$con)
{
	echo "connection failed";
}
else
{
	//echo "Successfull";
}

?>