function showPage(pageName) {
    const pages = document.querySelectorAll('.page');
    const currentActive = document.querySelector('.page.active');
    
    // Smooth transition between pages
    if (currentActive) {
        currentActive.style.opacity = '0';
        currentActive.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            pages.forEach(page => {
                page.classList.remove('active');
            });
            
            document.getElementById(pageName).classList.add('active');
            
            // Trigger reflow for animation
            document.getElementById(pageName).offsetHeight;
            
            document.getElementById(pageName).style.opacity = '1';
            document.getElementById(pageName).style.transform = 'translateY(0)';
            
            window.scrollTo({ top: 0, behavior: 'smooth' });
            
            // Close mobile menu if open
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        }, 200);
    }
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    showPage('home');
    
    // Add smooth closing for mobile menu
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 991) {
                setTimeout(() => {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }, 300);
            }
        });
    });
    
    // Add hover effect to navbar brand
    const navbarBrand = document.querySelector('.navbar-brand');
    navbarBrand.style.transition = 'all 0.3s ease';
    
    navbarBrand.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.05)';
    });
    
    navbarBrand.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
});
// Update copyright year automatically
document.addEventListener('DOMContentLoaded', function() {
    const yearElement = document.getElementById('current-year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
});