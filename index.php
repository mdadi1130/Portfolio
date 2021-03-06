<?php
$themeClass = '';
if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
  $themeClass = 'dark-theme';
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Michael Dadi</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Michael Dadi">
    <meta name="description" content="Michael Dadi's portfolio site">

    <meta property="og:title" content="Michael Dadi">
    <meta property="og:description" content="Michael Dadi's portfolio site">
    <meta property="og:url" content="/index.php">

    <link rel="stylesheet" href="styles/main_styles.css">
</head>

<body class="<?php echo $themeClass; ?>">
    <div id="content">
        <nav id="navbar">
            <ul>
                <li><a class="nav-link" href="index.php">MD</a></li>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#experience">Experience</a></li>
                <li><a class="nav-link" href="#projects">Projects</a></li>
                <li><a class="nav-link" href="#contact">Contact</a></li>
                <li><a class="nav-link" href="assets/Resume.pdf" target="_blank">Resume</a></li>
            </ul>
        </nav>
        <!--    Toggle light/dark mode -->
        <input type="checkbox" id="switch" name="mode">
        <label for="switch"></label>

        <div class="tooltip">
            <span class="tooltip-text">Switch between light & dark modes</span>
        </div>
        <main>
            <section id="intro">
                <h1>Hi,</h1>
                <h1>I'm Michael,</h1>
                <h1>software developer</h1>
                <p>I am a software engineer based out of New York City specializing in Android, Python, and React applications.</p>
                <a class="styled-btn" href="mailto:mdadi22@gmail.com">Get In Contact</a>
            </section>

            <section id="about">
                <h2>About Me</h2>
                <div class="container">
                    <div class="container__text">
                        <p>Hi there! My name is Michael Dadi, and I am a software engineer based in NYC.</p>
                        <p>I have a passion for developing modern applications and websites with a clean look & feel. I also have a
                            bit of a knack for design!</p>
                        <p>I am on track to graduate <a href="https://www.pace.edu/seidenberg" target="_blank">Pace University</a>
                            in Fall 2021 with a B.S. in Computer Science. I always strive to expand my knowledge and keep up to date
                            with new technologies, and recently I have been particularly interested in machine learning!</p>
                        <p>Here are some languages and frameworks I am familiar with:</p>
                        <ul class="skills-list">

                            <li>Kotlin</li>
                            <li>React</li>
                            <li>JavaScript</li>

                            <li>HTML & (S)CSS</li>
                            <li>Python</li>
                            <li>Java</li>
                        </ul>
                        <p>Other systems & technologies I am skilled in:</p>
                        <ul class="skills-list">

                            <li>Amazon AWS</li>
                            <li>SQL</li>
                            <li>Firebase</li>

                            <li>Git</li>
                            <li>Networking</li>
                            <li>Algorithms & Data Structures</li>
                        </ul>
                    </div>
                    <div class="container__image">
                        <img src="assets/images/avatar.jpg" alt="Avatar" height="250" width="250">
                    </div>
                </div>
            </section>

            <section id="experience">
                <h2>My Experience</h2>

                <h3>Town of North Hempstead</h3>
                <h4>Helpdesk Specialist</h4>
                <p>Responded to helpdesk requests to fix computer and software issues, trained users on various
                software, and developed flyers for public release using digital graphics software.</p>

                <h3>18 Realty</h3>
                <h4>Web Development Intern</h4>
                <p>Utilized HTML & CSS to design and maintain company website and blog, managed social media accounts,
                and assisted staff with day-to-day technology issues.</p>
            </section>

            <section id="projects">
                <h2>My Portfolio</h2>

                <h3>WellBeing</h3>
                <div class="project-block">
                    <p class="project-desc">An all-in-one medical services Android Kotlin app to make appointments, order prescriptions, track
                        nutrition, and more.</p>
                    <img class="project-img" src="assets/images/wellbeing.PNG" alt="WellBeing project screenshot">
                </div>

                <h3>Extra</h3>
                <div class="project-block">
                    <p class="project-desc">A React Expo news app with real-time incident reporting and fake news filtering.</p>
                    <img class="project-img" src="assets/images/extra.PNG" alt="Extra project screenshot">
                </div>

                <h3>Playlistic</h3>
                <div class="project-block">
                    <p class="project-desc">A React Native app allowing users to create playlists based on a song with the Spotify API.</p>
                    <img class="project-img" src="" alt="Playlistic project screenshot">
                </div>

                <h3>PacExchange</h3>
                <div class="project-block">
                    <p class="project-desc">An Android Java bartering app for Pace University students.</p>
                    <img class="project-img" src="assets/images/pacexchange.PNG" alt="PacExchange project screenshot">
                </div>
            </section>

            <section id="contact">
                <h2>Contact Me</h2>
                <h3>I'm currently seeking new opportunities, both full-time and freelance. If you're interested or have any
                    questions, shoot me an email!</h3>
                <a class="styled-btn" href="mailto:mdadi22@gmail.com">Get to Know Me</a>
            </section>
        </main>
        <footer>
            <a href="https://www.github.com/mdadi1130" target="_blank">Designed & Built by Michael Dadi</a>
        </footer>

    </div>
    <div id="particles-js"></div>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
</body>
</html>
