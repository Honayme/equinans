<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>5</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galop® 5 de Cavalier</li>
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
                :galopActif="5"
                icone='<i class="fa-solid fa-trophy" style="font-size: 2rem; color: #E5B566;"></i>'
                titre="Spécialisation"
                description="Le Galop® 5 introduit des mouvements spécifiques et permet de se spécialiser dans une discipline."
            />

                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="galop-header mb-5">
                            <div class="alert border-0 shadow-sm" style="background-color: var(--accent-color); color: var(--primary-color);">
                                <h2 class="mb-3" style="color: var(--primary-color);">GALOP® 5</h2>
                                <p class="lead mb-0" style="color: var(--primary-color);">Spécialisation - Mouvements spécifiques et choix de discipline</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 5 se compose de la partie spécifique du Galop® 5, plus de la partie commune à tous les Galops® 5.
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
                                            <i class="fa-solid fa-truck me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>À pied</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Embarquer un cheval dans un camion ou un van.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-horse me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>En selle</h5>
                                                <ul class="list-unstyled mb-0" style="color: var(--text-color);">
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Être assis dans une bonne posture aux trois allures</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Rechercher l'incurvation sur les courbes et une cadence régulière aux trois allures</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Partir au galop avec précision</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Effectuer une cession à la jambe au pas</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Présenter les reprises de Dressage Club 3 et enchaîner des parcours de CSO ou de Hunter type Club 3</li>
                                                    <li class="mb-0"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Aller en extérieur et en terrain varié aux trois allures</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Connaissances Générales -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-book me-2"></i>Connaissances Générales
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Définir la cession à la jambe et ses critères de jugement</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Définir les transitions, qualités, défauts</li>
                                    <li class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Connaître les grands principes d'apprentissage permettant d'apprendre au cheval :
                                        <ul class="mt-2 ms-4">
                                            <li>L'habituation</li>
                                            <li>La sensibilisation</li>
                                            <li>Les renforcements positifs (récompenses)</li>
                                            <li>Les renforcements négatifs</li>
                                            <li>La punition</li>
                                            <li>En donner des exemples et les conditions et limites de leur usage</li>
                                        </ul>
                                    </li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Reconnaître et nommer les principaux mors de filet</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Donner l'emplacement des lettres de la carrière de dressage</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Citer les noms des principaux obstacles de CSO</li>
                                </ul>
                            </div>

                            <!-- S'occuper du Cheval -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-hands-helping me-2"></i>S'occuper du Cheval
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Poser des bandes de repos, les enlever et les rouler</li>
                                </ul>
                            </div>

                            <!-- Connaissance du Cheval -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-horse-head me-2"></i>Connaissance du Cheval
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #4A90E2;">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer le numéro SIRE</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer la puce: lieu d'implantation, usage, lecteur</li>
                                    <li class="mb-3"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les listes et l'obligation d'inscription pour concourir:
                                        <ul class="mt-2 ms-4">
                                            <li>Club</li>
                                            <li>Chevaux de sport</li>
                                        </ul>
                                    </li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier des différents types de Pie, de tachetés, des adjonctions</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier les principales parties du squelette</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier les grands groupes musculaires et leur rôle</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les grandes particularités de la digestion du cheval</li>
                                </ul>
                            </div>

                            <!-- Pratique À Pied -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-person-walking me-2"></i>Pratique Équestre à Pied
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Présenter seul un cheval en main au pas et au trot</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Longer un cheval détendu au pas, au trot et à l'arrêt</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Apprendre à utiliser les longues rênes sur le cercle au pas</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Embarquer un cheval dans un camion ou dans un van</li>
                                </ul>
                            </div>

                            <!-- Pratique À Cheval - Base -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-horse-head me-2"></i>Pratique Équestre à Cheval
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable et décontracté sans étriers aux 3 allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Rechercher l'incurvation de son cheval dans les courbes</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer des développements progressifs d'allure en maintenant une cadence régulière</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Pouvoir aller en extérieur et en terrain varié aux trois allures</li>
                                </ul>
                            </div>

                            <!-- Alerte Spécialisation -->
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 3px solid var(--accent-color);">
                                <h4 class="mb-3" style="color: var(--primary-color);">
                                    <i class="fa-solid fa-trophy me-2" style="color: var(--accent-color);"></i>Choix de Spécialisation
                                </h4>
                                <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    Le Galop® 5 comprend trois parties spécifiques : <strong>Dressage</strong>, <strong>Obstacle (CSO)</strong> et <strong>Cross</strong>.
                                    Vous pouvez vous spécialiser dans l'une ou plusieurs de ces disciplines.
                                </p>
                            </div>

                            <!-- Partie Spécifique Dressage -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-chess-knight me-2"></i>Partie Spécifique Dressage
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color); border-left: 6px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être assis dans une bonne posture aux trois allures et dans les transitions montantes et descendantes</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Prendre le galop du pas et du trot en un point précis et effectuer des cercles de 20 m de diamètre</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger avec précision sur des serpentines et des cercles de 12 mètres de diamètre au pas</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser des serpentines et des cercles de 15 mètres de diamètre au trot</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Varier l'amplitude au pas</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser une cession à la jambe au pas des deux côtés</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Présenter dans une bonne posture: une reprise Galop 5 de niveau Club 3 ou d'épreuve Poney équivalente et un enchaînement de mouvements Galop® 5 du type de ceux de la Préliminaire Dressage Club 3</strong></li>
                                </ul>
                            </div>

                            <!-- Partie Spécifique Obstacle -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-bars-staggered me-2"></i>Partie Spécifique Obstacle (CSO)
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--accent-color); border-left: 6px solid var(--accent-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable et liant au galop et sur des dispositifs variés de sauts rapprochés à 90cm environ et dans l'enchaînement de sauts</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Galoper dans la bonne cadence et la bonne vitesse en enchaînant des sauts sur un parcours à 75 cm</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Contrôler le galop en enchaînant des sauts et des combinaisons</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Changer d'allure en enchaînant des sauts</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger sur un tracé précis dans une cadence régulière en enchaînant des sauts</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Enchaîner avec fluidité un parcours de niveau Club 3 CSO ou Hunter ou d'épreuve Poney équivalente</strong></li>
                                </ul>
                            </div>

                            <!-- Partie Spécifique Cross -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-mountain me-2"></i>Partie Spécifique Cross
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #228B22; border-left: 6px solid #228B22;">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Sauter de petits obstacles d'extérieur</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Évoluer en équilibre sur ses étriers avec stabilité aux trois allures, en extérieur et en terrain varié</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir une vitesse régulière et contrôlée, en extérieur et dans les enchaînements de sauts simples</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Conduire en extérieur, en terrain varié et sur des enchaînements de sauts simples en terrain varié</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Enchaîner avec fluidité un parcours de cross de niveau Club 3 ou d'épreuve Poney équivalente</strong></li>
                                </ul>
                            </div>

                            <!-- Résumé -->
                            <div class="p-4 rounded" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #C8DFFF 100%); border: 2px solid var(--accent-color);">
                                <h4 class="mb-3" style="color: var(--primary-color);">
                                    <i class="fa-solid fa-clipboard-check me-2" style="color: var(--accent-color);"></i>En résumé
                                </h4>
                                <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    Le Galop® 5 marque l'entrée dans la spécialisation équestre. Vous maîtrisez la cession à la jambe, l'incurvation,
                                    et les principes d'apprentissage du cheval. Le travail à pied s'enrichit avec la longe et les longues rênes.
                                    Vous choisissez ensuite votre voie : Dressage (précision et mouvements codifiés), CSO (fluidité sur parcours à 75 cm),
                                    ou Cross (terrain varié et obstacles naturels). Niveau Club 3 requis dans votre spécialité.
                                </p>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galop.4') }}" class="text-decoration-none" style="color: var(--text-color);">
                                        ← Galop® 4
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galop.6') }}" class="text-decoration-none" style="color: var(--accent-color);">
                                        Galop® 6 →
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
