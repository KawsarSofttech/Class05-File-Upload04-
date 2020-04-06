<!DOCTYPE html>
<html>
<head>
	<title>file upload</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php
		

		if(isset($_POST['submit'])){
			// var_dump($_FILES);
			if($_FILES['image']['type'] == 'image/jpeg' && $_FILES['image']['size'] > 8000 )
			{
				$tmp = $_FILES['image']['tmp_name'];
				$img_name = uniqid().".jpg";
				move_uploaded_file($tmp, "photos/".$img_name);
			}else{
				echo "Not Supported";
			}
			
		}

		if(isset($_POST['submit'])){
			// var_dump($_FILES);
			if ($_FILES['document']['type'] == 'application/pdf' && $_FILES['document']['size'] > 9000 )
			{
				$tmp = $_FILES['document']['tmp_name'];
				$doc_name = uniqid().".pdf";
				move_uploaded_file($tmp, "documents/".$doc_name);
			}else{
				echo "Not Supported";
			}
			
		}
			
		
	?>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image" accept="image/*"><br>
		<input type="file" name="document" accept="document/*"><br>
		<input type="submit" name="submit" value="Upload">
	</form>
		


</body>
</html>