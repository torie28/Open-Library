@extends('layouts.app')

@section('content')

<!-- Page Header Section -->
<section class="page-header">
    <div class="container text-center">
        <h1>Muslim Schools in Tanzania</h1>
        <p>Explore the best Muslim schools offering O-level and A-level education.</p>
    </div>
</section>

<!-- Schools Display Section -->
<section class="py-5 schools-section">
    <div class="container">
        <h2>Our Muslim Schools</h2>

        <!-- School Card Loop -->
        <div class="row">
            <!-- School 1 -->
            <div class="mb-4 col-md-4">
                <div class="shadow-sm card">
                    <div class="card-body">
                        <h5 class="card-title">Al Hikma Secondary School</h5>
                        <p class="card-text"><strong>Location:</strong> Dar es Salaam</p>
                        <p class="card-text"><strong>Type:</strong> Day School</p>
                        <p class="card-text"><strong>Level:</strong> O-Level & A-Level</p>

                        <!-- Rating Stars -->
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- School 2 -->
            <div class="mb-4 col-md-4">
                <div class="shadow-sm card">
                    <div class="card-body">
                        <h5 class="card-title">Al Ilm Secondary School</h5>
                        <p class="card-text"><strong>Location:</strong> Dodoma</p>
                        <p class="card-text"><strong>Type:</strong> Boarding School</p>
                        <p class="card-text"><strong>Level:</strong> O-Level & A-Level</p>

                        <!-- Rating Stars -->
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- School 3 -->
            <div class="mb-4 col-md-4">
                <div class="shadow-sm card">
                    <div class="card-body">
                        <h5 class="card-title">Muslim Academy Secondary School</h5>
                        <p class="card-text"><strong>Location:</strong> Mwanza</p>
                        <p class="card-text"><strong>Type:</strong> Day School</p>
                        <p class="card-text"><strong>Level:</strong> O-Level & A-Level</p>

                        <!-- Rating Stars -->
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- School 4 -->
            <div class="mb-4 col-md-4">
                <div class="shadow-sm card">
                    <div class="card-body">
                        <h5 class="card-title">Al Furqan Secondary School</h5>
                        <p class="card-text"><strong>Location:</strong> Zanzibar</p>
                        <p class="card-text"><strong>Type:</strong> Boarding School</p>
                        <p class="card-text"><strong>Level:</strong> O-Level & A-Level</p>

                        <!-- Rating Stars -->
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                </div>
            </div>

           <!-- School 5 -->
           <div class="mb-4 col-md-4">
            <div class="shadow-sm card">
                <div class="card-body">
                    <h5 class="card-title">Mufti Secondary School</h5>
                    <p class="card-text"><strong>Location:</strong> Tanga</p>
                    <p class="card-text"><strong>Type:</strong> Day School</p>
                    <p class="card-text"><strong>Level:</strong> O-Level & A-Level</p>
                    <!-- Rating Stars -->
                    <div class="rating">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span>
                        <span class="star">&#9734;</span>
                        <span class="star">&#9734;</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- School 6 -->
        <div class="mb-4 col-md-4">
            <div class="shadow-sm card">
                <div class="card-body">
                    <h5 class="card-title">Sultan Abbas Secondary School</h5>
                    <p class="card-text"><strong>Location:</strong> Dar es Salaam</p>
                    <p class="card-text"><strong>Type:</strong> Boarding School</p>
                    <p class="card-text"><strong>Level:</strong> O-Level & A-Level</p>
                    <!-- Rating Stars -->
                    <div class="rating">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5 contact-section bg-light">
    <div class="container text-center">
        <h3>Interested in Joining a Muslim School?</h3>
        <p>Contact us for more information or visit the school to know more.</p>
        <a href="mailto:info@muslimschools.co.tz" class="btn btn-success">Get in Touch</a>
    </div>
</section>

<style>
    .page-header {
        background-color: #08090a;
        color: #fff;
        padding: 50px 0;
        font-family: 'Rubik', sans-serif;
    }

    .page-header h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .schools-section .card {
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .schools-section .card:hover {
        transform: translateY(-10px);
    }

    .schools-section .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .schools-section .card-body p {
        font-size: 1rem;
    }

    .schools-section .rating {
        font-size: 1.5rem;
        color: #f39c12;
    }

    .schools-section .star {
        margin-right: 5px;
    }

    .contact-section {
        background-color: #f7f7f7;
    }

    .contact-section h3 {
        font-size: 2rem;
        font-weight: bold;
    }

    .contact-section .btn-success {
        background-color: #020202;
        border-color: #0e110f;
    }

    .school-cards {
        display: flex;
        gap: 20px;
    }
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }
    .card img {
        width: 100%;
        border-radius: 8px;
    }
    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }


</style>

@endsection
