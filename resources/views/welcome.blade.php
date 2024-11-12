@extends('layout.base-layout')

@section('title', '- Home')

@section('content')
<!-- About Section -->
<section id="about" class="d-flex justify-content-center align-items-center min-vh-100" style="background-image: url('{{ asset('/background-2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="max-w-7xl m-auto p-6 lg:p-8 text-white min-vh-100 min-vw-100" style="background-color: rgba(0, 0, 0, 0.4);">
        <div class="grid gap-6 lg:gap-8 mt-40 text-center">
            <h1 class="fw-bold text-4xl md:text-5xl lg:text-6x mb-4" style="color:white; font-family: 'Montserrat', sans-serif;">About GymFormX</h1>
            <p class="fw-light text-lg md:text-xl lg:text-l mx-auto mb-4" style="color:white; max-width: 960px; font-family: 'Montserrat', sans-serif;">
                GymFormX is an innovative web-based application designed to enhance your workout experience by accurately classifying gym movements. Utilizing advanced Artificial Intelligence technology and Deep Learning techniques, GymFormX employs Graph Convolutional Networks to analyze and categorize various exercises, such as deadlifts, bench presses, and squats. This application aims to provide users with real-time feedback, making it easier to understand and improve their workout knowledge.
            </p>
            <div class="text-center">
                <a class="btn btn-lg bg-dark text-white px-5 py-3 fw-bold rounded hover:bg-light"
                    style="opacity: 0.8; transition: opacity 0.2s ease; font-family: 'Montserrat', sans-serif;"
                    onmouseover="this.style.opacity='1'"
                    onmouseout="this.style.opacity='0.8'"
                    href="/about/model">
                    Learn More About the Model
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Carousel Section -->
<section id="description" class="d-flex justify-center align-items-center min-h-screen bg-light">
    <div class="container text-center w-100">
        <!-- Carousel Title -->
        <p class="fs-1 fw-bold mb-5 text-dark" style="font-family: 'Montserrat', sans-serif;">Gym Movements</p>

        <!-- Bootstrap Carousel -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Item 1 -->
                <div class="carousel-item active">
                    <div class="container w-75">
                        <div class="row shadow-lg">
                            <div class="col p-0">
                                <img style="border-radius: 20px 0px 0px 20px; object-fit: cover; width: 100%; height: 100%;" src="{{ asset('/deadlift.jpg') }}" alt="Deadlift Image">
                            </div>
                            <div class="col text-left bg-dark text-white p-5 d-flex align-items-center" style="border-radius: 0px 20px 20px 0px">
                                <div>
                                    <p class="fs-2 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Deadlift</p>
                                    <p class="fw-light" style="line-height: 1.6; font-family: 'Roboto', sans-serif;">
                                        The deadlift is a strength-training exercise that involves lifting a weight from the floor to standing position, engaging major muscles in the back, glutes, and lower body. It improves muscular strength, core stability, and posture.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="carousel-item">
                    <div class="container w-75">
                        <div class="row shadow-lg">
                            <div class="col p-0">
                                <img style="border-radius: 20px 0px 0px 20px; object-fit: cover; width: 100%; height: 100%;" src="{{ asset('/benchpress.jpg') }}" alt="Bench Press Image">
                            </div>
                            <div class="col text-left bg-dark text-white p-5 d-flex align-items-center" style="border-radius: 0px 20px 20px 0px">
                                <div>
                                    <p class="fs-2 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Bench Press</p>
                                    <p class="fw-light" style="line-height: 1.6; font-family: 'Roboto', sans-serif;">
                                        The bench press targets the chest, shoulders, and triceps. It’s a foundational upper body lift, effective for building strength and muscle, and commonly used in powerlifting competitions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="carousel-item">
                    <div class="container w-75">
                        <div class="row shadow-lg">
                            <div class="col p-0">
                                <img style="border-radius: 20px 0px 0px 20px; object-fit: cover; width: 100%; height: 100%;" src="{{ asset('img/squat.jpg') }}" alt="Squat Image">
                            </div>
                            <div class="col text-left bg-dark text-white p-5 d-flex align-items-center" style="border-radius: 0px 20px 20px 0px">
                                <div>
                                    <p class="fs-2 fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Squat</p>
                                    <p class="fw-light" style="line-height: 1.6; font-family: 'Roboto', sans-serif;">
                                        The barbell squat focuses on the leg muscles—quadriceps, hamstrings, and glutes. It improves leg strength, muscle mass, balance, and overall stability.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Classification Section -->
<section id="classification" class="d-flex justify-content-center align-items-center min-h-screen bg-light">
    <div class="max-w-7xl mx-auto p-6 lg:p-8 text-center">
        <div class="grid gap-6 lg:gap-8">
            <h1 class="fw-bold text-4xl" style="font-family: 'Montserrat', sans-serif;">GymFormX</h1>
            <h2 class="fw-light text-lg md:text-xl" style="font-family: 'Montserrat', sans-serif;">Classify your movement with an easy-to-use platform</h2>
            <div class="text-center">
                <a class="btn btn-lg bg-dark text-white px-5 py-3 fw-bold rounded hover:bg-light"
                    style="opacity: 0.8; transition: opacity 0.2s ease; font-family: 'Montserrat', sans-serif;"
                    onmouseover="this.style.opacity='1'"
                    onmouseout="this.style.opacity='0.8'"
                    href="/classification">
                    Start Classifying!
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Add custom styles for hover effect and transition -->
<style>
    /* Prevent horizontal scroll */
    html,
    body {
        overflow-x: hidden;
    }

    .carousel-item img {
        transition: transform 0.4s ease;
    }

    .carousel-item img:hover {
        transform: scale(1.05);
        /* Slight zoom effect */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(100%);
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        filter: invert(50%);
    }
</style>
@endsection