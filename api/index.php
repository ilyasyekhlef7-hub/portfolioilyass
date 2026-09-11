<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Adam | Web Developer</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0b0b0f;
            color: #ffffff;
            line-height: 1.6;
        }

        /* NAVBAR */

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(11, 11, 15, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid #222;
        }

        nav {
            max-width: 1100px;
            margin: auto;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #a855f7;
        }

        .logo span {
            color: #ffffff;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        nav a:hover {
            color: #a855f7;
        }

        /* HERO */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px 50px;
            background:
                radial-gradient(circle at 80% 20%, #35105f 0, transparent 30%),
                #0b0b0f;
        }

        .hero-content {
            max-width: 1100px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .hero h1 {
            font-size: 60px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #a855f7;
        }

        .hero h2 {
            font-size: 25px;
            color: #cccccc;
            margin-bottom: 20px;
        }

        .hero p {
            color: #aaa;
            max-width: 550px;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 13px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .primary {
            background: #a855f7;
            color: white;
        }

        .primary:hover {
            background: #9333ea;
            transform: translateY(-3px);
        }

        .secondary {
            border: 1px solid #a855f7;
            color: white;
        }

        .secondary:hover {
            background: #a855f7;
        }

        /* CODE CARD */

        .code-card {
            background: #111116;
            border: 1px solid #29292f;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.15);
        }

        .dots {
            display: flex;
            gap: 7px;
            margin-bottom: 20px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #555;
        }

        .code {
            font-family: Consolas, monospace;
            color: #ddd;
        }

        .purple {
            color: #c084fc;
        }

        .green {
            color: #86efac;
        }

        .blue {
            color: #60a5fa;
        }

        /* GENERAL */

        section {
            padding: 100px 20px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .section-title span {
            color: #a855f7;
        }

        .section-title p {
            color: #999;
        }

        /* ABOUT */

        .about {
            background: #0f0f14;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .about-text p {
            color: #aaa;
            margin-bottom: 15px;
        }

        .info {
            display: grid;
            gap: 15px;
        }

        .info-box {
            background: #15151b;
            border: 1px solid #25252c;
            padding: 18px;
            border-radius: 10px;
        }

        .info-box strong {
            color: #a855f7;
        }

        /* SKILLS */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .skill {
            background: #15151b;
            border: 1px solid #25252c;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            transition: 0.3s;
        }

        .skill:hover {
            transform: translateY(-7px);
            border-color: #a855f7;
        }

        .skill h3 {
            margin-bottom: 10px;
        }

        .skill p {
            color: #999;
            font-size: 14px;
        }

        /* PROJECTS */

        .projects {
            background: #0f0f14;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .project {
            background: #15151b;
            border: 1px solid #29292f;
            border-radius: 15px;
            padding: 30px;
            transition: 0.3s;
        }

        .project:hover {
            transform: translateY(-8px);
            border-color: #a855f7;
        }

        .project-number {
            color: #a855f7;
            font-size: 14px;
            font-weight: bold;
        }

        .project h3 {
            font-size: 25px;
            margin: 10px 0;
        }

        .project p {
            color: #999;
            margin-bottom: 20px;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: #24152e;
            color: #c084fc;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        /* CONTACT */

        .contact-box {
            max-width: 700px;
            margin: auto;
            text-align: center;
        }

        .contact-box p {
            color: #999;
            margin-bottom: 30px;
        }

        .contact-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* FOOTER */

        footer {
            border-top: 1px solid #222;
            text-align: center;
            padding: 30px;
            color: #777;
        }

        /* MOBILE */

        @media (max-width: 800px) {

            nav ul {
                display: none;
            }

            .hero-content,
            .about-content {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 42px;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 35px;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <header>
        <nav>
            <div class="logo">
                Ilyas<span>.</span>
            </div>

            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>


    <!-- HERO -->

    <section class="hero" id="home">

        <div class="hero-content">

            <div>

                <h1>
                    Hi, I'm <span>ilyas</span>
                </h1>

                <h2>
                    Web Development Student & Future Full-Stack Developer
                </h2>

                <p>
                    I'm a Digital Development student from Tangier, Morocco.
                    I enjoy creating modern websites, learning new technologies
                    and turning ideas into useful digital solutions.
                </p>

                <div class="buttons">

                    <a href="#projects" class="btn primary">
                        View My Projects
                    </a>

                    <a href="#contact" class="btn secondary">
                        Contact Me
                    </a>

                </div>

            </div>


            <div class="code-card">

                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>

                <div class="code">

                    <p>
                        <span class="purple">const</span>
                        developer = {
                    </p>

                    <br>

                    <p>
                        &nbsp;&nbsp;name:
                        <span class="green">"Ilyas"</span>,
                    </p>

                    <p>
                        &nbsp;&nbsp;location:
                        <span class="green">"Tangier, Morocco"</span>,
                    </p>

                    <p>
                        &nbsp;&nbsp;field:
                        <span class="green">"Web Development"</span>,
                    </p>

                    <p>
                        &nbsp;&nbsp;skills:
                        [
                    </p>

                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="green">"HTML"</span>,
                        <span class="green">"CSS"</span>,
                    </p>

                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="green">"JavaScript"</span>,
                        <span class="green">"PHP"</span>,
                    </p>

                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="green">"Python"</span>,
                        <span class="green">"SQL"</span>
                    </p>

                    <p>
                        &nbsp;&nbsp;]
                    </p>

                    <p>};</p>

                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT -->

    <section class="about" id="about">

        <div class="container">

            <div class="section-title">

                <h2>About <span>Me</span></h2>

                <p>
                    A little bit about my journey
                </p>

            </div>


            <div class="about-content">

                <div class="about-text">

                    <p>
                        My name is Ilyas, and I am from Tangier, Morocco.
                        I am studying Digital Development and building my
                        skills in web development.
                    </p>

                    <p>
                        I work with HTML, CSS and JavaScript to create
                        responsive interfaces. I am also learning PHP,
                        Python and SQL to understand backend development
                        and databases.
                    </p>

                    <p>
                        My goal is to become a strong Full-Stack Developer
                        capable of designing, developing and deploying
                        complete web applications.
                    </p>

                </div>


                <div class="info">

                    <div class="info-box">
                        <strong>🎓 Education</strong>
                        <br>
                        Digital Development
                    </div>

                    <div class="info-box">
                        <strong>📍 Location</strong>
                        <br>
                        Tangier, Morocco
                    </div>

                    <div class="info-box">
                        <strong>💻 Focus</strong>
                        <br>
                        Web Development
                    </div>

                    <div class="info-box">
                        <strong>🚀 Goal</strong>
                        <br>
                        Full-Stack Developer
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- SKILLS -->

    <section id="skills">

        <div class="container">

            <div class="section-title">

                <h2>My <span>Skills</span></h2>

                <p>
                    Technologies I'm learning and working with
                </p>

            </div>


            <div class="skills-grid">

                <div class="skill">
                    <h3>HTML</h3>
                    <p>Semantic and structured web pages</p>
                </div>

                <div class="skill">
                    <h3>CSS</h3>
                    <p>Responsive design and modern interfaces</p>
                </div>

                <div class="skill">
                    <h3>JavaScript</h3>
                    <p>Interactive websites and DOM manipulation</p>
                </div>

                <div class="skill">
                    <h3>PHP</h3>
                    <p>Backend development and CRUD applications</p>
                </div>

                <div class="skill">
                    <h3>Python</h3>
                    <p>Programming and application development</p>
                </div>

                <div class="skill">
                    <h3>SQL</h3>
                    <p>Database design and queries</p>
                </div>

                <div class="skill">
                    <h3>Git</h3>
                    <p>Version control and project management</p>
                </div>

                <div class="skill">
                    <h3>VS Code</h3>
                    <p>Development environment</p>
                </div>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->

    <section class="projects" id="projects">

        <div class="container">

            <div class="section-title">

                <h2>My <span>Projects</span></h2>

                <p>
                    Some of the projects I have worked on
                </p>

            </div>


            <div class="projects-grid">


                <div class="project">

                    <div class="project-number">
                        PROJECT 01
                    </div>

                    <h3>KagiTech — Key Tracker</h3>

                    <p>
                        A smart Bluetooth key finder concept connected
                        to a smartphone application. The project focuses
                        on helping users find lost keys and everyday objects.
                    </p>

                    <div class="tags">

                        <span class="tag">IoT</span>
                        <span class="tag">Bluetooth</span>
                        <span class="tag">Mobile App</span>
                        <span class="tag">Entrepreneurship</span>

                    </div>

                </div>


                <div class="project">

                    <div class="project-number">
                        PROJECT 02
                    </div>

                    <h3>E-Commerce Website</h3>

                    <p>
                        A small e-commerce website project focused on
                        product presentation, responsive design and
                        integrating backend and database functionality.
                    </p>

                    <div class="tags">

                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>

                    </div>

                </div>


                <div class="project">

                    <div class="project-number">
                        PROJECT 03
                    </div>

                    <h3>CRUD Application</h3>

                    <p>
                        A database application allowing users to add,
                        modify, delete and search records using PHP
                        and MySQL.
                    </p>

                    <div class="tags">

                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">SQL</span>
                        <span class="tag">CRUD</span>

                    </div>

                </div>


                <div class="project">

                    <div class="project-number">
                        PROJECT 04
                    </div>

                    <h3>Responsive Web Interfaces</h3>

                    <p>
                        Development of responsive web pages using
                        HTML, CSS, JavaScript and Bootstrap for
                        desktop, tablet and mobile screens.
                    </p>

                    <div class="tags">

                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Bootstrap</span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- CONTACT -->

    <section id="contact">

        <div class="container">

            <div class="section-title">

                <h2>Let's <span>Connect</span></h2>

                <p>
                    I'm always interested in learning, collaborating
                    and working on new projects.
                </p>

            </div>


            <div class="contact-box">

                <p>
                    Interested in working together or discussing a project?
                    Feel free to contact me.
                </p>

                <div class="contact-links">

                    <a href="mailto:your.email@gmail.com"
                       class="btn primary">
                        Email Me
                    </a>

                    <a href="#"
                       class="btn secondary">
                        LinkedIn
                    </a>

                    <a href="#"
                       class="btn secondary">
                        GitHub
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <p>
            © 2026 Adam. All Rights Reserved.
        </p>

        <p>
            Built with HTML & CSS ❤️
        </p>

    </footer>


</body>
</html>