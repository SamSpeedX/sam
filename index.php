<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Developer & Electrical Technician</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="light-mode">

    <header>
        <h1>Simon Chikira</h1>
        <p>Website Developer & Electrical Technician</p>
        <button id="theme-toggle">Switch to Dark Mode</button>
    </header>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="home">
        <h2>Welcome to My Website</h2>
        <p>I am Simon Chikira, a skilled website developer and electrical technician specializing in residential and office electrical maintenance, installation, and air-conditioning.</p>
    </section>

    <section id="services">
        <h2>Services</h2>
        <h3>Electrical Services</h3>
        <ul>
            <li>Electrical Maintenance</li>
            <li>Electrical Installation</li>
            <li>Air-conditioning Installation</li>
        </ul>

        <h3>Web Development Services</h3>
        <ul>
            <li>Website Development</li>
            <li>Website Maintenance</li>
            <li>Full Hosting Services</li>
            <li>Backend Development</li>
        </ul>
    </section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="gallery">
            <img src="images/project1.jpg" alt="Project 1">
            <img src="images/project2.jpg" alt="Project 2">
            <!-- Add more images as needed -->
        </div>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <p>I have extensive experience in both website development and electrical services. My work combines technical expertise with a deep understanding of user experience and functionality.</p>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>Your ip <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
        <p>&copy; 2024 Simon Chikira. All Rights Reserved.</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
