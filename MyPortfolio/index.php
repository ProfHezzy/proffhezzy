<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="portfolio.css">
    <script src="https://kit.fontawesome.com/aa502709be.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">Hezekiah's Portfolio</div>
        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
            <a href="resume.pdf" class="btn">Download CV</a>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Hi, I'm Hezekiah</h1>
            <p>A Full Stack Web Developer, AI Specialist, Data Scientist, and Software Developer.</p>
            <a href="#projects" class="btn">View My Work</a>
        </div>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <div class="about-content">
            <img src="Passport1.jpg" alt="Hezekiah" class="profile-pic">
            <p>
                With a background in Computer Science, I'm a seasoned Full Stack Developer skilled in modern web technologies, an AI enthusiast 
                passionate about machine learning, a Data Scientist who loves transforming data into insights, and a Software Developer with 
                expertise in building scalable solutions. I have worked with various teams, contributed to open-source projects, and love 
                exploring the endless possibilities of technology.
            </p>
        </div>
    </section>
    <!---
    <section id="skills">
        <h2>Skills</h2>
        <div class="skills-content">
            <h3>Programming Languages</h3>
            <p>JavaScript, Python, PHP, SQL, HTML & CSS</p>

            <h3>Frameworks & Libraries</h3>
            <p>React, Node.js, Django, Laravel</p>

            <h3>Data Science & AI</h3>
            <p>Pandas, NumPy, Scikit-learn, TensorFlow, Keras</p>

            <h3>Tools</h3>
            <p>Git, Docker, AWS, MySQL, Tableau</p>
        </div>
    </section>
    --->
    <section id="projects">
        <h2>Skills</h2>
        <div class="projects-grid">
            <div class="project-card">
                <h3>Programming Languages</h3>
                <i class="fa-solid fa-code"></i>
                <p>JavaScript, Python, PHP, SQL, HTML & CSS</p>
            </div>
            <div class="project-card">
                <h3>Frameworks & Libraries</h3>
                <i class="fa-brands fa-react"></i>
                <p>React, Node.js, Django, Laravel</p>
            </div>
            <div class="project-card">
                <h3>Data Science & AI</h3>
                <i class="fa-solid fa-file-excel"></i>
                <p>Pandas, NumPy, TensorFlow, MS-Excel</p>
            </div>
            <div class="project-card">
                <h3>Tools</h3>
                <i class="fa-brands fa-github"></i>
                <p>Git, Docker, AWS, MySQL, Tableau</p>
            </div>
        </div>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <h3>Blog Website</h3>
                <p>Developed a complex Blog that allow registration, loging in publishing a post, like and comment on posts using HTML, CSS, JavaScript, Ajax, PHP and SQL.</p>
                <a href="https://github.com/ProfHezzy/HezzyBlog.git" class="btn">View on GitHub</a>
            </div>
            <div class="project-card">
                <h3>E-commerce Website</h3>
                <p>A fully functional e-commerce platform where users can place and order, add item to cat, and view an item built with HTML, CSS, JavaScript, PHP and MySQL.</p>
                <a href="https://yourwebsite.com/ecommerce" class="btn">Live Demo</a>
            </div>
            <div class="project-card">
                <h3>School Management System</h3>
                <p>Built a School Management System that allows inputing of result, report card, etc using HTML, CSS, JavaScript, Ajax, PHP, and SQL.</p>
                <a href="https://github.com/yourprofile/data-dashboard" class="btn">View on GitHub</a>
            </div>
        </div>
    </section>

    <section id="blog">
        <h2>Latest Blog Posts</h2>
        <div class="blog-list">
            <div class="blog-post">
                <h3>Understanding Neural Networks</h3>
                <p>A beginner's guide to neural networks and deep learning...</p>
                <a href="blog/neural-networks" class="btn">Read More</a>
            </div>
            <div class="blog-post">
                <h3>Building RESTful APIs with Node.js</h3>
                <p>Learn how to build scalable RESTful APIs using Express and MongoDB...</p>
                <a href="blog/restful-apis" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="contact_process.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn">Send Message</button>
        </form>
        <div class="social-links">
            <a href="https://linkedin.com/in/profhezzy" target="_blank">LinkedIn</a>
            <a href="https://github.com/ProfHezzy" target="_blank">GitHub</a>
            <a href="https://twitter.com/Kvng_Hezzy" target="_blank">Twitter</a>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>Connect with us on social media:</p>
            <div class="social-links">
                <a href="https://wa.me/+2348140272765" target="_blank"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                <a href="https://facebook.com/KvngHezzy" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
                <a href="https://linkedin.com/in/profhezzy" target="_blank"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
                <a href="https://twitter.com/Kvng_Hezzy" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a>
                <a href="https://instagram.com/prof_hezzy94" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
                <a href="https://github.com/ProfHezzy" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
                <a href="#home">Back to Top</a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> Hezekiah's Portfolio. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>