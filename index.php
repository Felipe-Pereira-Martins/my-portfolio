<?php include './php/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" onclick="showPage('home', event)">
                Felipe P. Martins
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('home', event)">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('about', event)">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('services', event)">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('projects', event)">Projetos</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-primary rounded-pill px-4 btn-sm fw-bold" href="#" onclick="showPage('contact', event)">
                            Contato
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="page active">

        <section class="hero-section text-center position-relative overflow-hidden">
            <div class="container position-relative" style="z-index: 2;">

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="mb-4">
                            <span class="badge bg-white text-primary border rounded-pill px-3 py-2 shadow-sm">
                                <i class="bi bi-rocket-takeoff-fill me-2"></i>Disponível para Projetos
                            </span>
                        </div>

                        <h1 class="display-4 fw-bold text-white mb-3 tracking-tight">
                            Transformando Ideias em <br class="d-none d-md-block">
                            <span class="text-info">Sistemas Reais</span>
                        </h1>

                        <p class="lead text-light opacity-75 mx-auto mb-5" style="max-width: 700px;">
                            Especialista Full Stack PHP. Crio aplicações web robustas, seguras e escaláveis, focadas na melhor experiência para o seu negócio.
                        </p>

                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <button class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm transition-hover text-primary" onclick="showPage('projects', event)">
                                Ver Meus Projetos
                            </button>

                            <a href="https://github.com/Felipe-Pereira-Martins" target="_blank" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold border shadow-sm transition-hover">
                                <i class="bi bi-github me-2"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container py-4">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 text-center">
                        <h2 class="h5 text-primary fw-bold text-uppercase mb-2" style="letter-spacing: 1px;">Destaques</h2>
                        <h3 class="fw-bold text-dark">O que me define</h3>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 bg-light rounded-4 text-center transition-hover shadow-sm">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white text-primary rounded-4 shadow-sm" style="width: 64px; height: 64px;">
                                        <i class="bi bi-database-fill fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark h5">Back-end Sólido</h4>
                                <p class="text-muted small mb-0">
                                    Modelagem de bancos de dados complexos e APIs de alta performance com MySQL e PHP.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 bg-light rounded-4 text-center transition-hover shadow-sm">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white text-success rounded-4 shadow-sm" style="width: 64px; height: 64px;">
                                        <i class="bi bi-phone-fill fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark h5">100% Responsivo</h4>
                                <p class="text-muted small mb-0">
                                    Interfaces que se adaptam perfeitamente a qualquer dispositivo, do celular ao desktop.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card h-100 border-0 bg-light rounded-4 text-center transition-hover shadow-sm">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-white text-info-emphasis rounded-4 shadow-sm" style="width: 64px; height: 64px;">
                                        <i class="bi bi-puzzle-fill fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark h5">Integrações</h4>
                                <p class="text-muted small mb-0">
                                    Conexão eficiente entre sistemas, APIs de pagamento e serviços de terceiros.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="about" class="page">
        <section class="py-5 bg-light">
            <div class="container py-4">

                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark">Sobre Mim</h2>
                    <hr class="w-25 mx-auto border-primary border-3 opacity-100 rounded">
                </div>

                <div class="row g-5 align-items-start">

                    <div class="col-lg-4 sticky-lg-top" style="z-index: 1;">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                            <div class="ratio ratio-1x1 bg-white">
                                <img src="./images/profile/photo-profile.png" class="object-fit-cover" alt="Felipe Pereira Martins">
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4 bg-dark text-white">
                            <div class="card-body p-4 text-center">
                                <h5 class="fw-bold mb-1">Felipe P. Martins</h5>
                                <p class="text-secondary small mb-3">Full Stack PHP Developer</p>

                                <figure class="mb-0">
                                    <blockquote class="blockquote">
                                        <p class="small opacity-75 fst-italic mb-2">
                                            "Confie no Senhor de todo o seu coração e não se apoie no seu próprio entendimento. Reconheça-o em todos os seus caminhos, e ele endireitará as suas veredas."
                                        </p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer text-secondary mb-0 small" style="font-size: 0.75rem;">
                                        Provérbios 3:5-6
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="mb-5 ps-lg-4">
                            <h4 class="fw-bold mb-3 text-dark">Minha Jornada</h4>
                            <p class="lead text-muted mb-4">
                                Desenvolvedor apaixonado por transformar ideias em software eficiente.
                            </p>
                            <p class="text-secondary mb-3">
                                Especialista no ecossistema <strong>PHP</strong>, atuo no desenvolvimento de sistemas robustos, desde a arquitetura de banco de dados até interfaces dinâmicas. Combino a lógica do Back-end com a estética do Front-end moderno.
                            </p>
                            <p class="text-secondary">
                                Busco constantemente a excelência técnica, mantendo-me atualizado com as melhores práticas de segurança e performance web.
                            </p>
                        </div>

                        <div class="mb-5 ps-lg-4">
                            <h5 class="fw-bold mb-3 text-dark border-bottom pb-2">Arsenal Tecnológico</h5>

                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-filetype-php me-1"></i> PHP 8+
                                </span>
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-database-fill me-1"></i> MySQL
                                </span>
                                <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-shield-lock me-1"></i> PDO / Segurança
                                </span>

                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-filetype-html me-1"></i> HTML5
                                </span>
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-filetype-css me-1"></i> CSS3
                                </span>
                                <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-filetype-js me-1"></i> JavaScript
                                </span>

                                <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-wind me-1"></i> Tailwind CSS
                                </span>
                                <span class="badge bg-info-subtle text-info-emphasis border border-info-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-bootstrap-fill me-1"></i> Bootstrap 5
                                </span>

                                <span class="badge bg-dark-subtle text-dark border border-dark-subtle rounded-pill px-3 py-2">
                                    <i class="bi bi-git me-1"></i> Git/GitHub
                                </span>
                            </div>
                        </div>

                        <div class="ps-lg-4">
                            <h5 class="fw-bold mb-4 text-dark border-bottom pb-2">Formação Acadêmica</h5>

                            <div class="d-grid gap-3">

                                <div class="card border-0 shadow-sm rounded-4">
                                    <div class="card-body p-4 d-flex align-items-center">
                                        <div class="bg-white border rounded-3 p-2 me-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                            <img src="./images/universities/unicesumar-logo.jpg" class="img-fluid object-fit-contain" alt="Unicesumar" style="max-height: 100%;">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-dark">Análise e Desenv. de Sistemas</h6>
                                            <p class="mb-0 text-muted small">Unicesumar • <span class="badge bg-success text-white ms-1">Concluído</span></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 shadow-sm rounded-4 opacity-75">
                                    <div class="card-body p-4 d-flex align-items-center">
                                        <div class="bg-white border rounded-3 p-2 me-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                            <img src="./images/universities/cruzeiro-sul-logo.png" class="img-fluid object-fit-contain" alt="Cruzeiro do Sul" style="max-height: 100%;">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-dark">Ciência da Computação</h6>
                                            <p class="mb-0 text-muted small">Cruzeiro do Sul • Previsão: 2027</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border-0 shadow-sm rounded-4 opacity-75">
                                    <div class="card-body p-4 d-flex align-items-center">
                                        <div class="bg-white border rounded-3 p-2 me-3 d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                                            <img src="./images/universities/cruzeiro-sul-logo.png" class="img-fluid object-fit-contain" alt="Cruzeiro do Sul" style="max-height: 100%;">
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-1 text-dark">Engenharia de Computação</h6>
                                            <p class="mb-0 text-muted small">Cruzeiro do Sul • Previsão: 2029</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="services" class="page">
        <section class="py-5 bg-light">
            <div class="container py-4">

                <div class="text-center mb-5">
                    <span class="badge bg-white text-primary border rounded-pill px-3 py-2 shadow-sm mb-3">
                        <i class="bi bi-briefcase me-2"></i>Soluções
                    </span>
                    <h2 class="display-5 fw-bold text-dark mb-3">Como posso ajudar?</h2>
                    <p class="lead text-muted mx-auto" style="max-width: 600px;">
                        Combino conhecimento técnico em Back-end com sensibilidade de Design para entregar produtos digitais completos.
                    </p>
                </div>

                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 transition-hover text-center">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-4 mx-auto" style="width: 64px; height: 64px;">
                                        <i class="bi bi-code-square fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark mb-3">Desenvolvimento Web</h4>
                                <p class="text-muted mb-4">Sites rápidos e escaláveis, desenvolvidos com as melhores práticas de código limpo.</p>

                                <ul class="list-unstyled mb-0 d-grid gap-2 text-start border-top pt-4">
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-primary me-2 flex-shrink-0 mt-1"></i>
                                        <span>Landing Pages de Alta Conversão</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-primary me-2 flex-shrink-0 mt-1"></i>
                                        <span>Portais Corporativos</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-primary me-2 flex-shrink-0 mt-1"></i>
                                        <span>Dashboards Administrativos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 transition-hover text-center">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-success-subtle text-success rounded-4 mx-auto" style="width: 64px; height: 64px;">
                                        <i class="bi bi-bag-check-fill fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark mb-3">E-commerce</h4>
                                <p class="text-muted mb-4">Lojas virtuais completas para vender seus produtos com segurança e facilidade.</p>

                                <ul class="list-unstyled mb-0 d-grid gap-2 text-start border-top pt-4">
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-success me-2 flex-shrink-0 mt-1"></i>
                                        <span>Integração com Pagamentos</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-success me-2 flex-shrink-0 mt-1"></i>
                                        <span>Gestão de Estoque e Pedidos</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-success me-2 flex-shrink-0 mt-1"></i>
                                        <span>Área do Cliente Personalizada</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 transition-hover text-center">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-warning-subtle text-warning-emphasis rounded-4 mx-auto" style="width: 64px; height: 64px;">
                                        <i class="bi bi-graph-up-arrow fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark mb-3">SEO & Performance</h4>
                                <p class="text-muted mb-4">Seu site no topo do Google e carregando instantaneamente para o usuário.</p>

                                <ul class="list-unstyled mb-0 d-grid gap-2 text-start border-top pt-4">
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-warning me-2 flex-shrink-0 mt-1"></i>
                                        <span>Otimização Técnica (Vitals)</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-warning me-2 flex-shrink-0 mt-1"></i>
                                        <span>SEO On-page Estruturado</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-warning me-2 flex-shrink-0 mt-1"></i>
                                        <span>Acessibilidade Mobile</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 transition-hover text-center">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-info-subtle text-info-emphasis rounded-4 mx-auto" style="width: 64px; height: 64px;">
                                        <i class="bi bi-server fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark mb-3">Back-end & APIs</h4>
                                <p class="text-muted mb-4">O motor do seu sistema. Lógica de negócio segura e comunicação entre sistemas.</p>

                                <ul class="list-unstyled mb-0 d-grid gap-2 text-start border-top pt-4">
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-info me-2 flex-shrink-0 mt-1"></i>
                                        <span>APIs RESTful Documentadas</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-info me-2 flex-shrink-0 mt-1"></i>
                                        <span>Autenticação Segura (JWT)</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-info me-2 flex-shrink-0 mt-1"></i>
                                        <span>Integração de Sistemas</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 transition-hover text-center">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-secondary-subtle text-secondary-emphasis rounded-4 mx-auto" style="width: 64px; height: 64px;">
                                        <i class="bi bi-database-fill-gear fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark mb-3">Banco de Dados</h4>
                                <p class="text-muted mb-4">Estruturação inteligente dos dados para garantir integridade e velocidade.</p>

                                <ul class="list-unstyled mb-0 d-grid gap-2 text-start border-top pt-4">
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-secondary me-2 flex-shrink-0 mt-1"></i>
                                        <span>Modelagem Relacional (MySQL)</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-secondary me-2 flex-shrink-0 mt-1"></i>
                                        <span>Otimização de Consultas</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-secondary me-2 flex-shrink-0 mt-1"></i>
                                        <span>Migração e Backup</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 transition-hover text-center">
                            <div class="card-body p-4 p-xl-5">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-danger-subtle text-danger rounded-4 mx-auto" style="width: 64px; height: 64px;">
                                        <i class="bi bi-phone-fill fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold text-dark mb-3">UI/UX Mobile</h4>
                                <p class="text-muted mb-4">Experiências fluídas que funcionam perfeitamente em qualquer tamanho de tela.</p>

                                <ul class="list-unstyled mb-0 d-grid gap-2 text-start border-top pt-4">
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-danger me-2 flex-shrink-0 mt-1"></i>
                                        <span>Abordagem Mobile-First</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-danger me-2 flex-shrink-0 mt-1"></i>
                                        <span>Interfaces Touch-Friendly</span>
                                    </li>
                                    <li class="d-flex align-items-start text-secondary small">
                                        <i class="bi bi-check-circle-fill text-danger me-2 flex-shrink-0 mt-1"></i>
                                        <span>Testes Cross-Browser</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div id="projects" class="page">
        <section class="py-5 bg-light">
            <div class="container py-4">

                <div class="text-center mb-5">
                    <span class="badge bg-white text-primary border rounded-pill px-3 py-2 shadow-sm mb-3">
                        <i class="bi bi-code-slash me-2"></i>Portfolio
                    </span>
                    <h2 class="display-5 fw-bold text-dark mb-3">Projetos Recentes</h2>
                    <p class="lead text-muted mx-auto" style="max-width: 600px;">
                        Uma seleção de trabalhos que demonstram a aplicação prática de tecnologias modernas.
                    </p>
                </div>

                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="ratio ratio-16x9 bg-secondary-subtle">
                                <img src="./images/projects/luz-de-esther.jpg" class="object-fit-cover" alt="Loja Luz de Esther">
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark">Loja Luz de Esther</h5>
                                <p class="card-text text-muted small mb-4">
                                    E-commerce completo desenvolvido do zero. Gestão de estoque, painel administrativo e checkout.
                                </p>

                                <div class="mt-auto">
                                    <div class="mb-3 d-flex flex-wrap gap-2">
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill">PHP</span>
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill">MySQL</span>
                                        <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill">Bootstrap</span>
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold flex-grow-1">Ver Projeto</button>
                                        <a href="https://github.com/FelipePereiraMartins" target="_blank" class="btn btn-light btn-sm border rounded-pill px-3" title="Ver Código">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="ratio ratio-16x9 bg-secondary-subtle">
                                <img src="./images/projects/landing-nutricionista.jpg" class="object-fit-cover" alt="Landing Page Nutricionista">
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark">Landing Page Nutri</h5>
                                <p class="card-text text-muted small mb-4">
                                    Página de alta conversão otimizada para SEO e performance. Foco em captação de leads.
                                </p>

                                <div class="mt-auto">
                                    <div class="mb-3 d-flex flex-wrap gap-2">
                                        <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill">HTML5</span>
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill">CSS3</span>
                                        <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle rounded-pill">SEO</span>
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold flex-grow-1">Ver Projeto</button>
                                        <a href="https://github.com/FelipePereiraMartins" target="_blank" class="btn btn-light btn-sm border rounded-pill px-3" title="Ver Código">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class="ratio ratio-16x9 bg-secondary-subtle">
                                <img src="./images/projects/portfolio.jpg" class="object-fit-cover" alt="Portfolio Pessoal">
                            </div>

                            <div class="card-body p-4 d-flex flex-column">
                                <h5 class="card-title fw-bold text-dark">Portfolio Profissional</h5>
                                <p class="card-text text-muted small mb-4">
                                    SPA (Single Page Application) focada em performance e UX sem dependências pesadas.
                                </p>

                                <div class="mt-auto">
                                    <div class="mb-3 d-flex flex-wrap gap-2">
                                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill">JavaScript</span>
                                        <span class="badge bg-secondary-subtle text-secondary border border-secondary-subtle rounded-pill">Bootstrap</span>
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold flex-grow-1">Ver Projeto</button>
                                        <a href="https://github.com/FelipePereiraMartins" target="_blank" class="btn btn-light btn-sm border rounded-pill px-3" title="Ver Código">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <div id="contact" class="page">
        <section class="py-5 bg-light">
            <div class="container py-4">

                <div class="text-center mb-5">
                    <span class="badge bg-white text-primary border rounded-pill px-3 py-2 shadow-sm mb-3">
                        <i class="bi bi-chat-dots-fill me-2"></i>Contato
                    </span>
                    <h2 class="display-5 fw-bold text-dark mb-3">Vamos tirar o projeto do papel?</h2>
                    <p class="lead text-muted mx-auto" style="max-width: 600px;">
                        Estou disponível para novos desafios. Escolha abaixo a melhor forma de falarmos sobre o seu próximo sistema ou site.
                    </p>
                </div>

                <div class="row g-4 justify-content-center">

                    <div class="col-lg-5 col-md-6">
                        <div class="card h-100 border-0 shadow rounded-4 position-relative overflow-hidden">
                            <div class="card-body p-5 text-center bg-white">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle text-primary rounded-circle" style="width: 70px; height: 70px;">
                                        <i class="bi bi-envelope-fill fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold mb-2 text-dark">E-mail Profissional</h4>
                                <p class="text-muted mb-4 small">Para orçamentos detalhados, especificações técnicas ou parcerias.</p>

                                <a href="mailto:felipegmartins07@gmail.com" class="btn btn-outline-primary rounded-pill w-100 py-2 fw-bold stretched-link">
                                    Enviar Mensagem
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="card h-100 border-0 shadow rounded-4 position-relative overflow-hidden">
                            <div class="card-body p-5 text-center bg-white">
                                <div class="mb-4">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-success-subtle text-success rounded-circle" style="width: 70px; height: 70px;">
                                        <i class="bi bi-whatsapp fs-3"></i>
                                    </div>
                                </div>
                                <h4 class="fw-bold mb-2 text-dark">WhatsApp Direct</h4>
                                <p class="text-muted mb-4 small">Precisa de agilidade? Vamos trocar uma ideia rápida agora.</p>

                                <a href="https://wa.me/5521970008197" target="_blank" class="btn btn-success text-white rounded-pill w-100 py-2 fw-bold stretched-link">
                                    <i class="bi bi-chat-text-fill me-2"></i>Iniciar Conversa
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="card border-0 bg-white shadow-sm rounded-4 mt-2">
                            <div class="card-body p-4">
                                <div class="row align-items-center text-center text-md-start">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                                            <i class="bi bi-geo-alt-fill text-danger fs-5 me-2"></i>
                                            <div>
                                                <h6 class="fw-bold text-dark mb-0">Rio de Janeiro, Brasil</h6>
                                                <small class="text-muted">Disponível para trabalho remoto</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex gap-2 justify-content-center justify-content-md-end">
                                            <a href="https://www.linkedin.com/in/felipe-pereira-martins-467a192b5/" target="_blank" class="btn btn-light border fw-medium text-secondary">
                                                <i class="bi bi-linkedin text-primary me-1"></i> LinkedIn
                                            </a>
                                            <a href="https://github.com/FelipePereiraMartins" target="_blank" class="btn btn-light border fw-medium text-secondary">
                                                <i class="bi bi-github text-dark me-1"></i> GitHub
                                            </a>
                                        </div>
                                    </div>
                                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>