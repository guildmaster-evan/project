document.addEventListener('DOMContentLoaded', function () {
    // Get the current page URL
    var currentPage = window.location.href;

    // Select all navigation links
    var navLinks = document.querySelectorAll('nav ul li a');

    // Iterate through the links
    navLinks.forEach(function (link) {
        // Check if the link's href matches the current page URL
        if (link.href === currentPage) {
            // Add the 'active' class to the matching link
            link.classList.add('active');
        }
    });

    // Smooth scroll between sections
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});
