<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>bookings</title>

   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->

    <!-- Custom fonts for this template -->
   
    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body background="images/b1.jpg">
    
    <?php
$host='localhost';
$un='root';
$p='';
$db='foodie';
$con = mysqli_connect($host,$un,$p,$db);
$g=$_POST['emaill'];
$h=$_POST['passl'];

$d="SELECT * FROM register WHERE emailr = '$g' AND passr = '$h'";
$e=mysqli_query($con,$d);

        $row = mysqli_fetch_array($e);
        if($row)
{
  ?>


    <!-- Navigation -->

<pre>
    <section>
      <div class="container"> <div class="col align-items-center"> <div class="col-lg-6 order-lg-2"> <label>TABLES</label>   <div class="p-5">
    <a href="tables.php"><img class="img-fluid rounded-circle" src="images/table.jpg" alt="TABLES"></a>                                              <a href="room.php"><img class="img-fluid rounded-circle" src="images/room4.jpg" alt="ROOMS"></a>
             

            </div>
          </div>
        
</section>
</pre>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <?php
  }

        if(!$row){
             echo '<script language="javascript">';
echo 'alert("password given mismatched!!! TRY AGAIN")';
echo '</script>';
}
            ?>

  </body>

</html>
