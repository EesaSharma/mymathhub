<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Calculator - MyMathHub</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <center>
        <h1>Calculator</h1>
        <p>This calculator supports basic arithmetic operations: addition (+), subtraction (-), multiplication (*), and division (/).</p>
        <p>Use the buttons to input numbers and operators. Press '=' to get the result.</p>
    </center>
    <div id="cal-container">
        <div id="cal-calculator">
            <div id="result">
                <div id="history">
                    <p id="history-value"></p>
                </div>
                <div id="output">
                    <p id="output-value"></p>
                </div>
            </div>
            <div id="keyboard">
                <button class="operator" id="clear">C</button>
                <button class="operator" id="backspace">CE</button>
                <button class="operator" id="%">%</button>
                <button class="operator" id="/">&#247;</button>
                <button class="number" id="7">7</button>
                <button class="number" id="8">8</button>
                <button class="number" id="9">9</button>
                <button class="operator" id="*">&times;</button>
                <button class="number" id="4">4</button>
                <button class="number" id="5">5</button>
                <button class="number" id="6">6</button>
                <button class="operator" id="-">-</button>
                <button class="number" id="1">1</button>
                <button class="number" id="2">2</button>
                <button class="number" id="3">3</button>
                <button class="operator" id="+">+</button>
                <button class="empty" id="empty"></button>
                <button class="number" id="0">0</button>
                <button class="empty" id="empty"></button>
                <button class="operator" id="=">=</button>
            </div>
        </div>
        <p>Looking for a <a href="graphing_calculator.php">Graphing Calculator</a>?</p>
    </div>
    <script src="script.js"></script>
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu-items');
            menu.classList.toggle('show');
        }

        document.addEventListener("DOMContentLoaded", function() {
    const darkModeToggle = document.getElementById("dark-mode-toggle");

    darkModeToggle.addEventListener("change", function() {
        // Toggle dark mode class on body
        document.body.classList.toggle("dark-mode");

        // Save dark mode preference to localStorage
        const isDarkMode = document.body.classList.contains("dark-mode");
        localStorage.setItem("darkMode", isDarkMode);
    });

    // Check for dark mode preference from localStorage
    const darkModePreference = localStorage.getItem("darkMode");

    if (darkModePreference === "true") {
        document.body.classList.add("dark-mode");
        darkModeToggle.checked = true;
    }
});
    </script>
		<?php include 'footer.php'; ?>
</body>
</html>
