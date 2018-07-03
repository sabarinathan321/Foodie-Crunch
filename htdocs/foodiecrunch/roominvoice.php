<?php
$host='localhost';
$un='root';
$p='';
$db='foodie';
$con = mysqli_connect($host,$un,$p,$db);
$a=$_POST['checkin'];
$b=$_POST['day'];
$c=$_POST['npeople'];
$d=$_POST['times'];
$e=$_POST['contacts'];
$ems=$_POST['es'];
$f=$_POST['rooms'];
$roomarray=explode('|', $f);
echo $ems;
$g=mysqli_query($con,"INSERT INTO room VALUES ('$a','$b','$c','$d','$e','$ems','$roomarray[0]','$roomarray[1]')");
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
            <th></th>
            <th>DATE : <?php echo $a; ?></th> 
            <th>VISITING TIME : <?php echo $d; ?></th>
            <th>PERSONS : <?php echo $c; ?></th>  
      </tr></table></section>
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>S.NO</th> <!-- Dummy cell for the row number and row commands -->
            <th>ROOM TYPE</th>
            <th>NUMBER OF DAYS</th>
            <th>PRICE</th>
            <th>SUB TOTAL</th>
          </tr>
          
          <tr >
            <td>1.</td> <!--SERIAL NOS --> <!-- Don't remove this column as it's needed for the row commands -->
            <td><?php echo $roomarray[0]; ?></td> <!-- ITEM NAME -->
            <td><?php echo $b; ?></td>
            <td><?php echo $roomarray[1]; ?></td>     <!-- QUANTITY -->
             <?php 
             $sum=$b*$roomarray[1]; ?>     <!-- ITEM PRICE -->
            <td><?php echo $sum; ?></td>  <!-- TOTAL -->
          </tr>
           
                 </table>
        
      </section>
      
      <section id="sums">
      <?php 
      //$sum=$a+$b+$c+$d+$e+$f+$g; ?>
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
$to       = "$ems,foodiecrunchrooms@gmail.com";
$subject  = 'INVOICE';
$message  = '<!DOCTYPE html>
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
            <th></th>
            <th>'.$a.'</th> 
            <th>VISITING TIME :'.$d.'</th>
            <th>PERSONS :'.$c.'</th>  
      </tr></table></section>
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>S NO</th> <!-- Dummy cell for the row number and row commands -->
            <th>ROOM TYPE</th>
            <th>NUMBER OF DAYS</th>
            <th>PRICE</th>
            <th>SUB TOTAL</th>
          </tr>
          
          <tr >
            <td>1.</td> <!--SERIAL NOS --> <!-- Dont remove this column as its needed for the row commands -->
            <td>'.$roomarray[0].'</td> <!-- ITEM NAME -->
            <td>'.$b.'</td>
            <td>'.$roomarray[1].'</td>     <!-- QUANTITY -->
                 <!-- ITEM PRICE -->
            <td>'.$sum.'</td>  <!-- TOTAL -->
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
$headers  = 'From: thefoodiecrunch@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>