<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="port.js"></script>

</head>
<body>

    <header>
        <div class="head">
        My Portfolio
        </div>
            <nav>
                <span><a href="#about"><i class="fa-solid fa-user "></i> About me</a></span>
                <span><a href="#Certificate"><i class="fa-solid fa-paperclip"></i> Certificates</a></span>
                <span><a href="#projects"><i class="fas fa-file-lines"></i> My Projects</a></span>
                <span><a href="#profiles"><i class="fas fa-globe"></i> Links</a></span>
                </span><a href="#contact"><i class="fa-solid fa-envelope"></i> Contact</a></span>
        </nav>
        
    </header>

    <main>

        <section id="about" class="hidden">
            <h2>About Me</h2>
            <p>Hello, I’m Nafisa Rehmani, a Computer Science and Engineering student with a passion for web development and software engineering. Throughout my academic journey, I have gained hands-on experience in HTML, CSS, JavaScript, React and PHP, along with a solid foundation in algorithms, data structures, and backend technologies. I have successfully completed some projects that highlight my ability to design and implement responsive, user-friendly web applications. I am committed to continuous learning and staying updated with the latest industry trends. I am eager to apply my skills and knowledge to real-world challenges and contribute to innovative web solutions.<br> Let's connect and explore potential opportunities for collaboration!</p>
        </section>

        <section id="certificate" class="hidden">
            <h2>Certificates</h2>      
            <a href="Advanced Business Decision Support Systems.pdf" target="_self"> Advance Business Decision Support Support System</a>  <br>
            <a href="The Joy Of Computing Using Python.pdf">Python</a><br>
            <a href="HTML CSS.pdf"> HTML5 & CSS3</a><br>
            <a href="Data Analytics with Python.pdf" target="_self">Data Analytics with Python</a>
        </section>

        <section id="projects" class="hidden">
            <h2>Projects</h2>
            <div class="project">
                <h3>Book Store</h3>
                <p> Tech Stack: HTML, CSS<br>
                    The project provides learning experience in building a website structure, styling the website and understanding web development fundamentals with a basic online Bookstore website.</p>
            </div>
            <div class="project">
                <h3>Expense tracker</h3>
                <p>Tech Satck: HTML, CSS, PHP, SQL <br>
                    Server: XAMPP<br>
                    The project provides a tool to manage finance. It help users understand their spending habits and make informed financial decisions.</p>
            </div>
        </section>

        <section id="profiles" class="hidden">
            <h2>Profiles</h2>      
            <a href="https://github.com/Nafisa-0" target="_self"><i class="fab fa-github"></i> GitHub</a>  <br>
            <a href="http://www.linkedin.com/in/nafisa-rehmani" target="_self"><i class="fab fa-linkedin"></i> LinkedIn</a><br>
            <a href="https://www.codechef.com/users/nafisa_rehmani" target="_self"><i class="fa-solid fa-code"></i> CodeChef</a><br>
            <a href="" target="_self"></a>
        </section>

        <section id="contact" class="hidden">
            <h2>Contact</h2>
            <form action="connections.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Send a message to the owner" required></textarea>
                </div>
                <button type="submit" onclick="">Send</button>
            </form>
        </section>

    </main>

    <footer>
        <p style="font-family: 'Times New Roman', Times, serif;">&copy; Nafisa Rehmani</p>
        <p><center><a href="mailto:nafisa.08rehmani@gmail.com"><i class="fa-solid fa-envelope"></i> nafisa.08rehmani@gmail.com </a></center> </p>
    </footer>

</body>
</html>
