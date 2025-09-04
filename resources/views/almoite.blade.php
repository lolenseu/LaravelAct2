<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset2/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset2/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset2/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('asset2/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('asset2/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('asset2/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ asset('asset2/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#a789d4">

    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('asset2/css/swiper-bundle.min.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('asset2/css/styles.css') }}">

    <title> Almoite's Portfolio </title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="https://www.facebook.com/remalyn.mosuelaalmoite" class="nav__logo">Almoite</a>

            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item ">
                        <a href="#home" class="nav__link">
                            <i class='bx bx-home'></i>
                        </a>
                    </li>

                    <li class="nav__item ">
                        <a href="#about" class="nav__link">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class='bx bx-book'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#work" class="nav__link">
                            <i class='bx bx-briefcase-alt-2'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bx-message-square-dots'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('home') }}" class="nav__logo">Home</a>
            <i class='bx bx-moon change-theme change-theme-button' id="theme-button"></i>

        </nav>
    </header>

    <main class="main">
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__greeting">Hello, I'm</span>
                    <h1 class="home__name">Remalyn Mosuela Almoite</h1>
                    <h3 class="home__education">Aspiring Developer</h3>

                    <div class="home__button">
                        <a download="" href="{{ asset('asset2/pdf/remalyn-Cv.pdf') }}" class="button button--ghost">
                            Download CV
                        </a>

                        <a href="#about" class="button">About</a>
                    </div>
                </div>

                <div class="home__handle">
                    <img src="{{ asset('asset2/img/almoite1.png') }}" alt="" class="home__img">
                </div>

                <div class="home__social">
                    <a href="#" target="_blank" class="home__social-link">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                    <a href="https://github.com/" target="_blank" class="home__social-link">
                        <i class='bx bxl-github'></i>
                    </a>
                    <a href="#" target="_blank" class="home__social-link">
                        <i class='bx bxl-dribbble'></i>
                    </a>
                </div>

                <a href="#about" class="home__scroll">
                    <i class='bx bx-mouse home__scroll-icon'></i>
                    <span class="home__scroll-name">Scroll Down</span>
                </a>
            </div>
        </section>
<br>
        <section class="about section" id="about">
            <span class="section__subtitle">My Intro</span>
            <h2 class="section__title">About Me</h2>

            <div class="about__container container grid">
                <img src="{{ asset('asset2/img/almoite2.png') }}" alt="" class="about__img">

                <div class="about__data">
                    <div class="about__info">
                        <div class="about__box">
                            <i class='bx bx-award about__icon'></i>
                            <h3 class="about__title">BS Information Technology</h3>
                            <span class="about__subtitle">ISPSC- Tagudin Campus</span>
                        </div>
                        <div class="about__box">
                            <i class='bx bx-briefcase-alt about__icon'></i>
                            <h3 class="about__title">Completed</h3>
                            <span class="about__subtitle">4+ WebSystem Projects</span>
                        </div>
                        <div class="about__box">
                            <i class='bx bx-support about__icon'></i>
                            <h3 class="about__title">Learning Enthusiast</h3>
                            <span class="about__subtitle">Always Eager to Learn New Technologies.</span>
                        </div>
                    </div>

                    <p class="about__description">
                        I am a BS Information Technology student who is passionate about web development and design. I enjoy creating simple and user-friendly web pages while learning more about UI/UX. I may still be building my experience, but I am always eager to explore new tools and technologies to improve my skills. My goal is to keep growing as a developer and use my knowledge to create practical and creative digital solutions in the future.

                    <a href="#contact" class="button about__button-contact">Contact Me</a>
                </div>
            </div>
        </section>
<section class="about section" id="about">
    <div class="about__box">
                            <i class='bx bx-award about__icon'></i>
                            <h3 class="about__title">My Hobbies</h3>
                            <span class="about__subtitle">-Exploring nature through hiking and waterfall trips
                            <br>
                            -Watching sunsets and enjoying peaceful views
                            <br>
                            -Discovering new places and outdoor adventures</span>
                        </div>

        <section class="skills section" id="skills">
            <span class="section__subtitle">My Abilities</span>
            <h2 class="section__title">My Experience</h2>

            <div class="skills__container container grid">
                <div class="skills__content">
                    <h3 class="skills__title">Frontend Development</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">HTML</h3>
                                    <span class="skills__level">Familiar</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">CSS/SCSS</h3>
                                    <span class="skills__level">Familiar</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">Javascript</h3>
                                    <span class="skills__level">Learning</span>
                                </div>
                            </div>

                        </div>
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">Bootstrap</h3>
                                    <span class="skills__level">Learning</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">Kotlin</h3>
                                    <span class="skills__level">Learning</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="skills__content">
                    <h3 class="skills__title">Backend Development</h3>

                    <div class="skills__box">
                        <div class="skills__group">
                            
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">Python</h3>
                                    <span class="skills__level">Learning</span>
                                </div>
                            </div>

                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">MySQL</h3>
                                    <span class="skills__level">Familiar</span>
                                </div>
                            </div>

                        </div>
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>

                                <div>
                                    <h3 class="skills__name">PHP</h3>
                                    <span class="skills__level">Familiar</span>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
        </section>

        <section class="services section">
            <span class="section__subtitle">My Services</span>
            <h2 class="section__title">What I Offer</h2>

            <div class="services__container container grid">
                <div class="services__card">
                    <div class="serv">
                        <h3 class="services__title">Academic Project Design</h3>

                        <span class="services__button">
                            See More <i class='bx bx-right-arrow services__icon'></i>
                        </span>
                    </div>


                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title">Academic Project Development</h3>

                            <p class="services__modal-description">
                                Supporting students and professionals with system and project design tailored to specific requirements.
                            </p>

                            <ul class="services__modal-list">
                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I develop the user interfaces.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Web Page design and development.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I create the UX element interactions.
                                    </p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <h3 class="services__title">UI/UX <br> Designing</h3>

                    <span class="services__button">
                        See More <i class='bx bx-right-arrow services__icon'></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title">UI/UX Designing</h3>

                            <p class="services__modal-description">
                                Creating intuitive and user-friendly interfaces that enhance digital experiences.
                            </p>

                            <ul class="services__modal-list">
                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I develop the user interfaces.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Web Page design and development.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I create the UX element interactions.
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <h3 class="services__title">Visual <br> Designing</h3>

                    <span class="services__button">
                        See More <i class='bx bx-right-arrow services__icon'></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title">Visual Designing</h3>

                            <p class="services__modal-description">
                                Building strong visuals and design concepts that communicate identity and purpose
                            </p>

                            <ul class="services__modal-list">
                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I develop the user interfaces.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Web Page design and development.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I create the UX element interactions.
                                    </p>
                                </li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="work section" id="work">
            <span class="section__subtitle">My Portfolio</span>
            <h2 class="section__title">Recent Works</h2>

            <div class="work__filters">
                <span class="work__item active-work" data-filter='all'>All</span>
                <span class=" work__item" data-filter='.web'>Web</span>
                <span class=" work__item" data-filter='.movil'>Movil</span>
                <span class=" work__item" data-filter='.design'>Design</span>
            </div>

            <div class="work__container container grid">
                <div class="work__card mix web">
                    <img src="{{ asset('asset2/img/work1.jpg') }}" alt="" class="work__img">

                    <h3 class="work__title">Web Design</h3>

                    <a href="https://github.com/notyenoh22/brewandbliss" class="work__button">
                        Brew and Bliss <i class='bx bx-right-arrow work__icon'></i>
                    </a>
                </div>

                <div class="work__card mix movil">
                    <img src="{{ asset('asset2/img/work2.jpg') }}" alt="" class="work__img">

                    <h3 class="work__title">App Movil</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow work__icon'></i>
                    </a>
                </div>

                <div class="work__card mix design">
                    <img src="{{ asset('asset2/img/work3.jpg') }}" alt="" class="work__img">

                    <h3 class="work__title">Brand Design</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow work__icon'></i>
                    </a>
                </div>



                <div class="work__card mix movil">
                    <img src="{{ asset('asset2/img/work5.jpg') }}" alt="" class="work__img">

                    <h3 class="work__title">App Movil</h3>

                    <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow work__icon'></i>
                    </a>
                </div>

            </div>
        </section>

        <section class="contact section" id="contact">
            <sapn class="section__subtitle">Get in touch</sapn>
            <h3 class="section__title">Contact Me</h3>

            <div class="contact__container container grid">
                <div class="contact__content">
                    <h3 class="contact__title contact__title-info">Talk to me</h3>

                    <div class="contact__info">
                        <div class="contact__card">
                            <i class='bx bx-mail-send contact__card-icon'></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">remalynalmoite03@gmail.com</span>

                            <a href="mailto:remalynalmoite03@gmail.com" target="_blank" class="contact__button">
                                Write Me <i class='bx bx-right-arrow contact__button-icon'></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class='bx bxl-whatsapp contact__card-icon'></i>
                            <h3 class="contact__card-title">Whatsapp/Fiber</h3>
                            <span class="contact__card-data">09635192001</span>

                            <a href="https://api.whatsapp.com/send?phone=09679117237&text=Hey there!" target="_blank"
                                class="contact__button">
                                Write Me <i class='bx bx-right-arrow contact__button-icon'></i>
                            </a>
                        </div>

                        <div class="contact__card">
                            <i class='bx bxl-twitter contact__card-icon'></i>
                            <h3 class="contact__card-title">Twitter</h3>
                            <span class="contact__card-data">itz_hnym</span>

                            <a href="https://x.com/itz_hnym" target="_blank" class="contact__button">
                                Write Me <i class='bx bx-right-arrow contact__button-icon'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact__content">
                    <h3 class="contact__title contact__title-form">Write Me your Message</h3>

                    <form action="" class="contact__form">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Name</label>
                            <input type="text" placeholder="Enter name" class="contact__form-input">
                        </div>

                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Mail</label>
                            <input type="text" placeholder="Enter email" class="contact__form-input">
                        </div>

                        <div class="contact__form-div contact__form-area">
                            <label for="" class="contact__form-tag">Message</label>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Write your Message"
                                class="contact__form-input "></textarea>
                        </div>


                        <button class="button">
                            Send Message
                        </button>
                    </form>

                </div>

        </section>
    </main>

    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">Remalyn</h1>

            <ul class="footer__list">

                <li class="footer__item">
                    <a href="#" class="footer__link">Home</a>
                </li>
                <li class="footer__item">
                    <a href="#about" class="footer__link">About</a>
                </li>
                <li class="footer__item">
                    <a href="#skills" class="footer__link">Skills</a>
                </li>
                <li class="footer__item">
                    <a href="#work" class="footer__link">Work</a>
                </li>
                <li class="footer__item">
                    <a href="#contact" class="footer__link">Contact</a>
                </li>
            </ul>

            <ul class="footer__social">
                <li class="footer__social-item">
                    <a href="https://www.facebook.com/remalyn.mosuelaalmoite" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook footer__social-icon'></i>
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://x.com/itz_hnym" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter footer__social-icon'></i>
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="#" target="_blank" class="footer__social-link">
                        <i class='bx bxl-linkedin footer__social-icon'></i>
                    </a>
                </li>
                <li class="footer__social-item">
                    <a href="https://www.instagram.com/hxnxyv/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram footer__social-icon'></i>
                    </a>
                </li>
            </ul>

            <span class="footer__copy">
                &#169; 2025 remalyn. All rights reserved.
            </span>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script src="{{ asset('asset2/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('asset2/js/mixitup.min.js') }}"></script>

    <script src="{{ asset('asset2/js/main.js') }}"></script>
</body>


</html>
