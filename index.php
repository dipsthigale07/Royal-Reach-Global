<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Reach Global</title>
    <link rel="icon" href="assets/logo.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="innerContainer flexWrap navContent">
            <a href="#home" class="logo">
                <div class="box">
                    <div class="imageHolder">
                        <img src="assets/logoWhite.webp" alt="logo" class="OF-cover navLogo">
                    </div>
                </div>
            </a>
            <nav class="menu">
                <button class="menuClose">&times;</button>
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact Us</a>
                <a href="#help">Help</a>
            </nav>
            <button class="menuToggle">&#9776;</button>
        </div>
    </header>

    <!-- Banner -->
    <main>
        <section id="home" class="banner">
            <video class="bannerVideo" autoplay muted loop playsinline>
                <source src="assets/bannerBg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="bannerOverlay">
                <div class="bannerOverlayInner fadeInUp">
                    <h1>Welcome to Royal Reach Global</h1>
                    <p>Empowering businesses worldwide with innovation and trust.</p>
                    <a href="#about" class="bannerBtn"><span>Explore Us</span></a>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="aboutSection wp-12 fadeInUp">
            <div class="innerContainer">
                <h2>About Us</h2>
                <div class="aboutContainer flexWrap">
                    <!-- Image -->
                    <div class="aboutImage wp-6">
                        <div class="box">
                            <div class="imageHolder">
                                <img decoding="async" src="assets/aboutUs.svg" class="OF-cover"
                                    alt="About Royal Reach Global">
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="aboutContent wp-6">
                        <p>
                            Welcome to <strong>Royal Reach Global</strong>, a trusted name in manufacturing, export, and
                            import
                            solutions. 
                            We take pride in being both a manufacturer and a global trader, delivering top-quality
                            products to clients across the world. 
                             
                            With state-of-the-art facilities and a skilled team, we manufacture products that meet
                            international quality standards. From production to global shipping, we ensure excellence at
                            every stage. Our dual strength as a manufacturer and exporter/importer allows us to
                            provide competitive pricing, reliable supply, and tailored trade solutions.
                            <br><br>
                            At <strong>Royal Reach Global</strong>, we don’t just move products—we create, connect, and
                            grow
                            together with our partners.
                        </p>
                    </div>
                </div>
                <div class="aboutUsContinue fadeInUp">
                    <h2 class="whyChooseHeading">Why Choose Us?</h2>
                    <div class="moreInfoContainer flexWrap wp-12">
                        <!-- Js used to display section -->
                    </div>
                </div>
            </div>
        </section>
        <section id="services" class="servicesSection wp-12">
            <div class="innerContainer">
                <h2 class="fadeInUp">Our Services</h2>
                <div class="servicesContainer flexWrap">
                    <!-- Js used to display section -->
                </div>
            </div>
        </section>
        <section id="contact" class="contactUsSection wp-12">
            <div class="innerContainer">
                <h2>Contact Us</h2>
                <div class="contactUsContainer fadeInUp flexWrap">
                    <!-- Image -->
                    <div class="contactUsImage wp-6">
                        <div class="box">
                            <div class="imageHolder">
                                <img decoding="async" src="assets/contactUs.jpg" class="OF-cover"
                                    alt="About Royal Reach Global">
                            </div>
                        </div>
                        <div class="contactInfo fadeInUp">
                            <h4>Contact Info</h4>
                            <div class="contactInfoGroupOuter flexWrap">
                                <div class="contactInfoGroup flexWrap">
                                    <a href="mailto:Royalreachglobal@gmail.com">
                                        <img src="assets/SVG/emailWhite.svg" alt="email-icon">
                                    </a>
                                    <div class="contactInfoDetails">
                                        <h5>Email</h5>
                                        <span><a
                                                href="mailto:Royalreachglobal@gmail.com">Royalreachglobal@gmail.com</a></span>
                                    </div>
                                </div>
                                <div class="contactInfoGroup flexWrap">
                                    <a href="tel:+918329261310" rel="noopener noreferrer">
                                        <img src="assets/SVG/phoneWhite.svg" alt="phone-icon">
                                    </a>
                                    <div class="contactInfoDetails">
                                        <h5>Contact Number</h5>
                                        <span>+918329261310 - +919637791837</span>
                                    </div>
                                </div>
                                <div class="contactInfoGroup flexWrap">
                                    <a href="https://www.google.com/maps?q=AP+Enterprises+(25-26)+3rd+Floor,+Gala+No.27,+Ghumatkar+Lawyers+Civil+Court+Road,+Pansare+Sabale+Vasti,+Rajgurunagar,+Khed+City,+Pune,+Maharashtra,+410505"
                                        target="_blank" rel="noopener noreferrer">
                                        <img src="assets/SVG/locationWhite.svg" alt="location-icon">
                                    </a>
                                    <div class="contactInfoDetails">
                                        <h5>Location</h5>
                                        <span><strong>AP Enterprises -(25-26)</strong> 3rd Floor, Gala No.27, Ghumatkar
                                            Lawyers Civil Court
                                            Road, Pansare Sabale Vasti, Rajgurunagar, Khed City, Pune, Maharashtra,
                                            410505</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contactUsForm fadeInUp wp-6">
                        <div class="formContainer">
                            <h3>Let's Get In Touch!</h3>
                            <p>Fill the form below and I'll get back to you soon.</p>
                            <form id="contactForm" novalidate>
                                <div class="formGroup">
                                    <div class="inputContainer">
                                        <img src="assets/SVG/profileGreen.svg" alt="profile-icon">

                                        <input type="text" id="name" class="formInput" name="name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="formError" id="nameError">Please enter a valid name (min 3 letters).
                                    </div>
                                </div>
                                <div class="formGroup">
                                    <div class="inputContainer">
                                        <img src="assets/SVG/emailGreen.svg" alt="email-icon">
                                        <input type="email" id="email" class="formInput" name="email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="formError" id="emailError">Please enter a valid email address.</div>
                                </div>
                                <div class="formGroup">
                                    <div class="inputContainer">
                                        <img src="assets/SVG/phoneGreen.svg" alt="phone-icon">
                                        <input type="text" id="phone" class="formInput" name="phone"
                                            placeholder="Enter your phone number">
                                    </div>
                                    <div class="formError" id="phoneError">Please enter a valid 10-digit phone
                                        number.</div>
                                </div>

                                <div class="formGroup">
                                    <div class="inputContainer">
                                        <textarea id="message" class="formTextarea" name="message"
                                            placeholder="Write your message here..." rows="4"></textarea>
                                    </div>
                                    <div class="formError" id="messageError">Message must be at least 5 characters.
                                    </div>
                                </div>

                                <button type="submit" class="formButton">Get In Touch</button>
                            </form>
                        </div>


                    </div>
                </div>
                <!-- business cards  -->
                <div class="businessCards fadeInUp wp-12 flexWrap">
                    <div class="mapIntegration wp-6">
                        <iframe loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps?q=AP+Enterprises+%2825-26%29+3rd+Floor+Gala+No.27+Ghumatkar+Lawyers+Civil+Court+Road+Pansare+Sabale+Vasti+Rajgurunagar+Khed+City+Pune+Maharashtra+410505&output=embed">
                        </iframe>

                        <p style="text-align:center;margin-top:8px">
                            <a href="https://www.google.com/maps/search/?api=1&query=AP+Enterprises+%2825-26%29+3rd+Floor+Gala+No.27+Ghumatkar+Lawyers+Civil+Court+Road+Pansare+Sabale+Vasti+Rajgurunagar+Khed+City+Pune+Maharashtra+410505"
                                target="_blank" rel="noopener">
                                Open in Google Maps
                            </a>
                        </p>
                    </div>
                    <div class="ownerCards flexWrap wp-6">
                        <div class="businessDetailsOuter wp-6">
                            <div class="businessDetails">
                                <div class="businessCardHeader">
                                    <div class="ownerProfile">
                                        <div class="box">
                                            <div class="imageHolder">
                                                <img src="assets/premMohite.webp" alt="owner-image" class="OF-cover">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Mr. Prem Mohite</h3>
                                    <span>Co-Founder</span>
                                </div>
                                <div class="businessCardBody">
                                    <div class="ownerInfo flexWrap">
                                        <a href="mailto:Premmohite5266@gmail.com">
                                            <img src="assets/SVG/emailGreen.svg" alt="email-icon">
                                        </a>
                                        <div class="ownerDetails">
                                            <h5>Email</h5>
                                            <span><a
                                                    href="mailto:Premmohite5266@gmail.com">Premmohite5266@gmail.com</a></span>
                                        </div>
                                    </div>
                                    <div class="ownerInfo flexWrap">
                                        <a href="tel:+918329261310">
                                            <img src="assets/SVG/phoneGreen.svg" alt="phone-icon">
                                        </a>
                                        <div class="ownerDetails">
                                            <h5>Contact Number</h5>
                                            <span>+918329261310</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="businessCardFooter flexWrap">
                                    <a href="https://wa.me/918329261310" class="businessCardIcons" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="assets/SVG/whatsappWhite.svg" alt="whatsapp-icon">
                                    </a>

                                    <a href="https://facebook.com" class="businessCardIcons" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="assets/SVG/facebookWhite.svg" alt="facebook-icon">
                                    </a>

                                    <a href="https://instagram.com/royalreachglobal.ind" class="businessCardIcons"
                                        target="_blank" rel="noopener noreferrer">
                                        <img src="assets/SVG/instgramWhite.svg" alt="instagram-icon">
                                    </a>

                                    <a href="https://twitter.com/RoyalreachG" class="businessCardIcons" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="assets/SVG/twitterWhite.svg" alt="twitter-icon">
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="businessDetailsOuter wp-6">
                            <div class="businessDetails">
                                <div class="businessCardHeader">
                                    <div class="ownerProfile">
                                        <div class="box">
                                            <div class="imageHolder">
                                                <img src="assets/premMohite.webp" alt="owner-image" class="OF-cover">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Mrs. Ashwini Pansare</h3>
                                    <span>Co-Founder</span>
                                </div>
                                <div class="businessCardBody">
                                    <div class="ownerInfo flexWrap">
                                        <a href="mailto:pavanpansare@gamil.com">
                                            <img src="assets/SVG/emailGreen.svg" alt="email-icon"></a>
                                        <div class="ownerDetails">
                                            <h5>Email</h5>
                                            <span><a
                                                    href="mailto:pavanpansare@gamil.com">pavanpansare@gamil.com</a></span>
                                        </div>
                                    </div>
                                    <div class="ownerInfo flexWrap">
                                        <a href="tel:+919637791837">
                                            <img src="assets/SVG/phoneGreen.svg" alt="phone-icon">
                                        </a>
                                        <div class="ownerDetails">
                                            <h5>Contact Number</h5>
                                            <span>+919637791837</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="businessCardFooter flexWrap">
                                    <a href="https://wa.me/919637791837" class="businessCardIcons" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="assets/SVG/whatsappWhite.svg" alt="whatsapp-icon">
                                    </a>

                                    <a href="https://facebook.com" class="businessCardIcons" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="assets/SVG/facebookWhite.svg" alt="facebook-icon">
                                    </a>

                                    <a href="https://instagram.com/royalreachglobal.ind" class="businessCardIcons"
                                        target="_blank" rel="noopener noreferrer">
                                        <img src="assets/SVG/instgramWhite.svg" alt="instagram-icon">
                                    </a>

                                    <a href="https://twitter.com/RoyalreachG" class="businessCardIcons" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="assets/SVG/twitterWhite.svg" alt="twitter-icon">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Alert Box Contact Us form  starts-->
        <div class="alertBox" id="alertBox">
            <div class="alertContent">
                <h3 class="alertTitle">Success</h3>
                <p class="alertMessage">Your form has been submitted successfully!</p>
                <button class="alertButton" onclick="closeAlert()">OK</button>
            </div>
        </div>
        <section id="help" class="helpSection wp-12">
            <div class="innerContainer"></div>
        </section>

    </main>

    <footer>
        <div class="innerContainer">
            <div class="footerContent flexWrap wp-12">
                <div class="leftSideFooter flexWrap wp-4">
                    <a href="#" class="logo" id="footerLogo">
                        <div class="box">
                            <div class="imageHolder">
                                <img src="assets/logo.webp" alt="logo" class="OF-cover">
                            </div>
                        </div>
                    </a>
                    <p>&copy; 2025 Royal Reach Global. All rights reserved.</p>
                </div>
                <div class="middleSideFooter wp-4 flexWrap">
                    <div class="footerContactGroup flexWrap">
                        <a href="mailto:Royalreachglobal@gmail.com">
                            <img src="assets/SVG/emailWhite.svg" alt="email-icon">
                        </a>
                        <div class="footerContactDetails">
                            <h5>Email</h5>
                            <span><a href="mailto:Royalreachglobal@gmail.com">Royalreachglobal@gmail.com</a></span>
                        </div>
                    </div>

                    <div class="footerContactGroup flexWrap">
                        <a href="tel:+918329261310">
                            <img src="assets/SVG/phoneWhite.svg" alt="phone-icon" class="footerIcon">
                        </a>
                        <div class="footerContactDetails">
                            <h5>Contact Number</h5>
                            <span>
                                <a href="tel:+918329261310">+91 83292 61310</a> -
                                <a href="tel:+919637791837">+91 96377 91837</a>
                            </span>
                        </div>
                    </div>
                    <div class="footerContactGroup flexWrap">
                        <a href="https://www.google.com/maps/search/?api=1&query=AP+Enterprises+(25-26)+3rd+Floor+Gala+No.27+Ghumatkar+Lawyers+Civil+Court+Road+Pansare+Sabale+Vasti+Rajgurunagar+Khed+City+Pune+Maharashtra+410505"
                            target="_blank" rel="noopener">
                            <img src="assets/SVG/locationWhite.svg" alt="location-icon" class="footerIcon">
                        </a>
                        <div class="footerContactDetails">
                            <h5>Location</h5>
                            <span>
                                AP Enterprises -(25-26) 3rd Floor, Gala No.27, Ghumatkar Lawyers Civil Court Road,
                                Pansare Sabale Vasti, Rajgurunagar, Khed City, Pune, Maharashtra, 410505
                            </span>
                        </div>
                    </div>
                </div>
                <div class="rightSideFooter wp-4">
                    <div class="footerContactIcons flexWrap">
                        <a href="https://wa.me/918329261310" target="_blank" rel="noopener noreferrer">
                            <img src="assets/SVG/whatsappWhite.svg" alt="WhatsApp Chat" class="whatsapp-icon">
                        </a>
                        <a href="https://facebook.com/yourusername" target="_blank" rel="noopener noreferrer">
                            <img src="assets/SVG/facebookWhite.svg" alt="facebook-icon">
                        </a>
                        <a href="https://instagram.com/royalreachglobal.ind" target="_blank" rel="noopener noreferrer">
                            <img src="assets/SVG/instgramWhite.svg" alt="instagram-icon">
                        </a>
                        <a href="https://twitter.com/RoyalreachG" target="_blank" rel="noopener noreferrer">
                            <img src="assets/SVG/twitterWhite.svg" alt="twitter-icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>