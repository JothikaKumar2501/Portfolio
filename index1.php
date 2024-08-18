<?php

$conn = mysqli_connect('localhost','root','root','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM contact_form WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO contact_form(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Projects</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Blogs</a></li>
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
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Jothika Kumar</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/me1.jpg.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Jothika and I'm a <span class="typing-2"></span></div>
                    <p>People call me Jo. I am a full-stack Web Application and Software Developer. I am currently living in Vellore,TamilNadu,India. I have a Master of Technology in Software Engineering from VIT University, and my primary focus and inspiration for my studies is Web Development. In my free time, I study human computer interface and the psychology of human computer interaction. I am both driven and self-motivated, and I am constantly experimenting with new technologies and techniques. I am very passionate about Web Development, and strive to better myself as a developer, and the development community as a whole.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <video width="300" height="300" controls autoplay>
                            <source src="review-3_BKX9Ulsg.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <ul>
                        <li>Purpose: The project is to understand an enterprise resource planning tool-ODOO.</li>
                        <li>Objective:We implement the "Starbucks" enterprise and explore all the features of all the functional areas of the tool including marketind and sales, accounting and finance, supply chain management and human resource.</li>
                        <li>Project duration: 3-months (Fall Semester-2021-22)</li>
                        <li>My role:Explaining how accounting & HR works in ERP</li>
                    </ul>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I have more than 3 years experience building rich web applications for clients all over the world. Below is a quick overview of my main technical skill sets and tools I use. Want to find out more about my experience?
Check out my online resume.</p>
                    <a href="#">Download CV</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Blogs</h2>
                    <div class="carousel owl-carousel">
                        <div class="card">
                            <div class="box">
                                <img width="200" height="200" src="images/infinity.jpg" alt="">
                                <div class="text">Business/Corporate Blog</div>
                                <a href="https://19mis0403.mystrikingly.com/">Explore the recent trends, Work together and join to learn more!</a>
                            </div>
                        </div>
                    </div>
        </div>
    </section>



<!-- contact section starts  -->
<section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>The seemingly impersonal contact form below will deliver your message personally into my inbox. I usually reply within 48 hours.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Jothika.K</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Vellore, TamilNadu, India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">jothika.k2019@vitstudent.ac.in</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" class="box" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" class="box" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="number" name="number" placeholder="Contact Number" class="box" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="message" placeholder="Message.." class="box" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" value="send message" name="send" class="btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span><div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div></span>
        <span>Created By Jothika</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
