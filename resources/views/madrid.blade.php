<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Website</title>
    <link rel="stylesheet" href="{{ asset('asset3/style.css') }}" />
    <script src="https://kit.fontawesome.com/45f013f50f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
               <img src="{{ asset('asset3/logo.png') }}" class="logo">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#header">Intro</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#sevice">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>                    
            </ul>
        </nav>
        <div class="header-text">
            <p>My Personal Website</p>
            <h1>Hi, I'm <span>Joseph</span><br>Madrid From Bangar.</h1>
        </div>
    </div>
</div>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="{{ asset('asset3/user.jpg') }}">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>I'm passionate about painting and drawing, learning new things, helping others, 
                traveling.I find joy in activities, and I'm always seeking ways to push my boundaries
                and learn more about the world around me. I value core and I believe that every experience,
                whether good or bad, teaches me something valuable. Life isn't about having it all figured out
                it's about embracing the journey, 
                making meaningful connections, and living authentical</p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links active-link" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links active-link" onclick="opentab('educations')">Educations</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Web Designer/App Interfaces</li>
                        <li><span>Web Development</span><br>Web App Development</li>
                        <li><span>App Development</span><br>Building Android/iOs Apps</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2023</span><br>Poster Making Contest, 1st Place/Champion</li>
                        <li><span>2024-2025</span><br>Working at Catering Services</li>
                        <li><span>2025</span><br>Traveling To a New Place</li>
                    </ul>
                </div>
                <div class="tab-contents" id="educations">
                    <ul>
                        <li><span>2020 - 2021</span><br>JHS Graduate at DFLOMNHS</li>
                        <li><span>2022 - 2023</span><br>SHS Graduate at DFLOMNHS</li>
                        <li><span>2024 - 2025</span><br>Studied Bachelor of Science in Information Technology at University of Ilocos Philippines</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 <div id="sevice">
    <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code-compare"></i>
                <h2>Web Design</h2>
                <p>This is the new brand identity for my business: Joseph Tucker Design.
                 After years of changes and tweaks on previous logos I finally created one that I can officially say I am happy with.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-web-awesome"></i>
                <h2>Web Design</h2>
                <p>This is the new brand identity for my business: Joseph Tucker Design.
                 After years of changes and tweaks on previous logos I finally created one that I can officially say I am happy with.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-regular fa-user"></i>
                <h2>App Design</h2>
                <p>This is the new brand identity for my business: Joseph Tucker Design.
                 After years of changes and tweaks on previous logos I finally created one that I can officially say I am happy with.</p>
                <a href="#">Learn more</a>
            </div>
         </div> 
     </div>
 </div>
  <div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="{{ asset('asset3/work1.jpg') }}" alt="Catering Services">
                <div class="layer">
                    <h3>Catering Services</h3>
                    <p>We prepare and provide food services for clients at remote locations, 
                        such as hotels, offices, concerts and events.</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div> 
            </div>
            <div class="work">
                <img src="{{ asset('asset3/work3.jpg') }}" alt="Poster Making">
                <div class="layer"> <!-- Added .layer div for consistency -->
                    <h3>2023 SHS Summit</h3>
                    <p>At the National Educators Academy of the Philippines (NEAP), 
                    the Arts and Design-Arts Production Learners from DFLOMNHS demonstrated their painting 
                    prowess live during the SHS Summit 2023.</p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="{{ asset('asset3/work2.jpg') }}" alt="2023 SHS Summit"> <!-- Added alt attribute -->
                <div class="layer"> <!-- Added .layer div for consistency -->
                    <h3>Poster Making</h3>
                    <p>This is the time i participated during the contest in Poster Making in our Town,
                     and i didn't expect that i got the 1st Place.
                    </p>
                    <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">See More</a>
    </div>
</div>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-regular fa-paper-plane"></i>" josephmoral44@gmail.com</p>
                <p> <i class="fa-solid fa-phone-volume"></i>09451835510</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/joseph.madrid.1102/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.twitter.com/"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://web.telegram.org/"><i class="fa-brands fa-telegram"></i></a>
                </div>
                <a href="" class="btn btn2">Download</a>
            </div>
            <div class="contact-right"></div>
            <form>
                <input type="text" name="Name" placeholder="Your Name" required>
                <input type="email" name="Email" id="Your Email" required>
                <textarea name="Message" rows="6" placeholder="">Your Message</textarea>
                <button type="submit" class="btn btn2">Submit</button>
            </form>
        </div>
    </div>
</div>



<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

</script>

</head>
</html>