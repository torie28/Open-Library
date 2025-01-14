@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-center hero-section" style="background: linear-gradient(to right, #004d40, #00695c); color: white;">
    <div class="container">
        <!-- Animated Title -->
        <h1 id="animated-title" class="display-4 fw-bold" style="font-family: 'Poppins', sans-serif; overflow: hidden; white-space: nowrap;">
            <span class="animated-word">Christian</span>
            <span class="animated-word">Books</span>
            <span class="animated-word">Library</span>
        </h1>
        <p class="mt-3 lead" style="font-size: 1.25rem;">Discover timeless wisdom and spiritual growth through our carefully curated collection of Christian books.</p>
        <a href="#books" class="mt-4 shadow btn btn-outline-light btn-lg rounded-pill">Browse Collection</a>
    </div>
</section>

<!-- Books Section -->
<section id="books" class="py-5 books-section" style="background-color: #f5f5f5;">
    <div class="container">
        <h2 class="mb-5 text-center fw-bold" style="color: #1B5E20; font-family: 'Poppins', sans-serif;">Explore Our Featured Books</h2>
        <div class="row g-4">
            @php
                $books = [
                    ['title' => 'The Purpose Driven Life', 'author' => 'Rick Warren', 'date' => '2002', 'rating' => 5, 'image' => 'The Purpose Driven Life.jpeg'],
                    ['title' => 'Mere Christianity', 'author' => 'C.S. Lewis', 'date' => '1952', 'rating' => 5, 'image' => 'Mere Christianity.png'],
                    ['title' => 'The Case for Christ', 'author' => 'Lee Strobel', 'date' => '1998', 'rating' => 4, 'image' => 'The Case for Christ.jpeg'],
                    ['title' => 'Crazy Love', 'author' => 'Francis Chan', 'date' => '2008', 'rating' => 4, 'image' => 'Crazy Love.jpeg'],
                    ['title' => 'Radical', 'author' => 'David Platt', 'date' => '2010', 'rating' => 4, 'image' => 'Radical.jpeg'],
                    ['title' => 'The Screwtape Letters', 'author' => 'C.S. Lewis', 'date' => '1942', 'rating' => 5, 'image' => 'The Screwtape Letters.jpeg'],
                    ['title' => 'Jesus Calling', 'author' => 'Sarah Young', 'date' => '2004', 'rating' => 4, 'image' => 'Jesus Calling.jpeg'],
                    ['title' => 'God\'s Smuggler', 'author' => 'Brother Andrew', 'date' => '1967', 'rating' => 5, 'image' => 'God\'s Smuggler.jpeg'],
                    ['title' => 'The Prodigal God', 'author' => 'Timothy Keller', 'date' => '2008', 'rating' => 5, 'image' => 'The Prodigal God.jpeg'],
                ];
            @endphp

            @foreach ($books as $book)
            <div class="col-md-4">
                <div class="border-0 shadow-sm card h-100">
                    <img src="{{ asset('assets/books/' . $book['image']) }}" class="card-img-top" alt="{{ $book['title'] }}" style="height: 280px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="font-family: 'Poppins', sans-serif; color: #2E7D32;">{{ $book['title'] }}</h5>
                        <p class="card-text text-secondary">By {{ $book['author'] }}</p>
                        <p class="card-text text-muted">Published: {{ $book['date'] }}</p>
                        <div class="mb-3">
                            @for ($i = 0; $i < $book['rating']; $i++)
                                <span class="text-warning">&#9733;</span>
                            @endfor
                            @for ($i = $book['rating']; $i < 5; $i++)
                                <span class="text-muted">&#9733;</span>
                            @endfor
                        </div>
                    </div>
                    <div class="text-center bg-white border-0 card-footer">
                        <a href="#" class="px-4 shadow-sm btn btn-success rounded-pill">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 text-center cta-section" style="background: linear-gradient(to right, #004d40, #00695c); color: white;">
    <div class="container">
        <h3 class="fw-bold" style="font-family: 'Poppins', sans-serif;">Strengthen Your Faith</h3>
        <p class="mb-4 lead">Contact us for more information about our Christian book collection or personalized recommendations.</p>
        <a href="mailto:info@christianbooks.co.tz" class="shadow-sm btn btn-outline-light btn-lg rounded-pill">Contact Us</a>
    </div>
</section>

<!-- Custom Styles -->
<style>
    .hero-section {
        font-family: 'Poppins', sans-serif;
        padding: 80px 0;
    }

    .animated-word {
        display: inline-block;
        opacity: 0;
        transform: translateY(-50px);
        animation: dropIn 0.8s ease-in forwards;
    }

    @keyframes dropIn {
        0% {
            opacity: 0;
            transform: translateY(-50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animated-word:nth-child(1) {
        animation-delay: 0s;
    }

    .animated-word:nth-child(2) {
        animation-delay: 0.4s;
    }

    .animated-word:nth-child(3) {
        animation-delay: 0.8s;
    }

    .books-section .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
    }

    .books-section .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .cta-section {
        padding: 60px 0;
    }

    .cta-section h3 {
        font-size: 2.2rem;
    }

    .cta-section .btn {
        font-size: 1.15rem;
        padding: 12px 40px;
    }
</style>

<!-- Custom JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollLinks = document.querySelectorAll('a[href^="#"]');
        scrollLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({ behavior: "smooth" });
                }
            });
        });
    });
</script>

@endsection
