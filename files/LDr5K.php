<?php
// ==========================================================================================
// MASTER CONFIGURATION – EASILY UPDATE YOUR PORTAL SETTINGS
// ==========================================================================================
// Replace the dummy values below with your own links and images.
// All social URLs, logo, background, and destination are controlled from this section.
// ==========================================================================================

$destination_url     = 'https://mitsukitl.blogspot.com';               // Target blog/website
$logo_image_url      = 'https://via.placeholder.com/220x80/0a0c10/ffffff?text=Mitsuki+TL'; // Logo image (direct link)
$background_image_url= 'https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80'; // High‑res background
$discord_url         = 'https://discord.gg/example';                   // Discord invite
$whatsapp_url        = 'https://wa.me/1234567890';                     // WhatsApp link (use international format)
$facebook_url        = 'https://facebook.com/example';                 // Facebook page

// ==========================================================================================
// END OF CONFIGURATION – DO NOT EDIT BELOW THIS LINE UNLESS YOU KNOW WHAT YOU'RE DOING
// ==========================================================================================
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Mitsuki TL · entry portal</title>

    <!-- ===== CDNs ===== -->
    <!-- Google Fonts: Poppins & Montserrat (premium sans‑serif) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- ===== INTERNAL STYLES (GLASSMORPHISM, DARK THEME, ANIMATIONS) ===== -->
    <style>
        /* ------------------------------------------------
           1. RESET & GLOBAL VARIABLES
        ------------------------------------------------ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --glass-bg: rgba(10, 10, 20, 0.25);
            --glass-border: rgba(255, 255, 255, 0.08);
            --glass-border-hover: rgba(255, 255, 255, 0.25);
            --glow-cyan: rgba(0, 255, 255, 0.7);
            --glow-magenta: rgba(255, 0, 255, 0.5);
            --card-width: 280px;
            --transition-smooth: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --font-primary: 'Poppins', sans-serif;
            --font-secondary: 'Montserrat', sans-serif;
        }

        /* ------------------------------------------------
           2. BASE & BACKGROUND (with user image + overlay)
        ------------------------------------------------ */
        body {
            font-family: var(--font-primary);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            /* Background image from PHP config */
            background-image: url('<?php echo $background_image_url; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        /* Dark overlay for better glass contrast */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(2px);
            z-index: 0;
            pointer-events: none;
        }

        /* ------------------------------------------------
           3. PARTICLES CANVAS (floating ambient effect)
        ------------------------------------------------ */
        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none; /* so clicks go through to buttons */
        }

        /* ------------------------------------------------
           4. MAIN CONTENT WRAPPER (above particles)
        ------------------------------------------------ */
        .portal-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1300px;
            padding: 2rem 1.5rem;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            backdrop-filter: blur(0px); /* no blur on wrapper – cards handle it */
        }

        /* ------------------------------------------------
           5. HEADER – LOGO WITH BREATHE / GLOW
        ------------------------------------------------ */
        .logo-container {
            margin-bottom: 2.5rem;
            text-align: center;
        }

        .logo-img {
            max-width: 220px;
            width: 100%;
            height: auto;
            filter: drop-shadow(0 0 15px rgba(0, 255, 255, 0.5));
            animation: breatheGlow 3s ease-in-out infinite alternate;
            transition: var(--transition-smooth);
        }

        .logo-img:hover {
            filter: drop-shadow(0 0 25px cyan) drop-shadow(0 0 45px magenta);
            transform: scale(1.02);
        }

        @keyframes breatheGlow {
            0% {
                filter: drop-shadow(0 0 10px rgba(0, 255, 255, 0.3)) drop-shadow(0 0 20px rgba(255, 0, 255, 0.2));
                opacity: 0.95;
            }
            100% {
                filter: drop-shadow(0 0 25px cyan) drop-shadow(0 0 45px magenta);
                opacity: 1;
            }
        }

        /* ------------------------------------------------
           6. MAIN CTA BUTTON – GLOWING & PROMINENT
        ------------------------------------------------ */
        .cta-button {
            margin: 1.5rem 0 3rem 0;
        }

        .glow-btn {
            display: inline-block;
            padding: 1.2rem 3.5rem;
            font-family: var(--font-secondary);
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            background: linear-gradient(135deg, rgba(0, 255, 255, 0.15) 0%, rgba(255, 0, 255, 0.15) 100%);
            backdrop-filter: blur(12px);
            border: 2px solid rgba(255, 255, 255, 0.25);
            border-radius: 60px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.3), 0 0 40px rgba(255, 0, 255, 0.2), inset 0 0 20px rgba(255,255,255,0.2);
            transition: var(--transition-smooth);
            cursor: pointer;
            white-space: nowrap;
        }

        .glow-btn:hover {
            background: linear-gradient(135deg, rgba(0, 255, 255, 0.3) 0%, rgba(255, 0, 255, 0.3) 100%);
            border-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 35px cyan, 0 0 70px magenta, inset 0 0 25px rgba(255,255,255,0.3);
            transform: scale(1.05);
        }

        .glow-btn:active {
            transform: scale(0.98);
        }

        /* ------------------------------------------------
           7. COMMUNITY HUB – 3 GLASS CARDS
        ------------------------------------------------ */
        .community-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin: 2.5rem 0 3.5rem 0;
            width: 100%;
        }

        .community-card {
            flex: 0 1 var(--card-width);
            min-width: 240px;
            background: var(--glass-bg);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 32px;
            padding: 2.2rem 1.5rem;
            text-align: center;
            color: white;
            text-decoration: none;
            transition: var(--transition-smooth);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .community-card:hover {
            border-color: var(--glass-border-hover);
            background: rgba(20, 20, 35, 0.4);
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.3), 0 0 50px rgba(255, 0, 255, 0.2);
            transform: translateY(-8px) scale(1.02);
        }

        .card-icon {
            font-size: 3.5rem;
            filter: drop-shadow(0 0 15px currentColor);
            transition: var(--transition-smooth);
        }

        .community-card:hover .card-icon {
            transform: scale(1.1);
        }

        .card-title {
            font-family: var(--font-secondary);
            font-weight: 600;
            font-size: 1.8rem;
            letter-spacing: 1px;
            background: linear-gradient(135deg, #fff, #aaccff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-arrow {
            font-size: 1.4rem;
            opacity: 0.7;
            transition: var(--transition-smooth);
            margin-top: 0.5rem;
        }

        .community-card:hover .card-arrow {
            opacity: 1;
            transform: translateX(6px);
        }

        /* Brand‑colored glows on hover (subtle) */
        .community-card[data-brand="discord"]:hover .card-icon { color: #5865F2; filter: drop-shadow(0 0 20px #5865F2); }
        .community-card[data-brand="whatsapp"]:hover .card-icon { color: #25D366; filter: drop-shadow(0 0 20px #25D366); }
        .community-card[data-brand="facebook"]:hover .card-icon { color: #1877F2; filter: drop-shadow(0 0 20px #1877F2); }

        /* ------------------------------------------------
           8. FOOTER – CLEAN & FADE
        ------------------------------------------------ */
        .footer {
            margin-top: 3rem;
            font-family: var(--font-secondary);
            font-weight: 300;
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.7);
            text-align: center;
            padding: 1.5rem 1rem;
            border-top: 1px solid rgba(255,255,255,0.08);
            width: 100%;
            backdrop-filter: blur(4px);
            background: rgba(0,0,0,0.2);
            border-radius: 40px 40px 0 0;
            letter-spacing: 0.5px;
        }

        .footer a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-weight: 400;
            border-bottom: 1px dotted rgba(255,255,255,0.3);
            transition: var(--transition-smooth);
        }

        .footer a:hover {
            color: cyan;
            border-bottom-color: cyan;
        }

        .footer i {
            color: #ff4d6d;
            margin: 0 4px;
        }

        /* ------------------------------------------------
           9. RESPONSIVE TWEAKS (MOBILE FIRST)
        ------------------------------------------------ */
        @media screen and (max-width: 768px) {
            .portal-wrapper {
                padding: 1rem;
            }

            .logo-img {
                max-width: 160px;
            }

            .glow-btn {
                font-size: 1.4rem;
                padding: 1rem 2rem;
                white-space: normal;
            }

            .community-grid {
                gap: 1.2rem;
            }

            .community-card {
                flex: 1 1 100%;
                max-width: 320px;
                padding: 1.8rem 1rem;
            }

            .card-title {
                font-size: 1.6rem;
            }

            .footer {
                font-size: 0.8rem;
                padding: 1rem;
            }
        }

        @media screen and (max-width: 480px) {
            .glow-btn {
                font-size: 1.2rem;
                padding: 0.9rem 1.5rem;
            }
            .card-icon {
                font-size: 2.8rem;
            }
        }

        /* ------------------------------------------------
           10. ADDITIONAL SAFETY & FINE DETAILS
        ------------------------------------------------ */
        a, button {
            cursor: pointer;
            user-select: none;
        }

        /* Hide particles on older browsers (graceful) */
        .no-js #particles-js {
            display: none;
        }

        /* Custom scrollbar (premium touch) */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.3);
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(0, 255, 255, 0.4);
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 255, 255, 0.7);
        }
    </style>
</head>
<body>

    <!-- PARTICLES BACKGROUND (ambient floating effect) -->
    <div id="particles-js"></div>

    <!-- MAIN PORTAL CONTENT -->
    <div class="portal-wrapper">

        <!-- HEADER with animated logo -->
        <header class="logo-container" data-aos="fade-down" data-aos-duration="1200">
            <img src="<?php echo $logo_image_url; ?>" alt="Mitsuki TL Logo" class="logo-img">
        </header>

        <!-- MAIN CTA (ENTER BUTTON) – always visible, no delay -->
        <div class="cta-button" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
            <a href="<?php echo $destination_url; ?>" class="glow-btn" target="_blank" rel="noopener noreferrer">
                <i class="fas fa-door-open" style="margin-right: 12px;"></i>ENTER WEBSITE
            </a>
        </div>

        <!-- COMMUNITY HUB – 3 GLASS CARDS with staggered entrance -->
        <div class="community-grid">
            <!-- Discord Card -->
            <a href="<?php echo $discord_url; ?>" class="community-card" data-brand="discord" target="_blank" rel="noopener noreferrer"
               data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                <i class="fab fa-discord card-icon"></i>
                <span class="card-title">Discord</span>
                <i class="fas fa-arrow-right card-arrow"></i>
            </a>

            <!-- WhatsApp Card -->
            <a href="<?php echo $whatsapp_url; ?>" class="community-card" data-brand="whatsapp" target="_blank" rel="noopener noreferrer"
               data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
                <i class="fab fa-whatsapp card-icon"></i>
                <span class="card-title">WhatsApp</span>
                <i class="fas fa-arrow-right card-arrow"></i>
            </a>

            <!-- Facebook Card -->
            <a href="<?php echo $facebook_url; ?>" class="community-card" data-brand="facebook" target="_blank" rel="noopener noreferrer"
               data-aos="fade-up" data-aos-duration="900" data-aos-delay="500">
                <i class="fab fa-facebook card-icon"></i>
                <span class="card-title">Facebook</span>
                <i class="fas fa-arrow-right card-arrow"></i>
            </a>
        </div>

        <!-- FOOTER with fade effect -->
        <footer class="footer" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="600">
            © 2025 Mitsuki TL · All rights reserved.<br>
            crafted <i class="fas fa-heart"></i> with <a href="#" target="_blank">arcane design</a>
        </footer>
    </div>

    <!-- ===== SCRIPTS (CDNs + INIT) ===== -->
    <!-- Particles.js from CDN -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- AOS library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        (function() {
            // 1. INITIALIZE PARTICLES (floating ambient background)
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 100,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": ["#00ffff", "#ff00ff", "#ffffff"]
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        }
                    },
                    "opacity": {
                        "value": 0.25,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 0.5,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 4,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 2,
                            "size_min": 0.5,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": false   // clean, non‑distracting floating dots
                    },
                    "move": {
                        "enable": true,
                        "speed": 0.8,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,    // no interactivity – keep it subtle
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": false,
                            "mode": "push"
                        },
                        "resize": true
                    }
                },
                "retina_detect": true
            });

            // 2. INITIALIZE AOS (Animate on Scroll) – with smooth settings
            AOS.init({
                duration: 1000,
                once: true,
                mirror: false,
                offset: 20,
                easing: 'ease-out-cubic'
            });

            // 3. (Optional) small additional touch: force AOS refresh after fonts load
            window.addEventListener('load', function() {
                AOS.refresh();
            });
        })();
    </script>

    <!-- small inline fix for older browsers (no particles) -->
    <noscript>
        <style>#particles-js { display: none; }</style>
    </noscript>
</body>
</html>