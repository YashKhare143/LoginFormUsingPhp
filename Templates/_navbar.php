<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  
  $loggedin = true;
}
else{
  $loggedin = false;
}

echo 
  '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LoginSystem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Test/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';
      if(!$loggedin){
      echo '
      <li class="nav-item">
        <a class="nav-link" href="/Test/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Test/signup.php">Signup</a>
      </li>';}

      if($loggedin){
      echo '
      <li class="nav-item">
        <a class="nav-link" href="/Test/logout.php">Logout</a>
      </li>';}
     
     echo '
    </ul>
   
  </div>
</nav>';

 

?>