<?php include_once('common/header.php');?>
  
<!-- BOOTSWATCH CSS FILE -->]
<div class="container">
<form action="addAction.php" method="POST" enctype="multipart/form-data">
<br><br>
  <fieldset>
    <legend  style="font-size:20px;"class="btn btn-primary">Add Students Record</legend>

    <div class="form-group">
      <label>Enter Student Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
    </div>


    <div class="form-group">
      <label>Enter Student Roll Number</label>
      <input type="text" class="form-control" id="rollNo" aria-describedby="rollNo" placeholder="Enter Roll Number" name="rollNo">
    </div>


    <div class="form-group">
      <label>Enter Student Contact Details</label>
      <input type="text" class="form-control" id="contactDetails" aria-describedby="contactHelp" placeholder="Enter Contact" name="contact">
    </div>


    <div class="form-group">
      <label> Student Address</label>
      <textarea class="form-control" id="studentAddress" rows="2" name="studentAddress"></textarea>
    </div>

    <div class="form-group">
      <label >Upload Student Image</label>
      <input  type="file" name="studentPic" class="form-control-file">
    </div>

    <div class="form-group">
      <input type="submit" value="submit" class="btn btn-outline-secondary" name="submit"></input>
    </div>
</form>
</div>
<?php include('common/footer.php');?>
