<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="hero">
        <header class="header">
            <h1>Real Estate</h1>
            <nav class="navbar">
                <a href="main.php">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Listings</a>
                <a href="#">Contact</a>
            </nav>
        </header>
        <div class="container">
            <h2>Your Dream Home Awaits</h2>
            <p style="text-align: center;">Invest today in your dream house.</p>
            <div>
                <button class="login"><a style="color: white; text-decoration-line: none;" href="login.php">Login</a></button>
                <button class="signup"><a style="color: white; text-decoration-line: none;" href="register.php">Sign Up</a></button>
            </div>
        </div>
    </section>
    <script>
    function toggleDropdown(event) {
        event.preventDefault();
        const dropdown = event.target.parentElement;
        const content = dropdown.querySelector('.dropdown-content');
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
    }

    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdown => {
            if (!dropdown.contains(event.target)) {
                const c = dropdown.querySelector('.dropdown-content');
                if (c) c.style.display = 'none';
            }
        });
    });
    </script>