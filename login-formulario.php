


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <h1 class="text-center">LOGIN</h1>
<?php 
if (isset($errorLogin)) {
  echo "error $errorLogin";
}

 ?>

<form action="login.php" method="post">





<div class="form-group">
  <label for=""></label>
  <input type="text" name="txt_user" id="" class="form-control" placeholder="Username" aria-describedby="helpId">
  <small id="helpId" class="text-muted">Help text</small>
</div>
    <div class="form-group">
      <label for=""></label>
      <input type="password" class="form-control" name="txt_pass" id="" placeholder="Password">
    </div>

    <?php 
if (isset($_GET['error'])==true) {
  echo '<p>usuario o clave incorrecta</p>';

}



 ?>
<button type="submit" class="btn btn-lg btn-info">Iniciar sesion</button>


</form>





        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>