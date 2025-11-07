<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>Bronze</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galop® Bronze de Poney</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <livewire:galops.poney.partials.menu
                    :galopActif="'bronze'"
                    icone='<i class="fa-solid fa-leaf" style="font-size: 2rem; color: #90EE90;"></i>'
                    titre="Début"
                    description="Le Galop® Bronze marque le début de votre apprentissage. Vous comprenez les bases de la communication avec le poney."
                />

                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="galop-header mb-5">
                            <div class="alert border-0 shadow-sm" style="background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); color: white;">
                                <h2 class="mb-3">PONEY D'OR</h2>
                                <p class="lead mb-2">Cycle 1 - Confiance</p>
                                <p class="mb-0" style="font-size: 0.95rem; opacity: 0.95;">Je suis en confiance avec le poney et au poney-club</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color); border-left: 4px solid #FFD700;">
                            <h4 class="mb-3" style="color: #DAA520; font-family: var(--accent-font);">
                                <i class="fa-solid fa-star me-2"></i>Confiance et sérénité
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.1rem;">
                                Le Poney d'Or marque l'aboutissement du Cycle 1. L'enfant est désormais en confiance avec le poney, autonome dans les soins de base et capable d'évoluer sereinement dans l'environnement du poney-club.
                            </p>
                        </div>

                        <!-- Connaissances générales -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-book-open me-2"></i>Connaissances générales
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-shirt me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Décrire la tenue d'équitation</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-apple-whole me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Pourquoi on ne joue pas avec la nourriture des poneys</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-wheat-awn me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Différencier paille et foin</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-map-location-dot me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Identifier les espaces du poney-club</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-route me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Expliquer l'activité promenade</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- S'occuper du poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-hands-holding me-2"></i>S'occuper du poney
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header text-white" style="background-color: #FFD700;">
                                            <i class="fa-solid fa-saddle me-2"></i>Matériel
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Enlever la selle, la ranger seul avec le tapis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header text-white" style="background-color: #FFA500;">
                                            <i class="fa-solid fa-spa me-2"></i>Pansage
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Utiliser brosse et étrille sur l'ensemble du corps</li>
                                                <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i>Montrer le cure-pieds - Prendre et curer les antérieurs</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissances du poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-brain me-2"></i>Connaissances du poney
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 2px solid #FFD700;">
                                        <h5 style="color: #DAA520; font-family: var(--accent-font);">
                                            <i class="fa-solid fa-running me-2"></i>Allures
                                        </h5>
                                        <p class="mb-0" style="color: var(--text-color);">Reconnaître un poney au pas, au trot</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 2px solid #FFD700;">
                                        <h5 style="color: #DAA520; font-family: var(--accent-font);">
                                            <i class="fa-solid fa-horse-head me-2"></i>Anatomie
                                        </h5>
                                        <ul class="mb-0" style="color: var(--text-color); font-size: 0.95rem;">
                                            <li>Montrer le toupet, les naseaux, les flancs, le dos, les sabots</li>
                                            <li>Montrer les antérieurs et les postérieurs</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 2px solid #FFD700;">
                                        <h5 style="color: #DAA520; font-family: var(--accent-font);">
                                            <i class="fa-solid fa-baby me-2"></i>Différenciation
                                        </h5>
                                        <p class="mb-0" style="color: var(--text-color);">Différencier poney et poulain</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pratique équestre à pied -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-person-walking me-2"></i>Pratique équestre à pied
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 rounded text-center h-100" style="background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); color: white;">
                                        <div class="mb-2" style="font-size: 2rem; font-weight: bold;">1</div>
                                        <p class="mb-0" style="font-size: 0.9rem;">Déplacer les hanches d'un poney attaché</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded text-center h-100" style="background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); color: white;">
                                        <div class="mb-2" style="font-size: 2rem; font-weight: bold;">2</div>
                                        <p class="mb-0" style="font-size: 0.9rem;">Marcher près de mon poney au même rythme, varier la vitesse</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded text-center h-100" style="background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); color: white;">
                                        <div class="mb-2" style="font-size: 2rem; font-weight: bold;">3</div>
                                        <p class="mb-0" style="font-size: 0.9rem;">Mener en main sur un tracé simple avec courbes et arrêt</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pratique équestre à poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-horse me-2"></i>Pratique équestre à poney
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header text-white" style="background-color: #FFD700;">
                                            <i class="fa-solid fa-hands me-2"></i>Maniement des rênes
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i>Tenir correctement les rênes à 2 mains</li>
                                                <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i>Tenir correctement les rênes dans une seule main</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header text-white" style="background-color: #FFA500;">
                                            <i class="fa-solid fa-hand-holding me-2"></i>Dextérité
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i>Prendre et poser un objet sur un support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header text-white" style="background-color: #DAA520;">
                                            <i class="fa-solid fa-route me-2"></i>Direction
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i>Diriger au pas assis dans une bonne posture sur un enchaînement de courbes</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-header text-white" style="background-color: #FF8C00;">
                                            <i class="fa-solid fa-horse-head me-2"></i>Allure
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled mb-0">
                                                <li class="mb-0"><i class="fa-solid fa-check text-success me-2"></i>Trotter quelques foulées</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Encadré récapitulatif -->
                        <div class="mb-5 p-4 rounded" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 2px solid #FFD700;">
                            <h4 class="mb-3" style="color: #B8860B; font-family: var(--accent-font);">
                                <i class="fa-solid fa-trophy me-2"></i>En résumé : Le Poney d'Or
                            </h4>
                            <p class="mb-2" style="color: var(--text-color);">
                                <strong>Le Poney d'Or</strong> clôture le Cycle 1 en consolidant la confiance et l'autonomie de l'enfant :
                            </p>
                            <ul class="mb-0" style="color: var(--text-color);">
                                <li>Confiance totale avec le poney et dans l'environnement du poney-club</li>
                                <li>Autonomie complète dans les soins de base (pansage, cure des pieds, rangement)</li>
                                <li>Connaissance approfondie de l'anatomie et du comportement du poney</li>
                                <li>Maîtrise du travail en main (déplacement, variations de vitesse, tracés)</li>
                                <li>Progression à poney : tenue des rênes, direction précise, première approche du trot</li>
                                <li>Compréhension globale de l'activité équestre (tenue, sécurité, promenade)</li>
                            </ul>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('poney.argent') }}" class="text-decoration-none" style="color: #C0C0C0;">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Poney d'Argent
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galop.bronze') }}" class="text-decoration-none" style="color: #CD7F32;">
                                        Galop® de Bronze<i class="fa-solid fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

</div>
