<?php include_once('common/header.php');?>
<?php include_once('common/database.php');?>

<?php

//Getting all the details from INPUT from user
$name=$_POST['name'];
$rollNo=$_POST['rollNo'];
$contact=$_POST['contact'];
$studentAddress=$_POST['studentAddress'];
$img='';
$todayDate=date('Y-m-d');

//Getting the file Extension
$fileName=$_FILES['studentPic']['name'];


$fileNameExploded=explode(".",$fileName);

$ext=end($fileNameExploded);

//Creating a unique filename
$newFileName=md5(date('YmdHi')).".".$ext;

// print_r($newFileName);

$tmpPath=$_FILES['studentPic']['tmp_name'];
$path="uploads/".$newFileName;

?>

<?php if(move_uploaded_file($tmpPath,$path)): ?>

<?php

  $img=$newFileName;

  //Connected to the database
  $conn=connect_database();
  if($conn){
    
    //Uploading the file in database
    $insertQuery="INSERT INTO students (sname,scontact,saddress,spic,createdOn,rollNo) VALUES('$name','$contact','$studentAddress','$img','$todayDate','$rollNo');";

    if(mysqli_query($conn,$insertQuery))
    {
      echo "<div class=\"alert alert-dismissible alert-success\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      <strong>Uploaded! </strong> File successfully Uploaded to the database.
      </div>";
     
    }
    else
    {
      mysqli_error($conn);
    }
  }
  else
  {
    echo mysqli_connect_error();
  }
?>
<?php endif;?>
 <?php include('common/footer.php');?>
