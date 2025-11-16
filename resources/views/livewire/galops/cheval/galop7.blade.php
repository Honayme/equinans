<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>7</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galop® 7 de Cavalier</li>
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
                <livewire:galops.cheval.partials.menu
                    :galopActif="7"
                    icone='<i class="fa-solid fa-crown" style="font-size: 2rem; color: #FFD700;"></i>'
                    titre="Excellence"
                    description="Le Galop® 7 représente le plus haut niveau amateur et ouvre la voie vers l'enseignement et la compétition."
                />

                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="alert border-0 shadow-sm mb-5" style="background-color: var(--accent-color); color: var(--primary-color);">
                            <h2 class="mb-3" style="color: var(--primary-color);">GALOP® 7</h2>
                            <p class="lead mb-2" style="color: var(--primary-color);">Le plus haut niveau amateur</p>
                            <p class="mb-0" style="color: var(--primary-color); font-size: 0.95rem;">Programme applicable au 1ᵉʳ septembre 2012.</p>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 7 se compose de la partie spécifique du Galop® 7, plus de la partie commune à tous les Galops® 7.
                        </p>

                        <!-- Légende -->
                        <div class="mb-5 p-4 rounded" style="background: linear-gradient(135deg, #F8F8F8 0%, #E0E0E0 100%); border: 2px solid var(--primary-color);">
                            <h5 class="mb-4"><i class="fa-solid fa-info-circle me-2" style="color: var(--primary-color);"></i>Légende des modules</h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-3" style="color: var(--primary-color);">◊</span>
                                        <span style="color: var(--text-color); font-weight: 500;">Spécifique Cavalier</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-3" style="color: #4A90E2;">◈</span>
                                        <span style="color: var(--text-color); font-weight: 500;">Module commun A</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-3" style="color: #50C878;">◆</span>
                                        <span style="color: var(--text-color); font-weight: 500;">Module commun B</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dans le respect de la charte -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-shield-halved me-2"></i>Dans le respect de la charte du cavalier de la FFE
                                </h3>
                            </div>

                            <div class="row g-4 mb-5">
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-person-walking me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>À pied</h5>
                                                <ul class="list-unstyled mb-0" style="color: var(--text-color);">
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Tourner à la longe un cheval ou un poney enrêné</li>
                                                    <li class="mb-0"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Utiliser les longues rênes au pas et au trot</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-person-riding me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>En selle</h5>
                                                <ul class="list-unstyled mb-0" style="color: var(--text-color); line-height: 1.6;">
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Être assis dans une bonne posture dans les enchaînements de mouvements</li>
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Mettre son cheval sur la main, l'incurver sur les courbes aux trois allures et galoper à faux sur des courbes de 20 mètres</li>
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Effectuer des transitions galop / pas / galop</li>
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Effectuer une épaule en dedans ou une contre épaule en dedans au trot</li>
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Présenter les reprises de dressage Club 2 et enchaîner des parcours de CSO ou de Hunter type Club 1</li>
                                                    <li class="mb-2"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Enchaîner des obstacles extérieurs en terrain varié</li>
                                                    <li class="mb-0"><i class="fa-regular fa-circle-check me-2" style="color: var(--primary-color);"></i>Détendre son cheval sur le plat en autonomie en respectant les consignes données</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissances générales -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-book me-2"></i>Connaissances Générales
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #4A90E2;">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Définir l'épaule en dedans, qualités et défauts d'exécution</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Connaître le rôle et l'effet de la bride</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer ce qu'est la rectitude</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Connaître les principaux enrênements du travail en longe : but, effets</li>
                                </ul>
                            </div>
                        </div>

                        <!-- S'occuper du cheval -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-hands-helping me-2"></i>S'occuper du Cheval
                                </h3>
                            </div>
                            <div class="row g-4 mb-5">
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>
                                        <span style="color: var(--text-color);">Démonter, remonter et ajuster une bride</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #50C878;">
                                        <span class="fs-5 me-2" style="color: #50C878;">◆</span>
                                        <span style="color: var(--text-color);">Poser des bandes de polo</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissance du cheval -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-horse-head me-2"></i>Connaissance du Cheval
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #4A90E2;">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier et nommer les défauts d'aplombs principaux des membres</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Pouvoir décrire la bouche du cheval et identifier l'emplacement des dents</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer et identifier l'impact des transports sur la santé et le bien-être des chevaux et des poneys</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire et expliquer les grands principes de rationnement pour respecter la santé et le bien-être des chevaux et des poneys</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Comprendre et expliquer les différentes dénominations des produits commercialisés pour l'alimentation et la complémentation des chevaux</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Pratique équestre à pied -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-person-walking me-2"></i>Pratique Équestre à Pied
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Travailler à la longe un cheval ou poney enrêné</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Utiliser les longues rênes au pas et au trot en cercle et en ligne droite, de côté ou derrière et changer de main</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Marcher et trotter en main avec le cheval dans une mise en main élémentaire</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Pratique équestre à cheval -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-horse-head me-2"></i>Pratique Équestre à Cheval
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Avoir son cheval sur la main aux trois allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir la rectitude au pas, au trot et au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Incurver son cheval sur les courbes et des inversions de courbes</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Varier l'amplitude des foulées aux trois allures</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer l'échauffement (détente) de son cheval en respectant les consignes de son enseignant</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Alerte Spécialisation -->
                        <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 3px solid var(--accent-color);">
                            <h4 class="mb-3" style="color: var(--primary-color);">
                                <i class="fa-solid fa-trophy me-2" style="color: var(--accent-color);"></i>Choix de Spécialisation
                            </h4>
                            <p class="mb-0" style="color: var(--text-color);">
                                Le Galop® 7 comprend trois parties spécifiques : <strong>Dressage (Club 2)</strong>, <strong>Obstacle CSO (Club 1)</strong> et <strong>Cross (Club 1)</strong>. Ce niveau représente le plus haut niveau amateur et ouvre la voie vers l'enseignement et la compétition.
                            </p>
                        </div>

                        <!-- Partie Spécifique Dressage -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-chess-knight me-2"></i>Dressage - Club 2
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color); border-left: 6px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être assis dans une posture juste et dynamique adaptée à l'enchaînement des différents mouvements et au travail du cheval</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser des cercles et des serpentines de 10 m de diamètre au trot dans l'incurvation</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser des cercles de 10 à 15 m de diamètre au galop dans l'incurvation</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer des transitions galop-pas-galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Partir au galop à faux sur un cercle</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser des courbes de 20 m de diamètre au contre-galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer une épaule en dedans ou une contre épaule en dedans au pas et au trot des deux côtés</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Reculer de 3 à 5 pas en repartant immédiatement</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir une allure active et régulière dans chaque allure</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir la bonne vitesse de chaque allure dans des enchaînements de mouvements</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger sur un tracé précis dans un enchaînement de mouvements</li>
                                    <li class="mb-4"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Pouvoir monter en bride</li>
                                    <li class="mb-0">
                                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.7); border-left: 4px solid var(--accent-color);">
                                            <p class="mb-2"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Objectif Final - Présenter dans une bonne posture :</strong></p>
                                            <ul class="mb-0 ms-4">
                                                <li class="mb-1">Une reprise Galop® 7 de niveau Club 1 ou épreuve Poney équivalente</li>
                                                <li class="mb-0">Un enchaînement de mouvements Galop® 7 du type de ceux de la Préliminaire Dressage Club 2</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Partie Spécifique Obstacle -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-bars-staggered me-2"></i>Obstacle (CSO) - Club 1
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--accent-color); border-left: 6px solid var(--accent-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable et liant sur des dispositifs variés de sauts rapprochés (hauteur environ 1 m)</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable et adapter son équilibre sur des enchaînements de sauts</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Galoper dans une cadence régulière, une vitesse et un équilibre adaptés à l'enchaînement (environ 350 m/mn)</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Adapter l'amplitude des foulées en fonction de l'enchaînement et du tracé</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger sur un tracé précis à l'obstacle et sur le plat</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Changer de pied dans le mouvement sur la courbe</li>
                                    <li class="mb-4"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Enchaîner des parcours à 100 cm avec des distances et des combinaisons variées</li>
                                    <li class="mb-0">
                                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.7); border-left: 4px solid var(--accent-color);">
                                            <p class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Objectif Final - Enchaîner avec fluidité un parcours CSO de niveau Club 1 ou Hunter Club 1 ou épreuve Poney équivalente</strong></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Partie Spécifique Cross -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-mountain me-2"></i>Cross - Club 1
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #228B22; border-left: 6px solid #228B22;">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable et adapter son équilibre sur des sauts rapprochés et sur des sauts en terrain varié</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Contrôler l'allure et adapter sa vitesse au profil des obstacles et du terrain</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger pour franchir des obstacles directionnels ou de biais, des combinaisons et des successions d'obstacles en terrain varié (gués, contre-haut, etc.)</li>
                                    <li class="mb-4"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Enchaîner des obstacles de cross de tout type à 90 cm en terrain varié avec des combinaisons</li>
                                    <li class="mb-0">
                                        <div class="p-3 rounded" style="background-color: rgba(255, 255, 255, 0.7); border-left: 4px solid var(--accent-color);">
                                            <p class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Objectif Final - Réaliser avec fluidité un enchaînement d'obstacles de cross de niveau Club 1 ou épreuve Poney équivalente</strong></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- En résumé -->
                        <div class="p-4 rounded" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #C8DFFF 100%); border: 2px solid var(--accent-color);">
                            <h4 class="mb-3" style="color: var(--primary-color);">
                                <i class="fa-solid fa-clipboard-check me-2" style="color: var(--accent-color);"></i>En résumé
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                Le Galop® 7 représente le plus haut niveau amateur de cavalier. Vous maîtrisez des techniques avancées :
                                épaule en dedans au trot, contre-galop sur courbes de 20m, transitions galop-pas-galop, et montée en bride.
                                À pied, vous travaillez à la longe avec enrênements et utilisez les longues rênes. Vous choisissez une spécialisation
                                et validez soit le niveau <strong>Club 2 en Dressage</strong> (reprises avec cercles de 10m, serpentines, mouvements complexes),
                                soit le niveau <strong>Club 1 en CSO</strong> (parcours à 100cm avec fluidité), soit le niveau <strong>Club 1 en Cross</strong>
                                (enchaînements d'obstacles de 90cm en terrain varié). Ce galop ouvre la voie vers l'enseignement équestre et la compétition.
                            </p>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galop.6') }}" class="text-decoration-none" style="color: var(--text-color);">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Galop® 6
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('services') }}" class="text-decoration-none" style="color: var(--accent-color);">
                                        Retour aux services<i class="fa-solid fa-arrow-right ms-2"></i>
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
