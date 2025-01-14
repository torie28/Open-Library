@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-center hero-section" style="background: linear-gradient(to right, #004d40, #00695c); color: white;">
    <div class="container">
        <!-- Animated Title -->
        <h1 id="animated-title" class="display-4 fw-bold" style="font-family: 'Poppins', sans-serif; overflow: hidden; white-space: nowrap;">
            <span class="animated-word">Muslim</span>
            <span class="animated-word">Books</span>
            <span class="animated-word">Library</span>
        </h1>
        <p class="mt-3 lead" style="font-size: 1.25rem;">Discover the teachings of Islam and timeless wisdom through our curated collection of Islamic books.</p>
        <a href="#books" class="mt-4 shadow btn btn-outline-light btn-lg rounded-pill">Explore Collection</a>
    </div>
</section>

<!-- Books Section -->
<section id="books" class="py-5 books-section" style="background-color: #f5f5f5;">
    <div class="container">
        <h2 class="mb-5 text-center fw-bold" style="color: #004d40; font-family: 'Poppins', sans-serif;">Explore Our Islamic Books</h2>
        <div class="row g-4">
            @php
                $books = [
                    ['title' => 'The Quran', 'author' => 'Allah', 'date' => '610 CE', 'rating' => 5, 'image' => 'quran.jpg'],
                    ['title' => 'The Sealed Nectar', 'author' => 'Safiy-ur-Rahman Mubarakpuri', 'date' => '1979', 'rating' => 5, 'image' => 'sealed-nectar.jpg'],
                    ['title' => 'Fortress of the Muslim', 'author' => 'Said bin Ali bin Wahaf Al-Qahtani', 'date' => '1992', 'rating' => 5, 'image' => 'fortress.jpg'],
                    // ['title' => 'The Ideal Muslimah', 'author' => 'Muhammad Ali Al-Hashimi', 'date' => '1998', 'rating' => 4, 'image' => 'ideal-muslimah.jpg'],
                    ['title' => 'The Ideal Muslimah', 'author' => 'Muhammad Ali Al-Hashimi', 'date' => '1998', 'rating' => 4, 'image' => 'ideal-muslimah.jpg'],
                    ['title' => 'In the Footsteps of the Prophet', 'author' => 'Tariq Ramadan', 'date' => '2007', 'rating' => 4, 'image' => 'footsteps.jpg'],
                    ['title' => 'Purification of the Heart', 'author' => 'Hamza Yusuf', 'date' => '2004', 'rating' => 5, 'image' => 'purification.jpg'],
                    ['title' => 'Love and Happiness', 'author' => 'Yasmin Mogahed', 'date' => '2017', 'rating' => 5, 'image' => 'love-happiness.jpg'],
                    ['title' => 'Reclaim Your Heart', 'author' => 'Yasmin Mogahed', 'date' => '2012', 'rating' => 5, 'image' => 'reclaim.jpg'],
                ];
            @endphp

            @foreach ($books as $book)
            <div class="col-md-4">
                <div class="border-0 shadow-sm card h-100 book-card">
                    <img src="{{ asset('assets/books/' . $book['image']) }}" class="card-img-top" alt="{{ $book['title'] }}" style="height: 280px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="font-family: 'Poppins', sans-serif; color: #00796b;">{{ $book['title'] }}</h5>
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
                        <a href="#" class="px-4 shadow-sm btn btn-teal rounded-pill">Learn More</a>
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
        <h3 class="fw-bold" style="font-family: 'Poppins', sans-serif;">Deepen Your Understanding of Islam</h3>
        <p class="mb-4 lead">Contact us for more information about our Islamic book collection or personalized recommendations.</p>
        <a href="mailto:info@muslimbooks.co.tz" class="shadow-sm btn btn-outline-light btn-lg rounded-pill">Contact Us</a>
    </div>
</section>

<!-- Custom Styles -->
<style>
    /* Hero Section Animations */
    .hero-section {
        font-family: 'Poppins', sans-serif;
        padding: 80px 0;
    }

    .animated-word {
        display: inline-block;
        opacity: 0;
        transform: translateY(-30px);
        animation: dropIn 0.8s ease-in forwards;
    }

    @keyframes dropIn {
        0% {
            opacity: 0;
            transform: translateY(-30px);
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

    /* Books Section Hover Effects */
    .books-section .book-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
    }

    .books-section .book-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    /* Call-to-Action Section */
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
