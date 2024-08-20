<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/home.js') }}"></script>
</head>
<body>
    <header>
        <nav>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="bar-buttons" id="navbar">
                <li><a href="#home">HOME</a></li>
                <li><a href="#profile">PROFILE</a></li>
                <li><a href="#projects">PROJECTS</a></li>
                <li><a href="#contacts">CONTACTS</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home" class="home">
        <h1>Hello, I'm</h1>
        <h2>Abdullah Nasih Jasir</h2>
        <p>WELCOME TO MY RESUME</p>
        <a href="#profile" class="home-to-profile">Get to Know More About Me</a>
    </section>

    <section id="profile" class="profile">
        <div class="profile-content">
            <div class="profile-picture">
                <img src="images/IMG_5432.png" alt="Abdullah's Picture">
            </div>
            <div class="profile-text">

                <div class="profile-header">Work Experience</div>
                <div class="profile-bullet-item">
                    <div>PT. Gemala Kempa Daya (Astra Otoparts Group)</div>
                    <div class="profile-date">Jul, 2024</div>
                </div>
                <div class="profile-tabbed-item">Website Developer</div>

                <div class="profile-header">Educations</div>
                <div class="profile-bullet-item">
                    <div>Institut Teknologi Sepuluh Nopember, Surabaya</div>
                    <div class="profile-date">Jul, 2024</div>
                </div>
                <div class="profile-tabbed-item">Top 50 Nationally in the Bangkit Academy Product Capstone Project</div>

                <div class="profile-header">Courses Experiences</div>
                <div class="profile-bullet-item">
                    <div>Bangkit Academy by Google, Tokopedia, Gojek, & Traveloka</div>
                    <div class="profile-date">Feb, 2024 - Jul, 2024</div>
                </div>
                <div class="profile-tabbed-item">Learned: Machine Learning, Data Scientist, Data Analysis</div>

            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <h1>Profile Section</h1>
        <p>Details about Abdullah's profile.</p>
    </section>

    <div id="contacts" class="contacts">
        <h1>Get in Touch</h1>
        <div class="contact-links">
            <a href="mailto:your-email@example.com">
                <img src="path-to-email-icon.png" alt="Email Icon" class="contact-icon"> Email
            </a>
            <a href="https://github.com/njabdullah" target="_blank">
                <img src="path-to-github-icon.png" alt="Github Icon" class="contact-icon"> Github
            </a>
            <a href="https://www.linkedin.com/in/abdullahnasihjasir" target="_blank">
                <img src="path-to-linkedin-icon.png" alt="LinkedIn Icon" class="contact-icon"> LinkedIn
            </a>
        </div>
    </div>

</body>
</html>