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

    const emailInput = document.getElementById('email');
    if (emailInput) {
        emailInput.setAttribute("placeholder", translations[language]?.emailPlaceholder || translations['en'].emailPlaceholder);
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


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("subscribeForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent page refresh

        let emailInput = document.getElementById("email");
        let email = emailInput.value.trim();

        if (!email) {
            alert("Please enter a valid email address.");
            return;
        }

        fetch("/subscribe", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
            },
            body: JSON.stringify({ email: email }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.message) {
                alert(data.message); // Show success message
                emailInput.value = ""; // Clear input field
            } else if (data.error) {
                alert(data.error); // Show error message
            }
        })
        .catch(error => console.error("Error:", error));
    });
});

