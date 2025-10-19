<?php
$page_title = "Home - Istib Portfolio";
$current_page = "home";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" id="home" >
    <!-- removed animated blob elements to stop visual animation -->
    <div class="hero-background "></div>

    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="hero-content">
                    <span class="hero-badge">Hello</span>
                    <h1 class="hero-title">Hi, I'm Steve Garciano</h1>
                    <p class="hero-subtitle">Graphic Designer • UI/UX Designer • Frontend Developer</p>
                    <p class="hero-description">
                        As a designer and UI/UX, I create visuals that connect and interfaces that feel natural. I enjoy blending motion, design, and usability into every piece I make.
                    </p>
                    <div class="hero-buttons mt-4">
                        <a href="projects.php" class="btn btn-primary me-2">View Projects</a>
                        <a href="contact.php" class="btn btn-outline-primary">Contact Me</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="400">
                <div class="hero-image">
                    <!-- static, responsive image with eased transitions (no animation) -->
                    <img src="img/me/stib2.png" alt="Steve Garciano" class="hero-main-img img-fluid ">
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Services Section -->
<section class="services-section py-5" id="services">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">What I Do</h2>
                <p class="section-subtitle">Comprehensive digital solutions tailored to your needs</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>Creating intuitive and beautiful user interfaces that enhance user experience and drive engagement.</p>
                    <ul class="service-features">
                        <li>User Research & Analysis</li>
                        <li>Wireframing & Prototyping</li>
                        <li>Visual Design & Branding</li>
                        <li>Usability Testing</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h3>Frontend Development</h3>
                    <p>Building responsive, modern web applications using the latest technologies and best practices.</p>
                    <ul class="service-features">
                        <li>HTML5, CSS3, JavaScript</li>
                        <li>React, Vue.js, Bootstrap</li>
                        <li>Responsive Design</li>
                        <li>Performance Optimization</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-brush"></i>
                    </div>
                    <h3>Graphic Design</h3>
                    <p>Creating compelling visual content that communicates your brand message effectively.</p>
                    <ul class="service-features">
                        <li>Logo & Brand Identity</li>
                        <li>Marketing Materials</li>
                        <li>Social Media Graphics</li>
                        <li>Print Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="featured-projects-section py-5 bg-light" id="featured-projects">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-subtitle">Showcasing my best work and latest achievements</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- SchedAi (Video - Thesis) -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="featured-project-card">
                    <div class="project-image">
                        <img src="img/thumbnail/schedai.PNG" alt="SchedAi Promotional Video" class="img-fluid">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="project-details.php?id=schedai-promo" class="btn btn-light btn-sm">
                                    <i class="bi bi-eye me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Video Editing</div>
                        <h3>SchedAi Promotional Video</h3>
                        <p>Short promotional video introducing the SchedAi faculty scheduling solution — motion graphics, voiceover, and feature highlights.</p>
                        <div class="project-tech">
                            <span class="tech-tag">CapCut</span>
                            <span class="tech-tag">Motion Graphics</span>
                            <span class="tech-tag">Audio</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PathFit Magazine (Graphics) -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="featured-project-card">
                    <div class="project-image">
                        <img src="img/graphic/magazine.png" alt="PathFit Magazine" class="img-fluid">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="project-details.php?id=pathfit-magazine" class="btn btn-light btn-sm">
                                    <i class="bi bi-eye me-2"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category">Graphics & Design</div>
                        <h3>PathFit Magazine — Path to a Healthy Living</h3>
                        <p>Multi-page magazine created with Canva featuring cover, feature spreads, infographics and CTAs for the PathFit campaign.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Canva</span>
                            <span class="tech-tag">Layout</span>
                            <span class="tech-tag">Infographics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="projects.php" class="btn btn-primary btn-lg">
                <i class="bi bi-arrow-right me-2"></i>View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section py-5" id="skills">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Technical Skills</h2>
                <p class="section-subtitle">Technologies and tools I work with</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="img/logos/html.jpg" alt="HTML5" class="skill-logo">
                    </div>
                    <h4>HTML5 & CSS3</h4>
                    <div class="skill-level">
                        <div class="progress">
                            <div class="progress-bar" style="width: 95%"></div>
                        </div>
                        <span>95%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="img/logos/capcut.png" alt="CapCut" class="skill-logo">
                    </div>
                    <h4>CapCut</h4>
                    <div class="skill-level">
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                        <span>85%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="img/logos/figma.png" alt="Figma" class="skill-logo">
                    </div>
                    <h4>Figma</h4>
                    <div class="skill-level">
                        <div class="progress">
                            <div class="progress-bar" style="width: 90%"></div>
                        </div>
                        <span>90%</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="skill-card">
                    <div class="skill-icon">
                        <img src="img/logos/canva.jpg" alt="Canva" class="skill-logo">
                    </div>
                    <h4>Canva</h4>
                    <div class="skill-level">
                        <div class="progress">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>
                        <span>80%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-light" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">What Clients Say</h2>
                <p class="section-subtitle">Feedback from satisfied clients and collaborators</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonials-carousel" data-aos="fade-up">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="testimonial-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>"Steve delivered an exceptional website that exceeded our expectations. His attention to detail and creative approach made our vision come to life perfectly."</p>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <h5>Maria Santos</h5>
                                    <span>Antalya Filipino Community Proj Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="testimonial-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>"Working with Steve was a pleasure. He understood our requirements quickly and delivered a modern, responsive design that our users love."</p>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <h5>James Abdul</h5>
                                    <span>Video editing Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5" id="cta">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-subtitle">Let's collaborate to bring your ideas to life with modern design and cutting-edge technology.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary btn-lg me-3">
                        <i class="bi bi-chat-dots me-2"></i>Get In Touch
                    </a>
                    <a href="cv/Garciano.cv.pdf" class="btn btn-outline-primary btn-lg" target="_blank">
                        <i class="bi bi-download me-2"></i>Download Resume
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
