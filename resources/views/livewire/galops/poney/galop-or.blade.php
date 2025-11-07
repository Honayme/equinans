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
                                <h2 class="mb-3">GALOP® D'OR</h2>
                                <p class="lead mb-0">Premier stade d'autonomie avec le poney</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color); border-left: 4px solid #FFD700;">
                            <h4 class="mb-3" style="color: #DAA520; font-family: var(--accent-font);">
                                <i class="fa-solid fa-star me-2"></i>J'ai atteint un premier stade d'autonomie avec le poney et dans son environnement
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.1rem;">
                                Le Galop® d'Or consacre l'autonomie du jeune cavalier. Il maîtrise désormais les soins complets, comprend les besoins du poney et possède une assise stable aux trois allures.
                            </p>
                        </div>

                        <!-- Connaissances générales -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-book me-2"></i>Connaissances générales
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-traffic-light me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Connaître les règles de priorité en manège ou en carrière</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-saddle me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Connaître les principales parties de la selle</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-horse-head me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Connaître les principaux types de chevaux et de poneys</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFD700;">
                                        <i class="fa-solid fa-home me-2" style="color: #FFD700;"></i>
                                        <span style="color: var(--text-color);">Connaître les principaux types de logement des poneys</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- S'occuper du poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-hands-helping me-2"></i>S'occuper du poney
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFA500;">
                                        <i class="fa-solid fa-door-open me-2" style="color: #FFA500;"></i>
                                        <span style="color: var(--text-color);">Aborder un poney en stabulation ou au pré</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFA500;">
                                        <i class="fa-solid fa-brush me-2" style="color: #FFA500;"></i>
                                        <span style="color: var(--text-color);">Effectuer seul un pansage élémentaire complet</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFA500;">
                                        <i class="fa-solid fa-chair me-2" style="color: #FFA500;"></i>
                                        <span style="color: var(--text-color);">Seller</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFA500;">
                                        <i class="fa-solid fa-link-horizontal me-2" style="color: #FFA500;"></i>
                                        <span style="color: var(--text-color);">Mettre le filet</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #FFA500;">
                                        <i class="fa-solid fa-tree me-2" style="color: #FFA500;"></i>
                                        <span style="color: var(--text-color);">Lâcher un poney au pré</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissances du poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-horse me-2"></i>Connaissances du poney
                                </h3>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #DAA520;">
                                    <i class="fa-solid fa-eye me-2" style="color: #DAA520;"></i>
                                    <span style="color: var(--text-color);">Décrire les 5 sens du poney</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #DAA520;">
                                    <i class="fa-solid fa-mouth me-2" style="color: #DAA520;"></i>
                                    <span style="color: var(--text-color);">Décrire la bouche du poney et comment il s'alimente</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #DAA520;">
                                    <i class="fa-solid fa-utensils me-2" style="color: #DAA520;"></i>
                                    <span style="color: var(--text-color);">Connaître le comportement et les besoins alimentaires des poneys</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #DAA520;">
                                    <i class="fa-solid fa-wheat me-2" style="color: #DAA520;"></i>
                                    <span style="color: var(--text-color);">Reconnaître et citer les aliments de base</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #DAA520;">
                                    <i class="fa-solid fa-head-side me-2" style="color: #DAA520;"></i>
                                    <span style="color: var(--text-color);">Connaître les principales parties de la tête</span>
                                </li>
                                <li class="mb-0 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #DAA520;">
                                    <i class="fa-solid fa-paw me-2" style="color: #DAA520;"></i>
                                    <span style="color: var(--text-color);">Montrer les principales parties des membres</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Pratique équestre à pied -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-walking me-2"></i>Pratique équestre à pied
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFD700 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #B8860B; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">1</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Mener en main sur un tracé précis (lignes droites et courbes)</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFD700 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #B8860B; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">2</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Déplacer la tête du poney à droite et à gauche, en haut et en bas</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFD700 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #B8860B; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">3</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Déplacer les épaules et les hanches à partir de l'arrêt</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pratique équestre à poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-horse-head me-2"></i>Pratique équestre à poney
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFFACD 0%, #F0E68C 100%); border: 2px solid #FFD700;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-user-check me-3 mt-1" style="color: #B8860B; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B7500;">Autonomie complète</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Ressangler seul, en selle ou à pied</li>
                                                    <li>Circuler en respectant les distances de sécurité</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFFACD 0%, #F0E68C 100%); border: 2px solid #FFD700;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-compass me-3 mt-1" style="color: #B8860B; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B7500;">Précision du tracé</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Diriger au pas et au trot sur tracé défini</li>
                                                    <li>Incluant cercle, volte, diagonale et doubler</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFFACD 0%, #F0E68C 100%); border: 2px solid #FFD700;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-balance-scale me-3 mt-1" style="color: #B8860B; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B7500;">Équilibre et position</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Trotter enlevé sans étriers</li>
                                                    <li>Trotter et galoper assis dans une posture stable</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFFACD 0%, #F0E68C 100%); border: 2px solid #FFD700;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-bars-progress me-3 mt-1" style="color: #B8860B; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B7500;">Obstacles</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Enchaîner 2 obstacles sur la piste</li>
                                                    <li>Au trot et au galop</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Encadré récapitulatif -->
                        <div class="mb-5 p-4 rounded" style="background: linear-gradient(135deg, #FFFEF0 0%, #FFF8DC 100%); border: 2px solid #FFD700;">
                            <h4 class="mb-3" style="color: #8B7500; font-family: var(--accent-font);">
                                <i class="fa-solid fa-trophy me-2"></i>En résumé : Le Galop® d'Or
                            </h4>
                            <p class="mb-2" style="color: var(--text-color);">
                                <strong>Le Galop® d'Or</strong> représente une étape majeure dans la progression équestre. Le cavalier :
                            </p>
                            <ul class="mb-0" style="color: var(--text-color);">
                                <li>Maîtrise tous les soins courants du poney en totale autonomie</li>
                                <li>Possède une connaissance approfondie de l'anatomie, des sens et des besoins du poney</li>
                                <li>Travaille en main avec précision (déplacements latéraux, flexions)</li>
                                <li>Monte avec une assise stable aux trois allures, sans étriers</li>
                                <li>Enchaîne des obstacles et réalise des tracés précis</li>
                            </ul>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galop.argent') }}" class="text-decoration-none" style="color: #C0C0C0;">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Galop® d'Argent
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galop.1') }}" class="text-decoration-none" style="color: var(--primary-color);">
                                        Galop® 1<i class="fa-solid fa-arrow-right ms-2"></i>
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
