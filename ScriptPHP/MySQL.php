<?php
//Connect to database
function sql_connect()
{
	$sql = new mysqli('localhost','BookStarter','','BookStarter');
	if($sql->connect_error)
	{
		return false;
	}else
	{
		return $sql;
	}
}
//execute query
function sql_query($sql,$query)
{
	$res = $sql->query($query);
	if($res=='')
	{
		return false;
	}else
	{
		return $res->fetch_assoc();
	}
}
//close connexion
function sql_close($sql)
{
	$sql->close();
}
?>