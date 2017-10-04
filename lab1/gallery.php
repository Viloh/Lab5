<!DOCTYPE html>
<html>
<head>
	<title>Lab1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/FlorianHild_lab1.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<?php
		include("config.php");
	?>
</head>
<body>
<?php include("header.php") ?>
	<div id="pageC">

<?php
$folder_path = 'uploadedfiles/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="100" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
include("footer.php");
?>
	</div>
</body>
</html>