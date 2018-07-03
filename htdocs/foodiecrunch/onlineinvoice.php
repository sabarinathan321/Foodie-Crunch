<?php
$host='localhost';
$un='root';
$p='';
$db='foodie';
$con = mysqli_connect($host,$un,$p,$db);
if($con)
echo 'sucess';
else
echo 'failed';
$ems=$_POST['es'];
$b=$_POST['time'];
$d=$_POST['address'];
$dat=$_POST['number'];

$menu1=$_POST['m1'];
$menuarray1 = explode('|',$menu1);
$menuq1=$_POST['mq1'];
//$bfarray1n=$bfarray1_explode[0];
//$bfarray1q=$bfarray1_explode[1];
$menu2=$_POST['m2'];
$menuarray2 = explode('|',$menu2);
$menuq2=$_POST['mq2'];
$menu3=$_POST['m3'];
$menuarray3 = explode('|',$menu3);
$menuq3=$_POST['mq3'];
$menu4=$_POST['m4'];
$menuarray4 = explode('|',$menu4);
$menuq4=$_POST['mq4'];
$menu5=$_POST['m5'];
$menuarray5 = explode('|',$menu5);
$menuq5=$_POST['mq5'];
$menu6=$_POST['m6'];
$menuarray6 = explode('|',$menu6);
$menuq6=$_POST['mq6'];
$menu7=$_POST['m7'];
$menuarray7 = explode('|',$menu2);
$menuq7=$_POST['mq7'];

//$out="INSERT INTO table(date1,people) VALUES ('$f','$a')";
$in="INSERT INTO tableonlinereservation VALUES ('$b','$dat','$ems','$d','$menuarray1[0]','$menuarray1[1]','$menuq1',     '$menuarray2[0]','$menuarray2[1]','$menuq2','$menuarray3[0]','$menuarray3[1]','$menuq3','$menuarray4[0]','$menuarray4[1]','$menuq4','$menuarray5[0]',           '$menuarray5[1]','$menuq5','$menuarray6[0]','$menuarray6[1]','$menuq6','$menuarray7[0]','$menuarray7[1]','$menuq7')";

$g=mysqli_query($con,$in);
if($g)
echo 'success';
else
echo 'failed';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>invoice</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">

    <link rel="stylesheet" href="css/template.css">
  </head>
  <body>
    <div id="container">
      <section id="memo">
        <div class="logo">
          <img src="images/logo.png" />
        </div>
        
        <div class="company-info">
          <div>THE FOODIE CRUNCH</div>

          <br />
          
          <span>The Foodie Crunch,149k Avenue C sector,foodie park,chennai-17</span>
          <span>600017</span>

          <br />
          
          <span>ph : 9876543210</span>
          <span>...email : foodiecrunch@gmail.com</span>
        </div>

      </section>

      <section id="invoice-title-number">
      
        <span id="title">INVOICE</span>
        <span id="number">#001   (online delivery)</span>
        
      </section>
      
     
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>S.NO</th> <!-- Dummy cell for the row number and row commands -->
            <th>ITEM NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>SUB TOTAL</th>
          </tr>
          
          <tr >
            <td>1.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray1[0]; ?></td> <!-- ITEM NAME -->
            <td><?php echo $menuq1; ?></td>
            <td><?php echo $menuarray1[1]; ?></td>     <!-- QUANTITY -->
             <?php 
             $a=$menuq1*$menuarray1[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $a; ?></td>  <!-- TOTAL -->
          </tr>
           
          <tr >
            <td>2.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray2[0]; ?></td> <!-- ITEM NAME -->
            <td><?php echo $menuq2; ?></td>
            <td><?php echo $menuarray2[1]; ?></td>     <!-- QUANTITY -->
             <?php 
             $b=$menuq2*$menuarray2[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $b; ?></td>  <!-- TOTAL -->
          </tr>

          <tr>
            <td>3.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray3[0];?></td> <!-- ITEM NAME -->
            <td><?php echo $menuq3; ?></td>
            <td><?php echo $menuarray3[1]; ?></td>     <!-- QUANTITY -->
           <?php 
             $c=$menuq3*$menuarray3[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $c; ?></td>  <!-- TOTAL -->
          </tr>
          <tr>
            <td>4.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray4[0]; ?></td> <!-- ITEM NAME -->
             <td><?php echo $menuq4; ?></td> 
            <td><?php echo $menuarray4[1]; ?></td>     <!-- QUANTITY -->
            <?php 
             $d=$menuq4*$menuarray4[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $d; ?></td>  <!-- TOTAL -->
          </tr>
          <tr >
            <td>5.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray5[0]; ?></td> <!-- ITEM NAME -->
            <td><?php echo $menuq5; ?></td> 
            <td><?php echo $menuarray5[1]; ?></td>     <!-- QUANTITY -->
             <?php 
             $e=$menuq5*$menuarray5[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $e; ?></td>  <!-- TOTAL -->
          </tr>
          <tr >
            <td>6.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray6[0]; ?></td> <!-- ITEM NAME -->
            <td><?php echo $menuq6; ?></td>
            <td><?php echo $menuarray6[1]; ?></td>     <!-- QUANTITY -->
                   <!-- ITEM PRICE -->
            <?php 
             $f=$menuq6*$menuarray6[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $f; ?></td>  <!-- TOTAL -->
          </tr>
            <tr >
            <td>7.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $menuarray7[0]; ?></td> <!-- ITEM NAME -->
            <td><?php echo $menuq7; ?></td> 
            <td><?php echo $menuarray7[1]; ?></td>     <!-- QUANTITY -->
            <?php 
             $g=$menuq7*$menuarray7[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $g; ?></td>  <!-- TOTAL -->

          </tr>
        </table>
        
      </section>
      
      <section id="sums">
      <?php 
      $sum=$a+$b+$c+$d+$e+$f+$g; ?>
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>Subtotal:</th>
            <td><?php echo $sum; ?></td>
          </tr>
       
          
          <tr class="amount-total">
            <th>TOTAL AMOUNT:</th>
            <td><?php echo $sum; ?></td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesn't need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th>amount paid:</th>
            <td>र 0.00</td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th>AMOUNT TO BE PAID :</th>
            <td><?php echo $sum; ?></td>
          </tr>
          
        </table>

        <div class="clearfix"></div>
        
      </section>
      
      <div class="clearfix"></div>

      <section id="invoice-info">
        <div>
          <span>DATE:</span> <span>{issue_date}</span>
        </div>
         <br />

        <div>
          <span>CURRENCY:</span> <span>INR</span>
        </div>
        <div>
          <span>P.O.# :</span> <span>1/3/4</span>
        </div>
        <div>
          <span>Net:</span> <span>21</span>
        </div>
      </section>
      
      <section id="terms">

        <div class="notes">Have a happie day !!!</div>

        <br />

        <div class="payment-info">
          <div>{payment_info1}</div>
          <div>{payment_info2}</div>
          <div>{payment_info3}</div>
          <div>{payment_info4}</div>
          <div>{payment_info5}</div>
        </div>
        
      </section>

      <div class="clearfix"></div>

      <div class="thank-you">THANKS!</div>

      <div class="clearfix"></div>
    </div>
    <h1>
    <script src="http://cdn.invoicebus.com/generator/generator.min.js?data=data.js"></script></h1>
  </body>
</html>
<?php
$to       = "$ems,foodiecrunchonline@gmail.com";
$subject  = 'INVOICE';
$message  =  '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>invoice</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">

    <link rel="stylesheet" href="css/template.css">
  </head>
  <body>
    <div id="container">
      <section id="memo">
        <div class="logo">
          <img src="images/logo.png" />
        </div>
        
        <div class="company-info">
          <div>THE FOODIE CRUNCH</div>

          <br />
          
          <span>The Foodie Crunch,149k Avenue C sector,foodie park,chennai-17</span>
          <span>600017</span>

          <br />
          
          <span>ph : 9876543210</span>
          <span>...email : foodiecrunch@gmail.com</span>
        </div>

      </section>

      <section id="invoice-title-number">
      
        <span id="title">INVOICE</span>
        <span id="number">#001   (online delivery)</span>
        
      </section>
      
     
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>S NO</th> <!-- Dummy cell for the row number and row commands -->
            <th>ITEM NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>SUB TOTAL</th>
          </tr>
          
          <tr >
            <td>1.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$menuarray1[0].'</td> <!-- ITEM NAME -->
            <td>'.$menuq1.'</td>
            <td>'.$menuarray1[1].'</td>     <!-- QUANTITY -->
                 <!-- ITEM PRICE -->
            <td>'.$a.'</td>  <!-- TOTAL -->
          </tr>
           
          <tr >
            <td>2.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$menuarray2[0].'</td> <!-- ITEM NAME -->
            <td>'.$menuq2.'</td>
            <td>'.$menuarray2[1].'</td>     <!-- QUANTITY -->
                 <!-- ITEM PRICE -->
            <td>'.$b.'</td>  <!-- TOTAL -->
          </tr>

          <tr>
            <td>3.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$menuarray3[0].'</td> <!-- ITEM NAME -->
            <td>'.$menuq3.'</td>
            <td>'.$menuarray3[1].'</td>     <!-- QUANTITY -->
              <!-- ITEM PRICE -->
            <td>'.$c.'</td>  <!-- TOTAL -->
          </tr>
          <tr>
            <td>4.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$menuarray4[0].'</td> <!-- ITEM NAME -->
             <td>'.$menuq4.'</td> 
            <td>'.$menuarray4[1].'</td>     <!-- QUANTITY -->
                 <!-- ITEM PRICE -->
            <td>'.$d.'</td>  <!-- TOTAL -->
          </tr>
          <tr >
            <td>5.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$menuarray5[0].'</td> <!-- ITEM NAME -->
            <td>'.$menuq5.'</td> 
            <td>'.$menuarray5[1].'</td>     <!-- QUANTITY -->
                  <!-- ITEM PRICE -->
            <td>'.$e.'</td>  <!-- TOTAL -->
          </tr>
          <tr >
            <td>6.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$menuarray6[0].'</td> <!-- ITEM NAME -->
            <td>'.$menuq6.'</td>
            <td>'.$menuarray6[1].'</td>     <!-- QUANTITY -->
                   <!-- ITEM PRICE -->
               <!-- ITEM PRICE -->
            <td>'.$f.'</td>  <!-- TOTAL -->
          </tr>
            <tr >
            <td>7.</td> <!--SERIAL NOS --> <!-- Dot remove this column as its needed for the row commands -->
            <td>'.$menuarray7[0].'</td> <!-- ITEM NAME -->
            <td>'.$menuq7.'</td> 
            <td>'.$menuarray7[1].'</td>     <!-- QUANTITY -->
                <!-- ITEM PRICE -->
            <td>'.$g.'</td>  <!-- TOTAL -->

          </tr>
        </table>
        
      </section>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>Subtotal:</th>
            <td>'.$sum.'</td>
          </tr>
       
          
          <tr class="amount-total">
            <th>TOTAL AMOUNT:</th>
            <td>'.$sum.'</td>
          </tr>
          
          <!-- You can use attribute data-hide-on-quote="true" to hide specific information on quotes.
               For example Invoicebus doesnt need amount paid and amount due on quotes  -->
          <tr data-hide-on-quote="true">
            <th>amount paid:</th>
            <td>र 0.00</td>
          </tr>
          
          <tr data-hide-on-quote="true">
            <th>AMOUNT TO BE PAID :</th>
            <td>'.$sum.'</td>
          </tr>
          
        </table>

        <div class="clearfix"></div>
        
      </section>
      
      <div class="clearfix"></div>

      <section id="invoice-info">
        
         <br />

        <div>
          <span>CURRENCY:</span> <span>INR</span>
        </div>
        <div>
          <span>P.O.# :</span> <span>1/3/4</span>
        </div>
        <div>
          <span>Net:</span> <span>21</span>
        </div>
      </section>
      
      <section id="terms">

        <div class="notes">Have a happie day !!!</div>

        <br />

       
        
      </section>

      <div class="clearfix"></div>

      <div class="thank-you">THANKS!</div>

      <div class="clearfix"></div>
    </div>
    <h1>
    <script src="http://cdn.invoicebus.com/generator/generator.min.js?data=data.js"></script></h1>
  </body>
</html>';
$headers  = 'From: foodiecrunchrooms@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else

    echo "Email sending failed";
?>