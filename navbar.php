<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyMathHub</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="images/MyMathHubLogoNoText-removebg-preview.png" width="60px" height="60px" alt="MyMathHub Logo"></a>
                <a href="index.php">MyMathHub</a>
            </div>
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Search...">
                <button id="search-button" type="button">Search</button>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">Charts</a></li>
                <li>
                    <label class="switch">
                        <input type="checkbox" id="dark-mode-toggle">
                        <span class="slider round"></span>
                    </label>
                </li>
                <!-- Add more navigation links as needed -->
            </ul>
            <div class="social-buttons">
                <a href="#" class="social-button facebook">F</a>
                <a href="#" class="social-button twitter">T</a>
                <a href="#" class="social-button pinterest">P</a>
                <a href="mailto:info@mymathhub.com" class="social-button email">E</a>
            </div>
            <div class="hamburger-menu">
                <div class="hamburger-icon" onclick="toggleMenu()">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <ul class="menu-items">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="#">Games ></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Puzzle</a></li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Adventure</a></li>
                        </ul>
                    </li>
                    <li><a href="calculator.php">Calculator</a></li>
                    <li><a href="#">Forums</a></li>
                    <li><a href="#">Charts</a></li>
                    <!-- Add more menu items as needed -->
                </ul>
            </div>
        </div>
    </nav>

    <script src="script.js"></script>
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu-items');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>
