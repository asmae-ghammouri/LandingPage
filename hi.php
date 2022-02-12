<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/info.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
  </head>
  <body>
  <div class="overlay"></div>

    <?php 
    require_once("db.php");
    
    if ( ( isset($_POST['firstname']) && $_POST['firstname'] != "" ) && ( isset($_POST['lastname']) && $_POST['lastname'] != "" ) && ( isset($_POST['email']) && $_POST['email'] != "" ) && ( isset($_POST['phone']) && $_POST['phone'] != "" ) && ( isset($_POST['pickupaddress']) && $_POST['pickupaddress'] != "" ) && ( isset($_POST['datepicker1']) && $_POST['datepicker1'] != "" ) && ( isset($_POST['passengersnumber']) && $_POST['passengersnumber'] != "" ) && ( isset($_POST['country']) && $_POST['country'] != "" )&& ( isset($_POST['cardowner']) && $_POST['cardowner'] != "" )&& ( isset($_POST['cardnumber']) && $_POST['cardnumber'] != "" )&& ( isset($_POST['datepicker']) && $_POST['datepicker'] != "" )&& ( isset($_POST['CVV']) && $_POST['CVV'] != "" )) 
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pickupaddress = $_POST['pickupaddress'];
        $datepicker1 = $_POST['datepicker1'];
        $passengersnumber = $_POST['passengersnumber'];
        $country = $_POST['country'];
        $cardowner = $_POST['cardowner'];
        $cardnumber = $_POST['cardnumber'];
        $datepicker = $_POST['datepicker'];
        $CVV = $_POST['CVV'];
        
        $req = "INSERT INTO booked(firstname, lastname,	email, phone, pickupaddress, departuredate, passengersnumber, country, cardowner, cardnumber, expirationdate, CVV) VALUES ('$firstname', '$lastname','$email' ,'$phone','$pickupaddress','$datepicker1','$passengersnumber','$country','$cardowner','$cardnumber','$datepicker','$CVV')";
    
        $con->query($req);
        
        $con->close();
        ?>
<div id="book" >
  <div class="container" data-aos="fade-down">
    <div class="info" id="info" >
    <div class="row">
      <div class="col-lg-12 col-md-4 col-sm-12" data-aos="fade-down">
         <p> <span> First Name : </span><?php echo  $firstname; ?></p>
        <p><span>Last Name : </span><?php echo  $lastname; ?></p>
        <p><span>Email : </span><?php echo  $email; ?></p>
        <p><span>Phone : </span><?php echo  $phone; ?></p>
        <p><span>Pickup address(in Rabat) : </span><?php echo  $pickupaddress; ?></p>
        <p><span>Numbers of passengers : </span><?php echo $passengersnumber; ?></p>
        <p><span>Country : </span><?php echo $country; ?></p>
        <p><span>Card Owner: </span><?php echo  $cardowner; ?></p>
        <p><span>Card Number: </span><?php echo  $cardnumber; ?></p>
        <p><span>Expiration Date: </span><?php echo  $datepicker; ?></p>
        <p><span>CVV : </span><?php echo $CVV; ?></p>
        <p><span>Departure date : </span><?php echo  $datepicker1; ?></p>
        <p><span>Return date(approximately): </span><?php echo date('Y-m-d', strtotime($datepicker1. ' + 12 days')); ?></p>
        <?php $total=$passengersnumber*1500;?>
        <p><span>Total payment : </span><?php echo  "$".$total." ($1,500 Per Person)"; ?></p>
        </div>
      </div>
    </div>
    <button class="btn btn-outline-secondary btn-lg" id="download">Download</button>
  </div>
  
</div> 
        
<?php
    }
    
    else{

      header('location:index.php');
    }

?>
<!-- JS files -->
<script src="js/info.js"></script>
<script src="js/bootstrap.min.js"></script>

  </body>
</html>
