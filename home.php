
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudy - Học IELTS Online</title>
    <style>
      :root {
  --primary-color: #3f51b5;
  --secondary-color: #1a237e;
  --accent-color: #536dfe;
  --background-color: #E3F2FD;
  --text-color: #1a237e;
  --shadow-color: rgba(63, 81, 181, 0.1);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  color: var(--text-color);
  line-height: 1.7;
}

/* Header Styles */
.header {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(12px);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1000;
  box-shadow: 0 8px 32px var(--shadow-color);
}

.nav-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 1.25rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.logo:hover {
  transform: translateX(5px);
}

.logo img {
  width: 44px;
  height: auto;
}

.logo-text {
  font-size: 1.75rem;
  font-weight: 700;
  color: var(--primary-color);
  letter-spacing: -0.02em;
}

/* User Info Section */
.user-info {
  position: fixed;
  top: 90px;
  right: 24px;
  background: rgba(255, 255, 255, 0.95);
  padding: 1.25rem;
  border-radius: 16px;
  box-shadow: 0 8px 32px var(--shadow-color);
  backdrop-filter: blur(12px);
  z-index: 900;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.user-info:hover {
  transform: translateY(-5px);
}

.user-info p {
  margin: 8px 0;
  font-size: 0.95rem;
  color: var(--secondary-color);
  font-weight: 500;
}

/* Navigation Menu */
.nav-menu {
  display: flex;
  gap: 2.5rem;
}

.nav-menu a {
  text-decoration: none;
  color: var(--text-color);
  font-weight: 600;
  padding: 0.75rem 1.25rem;
  border-radius: 30px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
}

.nav-menu a:hover {
  background: var(--primary-color);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px var(--shadow-color);
}

/* Main Content */
.main-content {
  margin-top: 120px;
  padding: 2.5rem;
  max-width: 1400px;
  margin-left: auto;
  margin-right: auto;
}

/* Hero Section */
.hero {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 5rem;
  padding: 5rem 0;
  align-items: center;
}

.hero-text {
  padding-right: 2.5rem;
}

.hero-text h1 {
  font-size: 3.5rem;
  color: var(--secondary-color);
  margin-bottom: 1.75rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1.2;
}

.hero-text p {
  font-size: 1.25rem;
  margin-bottom: 2.5rem;
  color: var(--text-color);
  opacity: 0.9;
}

.hero-image {
  position: relative;
  transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.hero-image:hover {
  transform: translateY(-10px) rotate(2deg);
}

.hero-image img {
  width: 100%;
  border-radius: 24px;
  box-shadow: 0 16px 48px var(--shadow-color);
}

.btn {
  display: inline-block;
  padding: 1rem 2.5rem;
  background: var(--primary-color);
  color: white;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 4px 12px var(--shadow-color);
}

.btn:hover {
  background: var(--secondary-color);
  transform: translateY(-2px);
  box-shadow: 0 8px 24px var(--shadow-color);
}


.logout-btn {
  padding: 0.75rem 1.75rem;
  background: transparent;
  border: 2px solid var(--primary-color);
  color: var(--primary-color);
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.logout-btn:hover {
  background: var(--primary-color);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px var(--shadow-color);
}

/* Hamburger Menu Styles */
.hamburger {
  display: none;
  cursor: pointer;
  padding: 12px;
  z-index: 1002;
  border-radius: 8px;
  transition: background 0.3s ease;
}

.hamburger:hover {
  background: rgba(63, 81, 181, 0.1);
}

.hamburger-lines {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.hamburger span {
  display: block;
  width: 32px;
  height: 3px;
  background-color: var(--primary-color);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border-radius: 4px;
}

/* Mobile Menu Styles */
.mobile-menu {
  display: none;
  position: fixed;
  top: 0;
  right: -100%;
  width: 300px;
  height: 100vh;
  background: rgba(255, 255, 255, 0.98);
  padding: 90px 0 20px;
  transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 1000;
  box-shadow: -8px 0 32px var(--shadow-color);
  backdrop-filter: blur(12px);
}

.mobile-menu.active {
  right: 0;
}

.mobile-user-info {
  padding: 24px;
  background: var(--background-color);
  border-bottom: 1px solid var(--shadow-color);
  margin-bottom: 20px;
}

.mobile-user-info p {
  color: var(--secondary-color);
  margin: 10px 0;
  font-size: 0.95rem;
  font-weight: 500;
}

.mobile-nav-links {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.mobile-nav-links a {
  padding: 16px 24px;
  color: var(--text-color);
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.mobile-nav-links a:hover {
  background: rgba(63, 81, 181, 0.1);
  color: var(--primary-color);
}

.mobile-logout-btn {
  margin: 24px;
  display: block;
  text-align: center;
  padding: 14px 24px;
  background: transparent;
  border: 2px solid var(--primary-color);
  color: var(--primary-color);
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.mobile-logout-btn:hover {
  background: var(--primary-color);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px var(--shadow-color);
}

.overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3);
  backdrop-filter: blur(4px);
  z-index: 999;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

@media (max-width: 768px) {
  .hamburger {
    display: block;
  }

  .nav-container .nav-menu,
  .nav-container .logout-btn {
    display: none;
  }

  .hamburger.active span:nth-child(1) {
    transform: translateY(9px) rotate(45deg);
  }

  .hamburger.active span:nth-child(2) {
    opacity: 0;
  }

  .hamburger.active span:nth-child(3) {
    transform: translateY(-9px) rotate(-45deg);
  }

  .mobile-menu {
    display: block;
  }

  .overlay.active {
    display: block;
  }

  .hero {
    grid-template-columns: 1fr;
    padding: 3rem 0;
    gap: 3rem;
  }

  .hero-text {
    padding-right: 0;
  }

  .hero-text h1 {
    font-size: 2.5rem;
  }
}

@media (max-width: 480px) {
  .nav-container {
    padding: 1rem;
  }

  .logo-text {
    font-size: 1.5rem;
  }

  .main-content {
    padding: 1.5rem;
  }

  .mobile-menu {
    width: 100%;
  }
}



.container111 {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
      }

      h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #1a237e; /* Cyan for the heading */
      }

      .sub-heading {
        font-size: 1.2rem;
        margin-bottom: 30px;
      }

      .sub-heading a {
        color:#1a237e;
        text-decoration: none;
      }

      .sub-heading a:hover {
        text-decoration: underline;
      }

      /* Steps Section */
      .steps {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
        margin-top: 20px;
      }

      .step {
        text-align: center;
        flex: 1 1 calc(50% - 20px); /* Two items per row */
      }

      .step img {
        width: 80px;
        height: 80px;
        margin-bottom: 10px;
      }

      .step h2 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: #1a237e;
      }

      .step p {
        font-size: 1rem;
        line-height: 1.5;
        color: #1a237e;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .step {
          flex: 1 1 100%; /* Single column on smaller screens */
        }
      }


      .footer {
  background-color: #fff;
}

.footer .row-top {
  padding: 131px 0 0;
  display: flex;
  justify-content: space-between;
}

.footer .title {
  color: #2e2e2e;
  font-size: 1.8rem;
  font-weight: 500;
  line-height: normal;
}

.footer .list li {
  margin-top: 18px;
  color: #535353;
  font-size: 1.6rem;
  line-height: normal;
}

.footer .list li:first-child {
  margin-top: 26px;
}

.footer li a {
  color: #535353;
  font-size: 1.6rem;
  line-height: normal;
  text-decoration: none; /* Added from .hello class */
}

.footer .list-item5 a {
  display: flex;
  align-items: center;
}

.footer .list .social-icon {
  margin-right: 9px;
}

.footer .copyright {
  margin-top: 80px;
  padding-bottom: 50px;
  text-align: center;
  color: #b0b5b4;
  font-size: 1.8rem;
  line-height: normal;
}

/* Media queries for mobile devices */
@media screen and (max-width: 768px) {
  .footer .row-top {
    padding: 60px 0 0; /* Reduced padding for mobile */
    flex-direction: column; /* Stack items vertically on mobile */
  }

  .footer .title {
    font-size: 1.6rem; /* Smaller font size for mobile */
  }

  .footer .list li,
  .footer li a {
    font-size: 1.4rem; /* Smaller font size for mobile */
    margin-top: 12px; /* Reduced spacing */
  }

  .footer .list li:first-child {
    margin-top: 15px; /* Reduced spacing */
  }

  .footer .copyright {
    margin-top: 40px; /* Reduced margin */
    padding-bottom: 30px; /* Reduced padding */
    font-size: 1.4rem; /* Smaller font size for mobile */
  }
}

/* For very small devices */
@media screen and (max-width: 480px) {
  .footer .row-top {
    padding: 40px 15px 0; /* Added horizontal padding */
  }

  .footer .title {
    font-size: 1.5rem;
  }

  .footer .list li,
  .footer li a {
    font-size: 1.3rem;
  }
}
    </style>
</head>
<body>
<header class="header">
        <div class="nav-container">
            <div class="logo">
                <img src="Remove-bg.ai_1734260849847.png" alt="Estudy Logo">
                <span class="logo-text">Estudy</span>
            </div>

            <!-- Hamburger Menu Button -->
            <div class="hamburger">
                <div class="hamburger-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="nav-menu">
                <a href="./reading.html">Học từ vựng</a>
                <a href="./listening.html">Giới thiệU</a>
                <a href="./flappy_bird_game/game.html">Hướng dẫn </a>


            </nav>
            <a href="logout.php" class="logout-btn">Đăng xuất</a>

            <!-- Mobile Menu -->
            <div class="mobile-menu">
                <div class="mobile-user-info">
                    <p>Current Date and Time (UTC): <?php echo date('Y-m-d H:i:s'); ?></p>
                    <p>Current User's Login: <?php echo htmlspecialchars($_SESSION['name']); ?></p>
                </div>
                <div class="mobile-nav-links">
                    <a href="./reading.html">Học từ vựng</a>
                    <a href="./listening.html">Giới thiệU</a>
                    <a href="./flappy_bird_game/game.html">Hướng dẫn</a>
 

                </div>
                <a href="logout.php" class="mobile-logout-btn">Đăng xuất</a>
            </div>
        </div>
    </header>

    <div class="overlay"></div>



    <main class="main-content">
        <section class="hero">
            <div class="hero-text">
                <h1>Học IELTS Online<br>cùng <span style="color: var(--primary-color)">Estudy</span></h1>
                <p>Nâng cao kỹ năng Reading và Listening với phương pháp học tập hiệu quả và thú vị.</p>
                <a href="#features" class="btn">Khám phá ngay</a>
            </div>
            <div class="hero-image">
                <img src="https://placehold.co/600x400" alt="IELTS Study">
            </div>
        </section>


    </main>
    <div class="container111">
      <h1>Estudy có gì ?</h1>
      <p class="sub-heading">
        sgdfsdgsdgsdgsdgsdgsdgsdfgfgf <a href="#">gdfgsgfewtfsgwegwẻwẻwẻwe</a>, you
        dfgdfghsghwgsgsdgsdfsd
      </p>

      <div class="steps">
        <!-- Step 1 -->
        <div class="step">
          <img src="listen.png" alt="Headphones Icon" />
          <h2>Listening</h2>
          <p>
           sgsfgsdfgdfghsđgghrfghfgvthnjntvntfhcggrtyn
          </p>
        </div>

        <!-- Step 2 -->
        <div class="step">
          <img src="reading-book.png" alt="Keyboard Icon" />
          <h2>Reading</h2>
          <p>
            ksdjksdbhfjksfgsìgsìgíhfuiohdhuieuhuihjh  ihfui àiauiòh
          </p>
        </div>

        <!-- Step 3 -->
        <div class="step">
          <img src="grammar (1).png" alt="Check Icon" />
          <h2>Grammar</h2>
          <p>
           hfsjfhjksdhjkfskjfkskfsdgjkcfbhsjkvkjsdvbhksjkfhsjklhgvjklshfjsh
          </p>
        </div>

        <!-- Step 4 -->
        <div class="step">
          <img src="abc.png" alt="Speaker Icon" />
          <h2>Vocabulary</h2>
          <p>
            gfdg dfgdf fdg, dg gdfg dg dg gdfg dgdfgd, dfgdf dfgd
            dfgdf dfgdfg dfgfd dfgdfdfgddfgd dfdfgfd
          </p>
        </div>
      </div>
    </div>
    <footer class="footer">
        <div class="main-content">
            <div class="body">
                <div class="row-top">
                    <!-- column 1 -->
                    <div class="column">
                        
                    </div>
                    <!-- column 2 -->
                    <div class="column">
                        <h3 class="title" text-decoration: none;>sdfsdf</h3>
                        <ul class="list">
                            <li>
                                <a class="hello" href="#!">sdfsd</a>
                            </li>
                            <li>
                                <a class="hello" href="#!">fsdfsd</a>
                            </li>
                            <li>
                                <a class="hello" href="#!">sdfsd</a>
                            </li>
                        </ul>
                    </div>
                    <!-- column 3 -->
                    <div class="column">
                        <h3 class="title">sdfsd</h3>
                        <ul class="list">
                            <li>
                                <a class="hello" href="#!" >sdfds sfdsd</a>
                            </li>
                            <li>
                                <a class="hello" href="#!">dsfdssfds</a>
                            </li>
                            <li>
                                <a class="hello" href="#!">sdfsdfsdf</a>
                            </li>
                            <li>
                                <a class="hello" href="#!">sdfdsf</a>
                            </li>
                        </ul>
                    </div>
                    <!-- column 4 -->
                    <div class="column">
                        <h3 class="title">sdfsdf</h3>
                        <ul class="list">
                            <li>
                                <a class="hello" href="#!">fsdff</a>
                            </li>
                            <li>
                                <a class="hello" href="#!">sdfsd sdfsd</a>
                            </li>
                        </ul>
                    </div>

                    <!-- column 5 -->
                    <div class="column">
                        <h3 class="title">Be social</h3>
                        <ul class="list list-item5">
                            <li>
                                <a class="hello" href="#!">
                                    <img src="./assets/icon/twitter.svg" alt="Twitter" class="social-icon">
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a class="hello" href="#!">
                                    <img src="./assets/icon/fb.svg" alt="Facebook" class="social-icon">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a class="hello" href="#!">
                                    <img src="./assets/icon/insta.svg" alt="Instagram" class="social-icon">
                                    Instagram
                                </a>
                            </li>
                         

                        </ul>
                    </div>
                </div>

                <!-- copyright  -->
                <div class="cpr-block">
                    <p class="copyright">© Copyright 2025 by Estudy. All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Add mobile menu toggle functionality if needed
        const menuButton = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        if (menuButton) {
            menuButton.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
        }



        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.overlay');

            function toggleMenu() {
                hamburger.classList.toggle('active');
                mobileMenu.classList.toggle('active');
                overlay.classList.toggle('active');
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'auto';
            }

            hamburger.addEventListener('click', toggleMenu);
            overlay.addEventListener('click', toggleMenu);

            // Close menu when clicking mobile nav links
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-links a, .mobile-logout-btn');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', toggleMenu);
            });

            // Reset menu state on window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    hamburger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    overlay.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>
</body>
</html>