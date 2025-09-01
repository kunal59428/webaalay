<?php
include 'header.php';
?>
<!-- Breadcrumb -->
    <section class="breadcrumb">
        <div class="container breadcrumb-container">
            <a href="index.html">Home</a>
            <span>/</span>
            <span>Contact Us</span>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Have a project in mind or need assistance? We'd love to hear from you. Reach out to us using the form or contact information below.</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Our Location</h4>
                            <p>123 Tech Street, San Francisco, CA 94103</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone Number</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Address</h4>
                            <p>info@techsolutions.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Working Hours</h4>
                            <p>Monday - Friday: 9AM - 6PM</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="web-development">Web Development</option>
                                <option value="app-development">App Development</option>
                                <option value="ui-ux-design">UI/UX Design</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="consultation">Consultation</option>
                                <option value="other">Other</option>
                            </select>
                           
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Location</h2>
                <p>Visit our office or reach out to us for a meeting</p>
            </div>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093747!2d-122.41941548468163!3d37.77492977975919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2s!4v1561590378666!5m2!1sen!2s" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find quick answers to common questions about our services and processes</p>
            </div>
            
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        How long does it take to get a response?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer free consultations?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        Yes, we offer free 30-minute consultations to discuss your project requirements and how we can help you achieve your goals.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        What information should I include in my project inquiry?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        Please include your project goals, target audience, timeline, budget range, and any specific requirements or preferences you have.
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        Do you work with international clients?
                        <span class="faq-toggle"><i class="fas fa-chevron-down"></i></span>
                    </div>
                    <div class="faq-answer">
                        Yes, we work with clients from all around the world. We can accommodate different time zones and communicate via video calls, email, and project management tools.
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include 'footer.php';
?>