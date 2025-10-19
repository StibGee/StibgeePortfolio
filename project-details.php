<?php
$page_title = "Project Details - Istib Portfolio";
$current_page = "projects";
include 'includes/header.php';

// Project data array (same as in projects.php)
$projects = [
    'salesavant' => [
        'title' => 'SaleSavant',
        'category' => 'Frontend Development',
        'description' => 'A comprehensive Point-of-Sale (POS) system developed using React JS. This system facilitates efficient sales transactions, menu management, and inventory tracking.',
        'full_description' => 'SaleSavant is a modern Point-of-Sale system designed to streamline business operations. Built with React JS, it provides an intuitive interface for managing sales, inventory, and customer data. The system includes features like real-time inventory tracking, sales reporting, and customer management.',
        'image' => 'img/projects/salesavant.PNG',
        'technologies' => ['React', 'JavaScript', 'CSS', 'HTML'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Client Project',
        'duration' => '3 months',
        'team_size' => '4 members',
        'role' => 'Frontend Developer'
    ],
    'motorent' => [
        'title' => 'Motorent',
        'category' => 'Frontend Development',
        'description' => 'A web application for managing motor rentals using Laravue. This user-friendly platform allows users to browse available vehicles, make reservations, and manage their rental experience.',
        'full_description' => 'Motorent is a comprehensive motor rental management system built with Laravel and Vue.js. The platform enables users to browse available vehicles, make reservations, and manage their rental experience. It includes features like vehicle catalog, booking system, and admin panel.',
        'image' => 'img/projects/motorent.PNG',
        'technologies' => ['Laravel', 'Vue.js', 'PHP', 'MySQL'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Academic Project',
        'duration' => '4 months',
        'team_size' => '3 members',
        'role' => 'Full Stack Developer'
    ],
    'schedai' => [
        'title' => 'SchedAi',
        'category' => 'UI/UX Design',
        'description' => 'An AI-driven faculty scheduling system prototype for Thesis 2. This intelligent tool streamlines time management and resource allocation for educational institutions.',
        'full_description' => 'SchedAi is an innovative AI-powered faculty scheduling system designed to optimize time management and resource allocation in educational institutions. The system uses machine learning algorithms to create efficient schedules while considering various constraints and preferences.',
        'image' => 'img/projects/schedai.PNG',
        'technologies' => ['Python', 'AI', 'Figma', 'Prototyping'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Thesis Project',
        'duration' => '6 months',
        'team_size' => '1 member',
        'role' => 'Lead Developer & Designer'
    ],

    'hci' => [
        'title' => 'Cartel Hardware',
        'category' => 'UI/UX Design',
        'description' => 'A website prototype for an online hardware store, showcasing a user-friendly interface with detailed product listings and intuitive search functionality.',
        'full_description' => 'Cartel Hardware is a prototype for an online hardware store website. The design focuses on user experience with intuitive navigation, detailed product listings, and efficient search functionality. The prototype demonstrates modern e-commerce design principles.',
        'image' => 'img/projects/hci.PNG',
        'technologies' => ['Figma', 'Prototyping', 'UI Design', 'UX Research'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Academic Project',
        'duration' => '2 months',
        'team_size' => '2 members',
        'role' => 'UI/UX Designer'
    ],
    'pizza' => [
        'title' => 'Pizza Landing Page',
        'category' => 'Graphics & Design',
        'description' => 'A practice website featuring a modern landing page design with beautiful graphics and responsive layout.',
        'full_description' => 'A modern pizza restaurant landing page showcasing responsive design principles and modern web development techniques. The project demonstrates skills in HTML, CSS, and graphic design with a focus on user engagement and conversion.',
        'image' => 'img/projects/pizza.PNG',
        'technologies' => ['HTML', 'CSS', 'Photoshop', 'Responsive Design'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Practice Project',
        'duration' => '1 month',
        'team_size' => '1 member',
        'role' => 'Frontend Developer & Designer'
    ],
    'tictactoe' => [
        'title' => 'Tic-Tac-Toe Game',
        'category' => 'Games & Applications',
        'description' => 'A classic Tic-Tac-Toe game developed as a school activity, featuring interactive gameplay and modern UI design.',
        'full_description' => 'A modern implementation of the classic Tic-Tac-Toe game with interactive gameplay and contemporary UI design. The project demonstrates JavaScript programming skills and user interface design principles.',
        'image' => 'img/projects/tic-tac-toe.PNG',
        'technologies' => ['JavaScript', 'HTML', 'CSS', 'Game Logic'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Academic Project',
        'duration' => '2 weeks',
        'team_size' => '1 member',
        'role' => 'Developer'
    ],
   'ejeep-epayment' => [
        'title' => 'eJeep E-Payment Promotional Video',
        'category' => 'Video Editing',
        'description' => 'A dynamic promotional video showcasing the features and benefits of the eJeep electronic payment system for modern public transportation.',
        'full_description' => 'A comprehensive promotional video campaign for the eJeep electronic payment system, highlighting its convenience, security features, and benefits for both passengers and drivers. The video incorporates engaging visuals, clear messaging, and compelling storytelling to promote digital payment adoption in public transportation.',
        'image' => 'img/thumbnail/thumb_ejeep.PNG',
        'video_file' => 'video/E-JeepPay Demo.mp4',
        'technologies' => ['Video Editing', 'Capcut', 'Audio Production', 'Storyboarding'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Academic Project',
        'duration' => '4 days',
        'team_size' => '1 member',
        'role' => 'Video Producer & Editor'
    ],
    'schedai-promo' => [
        'title' => 'SchedAi Promotional Video',
        'category' => 'Video Editing',
        'description' => 'A short promotional video introducing the SchedAi faculty scheduling solution and its benefits.',
        'full_description' => 'Promotional video for SchedAi highlighting key features, benefits, and use-cases. Includes motion graphics and voiceover to explain how the system simplifies scheduling tasks.',
        'image' => 'img/thumbnail/schedai.PNG',
        'video_file' => 'video/schedai.mp4',
        'technologies' => ['Video Editing', 'Capcut', 'Audio Production', 'Storyboarding'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/StibGee',
        'type' => 'Thesis Project',
        'duration' => '4 days',
        'team_size' => '1 member',
        'role' => 'Video Producer & Editor'
    ],

    // New: PathFit magazine project details
    'pathfit-magazine' => [
        'title' => 'PathFit Magazine — Path to a Healthy Living',
        'category' => 'Graphics & Design',
        'description' => 'Magazine design for the PathFit "Path to a Healthy Living" project created with Canva. Includes cover, feature spreads, infographics and call-to-action layouts.',
        'full_description' => 'Designed a multi-page magazine for the PathFit campaign focusing on healthy living. Created layouts for cover, feature articles, infographics, and CTAs using Canva. The deliverable includes print-ready spreads and a PDF preview for stakeholders.',
        'image' => 'img/graphic/magazine.png',
        'pdf_preview' => 'img/projects/pathfit_magazine_preview.pdf',
        'technologies' => ['Canva', 'Graphic Layout', 'Infographics'],
        'demo_link' => 'https://www.canva.com/design/DAE-iIvlXuA/IRUuA_D9tXZhBFBdEgXr1A/edit?utm_content=DAE-iIvlXuA&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton',
        'github_link' => '',
        'type' => 'Magazine Project',
        'duration' => '1 week',
        'team_size' => '2 member',
        'role' => 'Editor & Designer'
    ],

    // Logo projects: details include multiple logo variants
    'logo-antalya-filipino-community' => [
        'title' => 'Antalya Filipino Community — OFW Support Logo',
        'category' => 'Graphics & Design',
        'description' => 'Client project for the Antalya Filipino Community (OFWs in Turkey) — a versatile logo system for outreach, events, and social media.',
        'full_description' => 'Delivered a client-based branding package for the Antalya Filipino Community, an OFW group in Turkey. The package includes primary, alternate, and monochrome logo variants, spacing and color usage guidelines, and export-ready files for web and print to support community outreach and events.',
        'image' => 'img/logos/antalya_filipino_logo.png',
        'logos' => [
            'img/graphic/Antalya/3.png',
            'img/graphic/Antalya/4.png',
            'img/graphic/Antalya/5.png'
        ],
        'technologies' => ['Canva', 'Branding'],
        'demo_link' => 'img/logos/antalya_filipino_logo.png',
        'github_link' => '',
        'type' => 'Client Project',
        'duration' => '3 days',
        'team_size' => '1 member',
        'role' => 'Brand Designer'
    ],
    'logo-schedai' => [
        'title' => 'SchedAi — Logo Collection',
        'category' => 'Graphics & Design',
        'description' => 'A curated collection of logo variants created for SchedAi. Includes primary, alternate, monochrome, and mark versions for different use cases.',
        'full_description' => 'This entry showcases the complete SchedAi logo collection created for client and marketing use. The collection includes the full-color primary logo, alternate lockups, a single-color/monochrome version for print and embroidery, and compact mark/logo-icon variants. Click any image to view the full-size asset or download deliverables.',
        'image' => 'img/logos/schedai_combined.png', // overview / thumbnail image
        'logos' => [
            'img/logos/schedai/primary.png',
            'img/logos/schedai/alternate.png',
            'img/logos/schedai/monochrome.png',
            'img/logos/schedai/mark.png'
        ],
        'technologies' => ['Illustrator', 'Canva', 'Branding', 'Exporting'],
        'demo_link' => 'img/logos/schedai_combined.png',
        'github_link' => '',
        'type' => 'Client Project',
        'client' => 'SchedAi',
        'duration' => '2 days',
        'team_size' => '1 member',
        'role' => 'Brand Designer'
    ],

// Add this entry so "logos-collection" opens details with all logo images
    'logos-collection' => [
        'title' => 'Logo Collection',
        'category' => 'Graphics & Design',
        'description' => 'A gallery of logos and brandmarks created for clients, school projects and personal concepts.',
        'full_description' => 'This collection showcases multiple logo variants and concepts I created — primary marks, alternate lockups, monochrome versions and compact marks. Click any image to view the full-size asset or download deliverables.',
        'image' => 'img/graphic/logodesign.png', // thumbnail used on projects grid
        'logos' => [
            'img/graphic/logos/epic.png',
            'img/graphic/logos/merrantee.png',
            'img/graphic/logos/cartel.png',
            'img/graphic/logos/schedai.png',
            'img/graphic/logos/savant.png',
            'img/graphic/logos/webhex.png'
        ],
        'technologies' => ['Illustrator', 'Canva', 'Branding'],
        'demo_link' => 'img/graphic/logodesign.png',
        'github_link' => '',
        'type' => 'Logo Collection',
        'duration' => '—',
        'team_size' => '1 member',
        'role' => 'Graphic Designer'
    ],


];

$project_id = $_GET['id'] ?? '';
$project = $projects[$project_id] ?? null;

if (!$project) {
    header('Location: projects.php');
    exit;
}
?>

<!-- Project Details Hero Section -->
<section class="project-details-hero-section" id="project-details-hero">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 text-center" data-aos="fade-up">
                <div class="project-badge mb-3">
                    <span class="badge bg-primary"><?php echo $project['type']; ?></span>
                </div>
                <h1 class="page-title"><?php echo $project['title']; ?></h1>
                <p class="page-subtitle"><?php echo $project['category']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Project Details Content Section -->
<section class="project-details-content-section" id="project-details-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                <div class="project-image-main mb-4">
                    <?php if (!empty($project['logos']) && is_array($project['logos'])): ?>
                        <div class="row g-3">
                            <?php foreach ($project['logos'] as $logo_img): ?>
                                <div class="col-6 col-md-4">
                                    <a href="<?php echo htmlspecialchars($logo_img); ?>" target="_blank" rel="noopener">
                                        <img src="<?php echo htmlspecialchars($logo_img); ?>" alt="<?php echo htmlspecialchars($project['title']); ?> logo" class="img-fluid rounded shadow-sm logo-variant">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php elseif (!empty($project['video_file'])): ?>
                        <video class="project-video rounded-3 shadow-lg" controls playsinline preload="metadata" poster="<?php echo htmlspecialchars($project['image'] ?? ''); ?>">
                            <source src="<?php echo htmlspecialchars($project['video_file']); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php else: ?>
                        <img src="<?php echo htmlspecialchars($project['image'] ?? 'img/placeholder.png'); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="img-fluid rounded-3 shadow-lg">
                    <?php endif; ?>
                </div>

                <div class="project-description">
                    <h3>Project Overview</h3>
                    <p class="lead"><?php echo $project['description']; ?></p>
                    <p><?php echo $project['full_description']; ?></p>
                </div>

                <div class="project-features mt-5">
                    <h3>Key Features</h3>
                    <ul class="feature-list">
                        <li>Responsive design for all devices</li>
                        <li>Modern and intuitive user interface</li>
                        <li>Optimized performance and loading speed</li>
                        <li>Cross-browser compatibility</li>
                        <li>Clean and maintainable code structure</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-left" data-aos-delay="400">
                <div class="project-sidebar">
                    <div class="project-info-card">
                        <h4>Project Information</h4>
                        <div class="info-item">
                            <strong>Category:</strong>
                            <span><?php echo $project['category']; ?></span>
                        </div>
                        <div class="info-item">
                            <strong>Duration:</strong>
                            <span><?php echo $project['duration']; ?></span>
                        </div>
                        <div class="info-item">
                            <strong>Team Size:</strong>
                            <span><?php echo $project['team_size']; ?></span>
                        </div>
                        <div class="info-item">
                            <strong>My Role:</strong>
                            <span><?php echo $project['role']; ?></span>
                        </div>
                    </div>

                    <div class="project-tech-card">
                        <h4>Technologies Used</h4>
                        <div class="tech-tags">
                            <?php foreach ($project['technologies'] as $tech): ?>
                            <span class="badge bg-primary me-2 mb-2"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="project-links-card">
                        <h4>Project Links</h4>
                        <div class="d-grid gap-2">
                            <?php if (!empty($project['video_file'])): ?>
                                <!-- allow download / open in new tab -->
                                <a href="<?php echo htmlspecialchars($project['video_file']); ?>" class="btn btn-primary" target="_blank" rel="noopener">
                                    <i class="bi bi-play me-2"></i>Open Video
                                </a>
                            <?php elseif (!empty($project['demo_link']) && $project['demo_link'] != '#'): ?>
                                <a href="<?php echo htmlspecialchars($project['demo_link']); ?>" class="btn btn-primary" target="_blank" rel="noopener">
                                    <i class="bi bi-play me-2"></i>Live Demo
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($project['github_link'])): ?>
                                <a href="<?php echo htmlspecialchars($project['github_link']); ?>" class="btn btn-outline-primary" target="_blank" rel="noopener">
                                    <i class="bi bi-github me-2"></i>View on GitHub
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects Section -->
<section class="related-projects-section" id="related-projects">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center" data-aos="fade-up">Other Projects</h2>
                <div class="section-divider" data-aos="fade-up" data-aos-delay="200"></div>
            </div>
        </div>
        <div class="row mt-5">
            <?php
            $related_projects = array_slice(array_keys($projects), 0, 3);
            foreach ($related_projects as $related_id):
                if ($related_id !== $project_id):
                    $related_project = $projects[$related_id];
            ?>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo $related_project['image']; ?>" alt="<?php echo $related_project['title']; ?>" class="img-fluid">
                        <div class="project-overlay">
                            <a href="project-details.php?id=<?php echo $related_id; ?>" class="btn btn-light">
                                <i class="bi bi-eye me-1"></i>View Details
                            </a>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-type"><?php echo $related_project['type']; ?></div>
                        <h4><?php echo $related_project['title']; ?></h4>
                        <p><?php echo $related_project['description']; ?></p>
                        <div class="project-tags">
                            <?php foreach (array_slice($related_project['technologies'], 0, 3) as $tech): ?>
                            <span class="badge bg-primary"><?php echo $tech; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Back to Projects CTA -->
<section class="back-to-projects-section" id="back-to-projects">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <a href="projects.php" class="btn btn-primary btn-lg">
                    <i class="bi bi-arrow-left me-2"></i>Back to All Projects
                </a>
            </div>
        </div>
    </div>
</section>

</main>

<?php include 'includes/footer.php'; ?>
