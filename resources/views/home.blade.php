@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Find Your Spiritual Path</h1>
        <p class="hero-subtitle">Discover a world of religious books tailored to your faith and spiritual journey.</p>
        <a href="#about" class="btn-primary">Explore More</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <h2 class="section-title">About Us</h2>
        <p class="section-description">
            At the Religious Books Allocation System, we connect readers with books that resonate with their beliefs.
            Our mission is to make your spiritual exploration meaningful and seamless.
        </p>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="features-section">
    <div class="container">
        <h2 class="section-title">Why Choose Us?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Quick Registration</h3>
                <p>Sign up in minutes and start your journey to discover books that match your spiritual goals.</p>
            </div>
            <div class="feature-card">
                <h3>AI-Driven Suggestions</h3>
                <p>Receive personalized recommendations based on your faith, interests, and preferences.</p>
            </div>
            <div class="feature-card">
                <h3>Simplified Experience</h3>
                <p>Navigate through our platform effortlessly and enjoy a smooth, enriching experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section id="call-to-action" class="cta-section">
    <div class="container">
        <h2 class="cta-title">Ready to Begin?</h2>
        <a href="{{ route('register') }}" class="btn-secondary">Get Started Now</a>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 Open Library. All Rights Reserved.</p>
    </div>
</footer>

<!-- Styles -->
<style>
    /* General Styles */
    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Lora', serif;
        background-color: #f9f6f1;
        color: #2c2c2c;
        scroll-behavior: smooth;
    }

    /* Hero Section */
    .hero-section {
        height: 100vh;
        background: linear-gradient(135deg, #f6d365, #fda085);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .hero-subtitle {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .btn-primary {
        background-color: #fff;
        color: #fda085;
        padding: 0.8rem 2rem;
        text-decoration: none;
        font-weight: bold;
        border-radius: 30px;
        transition: 0.3s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #fda085;
        color: #fff;
    }

    /* About Section */
    .about-section {
        padding: 4rem 2rem;
        background-color: #fffaf2;
        text-align: center;
    }

    .section-title {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #f57c00;
    }

    .section-description {
        font-size: 1.2rem;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Features Section */
    .features-section {
        padding: 4rem 2rem;
        background-color: #fefaf4;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .feature-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .feature-card h3 {
        font-size: 1.5rem;
        color: #f57c00;
        margin-bottom: 1rem;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    /* Call to Action Section */
    .cta-section {
        padding: 3rem 2rem;
        background-color: #f6d365;
        text-align: center;
        color: #fff;
    }

    .cta-title {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .btn-secondary {
        background-color: #fff;
        color: #f57c00;
        padding: 0.8rem 2rem;
        text-decoration: none;
        font-weight: bold;
        border-radius: 30px;
        transition: 0.3s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #f57c00;
        color: #fff;
    }

    /* Footer Section */
    .footer {
        padding: 2rem 0;
        background-color: #2c2c2c;
        color: #fff;
        text-align: center;
    }

    .footer p {
        margin: 0;
        font-size: 0.9rem;
    }
</style>
@endsection
