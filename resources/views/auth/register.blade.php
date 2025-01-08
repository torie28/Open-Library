@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero-container">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Register to Discover Your Perfect School</h1>
            <p>Start your journey with us and find the best school that fits your needs and preferences.</p>
        </div>

        <!-- Registration Form Section (Positioned on the right side of the hero) -->
        <div class="register-container">
            <div class="register-card">
                <h2>Sign Up</h2>

                <form id="registrationForm" method="POST" action="{{ route('register') }}">
                    @csrf

                {{-- <form method="POST" action="{{ route('register') }}">
                    @csrf --}}

                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" name="surname" id="surname" class="form-control @error('surname') is-invalid @enderror" placeholder="Enter your surname" value="{{ old('surname') }}" required>
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control @error('age') is-invalid @enderror" placeholder="Enter your age" value="{{ old('age') }}" required>
                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

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
    }

    /* Hero Section */
    #hero {
        height: 100vh;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(135deg, #000000, #333333);
        color: white;
        position: relative;
    }

    #hero .hero-content {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0 2rem;
    }

    .hero-text {
        max-width: 50%;
    }

    .hero-text h1 {
        font-size: 3rem;
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
        border-radius: 1.2rem;
        padding: 2rem 2.5rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        animation: fadeInUp 1s ease-out;
        position: relative;
        transition: all 0.3s ease;
        width: 350px;
    }

    .register-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    .register-card h2 {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 2rem;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
        display: block;
    }

    .form-control {
        border: 2px solid #ddd;
        border-radius: 0.5rem;
        padding: 0.8rem 1.2rem;
        width: 100%;
        font-size: 1rem;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #333;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .register-btn {
        background: #333;
        color: white;
        padding: 1rem 2rem;
        border-radius: 2rem;
        font-size: 1.2rem;
        font-weight: 600;
        width: 100%;
        border: none;
        margin-top: 2rem;
        transition: all 0.3s ease;
    }

    .register-btn:hover {
        background: #555;
        transform: translateY(-3px);
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
        background-color: #000000;
        color: white;
    }

    .btn-cancel {
        background-color: #776c6c;
        color: white;
    }

    .btn-confirm:hover {
        background-color: #000000;
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
</style>

{{-- <script>
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('confirmationModal').style.display = 'block';
    });

    document.getElementById('confirmBtn').addEventListener('click', function() {
        const religion = document.getElementById('religion').value;
        if (religion === 'christian') {
            document.getElementById('registrationForm').action = '{{ route('christian-schools') }}';
        } else if (religion === 'muslim') {
            document.getElementById('registrationForm').action = '{{ route('muslim-schools') }}';
        }
        document.getElementById('registrationForm').submit();
    });

    document.getElementById('cancelBtn').addEventListener('click', function() {
        document.getElementById('confirmationModal').style.display = 'none';
    });
</script> --}}

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
