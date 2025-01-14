@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-container">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Unveil Your Path to Excellence</h1>
            <p>Embark on an enlightening journey to discover the perfect school that aligns with your aspirations and values. Let us guide you to a place where education meets passion.</p>
        </div>

        <!-- Registration Form Section (Positioned on the right side of the hero) -->
        <div class="register-container">
            <div class="register-card">
                <h2>Sign Up</h2>

                <form id="registrationForm" method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Full Name Field -->
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                    </div>

                    <!-- Date of Registration Field -->
                    <div class="form-group">
                        <label for="date" class="form-label">Date of Registration</label>
                        <input type="date" name="date_of_registration" id="date" class="form-control @error('date_of_registration') is-invalid @enderror" value="{{ old('date_of_registration') }}" required>
                        @error('date_of_registration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Religion Field -->
                    <div class="form-group">
                        <label for="religion" class="form-label">Religion</label>
                        <select name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror" required>
                            <option value="" disabled selected>Choose your religion</option>
                            <option value="christian">Christian</option>
                            <option value="muslim">Muslim</option>
                        </select>
                        @error('religion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="register-btn">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Confirmation Modal -->
<div id="confirmationModal" class="confirmation-modal">
    <div class="confirmation-modal-content">
        <h2>Confirm Your Choice</h2>
        <p id="confirmationMessage">Are you sure about your choice?</p>
        <div class="modal-buttons">
            <button id="confirmBtn" class="btn-confirm">Confirm</button>
            <button id="cancelBtn" class="btn-cancel">Cancel</button>
        </div>
    </div>
</div>

<style>
    /* General styles */
    body, html {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
        background: #f4f7fc;
    }

    /* Hero Section */
    #hero {
        height: 100vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(135deg, #f6d365, #fda085);
        color: white;
        position: relative;
        padding: 0 3rem;
        box-shadow: inset 0 0 200px rgba(0, 0, 0, 0.1);
    }

    #hero .hero-content {
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .hero-text {
        max-width: 50%;
        animation: slideIn 1s ease-out;
    }

    .hero-text h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        font-family: 'Rubik Vinyl', cursive;
        animation: fadeInUp 1s ease-out;
    }

    .hero-text p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        animation: fadeInUp 1.5s ease-out;
    }

    /* Registration Form */
    .register-container {
        position: absolute;
        right: 2rem;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
    }

    .register-card {
        background: #ffffff;
        border-radius: 1.5rem;
        padding: 2.5rem 3rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        animation: fadeInUp 1s ease-out;
        width: 380px;
        transition: all 0.3s ease;
    }

    .register-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .register-card h2 {
        font-size: 2.7rem;
        color: #333;
        margin-bottom: 2.5rem;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1.8rem;
    }

    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
        display: block;
    }

    .form-control {
        border: 2px solid #ddd;
        border-radius: 1rem;
        padding: 0.8rem 1.3rem;
        width: 100%;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #f57c00;;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .register-btn {
        background: #f57c00;;
        color: white;
        padding: 1.1rem 2.5rem;
        border-radius: 2rem;
        font-size: 1.2rem;
        font-weight: 600;
        width: 100%;
        border: none;
        margin-top: 2.5rem;
        transition: all 0.3s ease;
    }

    .register-btn:hover {
        background: #e74c3c;
        transform: translateY(-4px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .register-btn:focus {
        outline: none;
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #e74c3c;
        margin-top: 0.5rem;
    }

    /* Confirmation Modal */
    .confirmation-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .confirmation-modal-content {
        background-color: white;
        padding: 2rem;
        border-radius: 0.5rem;
        text-align: center;
        width: 300px;
    }

    .modal-buttons {
        margin-top: 1rem;
    }

    .btn-confirm, .btn-cancel {
        padding: 0.8rem 2rem;
        margin: 0.5rem;
        border-radius: 2rem;
        font-weight: 600;
        border: none;
        cursor: pointer;
    }

    .btn-confirm {
        background-color: #f57c00;;
        color: white;
    }

    .btn-cancel {
        background-color: #776c6c;
        color: white;
    }

    .btn-confirm:hover {
        background-color: #f57c00;;
    }

    .btn-cancel:hover {
        background-color: #776c6c;
    }

    /* Keyframes for smooth animation */
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

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<script>
    document.getElementById('religion').addEventListener('change', function() {
        const selectedReligion = this.value;
        document.getElementById('confirmationMessage').innerText = `You have selected ${selectedReligion}. Are you sure about your choice?`;
        document.getElementById('confirmationModal').style.display = 'flex';
    });

    document.getElementById('confirmBtn').addEventListener('click', function() {
        document.querySelector('form').submit();
    });

    document.getElementById('cancelBtn').addEventListener('click', function() {
        document.getElementById('confirmationModal').style.display = 'none';
    });
</script>

@endsection
