<?php
$page_title = "Contact - Istib Portfolio";
$current_page = "contact";
include 'includes/header.php';
?>

<!-- Contact Hero Section -->
<section class="contact-hero-section" id="contact-hero">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 text-center" data-aos="fade-up">
                <h1 class="page-title">Get In Touch</h1>
                <p class="page-subtitle">Let's discuss your next project</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Content Section -->
<section class="contact-content-section" id="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="300">
                <div class="contact-info">
                    <h3>Let's Work Together</h3>
                    <p class="mb-4">
                        I'm always open to discussing new projects, creative ideas, or opportunities to be part of your visions. Whether you have a question or just want to say hi, I'll try my best to get back to you!
                    </p>

                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Email</h5>
                                <p>steve1020.garciano@gmail.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Location</h5>
                                <p>Philippines</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h5>Availability</h5>
                                <p>Available for freelance work</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-social mt-4">
                        <h5>Follow Me</h5>
                        <div class="social-links">
                            <a href="https://www.instagram.com/ean_steveee" class="social-link" target="_blank">
                                <i class="bi bi-instagram"></i>
                                <span>Instagram</span>
                            </a>
                            <a href="https://github.com/StibGee" class="social-link" target="_blank">
                                <i class="bi bi-github"></i>
                                <span>GitHub</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="contact-form">
                    <h3>Send Me a Message</h3>
                    <form id="contactForm" method="POST" action="process-contact.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject *</label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="Project Inquiry">Project Inquiry</option>
                                <option value="Freelance Work">Freelance Work</option>
                                <option value="Collaboration">Collaboration</option>
                                <option value="General Question">General Question</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Tell me about your project or inquiry..."></textarea>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                                <label class="form-check-label" for="privacy">
                                    I agree to the <a href="#" class="text-primary">Privacy Policy</a> and consent to being contacted regarding my inquiry.
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-send me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center" data-aos="fade-up">Frequently Asked Questions</h2>
                <div class="section-divider" data-aos="fade-up" data-aos-delay="200"></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What services do you offer?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                I offer frontend development, UI/UX design, responsive web design, and web application development. I work with technologies like React, Vue.js, PHP, HTML, CSS, and JavaScript.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                How long does a typical project take?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Project timelines vary depending on complexity and scope. A simple landing page might take 1-2 weeks, while a complex web application could take 1-3 months. I'll provide a detailed timeline during our initial consultation.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Do you work with clients internationally?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, I work with clients from around the world. I'm comfortable with remote collaboration and can accommodate different time zones for meetings and communication.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                What is your pricing structure?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                I offer both hourly rates and project-based pricing. The cost depends on the project scope, complexity, and timeline. I provide detailed quotes after understanding your requirements.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="contact-cta-section" id="contact-cta">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2>Ready to Start Your Project?</h2>
                <p class="mb-4">Let's discuss how I can help bring your ideas to life.</p>
                <a href="#contact-content" class="btn btn-primary btn-lg">
                    <i class="bi bi-chat-dots me-2"></i>Let's Talk
                </a>
            </div>
        </div>
    </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
