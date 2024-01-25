<?php
   error_reporting(0);
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      function validData($x)
      {
         $x = trim($x);
         $x = stripslashes($x);
         $x = htmlspecialchars($x);
         return $x;
      }
      $conn = new mysqli("localhost", "root", "", "php");
      if(!$conn->connect_errno)
      {
         $uname = validData($_POST["username"]);
         $pass = validData($_POST["password"]);
         if(!empty($uname) and !empty($pass))
         {
            $sql = "SELECT * FROM users WHERE Username=? and Password=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $uname, $pass);
            if($stmt->execute())
            {
               $result = $stmt->get_result();
               if($result->num_rows)
               {
                  $_SESSION['login'] = $uname;
                  header('Location: welcome.php');
                  exit();
               }
               else
                  $err = "Wrong Username and/or Password";
            }
         }
      }
      $conn->close();
   }
?>