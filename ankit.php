<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Background Hero</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #070b18;
      color: #fff;
    }

    /* Main section */
    .hero {
      position: relative;
      width: 100%;
      min-height: 650px;
      display: flex;
      align-items: center;
      overflow: hidden;
      isolation: isolate;
      background: #070b18;
    }

    /* Video background */
    .hero-video {
      position: absolute;
      inset: 0;
      /* width: 100%; */
      height: 100%;
      object-fit: cover;
      object-position: center;
      z-index: -2;
      left: 312px;
    }

    /* Dark overlay */
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      z-index: -1;
      background:
        linear-gradient(90deg,
          rgba(5, 8, 22, 0.98) 0%,
          rgba(5, 8, 22, 0.85) 35%,
          rgba(5, 8, 22, 0.30) 75%,
          rgba(5, 8, 22, 0.15) 100%);
    }

    /* Left-side text */
    .hero-content {
      width: 100%;
      max-width: 720px;
      padding: 90px 0 90px 8%;
      position: relative;
      z-index: 1;
      animation: fadeUp 1s ease both;
    }

    .badge {
      display: inline-block;
      padding: 10px 16px;
      margin-bottom: 24px;
      border: 1px solid rgba(122, 151, 255, 0.4);
      border-radius: 50px;
      background: rgba(69, 100, 255, 0.12);
      color: #b9caff;
      font-size: 12px;
      letter-spacing: 2px;
    }

    .hero h1 {
      font-size: clamp(40px, 5vw, 72px);
      line-height: 1.08;
      letter-spacing: -2px;
      font-weight: 750;
      margin-bottom: 25px;
    }

    .hero h1 span {
      background: linear-gradient(90deg, #65b4ff, #a78bfa);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .hero p {
      max-width: 530px;
      color: #c0c7d8;
      font-size: 17px;
      line-height: 1.8;
      margin-bottom: 32px;
    }

    .buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .btn {
      display: inline-block;
      padding: 15px 24px;
      border-radius: 8px;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      transition: 0.3s ease;
    }

    .btn-primary {
      color: #fff;
      background: linear-gradient(110deg, #367cff, #8057f5);
      box-shadow: 0 8px 28px rgba(74, 93, 255, 0.28);
    }

    .btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 12px 35px rgba(74, 93, 255, 0.45);
    }

    .btn-secondary {
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.3);
      background: rgba(255, 255, 255, 0.06);
    }

    .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.13);
    }

    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(25px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
      .hero {
        min-height: 650px;
      }

      .hero-content {
        padding: 80px 7%;
      }

      .hero h1 {
        font-size: clamp(36px, 9vw, 52px);
        letter-spacing: -1px;
      }

      .hero p {
        font-size: 15px;
      }

      .hero::before {
        background: linear-gradient(90deg,
            rgba(5, 8, 22, 0.9),
            rgba(5, 8, 22, 0.65));
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .hero-content {
        animation: none;
      }

      .btn {
        transition: none;
      }
    }
  </style>
</head>

<body>

  <section class="hero">

    <!-- Background video -->
    <video class="hero-video"
      autoplay
      muted
      loop
      playsinline
      poster="video-poster.jpg">
      <source src="assets/images/home1.mp4" type="video/mp4">
    </video>

    <!-- Left side text over video -->
    <div class="hero-content">

      <div class="badge">
        INNOVATION • TECHNOLOGY • GROWTH
      </div>

      <h1 class="font-display font-bold text-white text-4xl sm:text-5xl lg:text-[3.75rem] leading-[1.05] mt-6">
        All Your Customers
        <span class="gradient-text">One Powerful CRM.</span>
      </h1>

      <p>
        We create innovative digital experiences and powerful
        software solutions that help businesses grow, innovate,
        and stand out in a rapidly changing world.
      </p>

      <div class="buttons">
        <a href="#services" class="btn btn-primary">
          Explore Our Services →
        </a>

        <a href="#contact" class="btn btn-secondary">
          Let's Talk
        </a>
      </div>

    </div>

  </section>

</body>

</html>