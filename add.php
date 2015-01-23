<?php

print_r($_POST);

$projectname = $_POST['projectname'];
$projecturl  = $_POST['projecturl'];
$my_file = "";
if (!empty($_FILES['fileupload']['tmp_name'])) {
		$path = $_FILES['fileupload']['name']; 
		if (copy($_FILES['fileupload']['tmp_name'], $path)) $my_file = $path; 
};
?>
