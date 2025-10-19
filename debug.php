<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug - Istib Portfolio</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Debug styles */
        .debug-info {
            background: #f8f9fa;
            padding: 20px;
            margin: 20px 0;
            border-radius: 10px;
            border-left: 4px solid #6420AA;
        }
        .debug-error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .debug-success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .test-content {
            background: linear-gradient(135deg, #6420AA, #7743DB);
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 15px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">🔧 Debug Information</h1>

        <div class="debug-info">
            <h3>File Paths Check:</h3>
            <p><strong>Current Directory:</strong> <?php echo __DIR__; ?></p>
            <p><strong>CSS File Path:</strong> <?php echo __DIR__ . '/assets/css/style.css'; ?></p>
            <p><strong>CSS File Exists:</strong> <?php echo file_exists(__DIR__ . '/assets/css/style.css') ? '✅ YES' : '❌ NO'; ?></p>
            <p><strong>CSS File Size:</strong> <?php echo file_exists(__DIR__ . '/assets/css/style.css') ? filesize(__DIR__ . '/assets/css/style.css') . ' bytes' : 'N/A'; ?></p>
        </div>

        <div class="debug-info">
            <h3>Server Information:</h3>
            <p><strong>Server Software:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></p>
            <p><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown'; ?></p>
            <p><strong>Request URI:</strong> <?php echo $_SERVER['REQUEST_URI'] ?? 'Unknown'; ?></p>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
        </div>

        <div class="test-content">
            <h2>🎨 CSS Test Content</h2>
            <p>If you can see this styled content, CSS is working!</p>
            <div class="mt-3">
                <button class="btn btn-light me-2">Test Button 1</button>
                <button class="btn btn-outline-light me-2">Test Button 2</button>
                <button class="btn btn-primary">Primary Button</button>
            </div>
        </div>

        <div class="debug-info">
            <h3>Navigation Test:</h3>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="img/2.png" alt="Logo" height="30" onerror="this.style.display='none'; console.log('Logo failed to load');">
                        STIB
                    </a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" href="#">Home</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Projects</a>
                        <a class="nav-link" href="#">Contact</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="debug-info">
            <h3>Hero Section Test:</h3>
            <div class="hero-section" style="min-height: 300px; position: relative;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h1 class="hero-title">Test Hero Title</h1>
                            <p class="hero-subtitle">Test Hero Subtitle</p>
                            <div class="hero-buttons">
                                <a href="#" class="btn btn-primary">Test Button</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="img/heroes.png" alt="Hero Image" class="img-fluid" onerror="this.style.display='none'; console.log('Hero image failed to load');">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary btn-lg">Go to Main Website</a>
            <a href="http://localhost:8000" class="btn btn-outline-primary btn-lg ms-2">Use PHP Dev Server</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Debug JavaScript
        console.log('Debug page loaded');
        console.log('CSS loaded:', document.styleSheets.length, 'stylesheets');

        // Check if custom CSS is loaded
        let customCSSLoaded = false;
        for (let i = 0; i < document.styleSheets.length; i++) {
            if (document.styleSheets[i].href && document.styleSheets[i].href.includes('style.css')) {
                customCSSLoaded = true;
                break;
            }
        }
        console.log('Custom CSS loaded:', customCSSLoaded);
    </script>
</body>
</html>



