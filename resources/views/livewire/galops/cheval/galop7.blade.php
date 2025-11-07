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

{{--                <div class="col-lg-9">--}}
{{--                    <div class="service-single-content">--}}
{{--                        <!-- En-tête -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <h1 class="mb-3" style="color: var(--primary-color); font-family: var(--accent-font);">--}}
{{--                                Programme du Galop® 7 de Cavalier--}}
{{--                            </h1>--}}
{{--                            <p class="text-muted mb-4">Programme applicable au 1ᵉʳ septembre 2012</p>--}}
{{--                            <p style="color: var(--text-color);">--}}
{{--                                Le Galop® 7 se compose de la partie spécifique du Galop® 7, plus de la partie commune à tous les Galops® 7.--}}
{{--                            </p>--}}
{{--                        </div>--}}

{{--                        <!-- Légende -->--}}
{{--                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color);">--}}
{{--                            <div class="row g-3">--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="d-flex align-items-center gap-2">--}}
{{--                                        <span class="fs-5">◊</span>--}}
{{--                                        <small style="color: var(--text-color);">Spécifique Cavalier</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="d-flex align-items-center gap-2">--}}
{{--                                        <span class="fs-5">◈</span>--}}
{{--                                        <small style="color: var(--text-color);">Module commun A</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="d-flex align-items-center gap-2">--}}
{{--                                        <span class="fs-5">◆</span>--}}
{{--                                        <small style="color: var(--text-color);">Module commun B</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Dans le respect de la charte -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <p class="mb-4 fw-semibold" style="color: var(--primary-color);">--}}
{{--                                Dans le respect de la charte du cavalier de la FFE :--}}
{{--                            </p>--}}

{{--                            <div class="row g-4">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="p-4 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid var(--accent-color);">--}}
{{--                                        <h6 class="mb-3" style="color: var(--primary-color);">◊ À pied</h6>--}}
{{--                                        <ul class="list-unstyled mb-0" style="color: var(--text-color);">--}}
{{--                                            <li class="mb-2">Tourner à la longe un cheval ou un poney enrêné</li>--}}
{{--                                            <li class="mb-0">Utiliser les longues rênes au pas et au trot</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="p-4 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid var(--accent-color);">--}}
{{--                                        <h6 class="mb-3" style="color: var(--primary-color);">◊ En selle</h6>--}}
{{--                                        <ul class="list-unstyled mb-0 small" style="color: var(--text-color); line-height: 1.6;">--}}
{{--                                            <li class="mb-2">Être assis dans une bonne posture dans les enchaînements de mouvements</li>--}}
{{--                                            <li class="mb-2">Mettre son cheval sur la main, l'incurver sur les courbes aux trois allures et galoper à faux sur des courbes de 20 mètres</li>--}}
{{--                                            <li class="mb-2">Effectuer des transitions galop / pas / galop</li>--}}
{{--                                            <li class="mb-2">Effectuer une épaule en dedans ou une contre épaule en dedans au trot</li>--}}
{{--                                            <li class="mb-2">Présenter les reprises de dressage Club 2 et enchaîner des parcours de CSO ou de Hunter type Club 1</li>--}}
{{--                                            <li class="mb-2">Enchaîner des obstacles extérieurs en terrain varié</li>--}}
{{--                                            <li class="mb-0">Détendre son cheval sur le plat en autonomie en le respectant des consignes données</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Connaissances générales -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <h3 class="mb-4 pb-2" style="color: var(--primary-color); font-family: var(--accent-font); border-bottom: 1px solid var(--divider-color);">--}}
{{--                                Connaissances générales--}}
{{--                            </h3>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Définir l'épaule en dedans, qualités et défauts d'exécution--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Connaître le rôle et l'effet de la bride--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Expliquer ce qu'est la rectitude--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Connaître les principaux enrênements du travail en longe : but, effets--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- S'occuper du cheval -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <h3 class="mb-4 pb-2" style="color: var(--primary-color); font-family: var(--accent-font); border-bottom: 1px solid var(--divider-color);">--}}
{{--                                S'occuper du cheval--}}
{{--                            </h3>--}}
{{--                            <div class="row g-3">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="p-3 rounded" style="background-color: var(--bg-color);">--}}
{{--                                        <span class="me-2">◊</span>--}}
{{--                                        <span style="color: var(--text-color);">Démonter, remonter et ajuster une bride</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="p-3 rounded" style="background-color: var(--bg-color);">--}}
{{--                                        <span class="me-2">◆</span>--}}
{{--                                        <span style="color: var(--text-color);">Poser des bandes de polo</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Connaissance du cheval -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <h3 class="mb-4 pb-2" style="color: var(--primary-color); font-family: var(--accent-font); border-bottom: 1px solid var(--divider-color);">--}}
{{--                                Connaissance du cheval--}}
{{--                            </h3>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Identifier et nommer les défauts d'aplombs principaux des membres--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Pouvoir décrire la bouche du cheval et identifier l'emplacement des dents--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Expliquer et identifier l'impact des transports sur la santé et le bien-être des chevaux et des poneys--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Décrire et expliquer les grands principes de rationnement pour respecter la santé et le bien-être des chevaux et des poneys--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 ps-3" style="border-left: 2px solid var(--secondary-color);">--}}
{{--                                    <span class="me-2">◈</span>Comprendre et expliquer les différentes dénominations des produits commercialisés pour l'alimentation et la complémentation des chevaux--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- Pratique équestre à pied -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <h3 class="mb-4 pb-2" style="color: var(--primary-color); font-family: var(--accent-font); border-bottom: 1px solid var(--divider-color);">--}}
{{--                                Pratique équestre à pied--}}
{{--                            </h3>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Travailler à la longe un cheval ou poney enrêné--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Utiliser les longues rênes au pas et au trot en cercle et en ligne droite, de côté ou derrière et changer de main--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Marcher et trotter en main avec le cheval dans une mise en main élémentaire--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- Pratique équestre à cheval -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <h3 class="mb-4 pb-2" style="color: var(--primary-color); font-family: var(--accent-font); border-bottom: 1px solid var(--divider-color);">--}}
{{--                                Pratique équestre à cheval--}}
{{--                            </h3>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Avoir son cheval sur la main aux trois allures--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Maintenir la rectitude au pas, au trot et au galop--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Incurver son cheval sur les courbes et des inversions de courbes--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Varier l'amplitude des foulées aux trois allures--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Effectuer l'échauffement (détente) de son cheval en respectant les consignes de son enseignant--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- Partie Spécifique Dressage -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <div class="mb-4 p-3 rounded" style="background-color: var(--accent-secondary-color); opacity: 0.3;">--}}
{{--                                <h4 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">--}}
{{--                                    Partie Spécifique Dressage--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Être assis dans une posture juste et dynamique adaptée à l'enchaînement des différents mouvements et au travail du cheval--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Réaliser des cercles et des serpentines de 10 m de diamètre au trot dans l'incurvation--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Réaliser des cercles de 10 à 15 m de diamètre au galop dans l'incurvation--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Effectuer des transitions galop-pas-galop--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Partir au galop à faux sur un cercle--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Réaliser des courbes de 20 m de diamètre au contre-galop--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Effectuer une épaule en dedans ou une contre épaule en dedans au pas et au trot des deux côtés--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Reculer de 3 à 5 pas en repartant immédiatement--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Maintenir une allure active et régulière dans chaque allure--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Maintenir la bonne vitesse de chaque allure dans des enchaînements de mouvements--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Diriger sur un tracé précis dans un enchaînement de mouvements--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Pouvoir monter en bride--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 p-3 rounded" style="background-color: var(--bg-color);">--}}
{{--                                    <span class="me-2">◊</span><strong>Présenter dans une bonne posture :</strong>--}}
{{--                                    <ul class="mt-2 mb-0 ms-3">--}}
{{--                                        <li>une reprise Galop® 7 de niveau Club 1 ou épreuve Poney Équivalente</li>--}}
{{--                                        <li>un enchaînement de mouvements Galop® 7 du type de ceux de la Préliminaire Dressage Club 2</li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- Partie Spécifique Obstacle -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <div class="mb-4 p-3 rounded" style="background-color: var(--accent-secondary-color); opacity: 0.3;">--}}
{{--                                <h4 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">--}}
{{--                                    Partie Spécifique Obstacle--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Être stable et liant sur des dispositifs variés de sauts rapprochés (hauteur environ 1 m)--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Être stable et adapter son équilibre sur des enchaînements de sauts--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Galoper dans une cadence régulière, une vitesse et un équilibre adaptés à l'enchaînement (environ 350 m/mn)--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Adapter l'amplitude des foulées en fonction de l'enchaînement et du tracé--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Diriger sur un tracé précis à l'obstacle et sur le plat--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Changer de pied dans le mouvement sur la courbe--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Enchaîner des parcours à 100 cm avec des distances et des combinaisons variées--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 p-3 rounded" style="background-color: var(--bg-color);">--}}
{{--                                    <span class="me-2">✦</span><strong>Enchaîner avec fluidité un parcours CSO de niveau Club 1 ou Hunter Club 1 ou épreuve Poney Équivalente.</strong>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- Partie Spécifique Cross -->--}}
{{--                        <div class="mb-5">--}}
{{--                            <div class="mb-4 p-3 rounded" style="background-color: var(--accent-secondary-color); opacity: 0.3;">--}}
{{--                                <h4 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">--}}
{{--                                    Partie Spécifique Cross--}}
{{--                                </h4>--}}
{{--                            </div>--}}
{{--                            <ul class="list-unstyled" style="color: var(--text-color);">--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Être stable et adapter son équilibre sur des sauts rapprochés et sur des sauts en terrain varié--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Contrôler l'allure et adapter sa vitesse au profil des obstacles et du terrain--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Diriger pour franchir des obstacles directionnels ou de biais, des combinaisons et des successions d'obstacles en terrain varié (gués, contre-haut, etc.)--}}
{{--                                </li>--}}
{{--                                <li class="mb-3 ps-3" style="border-left: 2px solid var(--accent-color);">--}}
{{--                                    <span class="me-2">◊</span>Enchaîner des obstacles de cross de tout type à 90 cm en terrain varié avec des combinaisons--}}
{{--                                </li>--}}
{{--                                <li class="mb-0 p-3 rounded" style="background-color: var(--bg-color);">--}}
{{--                                    <span class="me-2">✦</span><strong>Réaliser avec fluidité un enchaînement d'obstacles de cross de niveau Club 1 ou épreuve Poney Équivalente.</strong>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <!-- Navigation -->--}}
{{--                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-6">--}}
{{--                                    <a href="{{ route('galop.6') }}" class="text-decoration-none" style="color: var(--text-color);">--}}
{{--                                        ← Galop® 6--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-6 text-end">--}}
{{--                                    <a href="{{ route('services') }}" class="text-decoration-none" style="color: var(--accent-color);">--}}
{{--                                        Retour aux services →--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="galop-header mb-5">
                            <div class="alert alert-info border-0 shadow-sm">
                                <h2 class="mb-3">PROGRAMME DU GALOP® 7 DE CAVALIER</h2>
                                <p class="lead mb-0">Programme applicable au 1ᵉʳ septembre 2012.</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 7 se compose de la partie spécifique du Galop® 7, plus de la partie commune à tous les Galops® 7.
                        </p>

                        <!-- Légende -->
                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color);">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-3">◊</span>
                                        <span style="color: var(--text-color); font-size: 1.1rem;">Spécifique Cavalier</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-3">◈</span>
                                        <span style="color: var(--text-color); font-size: 1.1rem;">Module commun A</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fs-3">◆</span>
                                        <span style="color: var(--text-color); font-size: 1.1rem;">Module commun B</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dans le respect de la charte -->
                        <div class="mb-5">
                            <p class="mb-4 fw-semibold" style="color: var(--primary-color); font-size: 1.1rem;">
                                Dans le respect de la charte du cavalier de la FFE :
                            </p>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid var(--accent-color);">
                                        <h6 class="mb-3" style="color: var(--primary-color);"><span class="fs-3 me-2">◊</span>À pied</h6>
                                        <ul class="list-unstyled mb-0" style="color: var(--text-color);">
                                            <li class="mb-2">Tourner à la longe un cheval ou un poney enrêné</li>
                                            <li class="mb-0">Utiliser les longues rênes au pas et au trot</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid var(--accent-color);">
                                        <h6 class="mb-3" style="color: var(--primary-color);"><span class="fs-3 me-2">◊</span>En selle</h6>
                                        <ul class="list-unstyled mb-0" style="color: var(--text-color); line-height: 1.6;">
                                            <li class="mb-2">Être assis dans une bonne posture dans les enchaînements de mouvements</li>
                                            <li class="mb-2">Mettre son cheval sur la main, l'incurver sur les courbes aux trois allures et galoper à faux sur des courbes de 20 mètres</li>
                                            <li class="mb-2">Effectuer des transitions galop / pas / galop</li>
                                            <li class="mb-2">Effectuer une épaule en dedans ou une contre épaule en dedans au trot</li>
                                            <li class="mb-2">Présenter les reprises de dressage Club 2 et enchaîner des parcours de CSO ou de Hunter type Club 1</li>
                                            <li class="mb-2">Enchaîner des obstacles extérieurs en terrain varié</li>
                                            <li class="mb-0">Détendre son cheval sur le plat en autonomie en respectant les consignes données</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissances générales -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-book me-2"></i>Connaissances générales
                                </h3>
                            </div>
                            <ul class="list-unstyled" style="color: var(--text-color); font-size: 1.05rem;">
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Définir l'épaule en dedans, qualités et défauts d'exécution
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Connaître le rôle et l'effet de la bride
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Expliquer ce qu'est la rectitude
                                </li>
                                <li class="mb-0 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Connaître les principaux enrênements du travail en longe : but, effets
                                </li>
                            </ul>
                        </div>

                        <!-- S'occuper du cheval -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-hands-holding me-2"></i>S'occuper du cheval
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); font-size: 1.05rem;">
                                        <span class="me-2 fs-5">◊</span>
                                        <span style="color: var(--text-color);">Démonter, remonter et ajuster une bride</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); font-size: 1.05rem;">
                                        <span class="me-2 fs-5">◆</span>
                                        <span style="color: var(--text-color);">Poser des bandes de polo</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissance du cheval -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-horse-head me-2"></i>Connaissance du cheval
                                </h3>
                            </div>
                            <ul class="list-unstyled" style="color: var(--text-color); font-size: 1.05rem;">
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Identifier et nommer les défauts d'aplombs principaux des membres
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Pouvoir décrire la bouche du cheval et identifier l'emplacement des dents
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Expliquer et identifier l'impact des transports sur la santé et le bien-être des chevaux et des poneys
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Décrire et expliquer les grands principes de rationnement pour respecter la santé et le bien-être des chevaux et des poneys
                                </li>
                                <li class="mb-0 ps-3" style="border-left: 3px solid var(--secondary-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◈</span>Comprendre et expliquer les différentes dénominations des produits commercialisés pour l'alimentation et la complémentation des chevaux
                                </li>
                            </ul>
                        </div>

                        <!-- Pratique équestre à pied -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-person-walking me-2"></i>Pratique équestre à pied
                                </h3>
                            </div>
                            <ul class="list-unstyled" style="color: var(--text-color); font-size: 1.05rem;">
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Travailler à la longe un cheval ou poney enrêné
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Utiliser les longues rênes au pas et au trot en cercle et en ligne droite, de côté ou derrière et changer de main
                                </li>
                                <li class="mb-0 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Marcher et trotter en main avec le cheval dans une mise en main élémentaire
                                </li>
                            </ul>
                        </div>

                        <!-- Pratique équestre à cheval -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-person-riding me-2"></i>Pratique équestre à cheval
                                </h3>
                            </div>
                            <ul class="list-unstyled" style="color: var(--text-color); font-size: 1.05rem;">
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Avoir son cheval sur la main aux trois allures
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Maintenir la rectitude au pas, au trot et au galop
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Incurver son cheval sur les courbes et des inversions de courbes
                                </li>
                                <li class="mb-3 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Varier l'amplitude des foulées aux trois allures
                                </li>
                                <li class="mb-0 ps-3" style="border-left: 3px solid var(--accent-color); padding-left: 1rem !important;">
                                    <span class="me-2 fs-5">◊</span>Effectuer l'échauffement (détente) de son cheval en respectant les consignes de son enseignant
                                </li>
                            </ul>
                        </div>

                        <!-- Alerte Spécialisation -->
                        <div class="alert alert-warning mb-5 border-0 shadow-sm">
                            <h5 class="alert-heading mb-3"><i class="fa-solid fa-trophy me-2"></i>Niveau Club 1 & Club 2</h5>
                            <p class="mb-0">Le Galop® 7 comprend trois parties spécifiques : <strong>Dressage (Club 2)</strong>, <strong>Obstacle CSO (Club 1)</strong> et <strong>Cross (Club 1)</strong>.</p>
                        </div>

                        <!-- Partie Spécifique Dressage -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-chess-knight me-2"></i>Partie Spécifique Dressage
                                </h3>
                            </div>
                            <div class="p-4 rounded" style="background-color: var(--bg-color); border-left: 4px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Être assis dans une posture juste et dynamique adaptée à l'enchaînement des différents mouvements et au travail du cheval</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Réaliser des cercles et des serpentines de 10 m de diamètre au trot dans l'incurvation</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Réaliser des cercles de 10 à 15 m de diamètre au galop dans l'incurvation</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Effectuer des transitions galop-pas-galop</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Partir au galop à faux sur un cercle</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Réaliser des courbes de 20 m de diamètre au contre-galop</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Effectuer une épaule en dedans ou une contre épaule en dedans au pas et au trot des deux côtés</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Reculer de 3 à 5 pas en repartant immédiatement</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Maintenir une allure active et régulière dans chaque allure</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Maintenir la bonne vitesse de chaque allure dans des enchaînements de mouvements</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Diriger sur un tracé précis dans un enchaînement de mouvements</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Pouvoir monter en bride</li>
                                    <li class="mb-0">
                                        <div class="p-3 mt-2 rounded" style="background-color: var(--secondary-color);">
                                            <strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Présenter dans une bonne posture :</strong>
                                            <ul class="mt-2 mb-0 ms-4" style="font-size: 1rem;">
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
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-bars-staggered me-2"></i>Partie Spécifique Obstacle (CSO)
                                </h3>
                            </div>
                            <div class="p-4 rounded" style="background-color: var(--secondary-color); border-left: 4px solid var(--accent-color);">
                                <ul class="list-unstyled mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Être stable et liant sur des dispositifs variés de sauts rapprochés (hauteur environ 1 m)</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Être stable et adapter son équilibre sur des enchaînements de sauts</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Galoper dans une cadence régulière, une vitesse et un équilibre adaptés à l'enchaînement (environ 350 m/mn)</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Adapter l'amplitude des foulées en fonction de l'enchaînement et du tracé</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Diriger sur un tracé précis à l'obstacle et sur le plat</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Changer de pied dans le mouvement sur la courbe</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Enchaîner des parcours à 100 cm avec des distances et des combinaisons variées</li>
                                    <li class="mb-0">
                                        <div class="p-3 mt-2 rounded" style="background-color: var(--bg-color);">
                                            <strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Enchaîner avec fluidité un parcours CSO de niveau Club 1 ou Hunter Club 1 ou épreuve Poney équivalente</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Partie Spécifique Cross -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-mountain me-2"></i>Partie Spécifique Cross
                                </h3>
                            </div>
                            <div class="p-4 rounded" style="background-color: var(--bg-color); border-left: 4px solid #228B22;">
                                <ul class="list-unstyled mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Être stable et adapter son équilibre sur des sauts rapprochés et sur des sauts en terrain varié</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Contrôler l'allure et adapter sa vitesse au profil des obstacles et du terrain</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Diriger pour franchir des obstacles directionnels ou de biais, des combinaisons et des successions d'obstacles en terrain varié (gués, contre-haut, etc.)</li>
                                    <li class="mb-3"><span class="fs-3 me-2">◊</span>Enchaîner des obstacles de cross de tout type à 90 cm en terrain varié avec des combinaisons</li>
                                    <li class="mb-0">
                                        <div class="p-3 mt-2 rounded" style="background-color: var(--secondary-color);">
                                            <strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Réaliser avec fluidité un enchaînement d'obstacles de cross de niveau Club 1 ou épreuve Poney équivalente</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
