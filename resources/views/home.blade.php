@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-container">
    <div class="hero-content">
        <h1 class="hero-title">Welcome to Our School Allocation System</h1>
        <p>Your gateway to discovering the best schools for your future.</p>
        <a href="#about" class="cta-btn">Learn More</a>
    </div>
</section>

<!-- About Us Section -->
<section id="about" class="about-section">
    <div class="container">
        <h2>About Us</h2>
        <p>We are committed to helping students find the right school based on their preferences and needs. Our platform makes school allocation easier and more efficient.</p>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features-section">
    <div class="container">
        <h2>Key Features</h2>
        <div class="feature">
            <h3>Easy Registration</h3>
            <p>Register quickly and start finding schools that match your needs.</p>
        </div>
        <div class="feature">
            <h3>Personalized School Allocation</h3>
            <p>Our AI-based system helps you find the perfect school based on your criteria.</p>
        </div>
        <div class="feature">
            <h3>Seamless Experience</h3>
            <p>Enjoy a smooth user experience with minimal effort required.</p>
        </div>
    </div>
</section>

<!-- Smooth Scroll Button -->
<a href="{{ route('register') }}" class="scroll-btn">Get Started</a>

<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 School Allocation System | All rights reserved.</p>
    </div>
</footer>

<style>
    /* General styles */
    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
        background-color: #fff;
        color: #333;
    }

    /* Hero Section */
    #hero {
        height: 100vh;
        background: linear-gradient(135deg, #000, #333);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    /* Applying Rubil Viny font */
    @import url('https://fonts.googleapis.com/css2?family=Rubil+Viny&display=swap');

    .hero-title {
        font-family: 'Rubil Viny', cursive;
        font-size: 4rem;
        margin-bottom: 1rem;
        animation: fadeInUp 1s ease-out;
        transition: all 0.3s ease;
    }

    .hero-title:hover {
        color: #00B0FF;
        transform: translateY(-10px);
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        animation: fadeInUp 1.5s ease-out;
    }

    .cta-btn {
        padding: 1rem 2rem;
        background-color: white;
        color: #000;
        text-decoration: none;
        font-weight: bold;
        border-radius: 2rem;
        transition: all 0.3s ease;
    }

    .cta-btn:hover {
        background-color: #333;
        color: white;
        transform: translateY(-3px);
    }

    /* About Section */
    #about {
        padding: 4rem 0;
        background-color: #f4f4f4;
        color: #333;
    }

    #about h2 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
    }

    #about p {
        text-align: center;
        font-size: 1.2rem;
    }

    /* Features Section */
    #features {
        padding: 4rem 0;
        background-color: #fff;
    }

    #features h2 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 2rem;
    }

    .feature {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 2rem;
    }

    .feature h3 {
        font-size: 1.8rem;
        margin-right: 1.5rem;
    }

    .feature p {
        font-size: 1.1rem;
    }

    /* Scroll Button */
    .scroll-btn {
        display: block;
        width: 200px;
        margin: 2rem auto;
        text-align: center;
        padding: 1rem;
        background-color: #000;
        color: white;
        text-decoration: none;
        border-radius: 2rem;
        transition: all 0.3s ease;
    }

    .scroll-btn:hover {
        background-color: #333;
        transform: translateY(-3px);
    }

    /* Footer Section */
    .footer {
        padding: 2rem 0;
        background-color: #333;
        color: white;
        text-align: center;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection
