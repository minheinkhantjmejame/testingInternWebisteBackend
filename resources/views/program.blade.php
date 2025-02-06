<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs - InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Myanmar Unicode Font (Noto Sans Myanmar) -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@400;700&display=swap" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/styles.css">
    
        <!-- Jquery UI -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <style type="text/css" rel="stylesheet">

body {
            font-family: 'Noto Sans Myanmar', sans-serif;
        }
       .card-custom {
    display: flex;
    justify-content: space-between;
    align-items: stretch; /* Ensure the card stretches to fill the container */
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.card-body {
    display: flex;
    justify-content: space-between;
    align-items: stretch;
    position: relative;
    padding: 0;
    margin: 0;
    width: 100%; /* Ensure the card body takes full width */
}

.card-text-content {
    width: 60%;
    padding: 20px;
    background-color: #F3F5FC; /* Ensure the background color is consistent */
    border-radius: 8px 0 0 8px; /* Rounded corners on the left side */
}

.card-image-container {
    width: 100%;
    height:100%;
    position: relative;
    overflow: hidden; /* Ensure the image doesn't overflow */
    border-radius: 0 8px 8px 0; /* Rounded corners on the right side */
}

.card-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image covers the entire container */
    display: block; /* Remove any extra space below the image */
}

.custom-pagination-button {
    background-color: #474BC2;
    border: none;
    border-radius: 4px;
    width: 50px;
    height: 50px;
    color: white;
}
    </style>
</head>
<body>
    <!-- Navigation Bar -->
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

    <!-- Program Page Section -->
    <section class="program-page bg-white py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4" style="font-size:48px;" data-translate="Internship Program">INTERNSHIP PROGRAM</h2>
            <p class="text-center" style="font-size:24px;" data-translate="Shape the Future with a Paid Internship at Vanness Plus Consulting Co. Ltd in Thailand!">Shape the Future with a Paid Internship at Vanness Plus Consulting Co. Ltd in Thailand!</p>
            <div class="stats d-flex justify-content-center my-4">
                <div class="me-5 text-center"><strong>18</strong><br/><span data-translate="internship programs"> internship programs</span></div>
                <div class="me-5 text-center"><strong>35</strong><br/><span data-translate="available positions"> positions available</span></div>
                <div class="text-center"><strong>4</strong><br/><span data-translate="job categories">job categories</span></div>
            </div>
            <div class="search-box text-center mb-5">
                <div class="input-group" id="input-search" style="width: 60%; margin: auto;" >
                    <input type="text" id="searchInput" class="form-control" style="border:none; box-shadow:0px 2px 2px rgba(0,0,0,0.1); background-color:#f3f5fc;"  placeholder="Enter the program you are interested in..." data-translate="Enter the program you are interested in...">
                    <button class="btn btn-dark" onclick="applySearch()" style="background-color:#474bc2;box-shadow:0px 4px 4px rgba(0,0,0,0.1); ">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div class="category-tabs text-center mb-4">
                <button class="category-btn btn btn-outline-secondary active" data-category="IT" data-translate="Information Technology" onclick="filterCategory('IT')">IT</button>
                <button class="category-btn btn btn-outline-secondary" data-category="Marketing" data-translate="Marketing" onclick="filterCategory('Marketing')">Marketing</button>
                <button class="category-btn btn btn-outline-secondary" data-category="Human Resources" data-translate="Human Resources" onclick="filterCategory('Human Resources')">Human Resources</button>
                <button class="category-btn btn btn-outline-secondary" data-category="Translation" data-translate="Translation" onclick="filterCategory('Translation')">Translation</button>
            </div>            
            <div id="listings" class="listings">
                <!-- Dynamic content will be loaded here -->
            </div>
            <div id="pagination" class="pagination mt-4 d-flex justify-content-center">
                <!-- Pagination buttons will be dynamically created here -->
            </div>
            
        </div>
          <hr/>
    </section>

  

    <footer class="bg-light py-4">
        <div class="container text-left">
            <div class="row align-items-center">
                <div class="col-md-6 fw-bold fs-4">INTERNPLUS</div>
                <div class="col-md-6 text-end">
                    <div class="form-control d-inline-flex align-items-center me-2" style="background-color: #f3f4f6;border:0;width:  300px; height:35px;">
                        <span class="input-group-text bg-transparent" style="border:0;"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control bg-trasparent" style="border:0; width:300px;background-color: transparent;" id="email" placeholder="Enter your email to get the latest news..." required>
                    </div>
                    <button class="btn" style="background-color:#474bc2; color:white;" data-translate="Subscribe">Subscribe</button>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>

        
        
        document.addEventListener('DOMContentLoaded', function() {
            filterCategory('IT');
        });
        
        // Global declaration of category data
        const categories = {
    'IT': [
        { title: 'Software Developer Intern', description: 'Engage in hands-on development projects under the guidance of experienced software engineers. Participate in code reviews, learn software development best practices, and contribute to real-world applications.', positions: 3 },
        { title: 'Network Administrator Intern', description: 'Assist with the maintenance and optimization of network operations. Gain experience with network configuration, troubleshooting, and ensuring secure and stable network performance.', positions: 2 },
        { title: 'Web Developer Intern', description: 'Support the design and development of web applications. Collaborate with UI/UX designers and backend developers to create responsive and user-friendly websites.', positions: 2 },
        { title: 'Data Analyst Intern', description: 'Work with large datasets to extract meaningful insights and assist in decision-making processes. Learn to use analytical tools and software to create reports and visualize data effectively.', positions: 1 },
        { title: 'Security Specialist Intern', description: 'Contribute to the strengthening of our cybersecurity measures. Assist with vulnerability assessments, security audits, and the implementation of security protocols.', positions: 1 }
    ],
    'Human Resources': [
        { title: 'HR Trainee', description: 'Support the HR team in day-to-day operations including recruitment, staff orientation, and employee welfare programs. Gain valuable insight into human resources management in a dynamic corporate environment.', positions: 3 },
        { title: 'Recruitment Coordinator Intern', description: 'Assist with the coordination of recruitment processes. Help organize job postings, review resumes, schedule interviews, and participate in the selection process.', positions: 2 },
        { title: 'Employee Relations Intern', description: 'Help manage relationships with employees and ensure a harmonious workplace. Engage in conflict resolution, employee advocacy, and assist in organizing staff engagement programs.', positions: 1 },
        { title: 'HR Data Analyst Intern', description: 'Analyze HR metrics to provide insights that support strategic decisions. Work on projects involving data collection, analysis, and reporting to enhance HR initiatives.', positions: 1 },
        { title: 'Organizational Development Intern', description: 'Participate in the development and implementation of organizational change programs. Assist in workshops, training sessions, and activities that drive organizational effectiveness.', positions: 1 }
    ],
    'Marketing': [
        { title: 'Marketing Specialist', description: 'Take part in the development and execution of marketing strategies. Work closely with the marketing team to create campaigns that effectively promote the company’s products and services.', positions: 2 },
        { title: 'Content Marketing Intern', description: 'Create compelling content for blogs, social media, and the company’s website. Learn content strategy and SEO best practices to enhance digital marketing efforts.', positions: 2 },
        { title: 'Digital Marketing Intern', description: 'Support digital marketing campaigns through email, social media, and digital advertising. Gain insights into digital marketing analytics and campaign performance.', positions: 1 },
        { title: 'Social Media Marketing Intern', description: 'Manage and grow the company’s presence on social media platforms. Create engaging content, respond to comments, and analyze user engagement to improve social media strategies.', positions: 2 },
        { title: 'Event Marketing Intern', description: 'Assist in the planning and execution of marketing events. Help coordinate logistics, manage registrations, and interact with attendees to enhance brand visibility and networking.', positions: 1 }
    ],
    'Translation': [
        { title: 'Translator Intern', description: 'Provide language translation services for documents and communications. Work with a team of linguists to ensure accurate and culturally relevant translations.', positions: 1 },
        { title: 'Localization Specialist Intern', description: 'Help adapt products or services for international markets. Focus on cultural, linguistic, and technical localization to ensure the company’s offerings resonate with local consumers.', positions: 1 },
        { title: 'Technical Translator Intern', description: 'Translate technical documents, manuals, and other materials. Work closely with technical teams to ensure clarity and accuracy in specialized content.', positions: 1 },
        { title: 'Multimedia Translator Intern', description: 'Engage in the translation and localization of multimedia content such as videos, presentations, and audio recordings. Ensure that multimedia translations align with the original tone and message.', positions: 1 },
        { title: 'Translator Intern', description: 'Provide language translation services for documents and communications. Work with a team of linguists to ensure accurate and culturally relevant translations.', positions: 1 },
        { title: 'Localization Specialist Intern', description: 'Help adapt products or services for international markets. Focus on cultural, linguistic, and technical localization to ensure the company’s offerings resonate with local consumers.', positions: 1 },
        { title: 'Technical Translator Intern', description: 'Translate technical documents, manuals, and other materials. Work closely with technical teams to ensure clarity and accuracy in specialized content.', positions: 1 },
        { title: 'Multimedia Translator Intern', description: 'Engage in the translation and localization of multimedia content such as videos, presentations, and audio recordings. Ensure that multimedia translations align with the original tone and message.', positions: 1 }
    ]
};


        
        let currentCategory = 'IT'; 
        let currentPage = 1;
        const itemsPerPage = 5;
        
        function filterCategory(category) {
            currentCategory = category; 
            currentPage = 1; // Reset to the first page
            applySearch(); 
        }
        
        function applySearch() {
            const searchText = document.getElementById('searchInput').value.toLowerCase();
            const filteredJobs = categories[currentCategory].filter(job => 
                job.title.toLowerCase().includes(searchText) || job.description.toLowerCase().includes(searchText)
            );
            
            updateListings(filteredJobs);
        }

        
        function updateListings(jobs) {
    const listingsElement = document.getElementById('listings');
    const paginationElement = document.getElementById('pagination');
    listingsElement.innerHTML = ''; 

    const totalPages = Math.ceil(jobs.length / itemsPerPage);
    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const jobsToShow = jobs.slice(start, end);

    if (jobsToShow.length > 0) {
        jobsToShow.forEach(job => {
            const internshipUrl = "{{ route('internship') }}" + 
                "?title=" + encodeURIComponent(job.title) + 
                "&category=" + encodeURIComponent(currentCategory) + 
                "&positions=" + encodeURIComponent(job.positions);

            const applyButton = `
                <a href="${internshipUrl}" 
                    class="btn btn-dark" 
                    style="background-color:#474bc2; border:0; padding: 10px 20px; position: absolute; bottom: 10px; right: 10px;">
                    Apply
                </a>`;

            const jobElement = document.createElement('div');
            jobElement.classList.add('card', 'mb-3');
            jobElement.innerHTML = `
                <div class="card-body row position-relative" style="background-color:white;margin:0;padding:0; border:0; border-radius: 8px; height:auto;">
                    <div class="col-md-7 d-flex flex-column justify-content-start" style="background-color:#F3F5FC; margin:0;padding:20px; border-radius: 8px 0 0 8px;">
                        <h5 class="card-title" style="font-size:32px;" data-translate="${job.title}">${job.title}</h5>
                        <p class="card-text" style="font-size:20px;"  data-translate="${job.description}">${job.description}</p>
                        <div class="row">
                            <div class="d-flex gap-2">
                                <button class="card-text" 
                                        style="border:none; background-color:#D1D1F0; border-radius:4px; width:auto;height:30px;">
                                    <small class="text-muted" style="font-size:16px;" data-translate="${currentCategory}" >${currentCategory}</small>
                                </button>
                                <button class="card-text" 
                                        style="border:none; background-color:#B1BBE7; border-radius:4px;width:auto;height:30px;">
                                    <small class="text-muted" style="font-size:16px;" data-translate="${job.positions}">${job.positions} positions</small>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 " style="background-color:white; margin:0;padding:0; border-radius:0 8px 8px 0; overflow: hidden; height: 100%;">
                        <img class="card-image" src="${job.imgSrc || '{{ asset('assets/img/hrphoto.png') }}'}" alt="Job Image" 
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; margin: 0; padding: 0; display: block;">
                        ${applyButton}
                    </div>
                </div>
            `;

            listingsElement.appendChild(jobElement);
        });
    } else {
        listingsElement.innerHTML = '<div class="text-center">No results found.</div>'; 
    }

    updatePagination(totalPages);
    updateActiveCategoryButton(currentCategory);
}

function updatePagination(totalPages) {
    const paginationElement = document.getElementById('pagination');
    paginationElement.innerHTML = '';

    // Ensure there's at least one button (for page 1)
    totalPages = Math.max(totalPages, 1);

    for (let i = 1; i <= totalPages; i++) {
        const button = document.createElement('button');
        button.textContent = i;
        button.classList.add("custom-pagination-button", 'mx-1');
        if (i === currentPage) {
            button.classList.add('active');
        }
        button.addEventListener('click', () => {
            currentPage = i;
            applySearch(); // Refresh listings for the current page
        });
        paginationElement.appendChild(button);
    }
}

        
function updateActiveCategoryButton(activeCategory) { 
    document.querySelectorAll('.category-btn').forEach(btn => {
        // Check `data-category` instead of button text
        if (btn.getAttribute('data-category') === activeCategory) {
            btn.classList.add('active');
            btn.classList.remove('btn-outline-secondary'); // Remove outline style
            btn.classList.add('btn-primary'); // Add active style
        } else {
            btn.classList.remove('active');
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-outline-secondary'); // Restore outline style
        }
    });
}


document.addEventListener('DOMContentLoaded', () => {
    filterCategory('IT'); // Default category
});




</script>
        
</body>
</html>
