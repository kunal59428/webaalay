<?php
// Get current page name without extension
$page = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TechSolutions provides innovative digital services including web development, app development, UI/UX design, and digital marketing solutions.">
    <meta name="keywords" content="web development, app development, digital marketing, UI/UX design, tech solutions, software development">
    <meta name="author" content="TechSolutions">
    <meta property="og:title" content="TechSolutions - Innovative Digital Services">
    <meta property="og:description" content="We provide cutting-edge technology services to help businesses grow and thrive in the digital age.">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <title><?php echo ucfirst($page); ?> | Webaalay</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
<!-- Page-specific CSS (if exists) -->
  <?php if (file_exists("css/$page.css")): ?>
      <link rel="stylesheet" href="css/<?php echo $page; ?>.css">
  <?php endif; ?>
     
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>
</head>
<body>
     <!-- Marquee Header -->
    <div class="marquee-header">
        <div class="marquee-container">
            <div class="marquee-label">
                <i class="fas fa-bullhorn"></i> Announcements
            </div>
            <div class="marquee-content">
                <div class="marquee">
                    <div class="marquee-item">
                        <i class="fas fa-gift"></i> <span class="highlight">Special Offer:</span> Get 20% off on all web development projects this month!
                    </div>
                    <div class="marquee-item">
                        <i class="fas fa-calendar-alt"></i> <span class="highlight">New Service:</span> Now offering AI integration for business solutions!
                    </div>
                    <div class="marquee-item">
                        <i class="fas fa-award"></i> <span class="highlight">Award:</span> TechSolutions named Best IT Company 2023!
                    </div>
                    <div class="marquee-item">
                        <i class="fas fa-clock"></i> <span class="highlight">Limited Time:</span> Free consultation for all new clients!
                    </div>
                    <div class="marquee-item">
                        <i class="fas fa-users"></i> <span class="highlight">Hiring:</span> We're expanding our team! Join us as a Senior Developer.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section -->
    <header id="site-header">
        <div class="container header-container">
            <a href="index.php" class="logo">Web<span>Aalay</span></a>
            <div class="menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="has-mega-menu">
                        <a href="#services">Services</a>
                        <div class="mega-menu">
                            <div class="mega-menu-container">
                                <!-- Column 1: Development -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-code"></i> Development</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-laptop-code"></i> Web Development</a></li>
                                        <li><a href="#"><i class="fas fa-mobile-alt"></i> App Development</a></li>
                                        <li><a href="#"><i class="fas fa-desktop"></i> Software Development</a></li>
                                        <li><a href="#"><i class="fas fa-database"></i> Database Solutions</a></li>
                                        <li><a href="#"><i class="fas fa-server"></i> API Development</a></li>
                                        <li><a href="#"><i class="fas fa-shield-alt"></i> Security Solutions</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Column 2: Design -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-paint-brush"></i> Design</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-pencil-ruler"></i> UI/UX Design</a></li>
                                        <li><a href="#"><i class="fas fa-palette"></i> Graphic Design</a></li>
                                        <li><a href="#"><i class="fas fa-cube"></i> 3D Product Design</a></li>
                                        <li><a href="#"><i class="fas fa-cut"></i> Photo Cutout Services</a></li>
                                        <li><a href="#"><i class="fas fa-video"></i> Video Editing</a></li>
                                        <li><a href="#"><i class="fas fa-paint-brush"></i> Brand Identity</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Column 3: Marketing -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-chart-line"></i> Marketing</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-bullhorn"></i> Digital Marketing</a></li>
                                        <li><a href="#"><i class="fas fa-search"></i> SEO Services</a></li>
                                        <li><a href="#"><i class="fas fa-share-alt"></i> Social Media Marketing</a></li>
                                        <li><a href="#"><i class="fas fa-envelope"></i> Email Marketing</a></li>
                                        <li><a href="#"><i class="fas fa-ad"></i> PPC Advertising</a></li>
                                        <li><a href="#"><i class="fas fa-analytics"></i> Analytics & Reporting</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Column 4: Business Solutions -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-briefcase"></i> Business Solutions</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-cloud"></i> Cloud Solutions</a></li>
                                        <li><a href="#"><i class="fas fa-shopping-cart"></i> E-commerce Solutions</a></li>
                                        <li><a href="#"><i class="fas fa-robot"></i> AI & Machine Learning</a></li>
                                        <li><a href="#"><i class="fas fa-chart-bar"></i> Data Analytics</a></li>
                                        <li><a href="#"><i class="fas fa-headset"></i> IT Consulting</a></li>
                                        <li><a href="#"><i class="fas fa-sync-alt"></i> Digital Transformation</a></li>
                                    </ul>
                                </div>
                                
                                
                            </div>
                        </div>
                    </li>
                    <li><a href="about-us.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li class="has-mega-menu">
                        <a href="#industries">Industries</a>
                        <div class="mega-menu">
                            <div class="mega-menu-container">
                                <!-- Column 1: Retail & E-commerce -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-shopping-cart"></i> Retail & E-commerce</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-tshirt"></i> Fashion & Apparel</a></li>
                                        <li><a href="#"><i class="fas fa-mobile-alt"></i> Electronics</a></li>
                                        <li><a href="#"><i class="fas fa-home"></i> Home & Furniture</a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i> Beauty & Cosmetics</a></li>
                                        <li><a href="#"><i class="fas fa-utensils"></i> Food & Beverage</a></li>
                                        <li><a href="#"><i class="fas fa-gem"></i> Jewelry & Accessories</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Column 2: Healthcare -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-heartbeat"></i> Healthcare</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-hospital"></i> Hospitals & Clinics</a></li>
                                        <li><a href="#"><i class="fas fa-pills"></i> Pharmaceuticals</a></li>
                                        <li><a href="#"><i class="fas fa-stethoscope"></i> Medical Devices</a></li>
                                        <li><a href="#"><i class="fas fa-heart"></i> Health & Wellness</a></li>
                                        <li><a href="#"><i class="fas fa-flask"></i> Biotechnology</a></li>
                                        <li><a href="#"><i class="fas fa-user-md"></i> Telemedicine</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Column 3: Finance -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-university"></i> Finance</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-landmark"></i> Banking</a></li>
                                        <li><a href="#"><i class="fas fa-chart-line"></i> Investment</a></li>
                                        <li><a href="#"><i class="fas fa-hand-holding-usd"></i> Insurance</a></li>
                                        <li><a href="#"><i class="fas fa-money-check-alt"></i> FinTech</a></li>
                                        <li><a href="#"><i class="fas fa-coins"></i> Cryptocurrency</a></li>
                                        <li><a href="#"><i class="fas fa-calculator"></i> Accounting</a></li>
                                    </ul>
                                </div>
                                
                                <!-- Column 4: Education -->
                                <div class="mega-menu-column">
                                    <h3><i class="fas fa-graduation-cap"></i> Education</h3>
                                    <ul>
                                        <li><a href="#"><i class="fas fa-school"></i> Schools & Universities</a></li>
                                        <li><a href="#"><i class="fas fa-book"></i> E-Learning</a></li>
                                        <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> EdTech</a></li>
                                        <li><a href="#"><i class="fas fa-user-graduate"></i> Online Courses</a></li>
                                        <li><a href="#"><i class="fas fa-certificate"></i> Certification</a></li>
                                        <li><a href="#"><i class="fas fa-brain"></i> Training & Development</a></li>
                                    </ul>
                                </div>
                                
                               
                            </div>
                        </div>
                    </li>
                    <li><a href="contact-us.php">Contact</a></li>
                </ul>
            </nav>
            <button class="btn hire-btn">Let's Talk</button>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="close-menu">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="about-us.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#technology">Technology</a></li>
            <li><a href="#industries">Industries</a></li>
            <li><a href="contact-us.php">Contact</a></li>
        </ul>
    </div>