<?php
include_once("connect.php");
	if(isset($_POST['submit'])){
   	$title = $_POST['title'];
   	$text = $_POST['text'];
   	  if("" != trim($_POST['name'])){
	   	  $name = $_POST['name'];
   	  }
   	  else{
   	  	$name = "Anonymous";
   	  }
   	$tag = $_POST['tag'];
   	$result = mysqli_query($connection, "INSERT INTO Posts(Title, Name, Txt, timeOfSubmission, Tag, isLink) VALUES('$title', '$name', '$text', now(), '$tag', 1)");
   	header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a link</title>
</head>
<body>
	<form action="addlink.php" method="post">
		<input type="text" name="title" placeholder="Title">
		<input type="text" name="text" id="text" placeholder="Link to a page">
		<input type="text" name="name" placeholder="Your Name (Optional)">
		<select name="tag" id="">
			<option value="Politics">Politics</option>
			<option value="Non-Political">Non-Political</option>
			<option value="AMA">AMA</option>
			<option value="NSFW">NSFW</option>
		</select>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>