<?php
  function connect_database() 
  {
    $hostname='localhost';
    $dbuser='root';
    $dbpass='toor';
    $dbname='management';
    $conn=mysqli_connect($hostname,$dbuser,$dbpass,$dbname);
    return $conn;
  }

  # Connecting the database
  // $connection=connect_database();
  // if($connection)
  // {
  // }
  // else
  // {
  //   echo 'connection-not-done';
  // }
  
  // if($connection):
  //   echo "<h1>Connection done</h1>";
  //   $selectQuery="SELECT * from students";
  //   $result=mysqli_query($connection,$selectQuery);
  //   while($data= mysqli_fetch_assoc($result))
  //   {
  //     echo "<pre>";
  //     print_r($data);
  //     echo "</pre>";
  //   }
  // endif;



?>