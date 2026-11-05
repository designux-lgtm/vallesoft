
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ValleSoft Cinematic Video Experience</title>

<style>

/* ===============================
   MAIN SECTION
================================ */

* {
    box-sizing: border-box;
}

.video-section {
    width: 100%;
    padding: 45px 15px;
    background: #ffffff;
}

.video-container {
    position: relative;
    width: 100%;
    max-width: 1150px;
    height: 520px;
    margin: auto;
    overflow: hidden;
    isolation: isolate;
    border-radius: 22px;
    background: #030817;
    box-shadow:
        0 25px 70px rgba(0, 20, 70, 0.22),
        0 0 35px rgba(0, 140, 255, 0.12);
}

/* ===============================
   ANIMATED BACKGROUND
================================ */

.animated-bg {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
    background:
        radial-gradient(ellipse at 15% 20%,
            rgba(0, 115, 255, .42), transparent 40%),
        radial-gradient(ellipse at 85% 80%,
            rgba(125, 40, 255, .35), transparent 42%),
        radial-gradient(ellipse at 50% 50%,
            rgba(0, 70, 160, .22), transparent 60%),
        #030817;
}

/* MOVING LIGHT BLOBS */

.animated-bg::before {
    content: "";
    position: absolute;
    width: 750px;
    height: 750px;
    top: -40%;
    left: -20%;
    border-radius: 50%;

    background: radial-gradient(
        circle,
        rgba(0, 145, 255, .34),
        rgba(0, 80, 255, .10) 40%,
        transparent 70%
    );

    filter: blur(45px);
    animation: blueOrb 12s ease-in-out infinite alternate;
}

.animated-bg::after {
    content: "";
    position: absolute;
    width: 700px;
    height: 700px;
    right: -20%;
    bottom: -55%;
    border-radius: 50%;

    background: radial-gradient(
        circle,
        rgba(140, 50, 255, .32),
        rgba(40, 80, 255, .10) 45%,
        transparent 70%
    );

    filter: blur(50px);
    animation: purpleOrb 14s ease-in-out infinite alternate;
}

@keyframes blueOrb {
    0% {
        transform: translate(0, 0) scale(.85);
    }
    100% {
        transform: translate(240px, 180px) scale(1.25);
    }
}

@keyframes purpleOrb {
    0% {
        transform: translate(0, 0) scale(1);
    }
    100% {
        transform: translate(-220px, -150px) scale(1.3);
    }
}

/* ===============================
   DIGITAL GRID
================================ */

.digital-grid {
    position: absolute;
    inset: 0;
    z-index: 1;

    background-image:
        linear-gradient(rgba(70, 150, 255, .09) 1px, transparent 1px),
        linear-gradient(90deg, rgba(70, 150, 255, .09) 1px, transparent 1px);

    background-size: 48px 48px;

    mask-image: linear-gradient(
        to bottom,
        transparent,
        black 20%,
        black 80%,
        transparent
    );

    animation: gridMove 18s linear infinite;
}

@keyframes gridMove {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 48px 48px;
    }
}

/* ===============================
   FLOATING PARTICLES
================================ */

.particle {
    position: absolute;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #65caff;

    box-shadow:
        0 0 8px #36aaff,
        0 0 20px #008cff,
        0 0 35px #008cff;

    animation: particleFloat 7s ease-in-out infinite alternate;
}

.p1 { top: 15%; left: 12%; animation-delay: 0s; }
.p2 { top: 70%; left: 20%; animation-delay: 2s; }
.p3 { top: 25%; right: 15%; animation-delay: 1s; }
.p4 { top: 80%; right: 20%; animation-delay: 3s; }
.p5 { top: 45%; left: 8%; animation-delay: 4s; }
.p6 { top: 18%; right: 35%; animation-delay: 2s; }
.p7 { bottom: 12%; left: 45%; animation-delay: 1s; }
.p8 { top: 55%; right: 9%; animation-delay: 3s; }

@keyframes particleFloat {
    0% {
        transform: translate3d(0, 0, 0) scale(.7);
        opacity: .3;
    }
    50% {
        opacity: 1;
    }
    100% {
        transform: translate3d(25px, -45px, 0) scale(1.5);
        opacity: .7;
    }
}

/* ===============================
   BACKGROUND VIDEO (OPTIONAL)
================================ */

.background-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: .16;
    z-index: 2;
    mix-blend-mode: screen;
}

/* ===============================
   CINEMATIC LIGHT BEAMS
================================ */

.light-beam {
    position: absolute;
    width: 120%;
    height: 2px;
    left: -10%;
    top: 50%;

    background: linear-gradient(
        90deg,
        transparent,
        rgba(0, 170, 255, .7),
        rgba(180, 100, 255, .7),
        transparent
    );

    filter: blur(2px);
    opacity: .65;
    z-index: 2;

    transform: rotate(-15deg);
    animation: beamMove 7s ease-in-out infinite alternate;
}

@keyframes beamMove {
    0% {
        transform: translateY(-100px) rotate(-15deg);
        opacity: .2;
    }
    100% {
        transform: translateY(130px) rotate(-15deg);
        opacity: .8;
    }
}

/* ===============================
   MAIN VIDEO FRAME
================================ */

.main-video-frame {
    position: absolute;
    width: 76%;
    height: 78%;
    top: 50%;
    left: 50%;
    z-index: 5;

    transform: translate(-50%, -50%);

    border-radius: 16px;
    padding: 3px;

    background: linear-gradient(
        135deg,
        #65d7ff,
        rgba(0, 100, 255, .35),
        #a46aff,
        #38cfff
    );

    background-size: 300% 300%;
    animation:
        borderGlow 7s ease infinite,
        floatingFrame 6s ease-in-out infinite;

    box-shadow:
        0 20px 60px rgba(0, 0, 0, .55),
        0 0 25px rgba(0, 145, 255, .40),
        0 0 65px rgba(90, 60, 255, .20);
}

@keyframes borderGlow {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes floatingFrame {
    0%, 100% {
        margin-top: 0;
    }
    50% {
        margin-top: -7px;
    }
}

/* ===============================
   MAIN VIDEO
================================ */

.main-video-inner {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
    border-radius: 13px;
    background: #020817;
}

.main-video-inner video {
    width: 100%;
    height: 100%;
    display: block;

    object-fit: contain;
    object-position: center;

    background: #020817;
}

/* ===============================
   VIDEO REFLECTION
================================ */

.video-reflection {
    position: absolute;
    inset: 0;
    z-index: 6;
    pointer-events: none;

    background: linear-gradient(
        125deg,
        rgba(255,255,255,.10),
        transparent 22%,
        transparent 75%,
        rgba(80,160,255,.10)
    );
}

/* ===============================
   ANIMATED SHINE
================================ */

.shine {
    position: absolute;
    width: 35%;
    height: 150%;
    top: -25%;
    left: -60%;
    z-index: 7;

    pointer-events: none;

    background: linear-gradient(
        100deg,
        transparent,
        rgba(255,255,255,.05),
        rgba(255,255,255,.30),
        rgba(120,200,255,.12),
        transparent
    );

    transform: skewX(-20deg);
    animation: premiumShine 6s ease-in-out infinite;
}

@keyframes premiumShine {
    0%, 15% {
        left: -60%;
    }
    75%, 100% {
        left: 140%;
    }
}

/* ===============================
   RESPONSIVE
================================ */

@media(max-width: 768px) {

    .video-container {
        height: 380px;
        border-radius: 15px;
    }

    .main-video-frame {
        width: 90%;
        height: 72%;
    }

    .digital-grid {
        background-size: 35px 35px;
    }
}

@media(max-width: 480px) {

    .video-section {
        padding: 20px 10px;
    }

    .video-container {
        height: 270px;
        border-radius: 12px;
    }

    .main-video-frame {
        width: 94%;
        height: 68%;
        border-radius: 10px;
    }

    .main-video-inner {
        border-radius: 8px;
    }

    .particle {
        width: 3px;
        height: 3px;
    }

}

/* REDUCE MOTION FOR ACCESSIBILITY */

@media (prefers-reduced-motion: reduce) {
    .video-container *,
    .video-container *::before,
    .video-container *::after {
        animation: none !important;
    }
}

</style>
</head>

<body>

<section class="video-section">

    <div class="video-container">

        <!-- ANIMATED BACKGROUND -->
        <div class="animated-bg"></div>

        <!-- DIGITAL GRID -->
        <div class="digital-grid"></div>

        <!-- PARTICLES -->
        <div class="particle p1"></div>
        <div class="particle p2"></div>
        <div class="particle p3"></div>
        <div class="particle p4"></div>
        <div class="particle p5"></div>
        <div class="particle p6"></div>
        <div class="particle p7"></div>
        <div class="particle p8"></div>

        <!-- OPTIONAL BACKGROUND VIDEO -->
        <video class="background-video"
               autoplay muted loop playsinline
               preload="metadata">

            <source src="assets/images/background.mp4"
                    type="video/mp4">

        </video>

        <!-- LIGHT BEAM -->
        <div class="light-beam"></div>

        <!-- MAIN VALLESOFT VIDEO -->
        <div class="main-video-frame">

            <div class="main-video-inner">

                <video autoplay muted loop playsinline
                       preload="metadata">

                    <source
                        src="assets/images/ValleSoft_video_1080p_optimized.mp4"
                        type="video/mp4">

                </video>

                <div class="video-reflection"></div>

            </div>

        </div>

        <!-- GLASS SHINE -->
        <div class="shine"></div>

    </div>

</section>

</body>
</html>
