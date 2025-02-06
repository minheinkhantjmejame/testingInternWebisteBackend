<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>InternPlus</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Myanmar Unicode Font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <style type="text/css">
        body {
            font-family: 'Noto Sans Myanmar', sans-serif;
        }
        .navbar-brand {
            font-family: inherit !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="font-size:40px;">INTERNPLUS</a>
            
            <div class="dropdown" style="display: inline-block;">
                <button class="btn btn-white" style="border:none;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="dropdownLabel">EN</span> <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('en')">EN</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('th')">THAI</a></li>
                    <li><a class="dropdown-item" href="#" onclick="updateLanguage('my')">MYAN</a></li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}" data-translate="Home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/program') }}" data-translate="Program">Program</a></li>
                    <li class="nav-item"><a class="nav-link applynow" href="{{ url('/application_search') }}"  data-translate="Application">Application</a></li>
                    <li class="nav-item"><a class="nav-link register" href="{{ url('/register') }}" data-translate="Register">Register</a></li>
                    <li class="nav-item"><a class="btn btn-dark" href="{{ url('/login') }}" style="background-color:#b1bbe7; color:black;" data-translate="Log In">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background-color:#fff;">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="slogan">
                <h1 class="fw-bold display-5" data-translate="HI. WELCOME TO INTERNPLUS">HI. WELCOME TO<br>IN<span style="color:#3c3f7c;">T</span><span style="color:#4346a7;">E</span><span style="color:#4a4ec4;">R</span><span style="color:#5c60cf;">N</span><span style="color:#676bd6;">P</span><span style="color:#777adf;">L</span><span style="color:#888bea;">U</span><span style="color:#888cea;">S</span></h1>
                <p class="lead" style="font-size:20px; font-weight:bold;" data-translate="Internship application system of Vanness Plus Consulting Co., Ltd.">
                    Internship application system by <br> Vanness Plus Consulting Co., Ltd.
                </p>
                <a href="{{ url('/program') }}" class="btn btn-dark btn-lg mt-3" style="background-color:#474bc2; color:white;" data-translate="Apply Now">Apply Now</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('assets/img/pc.png') }}" alt="Laptop Graphic" class="img-fluid" style="width: 600px; height: 600px; max-width: none;"/>
            </div>
        </div>
    </section>
    

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container text-center">
            <h1 class="font-weight:bolder;" data-translate="ABOUT OUR COMPANY">ABOUT US</h1>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="./assets/img/bag.png" alt="Internship" class="mb-3">
                    <h4 class="fw-bold" data-translate="INTERNSHIP">INTERNSHIP</h4>
                    <p data-translate="This website is the company's operating system for students throughout their internship until the end.">
                        This website is the company's operating system for students throughout their internship until the end.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="./assets/img/notebook.png" alt="Task Management" class="mb-3">
                    <h4 class="fw-bold" data-translate="TASK MANAGEMENT">TASK MANAGEMENT</h4>
                    <p data-translate="There is a system for managing assigned tasks, work entry and exit times, daily reporting, document submission, etc.">
                        There is a system for managing assigned tasks, work entry and exit times, daily reporting, document submission, etc.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="./assets/img/clock.png" alt="Faster Process" class="mb-3">
                    <h4 class="fw-bold" data-translate="FASTER PROCESS">FASTER PROCESS</h4>
                    <p data-translate="Shorten the time spent on each step of the internship process, such as waiting for a response email, contacting HR, etc.">
                        Shorten the time spent on each step of the internship process, such as waiting for a response email, contacting HR, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light py-4">
        <div class="container text-left">
            <div class="row align-items-center">
                <div class="col-md-6 fw-bold fs-4">INTERNPLUS</div>
                <div class="col-md-6 text-end">
                    <form id="subscribeForm">
                        @csrf
                        <div class="form-control d-inline-flex align-items-center me-2" style="background-color: #f3f4f6;border:0;width:  300px; height:35px;">
                            <span class="input-group-text bg-transparent" style="border:0;"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control bg-trasparent" style="border:0; width:300px;background-color: transparent;" id="email" name="email" placeholder="Enter your email to get the latest news..." required>
                        </div>
                        <button type="submit" class="btn" style="background-color:#474bc2; color:white;">Subscribe</button>
                    </form>
                </div>
                
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col-md-6 contact">
                    <h5 class="fw-bold mb-3" data-translate="Contact Information">Contact Us</h5>
                    <p><a href="https://maps.app.goo.gl/vupuH5eNXeRHCKHC9" class="text-decoration-none" style="color:#333333;"><i class="bi bi-geo-alt"></i> 287 Si Lom Rd, Silom, Bang Rak, Bangkok 10500</a></p>
                    <p><i class="bi bi-telephone"></i> <a href="tel:020777581" class="text-decoration-none" style="color:#333333;">02-0777581 (Head Quarter Contact)</a></p>
                    <p><i class="bi bi-envelope"></i> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=cs@internplus.com" class="text-decoration-none" style="color:#333333;">cs@internplus.com</a></p>
                </div>
                <div class="col-md-6 text-end">
                    <img src="./assets/img/location.png" alt="Map Icon" class="img-fluid">
                </div>
            </div>
            <hr>
            <div class="row align-items-center" id="footer">
                <div class="col-md-6 order-md-1">
                    <p data-translate="&copy; Internplus @ 2024. All rights reserved.">&copy; Internplus @ 2024. All rights reserved.</p>
                </div>
                <div class="col-md-6 order-md-2 footer-icons">
                    <a href="#" class="text-dark mx-2"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">

        // Initialize date picker (existing function)
        $(document).ready(function() {
            $("#startDate, #endDate").datepicker({
                showButtonPanel: true,
                dateFormat: "dd/mm/yy"
            });
        });
    </script>
</body>
</html>
