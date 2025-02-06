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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style rel="stylesheet" type="text/css">
        body{
            background-color:#ffffff;
        }
        .container .headingtext{
            text-align: center;
        }
        .search-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 40px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: auto;
        }

        .input-group {
            justify-content: center;
        }

        .app-id-input {
            width: 40px;
            height: 40px;
            text-align: center;
            margin-right: 5px; 
            border-radius: 5px;
            border: 1px solid black; 
            background-color:white;
            transition: border-color .15s ease-in-out;
            display: inline-block;
        }

        .app-id-input:last-child {
            margin-right: 0; 
        }

        .app-id-input:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }

        .app-search-button {
            width: 100px; 
            padding: 10px 0; 
            margin-top: 10px; 
            background-color: #474bc2;

            box-shadow: none;
        }

        .app-search-button:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .internship-details .btn {
            margin: 0 5px;
        }

        .internship-details .card {
            background-color: #f8f9fa;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .internship-details .card-body {
            padding: 20px;
            line-height: 1.6;
            color: #333;
        }

        .status-buttons button {
            margin-bottom: 5px; 
        }

        .statuscontainer {
            max-width: 1000px; 
            margin: auto;
            background-color: #f8f9fa;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .status-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px; 
        }

        .btn {
            padding: 10px 15px; 
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden; 
        }

        .card-body {
            display: flex;
            flex-wrap: wrap; 
            align-items: center;
            justify-content: space-between; 
            padding: 20px;
        }


        .card-image {
            height: 100%; 
            object-fit: cover;
        }

        .hr {
            margin-top: 10px;
            margin-bottom: 10px;
            border-top: 1px solid #eee;
        }

        .col-md-3 {
            flex: 1 1 20%;
            margin: 10px;
            min-width: 160px;
            max-width: 240px;
        }

        .date-box, .type-box {
            background-color: #f4f4f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            text-align: center;
        }

        .date-details p {
            margin-bottom: 5px;
        }

        .type-title {
            font-size: 24px;
            margin-bottom: 0;
        }

        .type-text {
            font-size: 16px;
            margin-top: 5px;
        }

        .card-title {
            font-size: 1.2rem; 
            margin-bottom: 5px; 
        }

        .card-title, .card-text {
            margin-bottom: 4px; 
        }

        .card-body p {
            font-size: 0.9rem; 
            margin-bottom: 5px; 

        }
        .btn-primary, .btn-success, .btn-danger {
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff; 
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-danger {
            background-color: #dc3545; 
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow: hidden; 
        }

        .col-md-3 {
            flex: 1 1 20%;
            margin: 10px;
            min-width: 160px;
        }

        .date-box, .type-box {
            background-color: #f4f4f9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            text-align: center;
        }
        .card-image {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .date-box, .type-box {
            background-color: #f4f4f9;
            padding: 10px 15px;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .card-title {
            font-size: 16px;
            font-weight: bold;
        }

        .card-text {
            font-size: 14px;
        }

        .hr {
            border-top: 1px solid #ddd;
            margin: 8px 0;
        }

        .type-box {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bi-suitcase-lg {
            font-size: 24px;
            color: #6c757d;
        }

        a{
            text-decoration:none;
        }




@media (max-width: 992px) { /* Adjusts when the screen size is below 992px */
    .card-body {
        flex-direction: column; /* Stacks the columns vertically on smaller screens */
    }

    .col-md-3 {
        flex: 1 1 100%; /* Takes full width on smaller screens */
    }

    .date-box, .type-box {
        margin-bottom: 10px; /* Ensures spacing between boxes on smaller screens */
    }
}

@media (max-width: 1196px) {
    .card-body {
        justify-content: space-around; /* Adjusts spacing for medium screens */
    }
    .col-md-3 {
        flex: 1 1 22%; /* Slightly more width per column at this breakpoint */
    }
}


</style>

    <!-- Jquery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{url("/")}}" style="font-size:40px;">INTERNPLUS</a>
            <!-- Language Dropdown -->
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
    
    <div class="container my-5">
        <h5 class="mb-4 headingtext" style="font-size:48px;" data-translate="YOUR INTERNSHIP">YOUR INTERNSHIP</h5>
        <div class="search-container text-center" style="background-color:#f3f5fc;">
            <p  style="font-size:32px;" data-translate="Enter Your application ID">Enter Your Application ID</p>
            <div class="d-flex justify-content-center mb-3 ">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
                <input type="text" maxlength="1" class="form-control app-id-input"  style="border:0;">
            </div>
            <button class="btn btn-primary app-search-button" type="button" style="background-color:#474bc2;" data-translate="Search">Search</button>
        </div>
    </div>

        <div class="container internship-details mt-3">
            <h4 class="text-start mb-4" data-translate="APPLICATION INTERNSHIP">APPLICATION INTERNSHIP</h4>
            <div class="status-buttons d-flex justify-content-start mb-3">
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Pending">Pending</button>
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Request Internship Application">Request Internship Application</button>
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Request Internship Document">Request Internship Document</button>
                <button class="btn btn-primary mx-2" style="background-color:#b1bbe7;color:#000; border:0; border-radius:4px; font-size:20px;" data-translate="Acceptance Terms">Acceptance Terms</button>
                <button class="btn btn-success mx-2" style="background-color:#fff;color:#000; border:1px solid black; border-radius:4px; font-size:20px;" data-translate="Success">Success</button>
                <button class="btn btn-danger mx-2" style="background-color:#fff;color:#000; border:1px solid black; border-radius:4px; font-size:20px;" data-translate="Fail">Fail</button>
            </div>
            <a href="{{url('/')}}">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="./assets/img/pending_status.jpg" style="width:250px;height:150px;" alt="Profile" class="img-fluid">
                            </div>
                            <div class="col-md-3">
                                <h6 class="card-title" style="font-size:24px;" data-translate="UX/UI Designer Trainee">UX/UI Designer Trainee</h6>
                                <p class="card-text" style="font-size:20px;"><i class="bi bi-geo-alt"></i> 287 Si Lom Rd, Liberty Square Building</p>
                                <hr>
                                <p class="card-text"><strong  style="font-size:24px;" data-translate="Application ID:">Application ID:</strong><span style="font-size:20px;"> 112987630</span></p>
                            </div>
                            <div class="col-md-3">
                        <div class="date-box" style="background-color:#d1d1f0;">
                            <p style="font-size:24px;" data-translate="Start date:"><strong>Start date:</strong></p>
                            <p style="font-size:20px;"  data-translate="Mon, 25 Nov 2024">Mon, 25 Nov 2024</p>
                        </div>
                        <div class="date-box" style="background-color:#d1d1f0;">
                            <p style="font-size:24px;"  data-translate="End date:"><strong>End date:</strong></p>
                            <p style="font-size:20px;"  data-translate="Sat, 14 Mar 2025">Sat, 14 Mar 2025</p>
                        </div>
                        </div>
                            <div class="col-md-3">
                                <div class="type-box" style="background-color:#d1d1f0;">
                                    <p style="font-size:24px;"  data-translate="Hybrid"><i class="bi bi-suitcase-lg" style="color:black;"></i> <br/>Hybrid</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>           
    
    
    
    
    


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
                            <button type="submit" class="btn py-2" style="background-color:#474bc2; color:white;" data-translate="Subscribe">Subscribe</button>
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
    <!-- Custom JS  -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>


        $(document).ready(function() {
                $("#startDate, #endDate").datepicker({
                    showButtonPanel: true,
                    dateFormat: "dd/mm/yy"
                });
            });

            document.querySelectorAll('.app-id-input').forEach((input, index, array) => {
    input.addEventListener('keyup', function() {
        if (this.value.length === 1 && index !== array.length - 1) {
            array[index + 1].focus();
        }
    });
});

    document.addEventListener("DOMContentLoaded", function() {
        const searchButton = document.querySelector('.app-search-button');
        const appIdInputs = document.querySelectorAll('.app-id-input');
        const internshipDetails = document.querySelector('.internship-details');

        // Hide the internship details on page load
        internshipDetails.style.display = 'none';

        function getAppId() {
            return Array.from(appIdInputs).map(input => input.value).join('');
        }

        searchButton.addEventListener('click', function() {
            const appId = getAppId();
            if (appId === "112987630") {  // Assuming "112987630" is a valid ID for demonstration
                internshipDetails.style.display = 'block';
            } else {
                alert('No application found with that ID.');
                internshipDetails.style.display = 'none';
            }
        });

        document.querySelectorAll('.app-id-input').forEach((input, index, array) => {
    input.addEventListener('keyup', function(event) {
        if (this.value.length === 1 && index !== array.length - 1) {
            array[index + 1].focus(); // Move to next input if a digit is entered
        } else if (event.key === "Backspace" && index !== 0 && this.value === "") {
            array[index - 1].focus(); // Move back to previous input when deleting
        }
    });
});

});


    </script>
</body>
</html>
