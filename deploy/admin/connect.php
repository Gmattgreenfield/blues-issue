<?php
  // Set settings as variables
  $username="root";$password="root";$database="blues-issue";

  //Connect to the MySQL server using these variables
  $conn = new mysqli('localhost', $username, $password, $database);
    // Display error if connection fails
    if($conn->connect_error){
        trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
    }

  // Assign the desired selection to a variable. Here we are selecting all entries
  $selection = 'SELECT * FROM `gigs` ';

  // $rs is querying the connection ($con) for the selected rows ($selection)
  $rs=$conn->query($selection);


  // $date =   $row['date'];
  // $venue =  $row['venue'];
  // $town =    $row['town'];

?>