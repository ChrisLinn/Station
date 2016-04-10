<?php

include("config.php"); //引入数据库连接文件

$sql = "select * from content order by id desc"; //搜索数据表content

$resule = mysql_query($sql,$q);


?>

<html>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>






<table align="center" width="678">

<tr>

<td>

<form name="form1" method="post" action="post.php">



Name：<input name="name" type="text" id="name">

Email：<input type="test" name="email" id="email">

<p>

留言：

</p>

<p>

<textarea name="content" id="content" cols="45" rows="5"></textarea>

</p>

<p>

<input type="submit" name="button" id="button" value="提交">

<input type="reset" name="button2" id="button2" value="重置">

</p>

</form>

</td>

</tr>

</table>



<p>

<?
if($resule){
	while($row=mysql_fetch_array($resule))

	{

	?>

	</p>

	<table width="678" border="1" align="center" cellpadding="1" cellspacing="1">

	<tr>

	<td width="178">Name:<? echo $row[1] ?></td>

	<td width="223">Email:<? echo $row[2] ?></td>

	</tr>

	<tr>

	<td colspan="4"><? echo $row[3] ?></td>

	</tr>

	<tr>

	</table>

	<?

	}
}

?>

</body>

</html>