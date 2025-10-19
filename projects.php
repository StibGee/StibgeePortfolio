<?php
$page_title = "Projects - Istib Portfolio";
$current_page = "projects";
include 'includes/header.php';

// Project data array
$projects = [
    'frontend' => [
        [
            'id' => 'restaurant-ordering-system',
            'title' => 'Restaurant Ordering System',
            'category' => 'Frontend Development',
            'description' => 'A web-based restaurant ordering system built with React.js for intuitive menu browsing, table ordering, and checkout. Features responsive UI, order customization, and a real-time order summary.',
            'image' => 'img/frontend/restaurant.PNG',
            'technologies' => ['PHP', 'JavaScript', 'CSS', 'HTML'],
            'demo_link' => '#',
            'github_link' => 'https://github.com/StibGee',
            'type' => 'Client Project'
        ],
        [
            'id' => 'vehicle-supplies-management',
            'title' => 'Vehicle Supplies Management',
            'category' => 'Frontend Development',
            'description' => 'A web application for managing vehicle supplies and parts inventory. Allows users to track stock levels, create purchase orders, manage suppliers, and view usage reports with an intuitive Laravue-powered interface.',
            'image' => 'img/frontend/vehicle.PNG',
            'technologies' => [ 'JavaScript', 'PHP', 'MySQL'],
            'demo_link' => '#',
            'github_link' => 'https://github.com/StibGee',
            'type' => 'Academic Project'
        ]
    ],
    'uiux' => [
        [
            'id' => 'schedai',
            'title' => 'SchedAi',
            'category' => 'UI/UX Design',
            'description' => 'An AI-driven faculty scheduling system prototype for Thesis 2. This intelligent tool streamlines time management and resource allocation for educational institutions.',
            'image' => 'img/projects/schedai.PNG',
            'technologies' => ['Python', 'AI', 'Figma', 'Prototyping'],
            'demo_link' => '#',
            'github_link' => 'https://github.com/StibGee',
            'type' => 'Thesis Project'
        ],

        [
            'id' => 'hci',
            'title' => 'Cartel Hardware',
            'category' => 'UI/UX Design',
            'description' => 'A website prototype for an online hardware store, showcasing a user-friendly interface with detailed product listings and intuitive search functionality.',
            'image' => 'img/projects/hci.PNG',
            'technologies' => ['Figma', 'Prototyping', 'UI Design', 'UX Research'],
            'demo_link' => '#',
            'github_link' => 'https://github.com/StibGee',
            'type' => 'Academic Project'
        ]
    ],
    'graphics' => [
        [
            'id' => 'pathfit-magazine',
            'title' => 'PathFit Magazine — Path to a Healthy Living',
            'category' => 'Graphics & Design',
            'description' => 'Magazine design for the PathFit "Path to a Healthy Living" project created with Canva. Includes cover, feature spreads, infographics and call-to-action layouts.',
            'image' => 'img/graphic/magazine.png',
            'technologies' => ['Canva'],
            'demo_link' => 'https://www.canva.com/design/DAE-iIvlXuA/IRUuA_D9tXZhBFBdEgXr1A/edit',
            'github_link' => '',
            'type' => 'Magazine Project'
        ],

        // Logo projects (single thumbnail for grid; details page will show multiple variants)
        [
            'id' => 'logo-antalya-filipino-community',
            'title' => 'Antalya Filipino Community Logo',
            'category' => 'Graphics & Design',
            'description' => 'Logo and brandmark created for the Antalya Filipino Community — versatile emblem suitable for social events, print materials, and digital platforms.',
            'image' => 'img/graphic/logodesign.png',
            'technologies' => [ 'Canva', 'Branding'],
            'demo_link' => 'img/logos/antalya_filipino_community_logo.png',
            'github_link' => '',
            'type' => 'Logo Design'
        ],
        [
            'id' => 'logos-collection',
            'title' => 'Logo Collection',
            'category' => 'Graphics & Design',
            'description' => 'A gallery of logos and brandmarks created for clients, school projects and personal concepts. Click View Details to see the full set.',
            'image' => 'img/graphic/logodesign.png',
            'images' => [
                'img/logos/antalya_filipino_community_logo.png',
                'img/logos/schedai_logo.png',
                'img/logos/branding_concept_1.png',
                'img/logos/branding_concept_2.png',
                'img/logos/another_logo_variant.png'
            ],
            'technologies' => [ 'Canva', 'Branding'],
            'demo_link' => '#',
            'github_link' => '',
            'type' => 'Logo Collection'
        ],

    ],
    'videos' => [
        [
            'id' => 'ejeep-epayment',
            'title' => 'eJeep E-Payment Promotional Video',
            'category' => 'Video Editing',
            'description' => 'A dynamic promotional video showcasing the features and benefits of the eJeep electronic payment system for modern public transportation.',
            'image' => 'img/thumbnail/thumb_ejeep.PNG',
            'video_file' => 'videos/ejeep-promotional.mp4',
            'technologies' => ['Video Editing', 'Capcut', 'Audio Production', ],
            'demo_link' => '#',
            'github_link' => 'https://github.com/StibGee',
            'type' => 'Client Project'
        ],
        [
            'id' => 'schedai-promo',
            'title' => 'SchedAi Promotional Video',
            'category' => 'Video Editing',
            'description' => 'A short promotional video introducing the SchedAi faculty scheduling solution and its benefits.',
            'image' => 'img/thumbnail/schedai.PNG',
            'video_file' => 'videos/schedai.mp4',
            'technologies' => ['Video Editing', 'Capcut', 'Audio Production', ],
            'demo_link' => '#',
            'github_link' => 'https://github.com/StibGee',
            'type' => 'Thesis Project'
        ]
    ]
];

$current_category = isset($_GET['category']) ? $_GET['category'] : 'all';
$current_project = isset($_GET['project']) ? $_GET['project'] : null;
?>

<!-- Projects Hero Section -->
<section class="projects-hero-section py-5 bg-light" id="projects-hero">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 text-center" data-aos="fade-up">
                <h1 class="section-title">My Projects</h1>
                <p class="section-subtitle">Explore my work across different categories</p>
            </div>
        </div>
    </div>
</section>

<!-- Project Categories Filter -->
<section class="projects-filter-section py-4" id="projects-filter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter-buttons text-center" data-aos="fade-up">
                    <button class="btn btn-filter <?php echo $current_category == 'all' ? 'active' : ''; ?>" data-filter="all">
                        <i class="bi bi-grid me-2"></i>All Projects
                    </button>
                    <button class="btn btn-filter <?php echo $current_category == 'frontend' ? 'active' : ''; ?>" data-filter="frontend">
                        <i class="bi bi-code-slash me-2"></i>Frontend Development
                    </button>
                    <button class="btn btn-filter <?php echo $current_category == 'uiux' ? 'active' : ''; ?>" data-filter="uiux">
                        <i class="bi bi-palette me-2"></i>UI/UX Design
                    </button>
                    <button class="btn btn-filter <?php echo $current_category == 'graphics' ? 'active' : ''; ?>" data-filter="graphics">
                        <i class="bi bi-image me-2"></i>Graphics & Design
                    </button>
                    <button class="btn btn-filter <?php echo $current_category == 'videos' ? 'active' : ''; ?>" data-filter="videos">
                        <i class="bi bi-camera-reels me-2"></i>Video Editing
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Grid Section -->
<section class="projects-grid-section py-5" id="projects-grid">
    <div class="container">
        <div class="row g-4" id="projects-container">
            <?php
            $all_projects = [];
            foreach ($projects as $category => $category_projects) {
                foreach ($category_projects as $project) {
                    $project['category_key'] = $category;
                    $all_projects[] = $project;
                }
            }

            foreach ($all_projects as $project):
                $show_project = $current_category == 'all' || $current_category == $project['category_key'];
                $img = !empty($project['image']) ? $project['image'] : 'img/placeholder.png';
                $id = htmlspecialchars($project['id'] ?? $project['title']);
            ?>
            <div class="col-lg-4 col-md-6 project-item <?php echo $project['category_key']; ?>" data-category="<?php echo $project['category_key']; ?>" <?php echo $show_project ? '' : 'style="display: none;"'; ?>>
                <div class="featured-project-card h-100">
                    <div class="project-image">
                        <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="img-fluid">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="project-details.php?id=<?php echo $id; ?>" class="btn btn-light btn-sm">
                                    <i class="bi bi-eye me-2"></i>View Details
                                </a>
                                <?php if (!empty($project['demo_link']) && $project['demo_link'] != '#'): ?>
                                <a href="<?php echo htmlspecialchars($project['demo_link']); ?>" class="btn btn-outline-light btn-sm mt-2" target="_blank" rel="noopener">
                                    <i class="bi bi-play me-1"></i>Live Demo
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-category"><?php echo htmlspecialchars($project['type'] ?? $project['category']); ?></div>
                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                        <div class="project-tech">
                            <?php foreach (array_slice($project['technologies'] ?? [], 0, 4) as $tech): ?>
                                <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Project Statistics Section -->
<section class="project-stats-section py-5 bg-light" id="project-stats">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Project Statistics</h2>
                <p class="section-subtitle">Overview of my project portfolio</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="bi bi-folder2"></i>
                    </div>
                    <h3><?php echo count($all_projects); ?></h3>
                    <p>Total Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h3><?php echo count($projects['frontend']); ?></h3>
                    <p>Frontend Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h3><?php echo count($projects['uiux']); ?></h3>
                    <p>UI/UX Projects</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-card text-center">
                    <div class="stat-icon">
                        <i class="bi bi-controller"></i>
                    </div>
                    <h3><?php echo (isset($projects['videos']) ? count($projects['videos']) : 0) + (isset($projects['graphics']) ? count($projects['graphics']) : 0); ?></h3>
                    <p>Videos & Graphics</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="contact-cta-section py-5" id="contact-cta">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Interested in Working Together?</h2>
                <p class="section-subtitle mb-4">Let's discuss your project and see how I can help bring your ideas to life.</p>
                <a href="contact.php" class="btn btn-primary btn-lg">
                    <i class="bi bi-envelope me-2"></i>Start a Project
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Project filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.btn-filter');
    const projectItems = document.querySelectorAll('.project-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Filter projects
            projectItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, 50);
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Update URL parameter when filtering
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            const url = new URL(window.location);
            if (filter === 'all') {
                url.searchParams.delete('category');
            } else {
                url.searchParams.set('category', filter);
            }
            window.history.replaceState({}, '', url);
        });
    });
});
</script>

</main>

<?php include 'includes/footer.php'; ?>
