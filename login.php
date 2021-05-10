<?php
  $connection = mysqli_connect("localhost","root","");
  $db= mysqli_select_db($connection,'chirag');

  if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $query="select * from login WHERE email='$email' AND password='$password'";
      $query_run = mysqli_query($connection,$query) or die(mysqli_error($connection));
      
      if(mysqli_fetch_array($query_run,MYSQLI_BOTH)>0){
          echo '<script type="text/javascript">alert("Log In successful")</script>';
          header('Location:schedule.html');
      }
      else{
        echo '<script type="text/javascript">alert("Log In failed")</script>';
      }
  }
?>