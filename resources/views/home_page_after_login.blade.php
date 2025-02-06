<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InternPlus</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- font awesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style type ="text/css" rel="stylesheet">
    body {
      background-color: #ffffff;
      font-family: Arial, sans-serif;
    }

    .sidebar {
  background-color: #eef3fb;
  border-radius: 4px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .sidebar .menu-item {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-left:10px;
      margin-bottom: 20px;
      color: #000;
      text-decoration: none;
      font-weight: bold;
      
    }

    .menu-item i{
      width:20px;
      height:20px;
      color:black;
    }



    .profile-card {
  display: flex;
  align-items: center;
  background-color: #D1D1F0;
  padding: 10px;
  border-radius: 10px;
  gap: 15px;
}

.profile-photo {
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.text-container {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  justify-content: space-between;
}

.name {
  font-size: 16px;
  font-weight: bold;
  margin: 0;
}

.badge {
  width: fit-content;
  border-radius: 4px;
  background-color: #B1BBE7;
  color: black;
}

.action-icon {
  background-color: white;
  font-size: 24px;
  cursor: pointer;
  border-radius: 4px;
  padding: 0 3px;
}

.profile-upload-label {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.profile-upload-label:hover .profile-photo {
  opacity: 0.8;
}

    .profile-card img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
    }

    .content {
      padding: 20px;
    }

    .card {
      border: none;
      border-radius: 4px;
      background-color: #eef3fb;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 20px;
      margin-bottom: 20px;
    }

    .card .btn {
      background-color: #474BC2;
      color: #FFFFFF;
      font-weight: bold;
      border: none;
      border-radius: 4px;
      padding: 10px 20px;
      width:150px;
      height:50px;
    }

    .card .btn:hover {
      background-color: #6C77D9;
    }

    .my-board img {
      width: 80px;
      margin-bottom: 20px;
    }

    .my-board p {
      font-size: 16px;
      font-weight: bold;
      margin: 0;
    }

    .my-board small {
      color: #888;
    }

    .navbar {
  background-color: #FFFFFF;
  padding: 15px 20px;
  font-size: 16px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.navbar .navbar-brand {
  font-size: 24px;
  color: #323438;
  font-weight: bold;
}

.navbar .nav-item {
  text-decoration: none;
  color: #323438;
  font-weight: bold;
  transition: color 0.3s;
}



.navbar .dropdown-toggle {
  font-size: 16px;
  color: #323438;
  font-weight: bold;
}



.navbar .bi-bell {
  color: #323438;
  transition: color 0.3s;
}



.navbar .profile-icon img {
  transition: opacity 0.3s;
}

.navbar .profile-icon img:hover {
  opacity: 0.8;
}

.navbar .nav-items {
  display: flex;
  align-items: center;
}

.navbar .nav-items .nav-item {
  margin-left: 20px;
}

.application-link {
    position: relative;
    padding: 20px;
  }

  .application-link::after {
    content: "";
    position: absolute;
    right: -10px;
    top: 50%; /* Center the border vertically */
    transform: translateY(-50%);
    height: 20px; /* Set the height of the border */
    width: 1px; /* Set the width of the border */
    background-color: #000; /* Border color */
  }

  .menu-item.active {
    background-color: #474BC2;
    padding:4px;
    color: white;
    border-radius: 4px;
    
  }

  .menu-item.active i {
  color: white; /* Ensure icon color is white when active */
  margin:4px;
}
  

  .my-board-centered {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 300px; /* Adjust height if needed */
  }

  .board-card-updated {
    background-color: white !important;
    box-shadow: none !important;
  }

  .status-description{
    display:flex;
    flex-direction:column;
    align-items:center;
  }


  </style>
</head>
<body>
  <!-- Navbar -->
<!-- Navbar -->
<nav class="navbar d-flex align-items-center justify-content-end">
  <div class="d-flex align-items-center">
    <div class="nav-items d-flex me-3">
      <a href="#" class="nav-item mx-3" data-translate="Home">Home</a>
      <a href="#" class="nav-item mx-3" data-translate="Program">Program</a>
      <a href="#" class="nav-item mx-3 application-link" data-translate="Application">Application</a>
    </div>

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
    
    <div class="mx-3">
      <i class="bi bi-bell" style="font-size: 1.5rem; cursor: pointer;"></i>
    </div>
    <div class="profile-icon mx-3">
      <a href="user_profile.html"><img src="./assets/img/user_sample.png" alt="Profile Picture" style="width: 40px; height: 40px; border-radius: 50%; cursor: pointer;"></a>
    </div>
  </div>
</nav>



  <!-- Main Container -->
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 sidebar" style="position: relative; top: -60px; left: 30px; z-index: 1; margin-right: 20px;">
        <i class="bi bi-list" style="font-size:25px;"></i><a class="navbar-brand" style="font-size:30px;" href="#">INTERNPLUS</a>
        <hr/>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-clipboard"></i> <span data-translate="Assignment Task">Assignment Task</span>
        </a>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-calendar"></i> <span data-translate="Time sheet">Time sheet</span> 
        </a>
        <a href="#" class="menu-item">
          <i class="fa-solid fa-phone-slash"></i>  <span data-translate="Leave">Leave</span> 
        </a>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-file-lines"></i>  <span data-translate="Report">Report</span> 
        </a>
        <a href="#" class="menu-item">
          <i class="fa-regular fa-user"></i>  <span data-translate="Supervisor">Supervisor</span> 
        </a>
        <a href="#" class="menu-item">
          <i class="bi bi-shield"></i>  <span data-translate="Rules & Policies">Rules & Policies</span> 
        </a>
        <a href="#" class="menu-item">
          <i class="bi bi-archive"></i>  <span data-translate="Offboard">Offboard</span> 
        </a>
        <a href="#" class="menu-item">
          <i class="bi bi-book"></i>  <span data-translate="Manual"> Manual</span>
        </a>
        <div class="mt-3">
          <small class="text-left" data-translate="InternPlus @ 2024. All rights reserved."> InternPlus @ 2024. All rights reserved.</small>
          <br>
          <small class="text-left" data-translate="Terms of Use">Terms of Use</small>
        </div>
        <div class="profile-card d-flex align-items-center mt-3" style="background-color: #D1D1F0; padding: 10px; border-radius: 10px; gap: 15px;">
          <label for="profileUpload" class="profile-upload-label mb-0">
            <img id="profileImage" src="./assets/img/user_sample.png" alt="Profile" class="profile-photo" style="width: 50px; height: 50px; border-radius: 50%;"/>
          </label>
          <div class="d-flex flex-column flex-grow-1">
            <p class="mb-0 fw-bold" style="font-size: 16px;">{{ $user->first_name }} {{ $user->last_name }}</p>
            <span class="badge text-black" style="width: fit-content; border-radius:4px; background-color:#B1BBE7;" data-translate="Candidate">Candidate</span>
          </div>
          <i class="bi bi-box-arrow-right" style="background-color:white;font-size: 24px; cursor: pointer; border-radius:4px; padding:0 3px;"></i>
        </div>
        
      </div>
    
      <!-- Main Content -->
      <div class="col-md-8 content" style="margin-left: 20px;">
        <div class="card">
          <h3 class="fw-bold"> <span data-translate="WELCOME">WELCOME</span> {{ $user->first_name }}</h3>
          <p data-translate="Internship application system by Vanness Plus Consulting Co., Ltd.">Internship application system by Vanness Plus Consulting Co., Ltd.</p>
          <button class="btn" data-translate="Apply Now">Apply Now</button>
        </div>
    
        <div class="card text-center">
          <h4 class="text-start" style="font-weight: bold;" data-translate="MY BOARD">MY BOARD</h4>
          <div class="status-description">
            <img src="./assets/img/safe-icon.png" style="width:150px;" alt="">
            <h1 class="fw-bold" style="font-size:32px;" data-translate="You haven't been approved yet.">You haven't been approved yet.</h1>
            <p data-translate="You must be approved as a company intern to access the information.">You must be approved as a company intern to <br/> access the information.</p>
            <button class="btn gohome " id="gohome" style="width:200px; display:none;" data-translate="Go to homepage">Go to homepage</button>
          </div>
        </div>        
      </div>
    </div>
    
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.menu-item');
    const welcomeCard = document.querySelector('.card');
    const badge = document.querySelector('.badge');
    const boardCard = document.querySelector('.card.text-center');
    const goHomeButton = document.getElementById('gohome');

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            // Remove active class and reset icon color for all menu items
            menuItems.forEach(menu => {
                menu.classList.remove('active');
                const icon = menu.querySelector('i');
                if (icon) {
                    icon.style.color = 'black'; // Reset icon color
                }
            });

            // Add active class to the clicked menu item
            item.classList.add('active');
            const icon = item.querySelector('i');
            if (icon) {
                icon.style.color = 'white'; // Change icon color to white
            }

            // Hide the welcome card
            welcomeCard.style.display = 'none';


            // Update the board card appearance
            boardCard.classList.add('my-board-centered', 'board-card-updated');
            boardCard.style.border = 'none';
            boardCard.querySelector('h4').style.display = 'none';
            goHomeButton.style.display = 'block'; // Show the "Go to homepage" button
        });
    });

    // Fix the event listener for the "Go to homepage" button
    goHomeButton.addEventListener('click', function () {
        boardCard.classList.remove('my-board-centered', 'board-card-updated');
        welcomeCard.style.display = 'block';

        // Reset the board card border to its original state
        boardCard.style.border = ''; // Reset to default or set to a specific value if needed

        boardCard.querySelector('h4').style.display = 'block';
        goHomeButton.style.display = 'none';

        // Reset the active menu item and icon color
        menuItems.forEach(menu => {
            menu.classList.remove('active');
            const icon = menu.querySelector('i');
            if (icon) {
                icon.style.color = 'black'; // Reset icon color
            }
        });
    });
});
</script>
</body>
</html>
