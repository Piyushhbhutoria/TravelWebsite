<style type="text/css">
  header{
    padding: 10px;
  }
</style>
<?php
if(isset($_SESSION['log'])=="")
{ 
  ?>
  <header style="background: black;">
    <div class="container">

      <div id="logo" class="pull-left">
<!-- <a href="index.php"><img src="img/visudha.png" alt="visudha" style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text image -->
        <h1><a href="index.php">Travel Agency</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          

          <li class="menu-has-children"><a> Dashboard</a>
            <ul>
              <li><a href="#" onclick="myfunction()">History</a></li>
              <li><a href="#" onclick="myfunction()">Current</a></li>
            </ul>
          </li>
  
          <li class="menu-has-children"><a>Login</a>
            <ul>
              <li><a href="index.php">Existing User</a></li>
              <li><a href="signup.php">New User</a></li>
            </ul>
          </li>
        </ul>
      </nav>

      <!-- #nav-menu-container -->
    </div>
  </header>
  <?php
}
else if($_SESSION['log1']=="user")
{
  ?>
  <header style="background: black;">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <a href="index.php"><img src="img/visudha.png" alt="visudha" style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text image -->
        <h1><a href="index.php">Company</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          

          <li class="menu-has-children"><a href="travel.php"> Travel</a>
            <ul>
              <li><a href="history.php" >History</a></li>
              <li><a href="companion.php" >Current</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
  
          </li>
        </ul>
      </nav>

      <!-- #nav-menu-container -->
    </div>
  </header>
    <?php
}
else if($_SESSION['log1']=="admin")
{
  ?>
  <header style="background: black;">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- <a href="index.php"><img src="img/visudha.png" alt="visudha" style="width: 100px;margin-top: 15px;vertical-align: middle;" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text image -->
        <h1><a href="index.php">Company</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          

          <li class="menu-has-children"><a href="logout.php">Logout</a>
          </li>
  
          </li>
        </ul>
      </nav>

      <!-- #nav-menu-container -->
    </div>
  </header>
    <?php
}
?>
<script>
  function myfunction(){
    alert("Login First");
  }
</script>