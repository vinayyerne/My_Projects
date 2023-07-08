<?php
// error_reporting(0);
include('config.php');

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact(name,email,number,subject,message) VALUES(:name,:email,:number,:subject,:message)";
  $query = $dbh->prepare($sql);
  // echo $quary;
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':number', $number, PDO::PARAM_STR);
  $query->bindParam(':subject', $subject, PDO::PARAM_STR);  
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
      echo "<script>alert('Query sent successfully');</script>";
      echo "<script>window.location.href ='contact.php'</script>";
  } else {
      echo "<script>alert('Something went wrong. Please try again.');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E events</title>

  <?php include('include_css.php')?>
  <?php include('service_css.php')?>

</head>

<body>
  <?php include("incku_header.php");?>
  <section class="contact" id="contact">

    <h1 class="heading"><span>contact</span>us</h1>

    <form name="contact" action="" method="post">
      <div class="row inputbox">
        <div class="col-md-6">
        <input name="name" id="name" type="text" placeholder="Name">
        </div>
        <div class="col-md-6">
        <input name="email" id="email" type="Email" placeholder="Email">
        </div>
        <form action="">
      <div class="row inputbox">
        <div class="col-md-6">
        <input type="number" name="number" id="number" placeholder="Number">
        </div>
        <div class="col-md-6">
        <input type="text" name="subject" id="subject" placeholder="Subjects">
        </div>

      </div>
      <textarea  placeholder="Your Message" name="message" id="message" cols="10" rows="5"></textarea>

      <button type="submit" name="submit" class="btn btn-outline-secondary" >Send mesaage</button>
    </form>
  </section>



<?php include('include_footer.php')?>

  </body>

</html>