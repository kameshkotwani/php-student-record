
<?php include('common/header.php');?>
<?php include('common/database.php');?>
  <div class="container">
  <br>
  <ul class="pagination">
  <li class="page-item"><a class="page-link" href="addnewstudent.php">Add record</a></li>
  <li class="page-item"><a class="page-link" href="index.php">Show Records</a></li>
  </ul>
  
  <br><br>
    <h1 class="text-primary">Student List</h1>
    <table class="table table-hover">
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Pic</th>
        <th>Roll No.</th>
      </tr>

      <?php
        $conn=connect_database();
        if($conn)
        {

          //SQL Query to select data from database Table
          $dataQuery="SELECT sid,sname,scontact,saddress,spic,rollNo from students";
          $result = mysqli_query($conn,$dataQuery);
          while($row= $result->fetch_assoc())
          {
            echo "<tr><td>".$row['sid']."</td>";
            echo "<td>".$row['sname']."</td>";
            echo "<td>".$row['scontact']."</td>";
            echo "<td>".$row['saddress']."</td>";
            echo "<td> <img src=uploads/".$row['spic'].">"."</td>";
            echo "<td>".$row['rollNo']."</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
  </div>
<?php ('common/footer.php');?>
