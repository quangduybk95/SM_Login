<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GMO runsystem - SmartStaff Push </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collaAdminpse-1">
      <ul class="nav navbar-nav navbar-right">
      <?php 
       if(isset($_SESSION['login'])) 
          echo '<li><a href="../logout.php">Logout</a></li>';
      ?>
        <!-- <li><a href="#">Logout</a></li> -->

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>