<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>4</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galop® 4 de Cavalier</li>
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
                :galopActif="4"
                icone='<i class="fa-solid fa-trophy" style="font-size: 2rem; color: #E5B566;"></i>'
                titre="Perfectionnement"
                description="Le Galop® 4 marque un tournant vers l'autonomie et la maîtrise technique avancée."
            />

                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="galop-header mb-5">
                            <div class="alert border-0 shadow-sm" style="background-color: var(--accent-color); color: var(--primary-color);">
                                <h2 class="mb-3" style="color: var(--primary-color);">GALOP® 4</h2>
                                <p class="lead mb-0" style="color: var(--primary-color);">Perfectionnement - Autonomie et maîtrise technique avancée</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 4 se compose de la partie spécifique du Galop® 4, plus de la partie commune à tous les Galops® 4.
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
                                <div class="col-6">
                                    <div class="p-4 rounded" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-shield me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Équipement & Soins</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Équiper un cheval ou un poney pour le travail et le transport et soigner les membres.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-shoe-prints me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>À pied</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Réaliser un parcours incluant des embûches simples avec des contrats d'allures et de tracé.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-horse me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>En selle</h5>
                                                <ul class="list-unstyled mb-0" style="color: var(--text-color);">
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Évoluer aux trois allures assis ou en équilibre sur ses étriers en contrôlant la vitesse et la direction avec ou sans contact avec la bouche du cheval ou du poney</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Adopter une posture juste dans les différentes situations aux trois allures, en extérieur et en sautant</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Déplacer les épaules et les hanches au pas et partir au galop du pas sur le bon pied en ligne droite</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Enchaîner un parcours de 8 à 10 obstacles isolés à environ 60 cm</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Enchaîner avec précision des mouvements simples aux trois allures et varier l'amplitude au trot enlevé et au galop</li>
                                                    <li class="mb-0"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Effectuer une analyse de sa prestation à cheval</li>
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
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid #4A90E2;">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Décrire la posture du cavalier à cheval à l'obstacle</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Nommer et reconnaître les mors de filet usuels</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer l'accord des aides</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les règles de sécurité à appliquer en aire de travail et à l'extérieur</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer ce qu'est un pli et l'incurvation</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Mettre et enlever des protections de travail : protège-boulets, guêtres et cloches</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Mettre et enlever des protections de transport</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Inspecter et soigner les membres avant et après le travail</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les conséquences de la vie domestique sur le cheval ou le poney</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Procéder à une identification de base déterminer sur un cheval ou un poney : son sexe, sa robe, ses marques, ses épis</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Citer les principales normes physiologiques du cheval: température, rythme cardiaque</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier les signes de maladie: prostration, agitation, comportement inhabituel, inappétence, jetage, etc.</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer le mécanisme du galop à droite et à gauche et les reconnaître</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire les besoins du cheval en fourrages, concentrés et minéraux</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer les différentes parties du livret signalétique: carte d'identité + carnet de santé</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Citer et expliquer les soins périodiques obligatoires - vaccination et recommandés - vermifugation, soins dentaires...</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître les grandes familles d'aliments à distribuer : fourrages, concentrés et compléments minéraux</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître les principaux aliments à éviter: les végétaux toxiques et les contaminants alimentaires</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Marcher en main quelques foulées en conservant un contact moelleux et permanent sur les deux rênes</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Faire reculer son cheval ou son poney en restant à distance</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Faire venir le cheval vers soi</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Obtenir une flexion latérale de l'encolure des deux côtés</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Trotter en main sur des lignes droites et des courbes larges</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Franchir des embûches simples au pas: type flaques, bâches, plans inclinés, pont de van ou de camion...</li>
                                </ul>
                            </div>

                            <!-- Pratique À Cheval -->
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font);">
                                    <i class="fa-solid fa-horse-head me-2"></i>Pratique Équestre à Cheval
                                </h3>
                            </div>
                            <div class="p-4 rounded mb-5" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Trotter enlevé dans une bonne posture lors de changements de direction ou d'amplitude</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir une vitesse régulière sur un enchaînement de courbes et lignes droites au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable en équilibre sur ses étriers au galop et sur des dispositifs de sauts rapprochés à environ 80 cm</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Trotter, galoper et enchaîner des mouvements simples assis dans une bonne posture</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger sur des courbes aux trois allures avec un pli interne</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Déplacer les épaules ou les hanches de son cheval d'un quart de tour au pas</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Prendre et conserver un contact permanent et moelleux avec la bouche de son cheval ou de son poney aux trois allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Pouvoir à volonté évoluer sans contact avec la bouche de son cheval ou son poney aux trois allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Partir au galop du pas sur le bon pied en ligne droite</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Varier la vitesse (l'amplitude) au trot enlevé et au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Contrôler l'allure, la vitesse et la direction sur un enchaînement de sauts isolés à environ 70 cm</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Contrôler l'allure, la vitesse et la direction en terrain varié</li>
                                    <li class="mb-2"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Réaliser une reprise combinée ou une reprise de Dressage et un parcours de CSO de niveau Club 4 ou de Hunter Galop® 4 ou épreuve Poney équivalente</strong></li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Effectuer une sortie en extérieur aux trois allures</strong></li>
                                </ul>
                            </div>

                            <!-- Résumé -->
                            <div class="p-4 rounded" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #C8DFFF 100%); border: 2px solid var(--accent-color);">
                                <h4 class="mb-3" style="color: var(--primary-color);">
                                    <i class="fa-solid fa-clipboard-check me-2" style="color: var(--accent-color);"></i>En résumé
                                </h4>
                                <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    Le Galop® 4 marque un tournant décisif vers l'autonomie équestre. Vous maîtrisez le contact avec la bouche,
                                    le pli et l'incurvation, et perfectionnez votre position aux trois allures. Les parcours d'obstacles deviennent
                                    plus techniques (8 à 10 obstacles à 70 cm), et vous développez une capacité d'analyse de votre propre pratique.
                                    Les connaissances s'étendent à la santé équine, la nutrition, et la gestion complète des protections et du matériel.
                                </p>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galop.3') }}" class="text-decoration-none" style="color: var(--text-color);">
                                        ← Galop® 3
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galop.5') }}" class="text-decoration-none" style="color: var(--accent-color);">
                                        Galop® 5 →
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
