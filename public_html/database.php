<?php 

 class Connection {

    var $con;

    function connectDB($database){
		  $this->con = mysqli_connect("mysql","root","rootpassword",$database) or print (mysqli_connect_error());
		  mysqli_set_charset($this->con,"utf8");
    }
    
    function genericQuery($sql,$values){
      $stmt = $con->prepare($sql);
      $stmt->bind_param($values);
      $stmt->execute();
      //$query = mysqli_query($this->con,$sql);
    }
}


?>