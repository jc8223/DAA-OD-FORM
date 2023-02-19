<?php
exec('thanks.html');
if(isset($_POST['upload'])){
	$file_name = $_FILES['myfile']['name'];
	$file_tmp_name = $_FILES['myfile']['tmp_name'];
	if(move_uploaded_file($file_tmp_name,"upload/" . $file_name)){
		echo "FIle uploaded succesfully.";
	}
	else{
		echo "error....Please try again.";
	}
}
?>