<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showPage('home')">Meu Portfólio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('sobre')">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('servicos')">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('projetos')">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('contato')">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HOME PAGE -->
    <div id="home" class="page active">
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1>Olá, eu sou Developer</h1>
                        <p>Desenvolvedor Full Stack especializado em criar experiências digitais incríveis</p>
                        <button class="btn btn-custom" onclick="showPage('contato')">Entre em Contato</button>
                    </div>
                    <div class="col-lg-6 text-center">
                        <i class="bi bi-code-slash hero-icon"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-title">Destaques</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-code-square service-icon"></i>
                            <h4>Desenvolvimento Web</h4>
                            <p>Criação de sites modernos e responsivos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-phone service-icon"></i>
                            <h4>Apps Mobile</h4>
                            <p>Aplicativos nativos e híbridos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-palette service-icon"></i>
                            <h4>UI/UX Design</h4>
                            <p>Interfaces bonitas e funcionais</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SOBRE PAGE -->
    <div id="sobre" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Sobre Mim</h2>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="https://via.placeholder.com/500x500/6366f1/ffffff?text=Foto+Perfil" class="img-fluid rounded-3 shadow" alt="Perfil">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="mb-4">Desenvolvedor Full Stack</h3>
                        <p class="lead">Olá! Sou um desenvolvedor apaixonado por tecnologia e inovação, com mais de 5 anos de experiência no mercado.</p>
                        <p>Especializado em criar soluções web modernas e eficientes, utilizando as melhores práticas e tecnologias do mercado. Meu objetivo é transformar ideias em realidade através do código.</p>
                        
                        <h4 class="mt-4 mb-3">Habilidades</h4>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2 mb-2">JavaScript</span>
                            <span class="badge bg-primary me-2 mb-2">React</span>
                            <span class="badge bg-primary me-2 mb-2">Node.js</span>
                            <span class="badge bg-primary me-2 mb-2">Python</span>
                            <span class="badge bg-primary me-2 mb-2">Bootstrap</span>
                            <span class="badge bg-primary me-2 mb-2">Git</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SERVIÇOS PAGE -->
    <div id="servicos" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Meus Serviços</h2>
                <div class="row g-4">
                    <!-- Seus cards de serviços aqui (mantenha igual) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-laptop service-icon"></i>
                            <h4>Desenvolvimento Web</h4>
                            <p>Criação de sites responsivos e modernos utilizando as melhores tecnologias do mercado.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Landing Pages</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Sites Institucionais</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> E-commerce</li>
                            </ul>
                        </div>
                    </div>
                    <!-- ... continue com os outros cards de serviços ... -->
                </div>
            </div>
        </section>
    </div>

    <!-- PROJETOS PAGE -->
    <div id="projetos" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Meus Projetos</h2>
                <div class="row g-4">
                    <!-- Seus cards de projetos aqui (mantenha igual) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/400x300/6366f1/ffffff?text=Projeto+1" class="card-img-top" alt="Projeto 1">
                            <div class="card-body">
                                <h5 class="card-title">E-commerce Moderno</h5>
                                <p class="card-text">Plataforma completa de e-commerce com carrinho, pagamento e painel administrativo.</p>
                                <span class="badge bg-primary me-1">React</span>
                                <span class="badge bg-secondary me-1">Node.js</span>
                                <span class="badge bg-success">MongoDB</span>
                            </div>
                        </div>
                    </div>
                    <!-- ... continue com os outros cards de projetos ... -->
                </div>
            </div>
        </section>
    </div>

    <!-- CONTATO PAGE -->
    <div id="contato" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Entre em Contato</h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nome" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="nome" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="assunto" class="form-label">Assunto</label>
                                    <input type="text" class="form-control" id="assunto" required>
                                </div>
                                <div class="mb-3">
                                    <label for="mensagem" class="form-label">Mensagem</label>
                                    <textarea class="form-control" id="mensagem" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-custom w-100">Enviar Mensagem</button>
                            </form>
                        </div>
                        
                        <div class="row mt-5 text-center">
                            <div class="col-md-4">
                                <i class="bi bi-envelope service-icon"></i>
                                <h5>Email</h5>
                                <p>contato@email.com</p>
                            </div>
                            <div class="col-md-4">
                                <i class="bi bi-telephone service-icon"></i>
                                <h5>Telefone</h5>
                                <p>+55 (21) 99999-9999</p>
                            </div>
                            <div class="col-md-4">
                                <i class="bi bi-geo-alt service-icon"></i>
                                <h5>Localização</h5>
                                <p>Rio de Janeiro, Brasil</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2024 Meu Portfólio. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-github"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Seu JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>