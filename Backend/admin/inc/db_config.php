<?php
   
   $hname = '34.101.96.59';
   $uname = 'root';
   $pass = '12345678';
   $db = 'starlighthotel';

   $con = mysqli_connect($hname,$uname,$pass,$db);

   if(!$con){
    die("Cannot Connect to Database".mysqli_connect_error());
   }

   function filteration($data){
      foreach($data as $key => $value){
         //'site title' : ''
        $value = trim($value);
        $value = stripcslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        $data[$key] = $value;


      }
      return $data;
   }

   function select($sql,$values,$datatypes)
   {
      $con = $GLOBALS['con'];
      if($stmt = mysqli_prepare($con,$sql)){
         mysqli_stmt_bind_param($stmt,$datatypes,...$values);
         if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
         }
         else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
         }
        
      }
      else{
         die("Query cannot be prepared - Select");
      }
   }

   function update($sql,$values,$datatypes)
   {
      $con = $GLOBALS['con'];
      if($stmt = mysqli_prepare($con,$sql))
      {
         mysqli_stmt_bind_param($stmt,$datatypes,...$values);
         if(mysqli_stmt_execute($stmt)){
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
         }
         else{
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Update");
         }
        
      }
      else{
         die("Query cannot be prepared - Update");
      }
   }
   
   function selectAll($table){
      $con = $GLOBALS['con'];
      $res = mysqli_query($con, "SELECT * FROM $table");
      return $res;
   }
   
   function insert($sql, $values, $datatypes)
   {
      $con = $GLOBALS['con'];
      if($stmt = mysqli_prepare ($con, $sql)){
      mysqli_stmt_bind_param($stmt,$datatypes, ...$values);
      if(mysqli_stmt_execute ($stmt)) {
          $res = mysqli_stmt_affected_rows($stmt);
          mysqli_stmt_close ($stmt);
          return $res;
      }else{
      mysqli_stmt_close($stmt);
      die("Query cannot be executed - Insert");
      }
   }
      else{
      die("Query cannot be prepared - Insert");
      }
   }
   
   function delete($sql, $values, $datatypes)
   {
      $con = $GLOBALS['con'];
      if($stmt = mysqli_prepare ($con, $sql)){
      mysqli_stmt_bind_param($stmt,$datatypes, ...$values);
      if(mysqli_stmt_execute ($stmt)) {
          $res = mysqli_stmt_affected_rows($stmt);
          mysqli_stmt_close ($stmt);
          return $res;
      }else{
      mysqli_stmt_close($stmt);
      die("Query cannot be executed - Delete");
      }
   }
      else{
      die("Query cannot be prepared - Delete");
      }
   }

   function fetch_single($query, $params, $param_types) {
      $mysqli = new mysqli("your_host", "your_username", "your_password", "your_database");
  
      if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
      }
  
      $stmt = $mysqli->prepare($query);
  
      if ($stmt === false) {
          die("Error in query: " . $mysqli->error);
      }
  
      // Bind parameters
      if (!empty($params)) {
          $stmt->bind_param($param_types, ...$params);
      }
  
      // Execute the statement
      if ($stmt->execute()) {
          $result = $stmt->get_result();
  
          if ($result->num_rows === 1) {
              $row = $result->fetch_assoc();
              return $row[0]; // Assuming the result is in the first column
          } else {
              return null; // No result or more than one result found
          }
      } else {
          die("Error executing query: " . $stmt->error);
      }
  
      $stmt->close();
      $mysqli->close();
  }  
  
?>