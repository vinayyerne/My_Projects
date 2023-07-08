
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

</head>

<body>
  <?php include("incku_header.php"); ?>

  <!-- custom js file link -->
  <!-- <script src="/script.js"></script>
<div class="class"--->


  <!-- home secton start -->


  <section class="home" id="home">
    <div class="content">
      <h3> Its time to celebrate the best <span> Event Organizere</span></h3>
      <button type="button" class="btn btn-outline-secondary">Contact Us</button>
    </div>
  </section>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="chicago.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="la.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="ny.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  


  <!-- home section end  -->

  <!-- service section start -->

  <section class="service" id="services">
    <h1 class="heading"> Our <span>Services</span></h1>
    <div class="box-container">

      <div class="box">
        <i class="fas fa-map-marked-alt"></i>
        <h3>Exibitions</h3>
        <p>It is an organized way of displaying a selection of products and presenting a series of services. It commonly happens within the culture or educations like museums, art galleries, parks, libraries, exhibition....</p>
      </div>

      <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>Celebrity Shows</h3>
        <p>It is a show where celebrities from every corner of the nation reached commonly decode venues to enjoy together. It is get together type party for celebrities. And Black Riders is a pioneer name in the event...</p>
      </div>


      <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>Laser Show</h3>
        <p>It is the show where Laser light is used for entertaining the audience. It is an entirely different kind of marketing strategy that is applied for boosting sales and increasing the business propaganda and sales as...</p>
      </div>

      <div class="box">
        <i class="fas fa-music"></i>
        <h3>Live Concert</h3>
        <p>Since our inception, we are known the perfect live concert organizers in Delhi & NCR and it is possible because we are backed by a team of qualified and experienced professionals and equipped.</p>
      </div>

      <div class="box">
        <i class="fas fa-photo-video"></i>
        <h3>Trade show</h3>
        <p>An innovative event management company, Black Riders offers the best trade show management service in Delhi & NCR. It offers it as per your requirement and budget. And accordingly, it customizes the...</p>
      </div>

      <div class="box">
        <i class="fas fa-utensils"></i>
        <h3> Custom Food </h3>
        <p>It is the show where we can seen many custom food of near by restaurant or food truck  It is an entirely different kind of marketing strategy that is applied for boosting sales and increasing the business propaganda and sales as.</p>
      </div>
    </div>
  </section>

  <!-- service section end  -->

  <!-- about section start -->

  <section class="about" id="about">
    <h1 class="heading"><span>About </span>us </h1>
    <div class="row">
      <div class="col-md-6">
        <div class="image" style="padding-top: 3%;">
          <img src="images/about-img.jpg" style="width:100%" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="content" style="padding-top: 5%;">
          <h3>We Will Give a Very Special Celebration For You.</h3>
          <p>Planning an event is a pre-requisite for every event. No matter what kind of event you are about to have,
            the main requirements always remain the same. While you plan your event it is very important have to best
            event management company. To make sure your event unfolds in a way you want, you need to make the best
            choice. We at Black Riders Production make sure that we deliver exactly what our client wants. we are a
            renowned name among the other corporate event management companies in India.</p>
          <p>We provide a comprehensive package. We make your event as better as it can get and ultimately make it the
            best. We have the testimonials from our happy clients and this is the proof that we are doing a good job.
            Also, our previous clients keep coming back to us. This also bears testament to the fact that our services
            are up to date.
          </p>
          <button type="button" class="btn btn-outline-secondary">Contact Us</button>
        </div>
      </div>
    </div>

  </section>
  <br>
  <br>
  <!-- about section ends -->

  <!-- gallary section start  -->
  <br>
  <section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

      <div class="box">
        <img src="images/g-1.jpg " alt=""  >
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-2.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-3.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-4.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-5.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-6.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-7.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-8.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

      <div class="box">
        <img src="images/g-9.jpg" alt="">
        <h3 class="title">photos and events</h3>
        <div class="icons">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-share"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
      </div>

    </div>

  </section>

  <!-- gallary section end -->

  <!-- price section start -->

  <section class="price" id="price">

    <h1 class="hading">Our <span>Price</span></h1>

    <div class="box-container">

      <div class="box">
        <h3 class="title">For Birthdays</h3>
        <h3 class="amount">50k</h3>
        <ul>
          <li><i class="fas-check"></i>full services</i></li>
          <li><i class="fas-check"></i>Decoration</i></li>
          <li><i class="fas-check"></i>Foods and Drinks</i></li>
          <li><i class="fas-check"></i>Invitation Card</i></li>

        </ul>
        <button type="button" class="btn btn-outline-secondary">Check out</button>

      </div>



      <div class="box">
        <h3 class="title">For weeding</h3>
        <h3 class="amount">250k</h3>
        <ul>
          <li><i class="fas-check"></i>full services</i></li>
          <li><i class="fas-check"></i>Decoration</i></li>
          <li><i class="fas-check"></i>Foods and Drinks</i></li>
          <li><i class="fas-check"></i>Invitation Card</i></li>

        </ul>
        <button type="button" class="btn btn-outline-secondary">Check out</button>

      </div>


      <div class="box">
        <h3 class="title">For Concert</h3>
        <h3 class="amount">200k</h3>
        <ul>
          <li><i class="fas-check"></i>full services</i></li>
          <li><i class="fas-check"></i>Decoration</i></li>
          <li><i class="fas-check"></i>Foods and Drinks</i></li>
          <li><i class="fas-check"></i>Invitation Card</i></li>

        </ul>
        <button type="button" class="btn btn-outline-secondary">Check out</button>
 
      </div>




      <div class="box">
        <h3 class="title">For Other</h3>
        <h3 class="amount">100k</h3>
        <ul>
          <li><i class="fas-check"></i>full services</i></li>
          <li><i class="fas-check"></i>Decoration</i></li>
          <li><i class="fas-check"></i>Foods and Drinks</i></li>
          <li><i class="fas-check"></i>Invitation Card</i></li>

        </ul>
        <button type="button" class="btn btn-outline-secondary">Check out</button>

      </div>

    </div>


  </section>


  <!-- price section end -->

  <!-- contact section start -->
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
      <style>
      .example
{
  padding: 5px 10px 5px 10px;
  background: #ff671d;
  border-radius: 10px;
  color: #fff;
}
</style>
      <button type="submit" name="submit" nameclass="btn btn-outline-secondary example" bg>Send mesaage</button>
    </form>
  </section>

  <!-- contact section end -->
  <!-- footer Starts -->
<?php
include('include_footer.php')
?>

  <!-- custom  js file link -->

  <script src="js/script.js"></script>
  <script src="http://unpkg.com/swiper/swiper-bundle.min.js/"></script>

</body>

</html>