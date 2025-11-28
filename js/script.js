/**
 * Alterna as páginas com efeito Fade suave (sem movimento de pixels)
 * @param {string} pageName - ID da seção a exibir
 * @param {Event} event - Evento de clique para prevenir reload
 */
function showPage(pageName, event) {
    // 1. Evita recarregar a página (comportamento padrão do link)
    if (event) {
        event.preventDefault();
    }

    const pages = document.querySelectorAll('.page');
    const currentActive = document.querySelector('.page.active');
    const targetPage = document.getElementById(pageName);

    // Se clicou na página que já está aberta, não faz nada
    if (currentActive && currentActive.id === pageName) {
        return; 
    }

    // Lógica de transição
    if (currentActive) {
        // Remove a classe active para iniciar o fade-out via CSS
        currentActive.classList.remove('active');

        // Aguarda o tempo da transição do CSS (400ms)
        setTimeout(() => {
            currentActive.style.display = 'none';
            
            // Mostra a nova página
            if (targetPage) {
                targetPage.style.display = 'block';
                
                // Pequeno delay para o navegador processar o display:block
                // antes de aplicar a opacidade
                setTimeout(() => {
                    targetPage.classList.add('active');
                }, 10);
            }
            
            // Rola suavemente para o topo
            window.scrollTo({ top: 0, behavior: 'smooth' });

        }, 400); // Sincronizado com transition do CSS
    } else {
        // Caso inicial (primeiro carregamento)
        if (targetPage) {
            targetPage.style.display = 'block';
            setTimeout(() => {
                targetPage.classList.add('active');
            }, 10);
        }
    }

    // Fecha o menu mobile se estiver aberto (Bootstrap)
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        if (typeof bootstrap !== 'undefined') {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});
            bsCollapse.hide();
        } else {
            // Fallback se o Bootstrap JS não carregou
            navbarCollapse.classList.remove('show');
        }
    }
}

// Inicialização do Site
document.addEventListener('DOMContentLoaded', function() {
    // Atualiza o ano no rodapé
    const yearElement = document.getElementById('current-year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }

    // Garante que a Home abre se nenhuma página estiver ativa
    if (!document.querySelector('.page.active')) {
        showPage('home');
    }
    
    // Efeito na marca da Navbar
    const navbarBrand = document.querySelector('.navbar-brand');
    if (navbarBrand) {
        navbarBrand.addEventListener('mouseenter', function() { this.style.transform = 'scale(1.05)'; });
        navbarBrand.addEventListener('mouseleave', function() { this.style.transform = 'scale(1)'; });
    }
});/**
 * Alterna as páginas com efeito Fade suave (sem movimento de pixels)
 * @param {string} pageName - ID da seção a exibir
 * @param {Event} event - Evento de clique para prevenir reload
 */
function showPage(pageName, event) {
    // 1. Evita recarregar a página (comportamento padrão do link)
    if (event) {
        event.preventDefault();
    }

    const pages = document.querySelectorAll('.page');
    const currentActive = document.querySelector('.page.active');
    const targetPage = document.getElementById(pageName);

    // Se clicou na página que já está aberta, não faz nada
    if (currentActive && currentActive.id === pageName) {
        return; 
    }

    // Lógica de transição
    if (currentActive) {
        // Remove a classe active para iniciar o fade-out via CSS
        currentActive.classList.remove('active');

        // Aguarda o tempo da transição do CSS (400ms)
        setTimeout(() => {
            currentActive.style.display = 'none';
            
            // Mostra a nova página
            if (targetPage) {
                targetPage.style.display = 'block';
                
                // Pequeno delay para o navegador processar o display:block
                // antes de aplicar a opacidade
                setTimeout(() => {
                    targetPage.classList.add('active');
                }, 10);
            }
            
            // Rola suavemente para o topo
            window.scrollTo({ top: 0, behavior: 'smooth' });

        }, 400); // Sincronizado com transition do CSS
    } else {
        // Caso inicial (primeiro carregamento)
        if (targetPage) {
            targetPage.style.display = 'block';
            setTimeout(() => {
                targetPage.classList.add('active');
            }, 10);
        }
    }

    // Fecha o menu mobile se estiver aberto (Bootstrap)
    const navbarCollapse = document.querySelector('.navbar-collapse');
    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        if (typeof bootstrap !== 'undefined') {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});
            bsCollapse.hide();
        } else {
            // Fallback se o Bootstrap JS não carregou
            navbarCollapse.classList.remove('show');
        }
    }
}

// Inicialização do Site
document.addEventListener('DOMContentLoaded', function() {
    // Atualiza o ano no rodapé
    const yearElement = document.getElementById('current-year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }

    // Garante que a Home abre se nenhuma página estiver ativa
    if (!document.querySelector('.page.active')) {
        showPage('home');
    }
    
    // Efeito na marca da Navbar
    const navbarBrand = document.querySelector('.navbar-brand');
    if (navbarBrand) {
        navbarBrand.addEventListener('mouseenter', function() { this.style.transform = 'scale(1.05)'; });
        navbarBrand.addEventListener('mouseleave', function() { this.style.transform = 'scale(1)'; });
    }
});