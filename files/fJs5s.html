<?php
// =============================================================================
// MASTER CONFIGURATION - EDIT THESE VALUES (EASY-TO-FIND SECTION)
// =============================================================================
$destination_url = 'https://mitsukitl.blogspot.com';   // Target blog URL
$logo_url        = 'https://cdn.nefusoft.cloud/z9aw4.jpg'; // Replace with actual logo (placeholder used)
$background_img  = 'https://cdn.nefusoft.cloud/GqYrN.jpg'; // High-res abstract/dark background

// Social hub links
$discord_url     = 'https://discord.gg/';
$whatsapp_url    = 'https://wa.me/';
$facebook_url    = 'https://facebook.com/';
// =============================================================================
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Mitsuki TL · Premium Entry Portal</title>
    
    <!-- === CDN DEPENDENCIES (No local files) === -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* ----------------------------------------------
        :: RESET & GLOBAL 
        ------------------------------------------------ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            scroll-behavior: smooth;
            position: relative;
            overflow-x: hidden;
        }

        /* ------ Background image + dark overlay (layered) ------ */
        body {
            background: #0b0c0f; /* fallback */
            background-image: url('<?php echo $background_img; ?>');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            position: relative;
            z-index: 0;
        }

        /* Dark semi-transparent overlay (improves glass contrast) */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65);  /* deep dark overlay */
            backdrop-filter: blur(2px);        /* subtle blur for depth */
            z-index: 0;
            pointer-events: none;
        }

        /* ------ particles canvas (floating ambient) ------ */
        #particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;                        /* between overlay and content */
            pointer-events: none;               /* allow clicks through to content */
        }

        /* ------ main content (above all layers) ------ */
        main.portal {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem 1.5rem;
            width: 100%;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }

        /* ----------------------------------------------
        :: TYPOGRAPHY 
        ------------------------------------------------ */
        h1, h2, h3, h4 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        /* ----------------------------------------------
        :: GLASS CARD / FROSTED MIXINS
        ------------------------------------------------ */
        .glass-card {
            background: rgba(20, 25, 35, 0.4);
            backdrop-filter: blur(12px) saturate(180%);
            -webkit-backdrop-filter: blur(12px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 32px;
            box-shadow: 0 20px 35px -8px rgba(0, 0, 0, 0.7), 0 0 0 1px rgba(255, 255, 255, 0.02) inset;
            transition: all 0.3s cubic-bezier(0.2, 0.9, 0.3, 1);
        }

        .glass-card:hover {
            border-color: rgba(110, 200, 255, 0.4);
            box-shadow: 0 25px 40px -12px rgba(0, 180, 255, 0.3), 0 0 0 1px rgba(110, 200, 255, 0.2) inset;
            transform: translateY(-6px) scale(1.01);
        }

        /* glowing borders utility */
        .glow-border {
            position: relative;
        }
        .glow-border::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 32px;
            padding: 2px;
            background: radial-gradient(circle at 30% 30%, rgba(120, 220, 255, 0.6), transparent 70%);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.4s;
        }
        .glass-card:hover::after {
            opacity: 1;
        }

        /* ----------------------------------------------
        :: LOGO (Breathe / Glow animation)
        ------------------------------------------------ */
        .logo-wrapper {
            margin-bottom: 2rem;
            display: inline-block;
            filter: drop-shadow(0 0 20px rgba(255, 215, 0, 0.3));
            animation: logoGlow 3s infinite alternate ease-in-out;
        }

        @keyframes logoGlow {
            0% { filter: drop-shadow(0 0 15px rgba(100, 200, 255, 0.4)); opacity: 0.95; }
            100% { filter: drop-shadow(0 0 35px rgba(100, 230, 255, 0.9)); opacity: 1; transform: scale(1.02); }
        }

        .logo-img {
            max-width: 280px;
            width: 100%;
            height: auto;
            border-radius: 20px;
            transition: all 0.5s;
        }

        /* ----------------------------------------------
        :: MAIN CTA BUTTON (glowing, premium)
        ------------------------------------------------ */
        .cta-wrapper {
            margin: 3rem 0 4rem;
        }

        .btn-glow {
            display: inline-block;
            padding: 1.3rem 4rem;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.8rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: white;
            background: rgba(15, 25, 40, 0.3);
            backdrop-filter: blur(12px);
            border: 2px solid rgba(80, 180, 255, 0.4);
            border-radius: 80px;
            box-shadow: 0 0 30px rgba(0, 160, 255, 0.3), 0 15px 30px -10px black;
            transition: all 0.4s;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .btn-glow:hover {
            background: rgba(20, 40, 60, 0.5);
            border-color: #6ec8ff;
            box-shadow: 0 0 50px #3fa2ff, 0 20px 40px -8px #000;
            transform: scale(1.05) translateY(-4px);
            letter-spacing: 0.2em;
        }

        .btn-glow:active {
            transform: scale(0.98);
        }

        /* subtle moving gradient overlay on button */
        .btn-glow::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.6s;
            transform: rotate(20deg);
        }
        .btn-glow:hover::before {
            opacity: 1;
        }

        /* ----------------------------------------------
        :: COMMUNITY HUB (3 glass cards)
        ------------------------------------------------ */
        .community {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            margin: 4rem 0 3rem;
        }

        .card-link {
            text-decoration: none;
            color: white;
            flex: 1 1 240px;
            min-width: 220px;
            max-width: 280px;
        }

        .social-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2.2rem 1.8rem;
            background: rgba(18, 25, 35, 0.35);
            backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 40px;
            transition: all 0.4s;
            box-shadow: 0 15px 30px -12px rgba(0, 0, 0, 0.6);
        }

        .social-card i {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #fff, #aad0ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            filter: drop-shadow(0 5px 10px rgba(0,160,255,0.4));
            transition: all 0.3s;
        }

        .social-card span {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-family: 'Poppins', sans-serif;
        }

        .social-card small {
            font-size: 0.9rem;
            opacity: 0.7;
            font-style: italic;
        }

        /* individual hover accent colors */
        .card-link.discord:hover .social-card {
            border-color: #5865F2;
            box-shadow: 0 20px 30px -10px #5865F2;
        }
        .card-link.whatsapp:hover .social-card {
            border-color: #25D366;
            box-shadow: 0 20px 30px -10px #25D366;
        }
        .card-link.facebook:hover .social-card {
            border-color: #1877F2;
            box-shadow: 0 20px 30px -10px #1877F2;
        }

        /* ----------------------------------------------
        :: FOOTER 
        ------------------------------------------------ */
        footer {
            margin-top: 5rem;
            padding: 1.5rem 0;
            font-size: 0.95rem;
            opacity: 0.8;
            border-top: 1px solid rgba(255,255,255,0.1);
            background: rgba(0,0,0,0.15);
            backdrop-filter: blur(6px);
            border-radius: 60px;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
            transition: opacity 0.3s;
        }

        footer:hover {
            opacity: 1;
        }

        footer p {
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        footer a {
            color: #aad0ff;
            text-decoration: none;
            border-bottom: 1px dotted;
        }

        /* ----------------------------------------------
        :: RESPONSIVE DESIGN (mobile first)
        ------------------------------------------------ */
        @media (max-width: 768px) {
            .logo-img {
                max-width: 220px;
            }
            .btn-glow {
                font-size: 1.4rem;
                padding: 1.2rem 2.5rem;
            }
            .community {
                gap: 1.5rem;
            }
            .social-card {
                padding: 1.8rem 1rem;
            }
            .social-card i {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 480px) {
            .btn-glow {
                font-size: 1.2rem;
                padding: 1rem 1.8rem;
            }
            footer {
                font-size: 0.8rem;
                padding: 1rem 1.5rem;
            }
        }

        /* extra smoothness */
        .btn-glow, .social-card, .logo-wrapper {
            will-change: transform, filter, box-shadow;
        }
    </style>
</head>
<body>

    <!-- Floating ambient background (Particles) -->
    <div id="particles-js"></div>

    <!-- Main entry portal content -->
    <main class="portal">
        <div class="container">

            <!-- Header: Logo with breath/glow animation -->
            <div class="logo-wrapper" data-aos="fade-down" data-aos-duration="1000">
                <img src="<?php echo $logo_url; ?>" alt="Mitsuki TL Logo" class="logo-img" onerror="this.src='https://via.placeholder.com/400x150?text=Mitsuki+TL'">
            </div>

            <!-- Main CTA: Enter Website (always visible, no delay) -->
            <div class="cta-wrapper" data-aos="zoom-in" data-aos-duration="1100">
                <a href="<?php echo $destination_url; ?>" class="btn-glow" target="_blank" rel="noopener">
                    <i class="fas fa-door-open" style="margin-right: 12px;"></i> ENTER WEBSITE
                </a>
            </div>

            <!-- Community Hub: three premium cards -->
            <div class="community" data-aos="fade-up" data-aos-duration="1200">
                
                <!-- Discord Card -->
                <a href="<?php echo $discord_url; ?>" class="card-link discord" target="_blank" rel="noopener" data-aos="flip-left" data-aos-delay="100">
                    <div class="social-card glass-card">
                        <i class="fab fa-discord"></i>
                        <span>Discord</span>
                        <small>join community</small>
                    </div>
                </a>

                <!-- WhatsApp Card -->
                <a href="<?php echo $whatsapp_url; ?>" class="card-link whatsapp" target="_blank" rel="noopener" data-aos="flip-left" data-aos-delay="200">
                    <div class="social-card glass-card">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                        <small>chat with us</small>
                    </div>
                </a>

                <!-- Facebook Card -->
                <a href="<?php echo $facebook_url; ?>" class="card-link facebook" target="_blank" rel="noopener" data-aos="flip-left" data-aos-delay="300">
                    <div class="social-card glass-card">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                        <small>follow page</small>
                    </div>
                </a>
            </div>

            <!-- Footer with copyright / credit (fade-in) -->
            <footer data-aos="fade-in" data-aos-duration="1500" data-aos-delay="400">
                <p>© <?php echo date('Y'); ?> Mitsuki TL · designed with <i class="fas fa-heart" style="color: #ff6b9d;"></i> for the community</p>
                <p style="font-size: 0.8rem; margin-top: 5px;">✧ premium glass portal ✧</p>
            </footer>
        </div>
    </main>

    <!-- scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        // Initialize AOS (Animate on Scroll) - all animations smooth
        AOS.init({
            duration: 1200,
            once: true,
            mirror: false,
            offset: 20,
        });

        // Particles.js config - ambient floating effect (premium subtle)
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 90,
                    density: { enable: true, value_area: 900 }
                },
                color: { value: ['#b3d9ff', '#ffffff', '#a0d2ff', '#c0e0ff'] },
                shape: { type: 'circle' },
                opacity: {
                    value: 0.25,
                    random: true,
                    anim: { enable: true, speed: 0.5, opacity_min: 0.1, sync: false }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: { enable: true, speed: 1, size_min: 0.5, sync: false }
                },
                line_linked: {
                    enable: false,   // no lines, only floating particles for clean look
                },
                move: {
                    enable: true,
                    speed: 0.6,
                    direction: 'none',
                    random: true,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: { enable: false }
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'bubble' },
                    onclick: { enable: false },
                    resize: true
                },
                modes: {
                    bubble: {
                        distance: 200,
                        size: 5,
                        duration: 2,
                        opacity: 0.4,
                        speed: 2
                    }
                }
            },
            retina_detect: true
        });

        // small additional glow effect for logo via class (already in CSS)
        // optional: console log to confirm no errors
        console.log('Mitsuki Portal — ready. No redirects, manual entry only.');
    </script>
</body>
</html>