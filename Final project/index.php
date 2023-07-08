<?php
    require_once('includes/config.php');

    $errors = array();

    if(isset($_POST['add']))

    {
        $errors = validate_add();

        if(count($errors)==0)
        {
            $sql = "INSERT INTO users SET name='".$_POST['name']."', email='".$_POST['email']."', number='".$_POST['number']."', message='".$_POST['message']."', created=NOW()";
            
            if(mysqli_query($con,$sql))
            {
                
            }
            else
            {
                echo "Not Added";
            }
        }
    }
?>

<!-- <!DOCTYPE html>
<!- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
                                                 
</head>
<body>
    <div class="scroll-up-btn">
        <a href="#home"><i style="color:white" class="fas fa-angle-up" ></i></a>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Tech<span>Circle.com</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <!-- <li><a href="#skills" class="menu-btn">Skills</a></li> -->
                <!-- <li><a href="#teams" class="menu-btn">Teams</a></li> -->
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, we are </div>
                <div class="text-2">DEVLOPER</div>
                <div class="text-3">And we are <span class="typing"></span></div>
                <a href="#contact">Contact us</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/1591343907_s6 (2).jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">We are DEVELOPER AND we <span class="typing-2"></span></div>
                    <p> "Diversity is the most sustainable driver of innovation and a primary genome of resilience. It is no surprise, therefore, that teams and organizations with a higher degree of diversity and inclusion almost always outperform those without them. At Tech Circle, this has been one of our core guiding principles as a team, and a cultural differentiator that we are most proud of."</p>
                    <!-- <a href="#">Download CV</a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Our services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>We helps our clients in creating a resonsive and creative web Designs.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>We also helps our clients in Advertising there products.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>We also provide application development to our clients.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

   
    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Our teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/vinay.jpeg" alt="00">
                        <div class="text">Vinay Yerne</div>
                        <p>Ceo </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/rohit.jpeg"">
                        <div class="text">Rohit dive</div>
                        <p> Cmo </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/abh.jpeg" alt="">
                        <div class="text">Abhilash sayare</div>
                        <p> Team Member </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact us</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Get in touch with us and find out how we can help you reimagine your enterprise for the digital age</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Company Name</div>
                                <div class="sub-title">Tech Circle</div>
                            </div>
                        </div>
                        <div class="row">                         
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Nagpur</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Contact us</div>
                    <form action="#" method="POST" id="cont">
                        <?php  if(count($errors)>0){?>
                            <div>
                                <font color="#FF0000">
                                    <?php echo implode('<br>', $errors); ?>
                                </font>
                            </div>
                        <?php } ?>
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required name="name" value="<?php echo isset($_POST['name'])? $_POST['name']:''; ?>">
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required name="email" value="<?php echo isset($_POST['eamil'])? $_POST['email']:''; ?>">
                            </div>
                        </div>
                        <div class="field number">
                            <input type="text" placeholder="Phone number" required name="number" value="<?php echo isset($_POST['number'])? $_POST['number']:''; ?>">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Your Project Information..." required name="message" value="<?php echo isset($_POST['message'])? $_POST['message']:''; ?>"></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="add" value="">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
         <!-- <span class="fa-regular fa-at"> -->
 
 
            <i class="fa-solid fa-at"></i></span> 2022 All rights reserved by It services</span>
    </footer>

    <script src="script.js"></script>
</body>
</html> 
