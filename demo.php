<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
      ul li {
        list-style: none;
        font-weight: bold;
        font-size: 20px;
      }
    </style>
    <title> State Admin DashBoard!</title>
  </head>
  <body>

   <?php
    include_once('../connection.php');

      if(isset ($_POST['login'])){
        $scame_na=$_POST['sc_name'];
        $scame_dec=$_POST['sc_dec'];
        $scame_link=$_POST['sc_link'];

        $sel = "SELECT * FROM state_sceame  where sceame_name ='$scame_na' and sceame_dec ='$scame_dec' and sceame_link='scame_link' ";
        $ex = mysqli_query($con,$sel);
    }
     
  ?>




    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="desboard.php">Admin DashBoard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home </a>
      <a class="nav-item nav-link" href="#">wow</a>
      <a class="nav-item nav-link" href="#">Change Password</a>
    </div>
  </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
        <div class="col-3 bg-dark">
          <table class="table table-bodered">
          <ul class="mt-4">
            <li><a href="index.php" class="text-white  ">Sceams</a></li>
            <ul>
              <li><a href="central.php">Central Sceams</a></li>
              <li><a href="state.php">State Sceams</a></li>
            </ul>
          </ul>
          <ul>
        </table>
        </div>
         <div class="col-9 bg-light">
          <h2 class="text-center pt-3 text-danger"> Add State Sceams</h2>

          <form method="POST">
            <div class="form-group ml-4 mt-4">
              <label for="formGroupExampleInput">Sceame Name :-</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Sceame Name" name="sc_name">
            </div>
            <div class="form-group ml-4 mt-4">
              <label for="formGroupExampleInput">Sceame Decription :-</label>
              <textarea type="text" class="form-control" id="formGroupExampleInput" placeholder="Write Your Sceame Decription" rows="8" name="sc_dec"></textarea>
            </div>
             <div class="form-group ml-4 mt-4">
              <label for="formGroupExampleInput">Sceame link :-</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Sceame Link" name="sc_link">
            </div>
            <div class="form-group ml-4 mt-4">              
              <input type="button" name="login" class="btn btn-primary" value="Update Sceame">
            </div>
          </form>
        </div>

        

      </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>