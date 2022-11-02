<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <a href="https://www.flaticon.com/free-icons/email" title="email icons"></a>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <nav class="nav">
                <a href="#">
                    <img src="IMAGES/LOGO.png" alt="">
                </a>
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active-link"><i class="fa-solid fa-house"></i>home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link"><i class="fa-solid fa-address-card"></i>about</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" class="nav-link"><i class="fa-solid fa-file"></i>skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#work" class="nav-link"><i class="fa-solid fa-list-check"></i>work</a>
                        </li>
                        <li class="nav-item">
                            <a href="#service" class="nav-link"><i class="fa-solid fa-code-compare"></i>service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link"><i class="fa-solid fa-envelope"></i>Contact</a>
                        </li>
                        @if (auth()->check())
                            <li class="nav-item">
                                <a href="/admin" class="nav-link"><i class="fa-solid fa-envelope"></i>admin panel</a>
                            </li>
                        @endif
                    </ul>
                    <div class="nav-close" id="nav-close">
                        <i class="fa-solid fa-x"></i>
                    </div>
                </div>
                <div class="nav-toggle" id="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>

        </div>
</header>

    <!-- LANDING PAGE CODE  -->

<div class="home" id="home">
        <div class="container">
            <section class="landing">
                <div class="info">
                    <h1 class="home-titles">welcome to<br>my personal portfolio</h1>
                    <h2 class="home-titles">I'm Mohamed Zaitoune</h2>
                    <p class="home-titles"><b>Junior Back-End devloper</b></p>

                </div>
                <div class="image">
                    <img src="zaaitoune.jpg" alt="" style="border-radius: 50%">
                </div>
            </section>
            <div class="buttons">
                <button class="aboutmebtn">
                    <a href="#about">
                        <i class="fa-solid fa-user"></i>
                        more about me
                    </a>
                </button>
                <button class="aboutmebtn">
                    <a download href="CV-Aminehariri.pdf">
                        <i class="fa-solid fa-file"></i>
                        download cv
                    </a>
                </button>
            </div>

            <button class="upbutton" name="upbutton">
                <i class="fa-solid fa-up-long"></i>
            </button>
        </div>
        <div class="container">
        <div class="social">
            <div class="box">
                <a href="mailto:Aminehariri57@gmail.com"><img src="IMAGES/email (2).png" alt=""></a>
            </div>
            <div class="box">
                <a href="https://github.com/Aminehariri"><img src="IMAGES/github.png" alt=""></a>
            </div>
            <div class="box">
                <a href="https://www.linkedin.com/in/amine-hariri-966485235/"><img src="IMAGES/linkedin.png" alt=""></a>
            </div>
        </div>
        </div>
</div>

    <!-- ABOUT ME PAGE CODE -->

<div class="about" id="about">
            <div class="container">
                <h2 class="section-title" data-heading="My intro">About me</h2>
                <div class="description">
                    <p>
                        I'am Amine Hariri,Junior web developer based in Casablanca,I'like coding things from scratch and enjoy bringing ideas to life in the browser with modern technologies.
                        <br>
                        I'm looking for a new opportunity on the job market,As an intern
                        web developer. I build websites using : Laravel - Php - MySql - Html- Css- Tailwind - Javascript - Bootstrap
                    </p>
                    <button class="aboutmebtn">
                        <a href="#contact">
                            <i class="fa-solid fa-code"></i>
                            Hire me know</a>
                    </button>
                </div>
            </div>
</div>

    <!-- SKILLS PAGE CODE sdfsdf -->

<div class="skills" id="skills">
        <div class="container">
            <h2 class="section-title" data-heading="My abilities">My skills</h2>
                <div class="skills-box">
                    <div class="skills-tabs">
                        <div class="skills-header skills-active" data-target="#frontend">
                            <!-- <i class="fa-sharp fa-solid fa-database skills-icon"></i> -->
                            <i class="fa-solid fa-code skills-icon"></i>
                            <div>
                                <h1 class="skills-title">Frontend devloper</h1>
                                <span class="skills-subtitle">More than 2years</span>
                            </div>
                            <i class="fa-solid fa-chevron-down skills-arrow"></i>
                        </div>
                        <div class="skills-header"  data-target="#backend">
                            <i class="fa-sharp fa-solid fa-database skills-icon"></i>
                            <div>
                                <h1 class="skills-title">Backend devloper</h1>
                                <span class="skills-subtitle">more than a year </span>
                            </div>
                            <i class="fa-solid fa-chevron-down skills-arrow"></i>
                        </div>
                    </div>

                    <div class="skills-content">
                        <div class="skills-group skills-active" data-content id="frontend">
                            <div class="skills-list ">
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">HTML</h3>
                                        <span class="skills-number">88%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width:88%;"></span>
                                    </div>
                                </div>
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">CSS</h3>
                                        <span class="skills-number">80%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: 80%;"></span>
                                    </div>
                                </div>
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">TAILWIND</h3>
                                        <span class="skills-number">75%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: 75%;"></span>
                                    </div>
                                </div>
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">BOOTSTRAP</h3>
                                        <span class="skills-number">85%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: {20}%;"></span>
                                    </div>
                                </div>
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">JAVASCRIPT</h3>
                                        <span class="skills-number">80%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: 80%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-group" data-content id="backend">
                            <div class="skills-list">
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">PHP</h3>
                                        <span class="skills-number">50%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: 50%;"></span>
                                    </div>
                                </div>
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">MYSQL</h3>
                                        <span class="skills-number">80%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: 80%;"></span>
                                    </div>
                                </div>
                                <div class="skills-data">
                                    <div class="skills-titles">
                                        <h3 class="skills-name">Laravel</h3>
                                        <span class="skills-number">66%</span>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percsentage" style="width: 66%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
</div>

    <!-- WORK SECTION CODE     -->

<div class="work" id="work">
    <h2 class="section-title" data-heading="My abilities">My PROJECTS</h2>
        <div class="container">
            <div class="projects">
                <div class="project ms-service ">
                    <img src="IMAGES/MS-IMAGES/download.png" class="p-img"  alt="">
                    <h3>job search website</h3>
                    <span class="work-button">more
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </span>
                    <div class="popup-info">
                        <div class="portfolio-popup-body">
                            <h3 class="details-title">Job serch website</h3>
                            <p class="details-description">creation a website for the company MS-services (Employing Company) that the users can search for job and apply for the positions that suit them.<br>and easly the classement of the job request </p>
                            <ul class="detail-info">
                                <li>TEchnologies - <span>Html Css Js </span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>View - <span><a href="https://aminehariri.github.io/job-serch-sebsite/html/home.html">www.msservices.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project bluestore">

                    <img src="IMAGES/MS-IMAGES/BLUESTORE.png" class="p-img" alt="">
                    <h3>E-commerce website</h3>
                    <span class="work-button">more
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </span>
                    <div class="popup-info">
                        <div class="portfolio-popup-body">
                            <h3 class="details-title">E-commerce website</h3>
                            <p class="details-description">Creating an E-commerce website for BLUESTORES(Laptop shop).So they can controle their store products and post their products on the website to increase their sales.</p>
                            <ul class="detail-info">
                                <li>TEchnologies - <span>Html Css Js </span></li>
                                <li>Role - <span>Frontend</span></li>
                                <li>View - <span><a href="#">www.bluestore.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project portfolio">
                    <img src="IMAGES/MS-IMAGES/PORTFOLIO.png" class="p-img"  alt="">
                    <h3>portfolio website</h3>
                    <span class="work-button">more
                        <i class="fa-sharp fa-solid fa-arrow-right"></i>
                    </span>
                    <div class="popup-info">
                        <div class="portfolio-popup-body">
                            <h3 class="details-title">Portfolio website</h3>
                            <p class="details-description">I'm creating my own portfolio website from scratch to show my project and skills on internet ,Using html css javascript for frontend side .And for backend i'm using php and mysql as database to store the messages that are comming from the contact form . I'm almost done with the frontend side still some features to add then i'm gonna start the backend side .</p>
                            <ul class="detail-info">
                                <li>TEchnologies - <span>Html Css Js Php Mysql</span></li>
                                <li>Role - <span>Create from scratch</span></li>
                                <li>View - <span><a href="#">www.Aminehariri.ma</a></span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- pop up code -->
            <div class="popup">
                <div class="popup-inner">
                    <div class="popup-c">
                        <span class="popup-close">
                            <i class="fa-solid fa-xmark" id="close"></i>
                        </span>
                        <div class="pp-thumbnail">
                            <img src="IMAGES/MS-IMAGES/BLUESTORE.png" alt="" class="popup-img">
                        </div>
                        <div class="popup-info">
                            <div class="portfolio-popup-body">
                                <h2 class="details-title">app for technologies and services</h2>
                                <p class="details-description">Lorem ipsum dolor sit amet consectetur,dolor sit amet consectetur,dolor sit amet consectetur, dolor sit amet consectetur, adipisicing elit. Harum autem nostrum </p>
                                <ul class="detail-info">
                                    <li>TEchnologies - <span>Html Css Js </span></li>
                                    <li>Role - <span>Frontend</span></li>
                                    <li>View - <span><a href="#">www.domain.com</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

        <!-- SERVICES SECTION CODE    -->

<div class="service" id="service">
    <div class="container">
        <h2 class="section-title" data-heading="My services">what can i do </h2>
        <div class="boxes">
            <div class="box">
                <i class="fa-solid fa-code infoi"></i>
                <h3 class="infoh3">frontend development</h3>
                <p class="infop">Code the user experience.
                    Using HTML, CSS JAVASCRIPT and some Frameworks to bring concepts to life.
                    Implementing the design on mobile first.</p>
            </div>
            <div class="box right">
                <i class="fa-solid fa-server infoi"></i>
                <h3 class="infoh3">Backend development</h3>
                <p class="infop">develope all server-side logic.managing the interchange of data between the server and the users. </p>
            </div>
        </div>
    </div>
</div>

        <!-- CONTACT SECTION CODE     -->

<div class="contact" id="contact">
    <h2 class="section-title" data-heading="Contact me">let's work together</h2>
    <div class="container">
        <div class="contact-box">
            <div class="contact-left">
                <h3>Send your message</h3>
                <!-- method="POST" action="https://formspree.io/f/mknerbvg" -->
                <form method="POST" action="{{route('message.store')}}">
                    @csrf
                    <div class="row">
                        <div class="group">
                            <label>Name</label>
                            <input name="name" type="text" class="name" maxlength="30" required placeholder="Your name">
                            <label class="namevalid valide">Pleasse enter a valide name</label>
                        </div>
                        <div class="group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="phone" required placeholder="Your number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="group">
                            <label>Email</label>
                            <input type="Email" id="email" name="email" class="email" required placeholder="Example@gmail.com">
                            <label class="emailvalid valide">Please enter a valide email</label>
                        </div>
                        <div class="group">
                            <label>Object</label>
                            <input type="text" name="object"  maxlength="40" required placeholder="Subject">
                        </div>
                    </div>
                    <label >Message</label>
                    <textarea placeholder="Your message" name="content" class="message" required rows="5"></textarea>
                    <label class="msgvalid valide">Please enter a valide email</label>
                    <button class="sendbtn"  type="submit">send</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Find me here</h3>
                    <div class="ccontainer">
                        <div class="box">
                            <h4>Aminehariri57@gmail.com</h4>
                        </div>
                        <div class="box">
                            <h4>Www.gethub/aminehariri</h4>
                        </div>
                        <div class="box">
                            <h4>www.linkedin/aminehariri</h4>
                        </div>
                        <p>If you have any suggestion, project or even you want to say Hello.<br> Please,fill the out form and i will reply you shortly</p>
                    </div>
            </div>
        </div>
    </div>
</div>

        <!-- FOOTER SECTION CODE -->

<div class="footer">
    <div class="container">
        <div class="cols">
            <div class="col">
                <img src="IMAGES/LogoFooter.jpg" alt="">
            </div>
            <div class="col">
                <h2>Quick links</h2>
                <div class="lists">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                </ul>
                <ul>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                </div>
            </div>
            <div class="col fsocial">
                <div>
                    <a href="https://github.com/Aminehariri"><i class="fa-brands fa-github"></i></a>
                </div>
                <div>
                    <a href="https://www.linkedin.com/in/amine-hariri-966485235/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <div>
                    <a href="mailto:Aminehariri57@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>&copy; <span class="year"></span> AMINE HARIRI | All Rights Reserved</p>
        </div>
    </div>
</div>

<script src="JS/scrollreveal.min.js"></script>
<script src="JS/main.js"></script>
</body>
</html>




