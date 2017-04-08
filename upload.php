<?php

//process the forms and upload the files
if ($_POST) {

//specify folder for file upload
$folder = "tmp/"; 

//specify redirect URL
$redirect = "success.html";

//upload the file
move_uploaded_file($_FILES["file"]["tmp_name"], "$folder" . $_FILES["file"]["name"]);

//do whatever else needs to be done (insert information into database, etc...)

//redirect user
header('Location: '.$redirect); die;
}
//

?>