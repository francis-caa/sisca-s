<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francisca Aurasuci</title>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #1e293b;
            overflow-x: hidden;
            background: #ffffff;
            position: relative;
        }

        /* Background pattern dengan aksen biru */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 10% 20%, rgba(10, 102, 194, 0.03) 0%, transparent 30%),
                        radial-gradient(circle at 90% 70%, rgba(10, 102, 194, 0.03) 0%, transparent 30%),
                        radial-gradient(circle at 30% 80%, rgba(10, 102, 194, 0.02) 0%, transparent 40%),
                        radial-gradient(circle at 70% 30%, rgba(10, 102, 194, 0.02) 0%, transparent 40%);
            pointer-events: none;
            z-index: -1;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #0a66c2;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #05445E;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            z-index: 1000;
            border-bottom: 1px solid rgba(10, 102, 194, 0.1);
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #475569;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 0;
            height: 2.5px;
            background: #0a66c2;
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .nav-links a:hover {
            color: #0a66c2;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 2rem;
            background: transparent;
            position: relative;
        }

        /* Aksen biru di hero */
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(10, 102, 194, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(10, 102, 194, 0.03) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .hero-content {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        /* Left side - Text */
        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 0.5rem;
            color: #1e293b;
        }

        .hero-text h1 span {
            color: #0a66c2;
        }

        .hero-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0a66c2;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .hero-title::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: #0a66c2;
            border-radius: 2px;
        }

        .hero-text p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.8;
            max-width: 600px;
        }

        /* Right side - Image */
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-wrapper {
            position: relative;
            width: 400px;
            height: 400px;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 30px 40px -20px rgba(10, 102, 194, 0.3);
            border: 4px solid white;
            position: relative;
            z-index: 2;
        }

        .image-wrapper::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a66c2, #05445E);
            top: 20px;
            right: -20px;
            border-radius: 50%;
            z-index: 1;
            opacity: 0.2;
        }

        /* Section Styles */
        section {
            padding: 100px 2rem;
            position: relative;
        }

        .section-container {
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-subtitle {
            color: #0a66c2;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 1rem;
            letter-spacing: -1px;
        }

        .section-title span {
            color: #0a66c2;
        }

        /* Projects Section */
        .projects {
            background: #f8fafc;
            position: relative;
        }

        .projects::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(10, 102, 194, 0.03) 0%, transparent 70%);
            border-radius: 50%;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 35px -15px rgba(10, 102, 194, 0.1);
            transition: all 0.4s ease;
            border: 1px solid #e2e8f0;
            position: relative;
        }

        .project-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 45px -15px rgba(10, 102, 194, 0.3);
            border-color: #0a66c2;
        }

        .project-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #0a66c2;
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(10, 102, 194, 0.3);
        }

        .project-image {
            height: 180px;
            background: linear-gradient(135deg, #0a66c2, #05445E);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .project-image i {
            font-size: 3.5rem;
            color: rgba(255, 255, 255, 0.3);
            transition: all 0.5s ease;
        }

        .project-card:hover .project-image i {
            transform: scale(1.2) rotate(5deg);
            color: rgba(255, 255, 255, 0.5);
        }

        .project-info {
            padding: 1.5rem;
        }

        .project-info h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #1e293b;
        }

        .project-info .project-type {
            color: #0a66c2;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
            display: block;
        }

        .project-info p {
            color: #64748b;
            margin-bottom: 1rem;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tech-tag {
            padding: 0.2rem 0.8rem;
            background: #f1f5f9;
            color: #1e293b;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        /* Contact Section */
        .contact {
            background: white;
            position: relative;
            overflow: hidden;
            padding: 80px 2rem;
        }

        .contact::before {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(10, 102, 194, 0.03) 0%, transparent 70%);
            border-radius: 50%;
        }

        .contact::after {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(10, 102, 194, 0.03) 0%, transparent 70%);
            border-radius: 50%;
        }

        .contact-grid {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
            position: relative;
            z-index: 2;
            flex-wrap: wrap;
        }

        .contact-card {
            background: linear-gradient(135deg, #0a66c2, #05445E);
            border-radius: 20px;
            padding: 2rem;
            width: 280px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 20px 30px -10px rgba(10, 102, 194, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 40px -10px rgba(10, 102, 194, 0.4);
        }

        .contact-icon {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.8rem;
            backdrop-filter: blur(5px);
        }

        .contact-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: white;
        }

        .contact-card p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            word-break: break-word;
        }

        .contact-link {
            display: inline-block;
            padding: 0.6rem 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s;
            backdrop-filter: blur(5px);
        }

        .contact-link:hover {
            background: white;
            color: #0a66c2;
        }

        /* Footer */
        .footer {
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .footer p {
            opacity: 0.8;
            font-size: 0.95rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .project-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-content {
                flex-direction: column-reverse;
                text-align: center;
                gap: 3rem;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-text p {
                margin: 0 auto;
            }

            .hero-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .image-wrapper {
                width: 300px;
                height: 300px;
                margin: 0 auto;
            }

            .image-wrapper::after {
                right: 0;
                left: 20px;
            }

            .section-title {
                font-size: 2rem;
            }

            .project-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                flex-direction: column;
                align-items: center;
            }

            .contact-card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>
<body>
    <?php
    // PHP Variables
    $name = "Francisca Aurasuci";
    $fullname = "Francisca Aurasuci Primastuti Devy";
    $email = "francisca.aurasucii@gmail.com";
    $instagram = "frnciscaaura_";
    $linkedin = "francisca aurasuci";
    ?>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-links">
                <a href="#home">Beranda</a>
                <a href="#projects">Proyek</a>
                <a href="#contact">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <!-- Left side - Text -->
            <div class="hero-text" data-aos="fade-right">
                <h1>I'm <span><?php echo $fullname; ?></span></h1>
                <div class="hero-title">MAHASISWI SISTEM INFORMASI</div>
                <p>Saya adalah seorang mahasiswi yang memiliki ketertarikan tinggi untuk selalu mencoba dan mempelajari hal-hal baru, khususnya dalam bidang teknologi dan pengembangan diri. Berbekal pengalaman aktif di berbagai organisasi dan kepanitiaan, saya terbiasa mengasah keterampilan kepemimpinan, kerja sama tim, dan manajemen waktu.</p>
            </div>
            
            <!-- Right side - Image -->
            <div class="hero-image" data-aos="fade-left">
                <div class="image-wrapper">
                    <img src="images/sisca.jfif" alt="Francisca Aurasuci">
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Portofolio</span>
                <h2 class="section-title">Proyek <span>Saya</span></h2>
            </div>
            
            <div class="project-grid">
                <?php
                $projects = [
                    [
                        'title' => 'Fest-tix',
                        'type' => 'Aplikasi Mobile',
                        'description' => 'Aplikasi pemesanan tiket konser musik secara online, sebagai Proyek akhir pemrograman aplikasi mobile.',
                        'icon' => 'fas fa-ticket-alt',
                        'tech' => ['Flutter', 'Dart', 'API', 'SQLite']
                    ],
                    [
                        'title' => 'K-Guide',
                        'type' => 'Aplikasi Mobile',
                        'description' => 'Aplikasi tour guide untuk Korea Selatan , sebagai proyek akhir praktikum aplikasi mobile.',
                        'icon' => 'fas fa-map-marked-alt',
                        'tech' => ['Flutter', 'Dart', 'Maps API']
                    ],
                    [
                        'title' => 'Sanctuary Spa',
                        'type' => 'Website',
                        'description' => 'Website spa dengan berbagai fitur sebagai proyek akhir praktikum pemrograman web dasar.',
                        'icon' => 'fas fa-spa',
                        'tech' => ['HTML', 'CSS', 'PHP', 'MySQL']
                    ],
                    [
                        'title' => 'Kunjungan Tamu Dinas',
                        'type' => 'Website',
                        'description' => 'Website pemesanan ruang rapat dan penjadwalan kunjungan tamu. Proyek akhir magang di Dinas Perpustakaan dan Arsip DIY.',
                        'icon' => 'fas fa-building',
                        'tech' => ['PHP', 'MySQL', 'CSS']
                    ],
                    [
                        'title' => 'Sistem Informasi Monitoring dan Pendataan Bahan',
                        'type' => 'Website',
                        'description' => 'Proyek akhir rancang bangun perangkat lunak, website untuk monitoring dan pendataan bahan pada sebuah perusahaan.',
                        'icon' => 'fas fa-chart-line',
                        'tech' => ['PHP', 'MySQL', 'CSS', 'JavaScript']
                    ]
                ];

                foreach ($projects as $index => $project) {
                    $delay = $index * 50;
                    echo '<div class="project-card" data-aos="fade-up" data-aos-delay="' . $delay . '">';
                    echo '<div class="project-badge">Selesai</div>';
                    echo '<div class="project-image"><i class="' . $project['icon'] . '"></i></div>';
                    echo '<div class="project-info">';
                    echo '<span class="project-type">' . $project['type'] . '</span>';
                    echo '<h3>' . $project['title'] . '</h3>';
                    echo '<p>' . $project['description'] . '</p>';
                    echo '<div class="project-tech">';
                    foreach ($project['tech'] as $tech) {
                        echo '<span class="tech-tag">' . $tech . '</span>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-subtitle">Kontak</span>
                <h2 class="section-title">Hubungi <span>Saya</span></h2>
            </div>
            
            <div class="contact-grid">
                <!-- Email Card -->
                <div class="contact-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p><?php echo $email; ?></p>
                    <a href="mailto:<?php echo $email; ?>" class="contact-link">Kirim Email</a>
                </div>
                
                <!-- Instagram Card -->
                <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Instagram</h3>
                    <p>@<?php echo $instagram; ?></p>
                    <a href="https://instagram.com/<?php echo $instagram; ?>" target="_blank" class="contact-link">Follow</a>
                </div>
                
                <!-- LinkedIn Card -->
                <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <h3>LinkedIn</h3>
                    <p><?php echo $linkedin; ?></p>
                    <a href="https://linkedin.com/in/<?php echo str_replace(' ', '', $linkedin); ?>" target="_blank" class="contact-link">Connect</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> <?php echo $fullname; ?>. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 20px rgba(10, 102, 194, 0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.9)';
                navbar.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>