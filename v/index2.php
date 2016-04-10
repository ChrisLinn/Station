<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 11">
<meta name=Originator content="Microsoft Word 11">
</head>

<body>

<?php
//Define directory for files listing
//original example
//$files = glob('/path/to/dir/*.xml');
$files = glob('*.*');
//to limit what is displayed you can use a diff listing:
//$files = array_diff($files, array('index.php','opendb.php'));
  
foreach ($files as $value) {
echo "<a href=./$value>".$value."</a>   ";
echo "<a href=./IPadV3.php?id=$value>在jwplayer中播放</a><br><br>";
}

?>

</body>

</html>