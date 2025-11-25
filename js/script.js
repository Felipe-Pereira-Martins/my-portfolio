function showPage(pageName) {
    const pages = document.querySelectorAll('.page');
    pages.forEach(page => {
        page.classList.remove('active');
    });
    
    document.getElementById(pageName).classList.add('active');
    
    window.scrollTo({ top: 0, behavior: 'smooth' });
    
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse.classList.contains('show')) {
        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
        bsCollapse.hide();
    }
}

// Garante que a página home seja mostrada inicialmente
document.addEventListener('DOMContentLoaded', function() {
    showPage('home');
});