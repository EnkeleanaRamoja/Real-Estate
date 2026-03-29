<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service.css">
    <title>Services | Real Estate </title>
</head>
    <body style="background-color: rgb(45, 61, 45);">
    <section class="hero">
        <header class="header">
            <h1>Real Estate</h1>
            <nav class="navbar">
                <a href="Home.php">Home</a>
                <a href="About.php">About</a>
                <a href="Services.php" class="active">Services</a>
                <a href="Listings.php">Listings</a>
                <a href="Contact.php">Contact</a>
                <a href="main.php" style="background-color: transparent; padding: 8px 16px; border-radius: 4px; color: white; border: 2px solid white;">Logout</a>
            </nav>
        </header>

        <h1 class="service">Services</h1>
        <p class="serviceP">At Our Real Estate, we provide expert real estate services designed to help you make confident, profitable decisions—whether you’re buying your first home, selling a property, or building a smart investment portfolio. Our team combines local market knowledge, strategic insight, and personalized service to guide you every step of the way.</p>
        <img class="srvc" src="service.png" width="450px" height="auto">
    </section>

    <div class="slider-container">
    <div class="slider">

        <div class="slide active" style="background-image: url('buying.jpg');">
            <div class="slide-content">
                <h2>Buy Your Dream Home</h2>
                <p>Ne ju ndihmojmë të gjeni pronën ideale me çmimin më të mirë dhe dokumentacion të sigurt.</p>
                <a href="Listings.php" class="btn">View Properties</a>
            </div>
        </div>

        <div class="slide" style="background-image: url('investment.jpg');">
            <div class="slide-content">
                <h2>Smart Property Investment</h2>
                <p>Investoni me siguri në prona me kthim të lartë dhe rrezik minimal.</p>
                <a href="Contact.php" class="btn">Explore Investments</a>
            </div>
        </div>

        <div class="slide" style="background-image: url('selling.jpg');">
            <div class="slide-content">
                <h2>Sell Faster & Smarter</h2>
                <p>Shesim pronën tuaj shpejt me marketing profesional dhe çmim optimal.</p>
                <a href="Listings.php" class="btn">Sell Your Property</a>
            </div>
        </div>

        <div class="slide" style="background-image: url('consulting.jpg');">
            <div class="slide-content">
                <h2>Real Estate Consulting</h2>
                <p>Këshillim profesional për blerje, shitje dhe investime të sigurta.</p>
                <a href="Contact.php" class="btn">Book a Consultation</a>
            </div>
        </div>

    </div>

    <button class="nav prev">&#10094;</button>
    <button class="nav next">&#10095;</button>
</div>
</body>
</html>

<script>
    const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let currentSlide = 0;

function showSlide(index) {
    slides.forEach(slide => slide.classList.remove("active"));
    slides[index].classList.add("active");
}

nextBtn.addEventListener("click", () => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
});

prevBtn.addEventListener("click", () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
});

// Auto slide (opsionale)
setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 5000);

</script>

