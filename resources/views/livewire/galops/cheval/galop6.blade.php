<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>6</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galop® 6 de Cavalier</li>
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
                :galopActif="6"
                icone='<i class="fa-solid fa-trophy" style="font-size: 2rem; color: #E5B566;"></i>'
                titre="Expertise"
                description="Le Galop® 6 développe les techniques avancées et la maîtrise du travail du cheval."
            />

                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="galop-header mb-5">
                            <div class="alert border-0 shadow-sm" style="background-color: var(--accent-color); color: var(--primary-color);">
                                <h2 class="mb-3" style="color: var(--primary-color);">GALOP® 6</h2>
                                <p class="lead mb-0" style="color: var(--primary-color);">Expertise - Techniques avancées et maîtrise du travail du cheval</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 6 se compose de la partie spécifique du Galop® 6, plus de la partie commune à tous les Galops® 6.
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
                                            <i class="fa-solid fa-circle-notch me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>À pied</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Longer un cheval ou un poney et lui faire sauter un petit obstacle à la longe.</p>
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
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Être assis dans une bonne posture dans les transitions dans l'allure et entre allures et les déplacements latéraux au trot</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Incurver sur les cercles au pas et au trot, galoper à faux sur une courbe large</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Obtenir des extensions d'encolure au trot</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Effectuer une cession à la jambe au trot</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Présenter les reprises de dressage Club 2 et enchaîner des parcours de CSO ou de Hunter type Club 2</li>
                                                    <li class="mb-0"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Sauter en extérieur et en terrain varié</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Expliquer les critères de jugement des mouvements d'une reprise de dressage Club</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Expliquer les allures artificielles ou défectueuses</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Citer les critères de qualité ou les défauts des allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Expliquer les notes d'ensembles et leurs critères de jugement</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Définir la mise sur la main et l'impulsion</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Définir le galop à faux et ses qualités</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Citer les principaux enrênements de travail monté : expliquer le but de leur usage et leurs effets</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Citer les noms des principaux obstacles de Cross</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Toiletter et tresser un cheval pour une compétition</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Prodiguer les soins après le travail</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire le pied et la ferrure</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Lister les principales maladies du cheval et leurs symptômes</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les variations des besoins alimentaires du cheval en fonction de différents facteurs à prendre en compte</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Évaluer l'état corporel d'un cheval (embonpoint, maigreur)</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer les étapes du travail du maréchal-ferrant</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les grandes étapes de la reproduction de la saillie au sevrage</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer la démarche pour identifier un cheval</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Savoir utiliser les outils d'identification : nuancier, documents</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer le mécanisme du reculer</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Longer aux trois allures un cheval ou poney détendu</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Déplacer le cercle à la longe</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Faire sauter un petit obstacle à son cheval ou son poney à la longe</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Marcher et trotter un cheval aux longues rênes sur le cercle et changer de main</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Incurver son cheval aux trois allures sur des courbes larges</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir une cadence régulière aux 3 allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser des courbes aux trois allures en pli externe</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer des transitions montantes énergiques et descendantes nettes et fluides</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer l'échauffement (détente) de son cheval en autonomie sous le contrôle de son enseignant</li>
                                </ul>
                            </div>

                            <!-- Alerte Spécialisation -->
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #FFF8DC 0%, #FFE4B5 100%); border: 3px solid var(--accent-color);">
                                <h4 class="mb-3" style="color: var(--primary-color);">
                                    <i class="fa-solid fa-trophy me-2" style="color: var(--accent-color);"></i>Niveau Club 2
                                </h4>
                                <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    Le Galop® 6 comprend trois parties spécifiques : <strong>Dressage</strong>, <strong>Obstacle (CSO)</strong> et <strong>Cross</strong> de niveau Club 2.
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être assis dans une posture juste aux trois allures, dans les déplacements latéraux et dans l'incurvation</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Varier l'amplitude du trot au trot assis</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser des cercles et des serpentines de 10 m de diamètre au pas, 12 m au trot en cherchant l'incurvation</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Avancer ses mains sur quelques foulées sur un cercle au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Obtenir une extension d'encolure au trot enlevé sur un cercle</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>S'arrêter à partir du trot et reculer de quelques pas</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser une cession à la jambe au trot des deux côtés</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Réaliser un contre changement de main au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Enchaîner des mouvements au galop dans une cadence régulière</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Enchaîner des mouvements avec un tracé précis</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Trouver la bonne vitesse de présentation dans chaque allure</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Pouvoir monter avec 4 rênes</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Présenter dans une bonne posture: une reprise Galop 6 de niveau Club 2 ou d'épreuve Poney équivalente, et un enchaînement de mouvements Galop® 6 du type de ceux de la Préliminaire Dressage Club 2</strong></li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable et liant sur des dispositifs de sauts rapprochés (hauteur environ 1 m)</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Galoper dans une cadence régulière et une vitesse adaptée en enchaînant des sauts à 90 cm</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger sur un tracé précis en enchaînant des sauts rapprochés</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Contrôler le galop en enchaînant des sauts sur des distances précises et des combinaisons</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Changer d'allure en enchaînant des sauts rapprochés</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Enchaîner avec fluidité un parcours CSO ou Hunter niveau Club 2 ou épreuve Poney équivalente</strong></li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Sauter divers profils d'obstacles d'extérieur</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable sur des sauts et des mouvements de terrain en terrain varié</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir une vitesse régulière et adaptée en enchaînant des sauts en terrain varié</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Conduire en terrain varié sur des enchaînements de sauts</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Enchaîner des obstacles de cross à 80 cm en terrain varié avec une ou plusieurs combinaisons</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Enchaîner avec fluidité un parcours de cross de niveau Club 2</strong></li>
                                </ul>
                            </div>

                            <!-- Résumé -->
                            <div class="p-4 rounded" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #C8DFFF 100%); border: 2px solid var(--accent-color);">
                                <h4 class="mb-3" style="color: var(--primary-color);">
                                    <i class="fa-solid fa-clipboard-check me-2" style="color: var(--accent-color);"></i>En résumé
                                </h4>
                                <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    Le Galop® 6 représente un niveau d'expertise avancée. Vous maîtrisez le galop à faux, les extensions d'encolure,
                                    et la cession à la jambe au trot. Le travail à pied s'enrichit avec le saut à la longe et les longues rênes.
                                    Vous gérez l'échauffement de votre cheval en autonomie. Niveau Club 2 dans votre spécialité : Dressage (cercles de 10m,
                                    contre-changement de main, 4 rênes), CSO (parcours à 90 cm), ou Cross (80 cm en terrain varié).
                                </p>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galop.5') }}" class="text-decoration-none" style="color: var(--text-color);">
                                        ← Galop® 5
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galop.7') }}" class="text-decoration-none" style="color: var(--accent-color);">
                                        Galop® 7 →
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
