<nav class="navbar navbar-light w-100 fixed-top bg-light border-bottom border-dark shadow-sm py-2">
    <div class="container-fluid">
        <div class="row w-100 align-items-center justify-content-between mx-auto">
            
            <!-- Logo and Brand Name Section -->
            <div class="col-12 col-md-4 d-flex justify-content-md-start justify-content-center p-0">
                <a class="navbar-brand d-flex align-items-center" href="/" style="font-family: 'Poppins', sans-serif;">
                    <img src="{{ asset('img/logo.png') }}" width="80" height="80" class="d-inline-block" alt="GymFormX Logo">
                    <h1 class="ms-3 fw-bold" style="font-size: 1.8rem; color: #333;">GymFormX</h1>
                </a>
            </div>

            <!-- Navigation Links Section -->
            <?php
            function isActive($page)
            {
                return $_SERVER['REQUEST_URI'] === $page;
            }
            ?>
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <ul class="nav align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link link-effect <?php echo isActive('/') ? 'text-dark fw-bold' : 'text-secondary'; ?>" 
                           href="/" style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem;">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link link-effect <?php echo isActive('/classification') ? 'text-dark fw-bold' : 'text-secondary'; ?>" 
                           href="/classification" style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem;">Classification</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link link-effect <?php echo isActive('/history') ? 'text-dark fw-bold' : 'text-secondary'; ?>" 
                           href="/history" style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem;">History</a>
                    </li>
                </ul>
            </div>

            <!-- Placeholder for extra content or right-aligned content -->
            <div class="col-12 col-md-4 d-flex justify-content-md-end d-none d-md-block"></div>
        </div>
    </div>
</nav>

<!-- Custom CSS for hover effect -->
<style>
    .nav-link {
        padding: 0.5rem 1rem;
        border-radius: 5px;
        transition: all 0.3s ease; /* Smooth transition */
    }

    /* Hover effect for the links */
    .link-effect:hover {
        background-color: #333; /* Dark background on hover */
        color: #fff !important; /* White text on hover */
        text-decoration: none; /* Remove underline */
    }

    /* Effect when mouse leaves */
    .link-effect {
        background-color: transparent; /* Default background */
        color: inherit; /* Inherit original text color */
    }
</style>
