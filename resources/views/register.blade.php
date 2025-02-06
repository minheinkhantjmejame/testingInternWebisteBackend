<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - InternPlus</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/styles.css"> 
    <style type="text/css" rel="stylesheet">
        body{
            background-color:#fff;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container d-flex justify-content-start align-items-center">
            <!-- INTERNPLUS -->
            <a class="navbar-brand fw-bold me-3" href="{{ url('/') }}" style="font-size:40px;">INTERNPLUS</a>
            
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
        </div>
    </nav>

    <!-- Registration Section -->
    <div class="container mt-5">
        <div class="card registration-card" style="background-color:#f3f5fc;">
            <div class="row g-0" >
                <div class="col-md-6 registration-image" style="display:flex; display:flex; justify-content:center;">
                    <img src="./assets/img/pencil.png" alt="Registration Visual" style="width:350px;" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h2 class="card-title" style="font-size:48px;" data-translate="REGISTER">REGISTER</h2>
                        <form id="registrationForm" action="{{ route('register') }}" method="POST">
                            @csrf
                            <p style="margin:0;" data-translate="First Name">First Name</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="firstName" name="first_name" style="border:0;" required>
                            </div>
                            <p style="margin:0;" data-translate="Last Name">Last Name</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-person-check"></i></span>
                                <input type="text" class="form-control" id="lastName" name="last_name" style="border:0;" required>
                            </div>
                            <p style="margin:0;" data-translate="Email Address">Email Address</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" style="border:0;" id="email" name="email" placeholder="" required>
                            </div>
                            <p style="margin:0;" data-translate="Password">Password</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" style="border:0;" required>
                                <span class="input-group-text" style="cursor: pointer;border:0;background-color:#fff;" onclick="togglePasswordVisibility('password', 'toggleIcon')">
                                    <i class="bi bi-eye-slash" style="border:0;" id="toggleIcon"></i>
                                </span>
                            </div>
                            <p style="margin:0;" data-translate="Confirm Password">Confirm Password</p>
                            <div class="mb-3 input-group" style="box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
                                <span class="input-group-text" style="border:0;background-color:#fff;"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" style="border:0;" required>
                                <span class="input-group-text" style="cursor: pointer;border:0;background-color:#fff;" onclick="togglePasswordVisibility('password_confirmation', 'toggleIconConfirmation')">
                                    <i class="bi bi-eye-slash" style="border:0;" id="toggleIconConfirmation"></i>
                                </span>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-black w-100 mb-3" style="background-color:#474bc2;color:white; border:0; border-radius:4px;">Register</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
function togglePasswordVisibility(fieldId, iconId) {
    var passwordInput = document.getElementById(fieldId);
    var toggleIcon = document.getElementById(iconId);
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.replace('bi-eye-slash', 'bi-eye');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.replace('bi-eye', 'bi-eye-slash');
    }
}
document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
        link.classList.remove('active');
        const linkPath = new URL(link.href).pathname;
        if (linkPath === currentPath) {
            link.classList.add('active');
        }
    });

    // ✅ Load saved language from localStorage
    const savedLanguage = localStorage.getItem('selectedLanguage') || 'en';
    updateLanguage(savedLanguage);
});

async function updateLanguage(language) {
    document.getElementById('dropdownLabel').textContent = language.toUpperCase();

    // ✅ Save the selected language in localStorage
    localStorage.setItem('selectedLanguage', language);

    // ✅ Define translations for static text (placeholders, buttons, etc.)
    const translations = {
        'en': {
            'searchPlaceholder': "Enter the program you are interested in...",
            'applyNow': "Apply Now",
            'internshipProgram': "Internship Program",
            'emailPlaceholder': "Enter your email to get the latest news...",
            'filePlaceholder': "Select the file to upload"
        },
        'th': {
            'searchPlaceholder': "กรอกโปรแกรมที่คุณสนใจ...",
            'applyNow': "สมัครตอนนี้",
            'internshipProgram': "โปรแกรมฝึกงาน",
            'emailPlaceholder': "กรอกอีเมลของคุณเพื่อรับข่าวสารล่าสุด...",
            'filePlaceholder': "เลือกไฟล์ที่ต้องการอัปโหลด"
        },
        'my': {
            'searchPlaceholder': "သင့်စိတ်ဝင်စားသောအစီအစဉ်ကိုရိုက်ထည့်ပါ...",
            'applyNow': "လျှောက်ထားရန်",
            'internshipProgram': "အလုပ်သင်အစီအစဉ်",
            'emailPlaceholder': "နောက်ဆုံးသတင်းများရယူရန်သင့်အီးမေးလ်ထည့်ပါ...",
            'filePlaceholder': "ဖိုင်ရွေးချယ်ပါ"
        }
    };

    // ✅ Update placeholders for multiple file input fields
    const cvFilePlaceholder = document.getElementById('cvFilePlaceholder');
    if (cvFilePlaceholder) {
        cvFilePlaceholder.setAttribute("placeholder", translations[language]?.filePlaceholder || translations['en'].filePlaceholder);
    }

    const portfolioFilePlaceholder = document.getElementById('portfolioFilePlaceholder');
    if (portfolioFilePlaceholder) {
        portfolioFilePlaceholder.setAttribute("placeholder", translations[language]?.filePlaceholder || translations['en'].filePlaceholder);
    }

    // ✅ Update placeholders for other input fields
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.setAttribute("placeholder", translations[language]?.searchPlaceholder || translations['en'].searchPlaceholder);
    }



    // ✅ Update text content using predefined translations
    const elementsToTranslate = document.querySelectorAll('[data-translate]');
    for (const element of elementsToTranslate) {
        const key = element.getAttribute('data-translate');
        
        if (translations[language][key]) {
            element.innerText = translations[language][key];
        } else {
            const translatedText = await translateText(key, language);
            element.innerText = translatedText;
        }
    }
}

// ✅ Function to translate text using Google Translate API
async function translateText(text, targetLanguage) {
    try {
        const response = await fetch(
            `https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${encodeURIComponent(text)}`
        );
        const data = await response.json();
        return data[0][0][0]; // Extract the translated text
    } catch (error) {
        console.error('Translation error:', error);
        return text; // Fallback to the original text if translation fails
    }
}


    </script>
        
        
        
</body>
</html>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif