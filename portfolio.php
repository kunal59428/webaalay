<?php
include 'header.php';
?>
 <!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container breadcrumb-container">
            <a href="index.html"><i class="fa fa-home"></i></a>
            <span>/</span>
            <span>Portfolio</span>
        </div>
    </section>
      <!-- About Hero Section -->
    <section class="about-hero">
        <div class="container about-hero-container">
            <div class="about-hero-content">
                <h1>We Create Digital Solutions That Drive Growth</h1>
                <p>TechSolutions is a leading digital agency with over 10 years of experience helping businesses transform their digital presence. Our team of experts combines technical expertise with creative thinking to deliver exceptional results.</p>
                <a href="#contact" class="btn">Get in Touch</a>
            </div>
            <div class="about-hero-image">
                <img class="lazy-load" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 800 500' width='800' height='500'%3E%3Crect width='800' height='500' fill='%23f0f9ff'/%3E%3C/svg%3E" data-src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="TechSolutions Team">
            </div>
        </div>
    </section>

     <!-- Portfolio Section -->
    <section class="portfolio-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Explore our successful projects and see how we've helped businesses transform their digital presence</p>
            </div>
            
            <!-- Portfolio Filters -->
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="app">App Development</button>
                <button class="filter-btn" data-filter="ui">UI/UX Design</button>
                <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
            </div>
            
            <!-- Portfolio Grid -->
            <div class="portfolio-grid">
                <!-- Project 1 -->
                <div class="portfolio-item" data-category="web ecommerce">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="E-commerce Website">
                        <div class="portfolio-overlay">
                            <div class="portfolio-actions">
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Web Development, E-commerce</span>
                        <h3 class="portfolio-title">Modern E-commerce Platform</h3>
                        <p class="portfolio-desc">A fully responsive e-commerce website with product management, shopping cart, and secure payment integration.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">React</span>
                            <span class="portfolio-tag">Node.js</span>
                            <span class="portfolio-tag">MongoDB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1581276879432-15e50529f34b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Fitness App">
                        <div class="portfolio-overlay">
                            <div class="portfolio-actions">
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">App Development</span>
                        <h3 class="portfolio-title">Fitness Tracking App</h3>
                        <p class="portfolio-desc">A mobile application for workout tracking, nutrition planning, and health monitoring with personalized recommendations.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">React Native</span>
                            <span class="portfolio-tag">Firebase</span>
                            <span class="portfolio-tag">HealthKit</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="portfolio-item" data-category="ui web">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Finance Dashboard">
                        <div class="portfolio-overlay">
                            <div class="portfolio-actions">
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">UI/UX Design, Web Development</span>
                        <h3 class="portfolio-title">Financial Dashboard</h3>
                        <p class="portfolio-desc">An intuitive dashboard for financial analytics and reporting with interactive charts and real-time data visualization.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Figma</span>
                            <span class="portfolio-tag">Vue.js</span>
                            <span class="portfolio-tag">D3.js</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="portfolio-item" data-category="ecommerce web">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1607082350899-7e105aa886ae?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Fashion E-commerce">
                        <div class="portfolio-overlay">
                            <div class="portfolio-actions">
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">E-commerce, Web Development</span>
                        <h3 class="portfolio-title">Fashion Retail Store</h3>
                        <p class="portfolio-desc">An online fashion store with advanced filtering, size recommendations, and virtual try-on features.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Shopify</span>
                            <span class="portfolio-tag">Liquid</span>
                            <span class="portfolio-tag">JavaScript</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Food Delivery App">
                        <div class="portfolio-overlay">
                            <div class="portfolio-actions">
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">App Development</span>
                        <h3 class="portfolio-title">Food Delivery Application</h3>
                        <p class="portfolio-desc">A food delivery app with real-time order tracking, multiple payment options, and restaurant management system.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Flutter</span>
                            <span class="portfolio-tag">Firebase</span>
                            <span class="portfolio-tag">Google Maps API</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="portfolio-item" data-category="ui">
                    <div class="portfolio-image">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Mobile App UI">
                        <div class="portfolio-overlay">
                            <div class="portfolio-actions">
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-link"></i>
                                </a>
                                <a href="#" class="portfolio-btn">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">UI/UX Design</span>
                        <h3 class="portfolio-title">Travel App Interface</h3>
                        <p class="portfolio-desc">A beautifully designed travel app UI with intuitive navigation, booking system, and destination exploration features.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Figma</span>
                            <span class="portfolio-tag">Adobe XD</span>
                            <span class="portfolio-tag">Illustrator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" id="contact">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Start Your Project?</h2>
                <p>Get in touch with us today to discuss how we can help you achieve your business goals with our digital solutions.</p>
                <a href="contact.html" class="btn">Contact Us Now</a>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
?>