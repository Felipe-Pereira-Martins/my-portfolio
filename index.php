<?php include './php/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showPage('home')"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="close-icon" style="display: none;">X</span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('about')">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('services')">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('projects')">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('contact')">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HOME PAGE -->
    <div id="home" class="page active">
        <!-- Nova Hero Section -->
        <section class="hero-section text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="display-4 fw-bold mb-3">Desenvolvedor Web</h1>
                        <p class="lead mb-4">Especialista em desenvolvimento full-stack com PHP, criando landing pages convertíveis e sistemas web personalizados</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-center">
                            <button class="btn btn-light btn-lg px-4 gap-3" onclick="showPage('projects')">Meus Projetos</button>
                            <a href="https://github.com/Felipe-Pereira-Martins" target="_blank" class="btn btn-outline-light btn-lg px-4">
                                <i class="bi bi-github me-2"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Highlights Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="section-title">Destaques</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-database service-icon"></i>
                            <h4>Banco de Dados</h4>
                            <p>Modelagem e otimização MySQL para performance</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-bootstrap service-icon"></i>
                            <h4>Design Responsivo</h4>
                            <p>Layouts adaptáveis para todos os dispositivos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-puzzle service-icon"></i>
                            <h4>Integrações</h4>
                            <p>APIs e sistemas conectados de forma eficiente</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- ABOUT PAGE -->
    <div id="about" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Sobre Mim</h2>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <img src="./images/profile/photo-profile.png" class="img-fluid rounded-3 shadow about-img" alt="Felipe Pereira Martins - Desenvolvedor PHP">
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-3" style="color: var(--dark-color);">Felipe Pereira Martins</h3>
                        <p class="lead"><strong>Desenvolvedor Full Stack PHP</strong> especializado em criar soluções web completas e eficientes.</p>

                        <p>Como desenvolvedor web, atuo no desenvolvimento de <strong>sistemas robustos</strong> e <strong>aplicações dinâmicas</strong>, focando em back-end com PHP e integração com tecnologias modernas do front-end.</p>

                        <p>Minha expertise inclui <strong>desenvolvimento de APIs</strong>, <strong>modelagem de bancos de dados</strong>, <strong>criação de painéis administrativos</strong> e implementação de <strong>funcionalidades interativas</strong> que proporcionam excelente experiência ao usuário.</p>

                        <h4 class="mt-4 mb-3">Stack Técnica</h4>
                        <div class="mb-4">
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-filetype-php me-1"></i>PHP
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-database me-1"></i>MySQL
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-filetype-js me-1"></i>JavaScript
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-braces me-1"></i>jQuery
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-bootstrap me-1"></i>Bootstrap
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-arrow-left-right me-1"></i>AJAX
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-git me-1"></i>Git/GitHub
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-shield-check me-1"></i>PDO
                            </span>
                            <span class="badge bg-primary me-2 mb-2">
                                <i class="bi bi-code-slash me-1"></i>HTML5/CSS3
                            </span>
                        </div>

                        <h4 class="mt-4 mb-3">Formação Acadêmica</h4>
                        <div class="university-grid">
                            <div class="university-item">
                                <img src="./images/universities/unicesumar-logo.jpg" alt="Unicesumar" class="university-logo">
                                <div class="university-info">
                                    <div class="university-degree">Análise e Desenvolvimento de Sistemas</div>
                                    <div class="university-period">Unicesumar</div>
                                </div>
                            </div>

                            <div class="university-item">
                                <img src="./images/universities/cruzeiro-sul-logo.png" alt="Cruzeiro do Sul" class="university-logo">
                                <div class="university-info">
                                    <div class="university-degree">Ciência da Computação</div>
                                    <div class="university-period">Cruzeiro do Sul (conclusão prevista em 2027)</div>
                                </div>
                            </div>

                            <div class="university-item">
                                <img src="./images/universities/cruzeiro-sul-logo.png" alt="Cruzeiro do Sul" class="university-logo">
                                <div class="university-info">
                                    <div class="university-degree">Engenharia de Computação</div>
                                    <div class="university-period">Cruzeiro do Sul (conclusão prevista em 2029)</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 p-3 bg-light rounded">
                            <p class="mb-0">
                                <i class="bi bi-search text-primary me-2"></i>
                                <strong>Perfil profissional:</strong> Desenvolvedor comprometido com excelência técnica, focado em entregar soluções de qualidade dentro dos prazos estabelecidos. Busco constantemente evolução e aprendizado para contribuir de forma significativa em cada projeto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SERVICES PAGE -->
    <div id="services" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Meus Serviços</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-laptop service-icon"></i>
                            <h4>Desenvolvimento Web</h4>
                            <p>Criação de sites responsivos e modernos com foco em performance e SEO avançado.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Landing Pages Otimizadas</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Sites Corporativos</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Aplicações Dinâmicas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-cart service-icon"></i>
                            <h4>E-commerce Completo</h4>
                            <p>Desenvolvimento de lojas virtuais do zero com painel administrativo integrado.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Front-end e Back-end</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Banco de Dados</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Painel Administrativo</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-search service-icon"></i>
                            <h4>Otimização SEO</h4>
                            <p>Implementação de técnicas avançadas de SEO para melhor posicionamento.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> SEO Técnico</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Otimização On-page</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Performance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-gear service-icon"></i>
                            <h4>Desenvolvimento Back-end</h4>
                            <p>Criação de APIs robustas e sistemas com arquitetura escalável.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> APIs RESTful</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Integrações</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Lógica de Negócio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-database service-icon"></i>
                            <h4>Banco de Dados</h4>
                            <p>Modelagem e otimização de bancos de dados relacionais.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> MySQL</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Modelagem de Dados</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Otimização</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card text-center p-4">
                            <i class="bi bi-layout-text-window service-icon"></i>
                            <h4>Layout Responsivo</h4>
                            <p>Desenvolvimento de interfaces adaptáveis para todos os dispositivos.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="bi bi-check-circle-fill text-success"></i> Mobile First</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Ajustes Personalizados</li>
                                <li><i class="bi bi-check-circle-fill text-success"></i> Cross-browser</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- PROJECTS PAGE -->
    <div id="projects" class="page">
        <section class="py-5 mt-5">
            <div class="container">
                <h2 class="section-title">Meus Projetos</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="./images/projects/luz-de-esther.jpg" class="card-img-top" alt="Loja Luz de Esther">
                            <div class="card-body">
                                <h5 class="card-title">Loja Luz de Esther</h5>
                                <p class="card-text">E-commerce completo desenvolvido do zero com front-end, back-end, banco de dados e painel administrativo.</p>
                                <span class="badge bg-primary me-1">PHP</span>
                                <span class="badge bg-secondary me-1">MySQL</span>
                                <span class="badge bg-success">JavaScript</span>
                                <span class="badge bg-info">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="./images/projects/landing-nutricionista.jpg" class="card-img-top" alt="Landing Page Nutricionista">
                            <div class="card-body">
                                <h5 class="card-title">Landing Page Nutricionista</h5>
                                <p class="card-text">Site responsivo e otimizado para SEO com design moderno e foco em conversão de clientes.</p>
                                <span class="badge bg-primary me-1">HTML5</span>
                                <span class="badge bg-secondary me-1">CSS3</span>
                                <span class="badge bg-success">JavaScript</span>
                                <span class="badge bg-info">SEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="./images/projects/portfolio.jpg" class="card-img-top" alt="Portfolio Pessoal">
                            <div class="card-body">
                                <h5 class="card-title">Portfolio Profissional</h5>
                                <p class="card-text">Site portfolio responsivo com design moderno, otimizado para SEO e experiência do usuário.</p>
                                <span class="badge bg-primary me-1">HTML5</span>
                                <span class="badge bg-secondary me-1">CSS3</span>
                                <span class="badge bg-success">JavaScript</span>
                                <span class="badge bg-info">Bootstrap</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- CONTACT PAGE -->
    <div id="contact" class="page">
        <section class="py-5">
            <div class="container">
                <h2 class="section-title">Vamos Trabalhar Juntos?</h2>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Cards de Contato -->
                        <div class="row g-4 mb-5">
                            <div class="col-md-4" data-aos="fade-up">
                                <div class="contact-card text-center">
                                    <div class="icon-wrapper bg-primary">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p>felipegmartins07@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="contact-card text-center">
                                    <div class="icon-wrapper bg-success">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                    <h5>WhatsApp</h5>
                                    <p>+55 (21) 97000-8197</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="contact-card text-center">
                                    <div class="icon-wrapper bg-info">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <h5>Localização</h5>
                                    <p>Rio de Janeiro, BR</p>
                                </div>
                            </div>
                        </div>

                        <!-- Botões de Rede Social -->
                        <div class="text-center" data-aos="zoom-in">
                            <p class="lead mb-4">Escolha sua forma preferida de contato</p>

                            <div class="social-buttons">
                                <a href="https://wa.me/5521970008197" target="_blank" class="btn-social whatsapp">
                                    <i class="bi bi-whatsapp"></i>
                                    WhatsApp
                                </a>
                                <a href="https://www.linkedin.com/in/felipe-pereira-martins-467a192b5/" target="_blank" class="btn-social linkedin">
                                    <i class="bi bi-linkedin"></i>
                                    LinkedIn
                                </a>
                                <a href="https://github.com/FelipePereiraMartins" target="_blank" class="btn-social github">
                                    <i class="bi bi-github"></i>
                                    GitHub
                                </a>
                                <a href="mailto:felipegmartins07@gmail.com" class="btn-social email">
                                    <i class="bi bi-envelope"></i>
                                    Email
                                </a>
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
                    <p class="mb-0">&copy; <span id="current-year">2025</span> Felipe Pereira Martins. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-icons">
                        <?php if (!empty($social_links['github'])): ?>
                            <a href="<?php echo $social_links['github']; ?>" target="_blank" rel="noopener noreferrer" title="Github">
                                <i class="bi bi-github"></i>
                            </a>
                        <?php endif; ?>

                        <?php if (!empty($social_links['linkedin'])): ?>
                            <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" rel="noopener noreferrer" title="Linkedin">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        <?php endif; ?>

                        <?php if (!empty($social_links['whatsapp'])): ?>
                            <a href="<?php echo $social_links['whatsapp']; ?>" target="_blank" rel="noopener noreferrer" title="Whatsapp">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        <?php endif; ?>

                        <?php if (!empty($social_links['email'])): ?>
                            <a href="<?php echo $social_links['email']; ?>" rel="noopener noreferrer" title="Email">
                                <i class="bi bi-envelope"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Your JavaScript -->
    <script src="js/script.js"></script>
</body>

</html>