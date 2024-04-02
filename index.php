<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
    <title>MyMathHub</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="about-section">
        <h2>About MyMathHub</h2>
        <p>Welcome to MyMathHub, your ultimate destination for all things related to mathematics! Whether you're a student, educator, or just someone who loves numbers, you'll find a wealth of resources, games, forums, and more to enhance your math journey.</p>
    </div>

    <div class="category-section">
        <h2>Categories</h2>
        <div class="category-buttons">
            <a href="#">Into</a>
            <a href="#">Geometry</a>
            <a href="#">Numbers</a>
            <a href="#">Puzzles</a>
            <a href="#">Money</a>
            <a href="#">Algebra</a>
            <a href="#">Calculus</a>
            <a href="#">Physics</a>
            <a href="#">Games</a>
            <a href="#">Dictionary</a>
            <a href="#">Worksheets</a>
            <a href="#">Measurement</a>
            <a href="#">Activities</a>
        </div>
    </div>

    <section id="reviews">
    <h2>Reviews from People</h2>
    <div id="carousel" class="carousel"></div>
    </section>

    <main>
    <div class="container"> <!-- New parent container -->
        <h2 class="fun-fact-heading">FUN FACT!</h2> <!-- Heading for "FUN FACT" -->
        <section id="fun-facts">
            <!-- Fun facts will be displayed here -->
        </section>
    </div>
</main>
    <div id="cookie-popup" class="cookie-popup">
        <p>🍪</p>
    <p>We use cookies to ensure you get the best experience on our website. By continuing, you agree to our <a href="cookie_policy.php">cookie policy</a>.</p>
    <button id="accept-cookies" class="accept-cookies">Accept</button>
</div>

    <?php include 'footer.php'; ?>
</body>
<script>
    function toggleMenu() {
        var menu = document.querySelector('.menu-items');
        menu.classList.toggle('show');
    }


    document.addEventListener("DOMContentLoaded", function() {
    var cookiePopup = document.getElementById("cookie-popup");
    var acceptCookiesBtn = document.getElementById("accept-cookies");

    /*
    if (localStorage.getItem("cookieAccepted")) {
        cookiePopup.style.display = "none";
    } else {
        cookiePopup.style.display = "block";
    }
    */

    acceptCookiesBtn.addEventListener("click", function() {
        localStorage.setItem("cookieAccepted", true);
        cookiePopup.style.display = "none";
    });
});

// JavaScript to fetch quotes from text file and display them in a carousel

document.addEventListener("DOMContentLoaded", function() {
    // Fetch quotes from text file
    fetch("reviews.txt")
    .then(response => response.text())
    .then(data => {
        const quotes = data.split("\n"); // Split text into quotes (assuming each quote is on a new line)
        const carousel = document.getElementById("carousel");

        // Create carousel elements for each quote
        quotes.forEach((quote, index) => {
            const quoteParts = quote.split("-"); // Split quote and name
            const quoteText = quoteParts[0].trim();
            const author = quoteParts[1].trim();

            // Create quote element
            const quoteElement = document.createElement("div");
            quoteElement.classList.add("quote");
            quoteElement.innerHTML = `<p>${quoteText}</p><span>${author}</span>`;

            carousel.appendChild(quoteElement);
        });

        // Initialize carousel
        initCarousel();
    })
    .catch(error => console.error("Error fetching quotes:", error));

    // Initialize carousel
    function initCarousel() {
        const carousel = document.getElementById("carousel");
        const quotes = carousel.querySelectorAll(".quote");

        let index = 0;

        // Show first quote initially
        quotes[index].classList.add("active");

        // Set interval to move carousel
        setInterval(() => {
            // Hide current quote
            quotes[index].classList.remove("active");

            // Move to next quote
            index = (index + 1) % quotes.length;

            // Show next quote
            quotes[index].classList.add("active");
        }, 5000); // Change quote every 5 seconds (adjust as needed)
    }
});

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

document.addEventListener("DOMContentLoaded", function() {
    const funFactsSection = document.getElementById("fun-facts");

    // Fetch fun facts from text file
    fetch("math_fun_facts.txt")
    .then(response => response.text())
    .then(data => {
        const facts = data.split("\n"); // Split the data by new lines

        // Filter out empty lines and trim whitespace from each fact
        const cleanedFacts = facts.filter(fact => fact.trim() !== "").map(fact => fact.trim());

        // Display a random fun fact
        const randomIndex = Math.floor(Math.random() * cleanedFacts.length);
        const randomFact = cleanedFacts[randomIndex];
        funFactsSection.innerHTML = `<p>${randomFact}</p>`;
    })
    .catch(error => console.error("Error fetching fun facts:", error));
});


</script>
</html>
