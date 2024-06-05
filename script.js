




// New line


document.addEventListener('DOMContentLoaded', function() {
  const toggleButton = document.getElementById('toggle-button');

  // Check for saved theme in cookies
  const currentTheme = getCookie('theme') || 'style.css';
  document.getElementById('theme-stylesheet').setAttribute('href', currentTheme);

  toggleButton.addEventListener('click', function() {
    const currentTheme = document.getElementById('theme-stylesheet').getAttribute('href');
    const newTheme = currentTheme === 'style.css' ? 'style-dark.css' : 'style.css';
    document.getElementById('theme-stylesheet').setAttribute('href', newTheme);
    document.cookie = "theme=" + newTheme + "; path=/";
  });
});

function getCookie(name) {
  let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
  if (match) return match[2];
}


// ... other JavaScript code ... 

function moveSlides(n) {
    let slides = document.getElementsByClassName("slide");
    // ... rest of your moveSlides function ...
}

// ... other JavaScript code ...