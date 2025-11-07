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
                            <div class="alert alert-info border-0 shadow-sm">
                                <h2 class="mb-3">PROGRAMME DU GALOP® 4 DE CAVALIER</h2>
                                <p class="lead mb-0">Programme applicable au 1ᵉʳ septembre 2012.</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 4 se compose de la partie spécifique du Galop® 4, plus de la partie commune à tous les Galops® 4.
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

                            <div class="row g-4 mb-5">
                                <div class="col-6">
                                    <div class="p-4 rounded" style="background-color: var(--bg-color);">
                                        <h6 class="mb-3" style="color: var(--primary-color);"><span class="fs-3 me-2">◊</span>Équipement & Soins</h6>
                                        <p class="mb-0" style="color: var(--text-color);">Équiper un cheval ou un poney pour le travail et le transport et soigner les membres.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background-color: var(--bg-color);">
                                        <h6 class="mb-3" style="color: var(--primary-color);"><span class="fs-3 me-2">◊</span>À pied</h6>
                                        <p class="mb-0" style="color: var(--text-color);">Réaliser un parcours incluant des embûches simples avec des contrats d'allures et de tracé.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-4 rounded h-100" style="background-color: var(--bg-color);">
                                        <h6 class="mb-3" style="color: var(--primary-color);"><span class="fs-3 me-2">◊</span>En selle</h6>
                                        <ul class="list-unstyled mb-0" style="color: var(--text-color);">
                                            <li class="mb-2">Évoluer aux trois allures assis ou en équilibre sur ses étriers en contrôlant la vitesse et la direction avec ou sans contact avec la bouche du cheval ou du poney</li>
                                            <li class="mb-2">Adopter une posture juste dans les différentes situations aux trois allures, en extérieur et en sautant</li>
                                            <li class="mb-2">Déplacer les épaules et les hanches au pas et partir au galop du pas sur le bon pied en ligne droite</li>
                                            <li class="mb-2">Enchaîner un parcours de 8 à 10 obstacles isolés à environ 60 cm</li>
                                            <li class="mb-2">Enchaîner avec précision des mouvements simples aux trois allures et varier l'amplitude au trot enlevé et au galop</li>
                                            <li class="mb-0">Effectuer une analyse de sa prestation à cheval</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Connaissances Générales -->
                            <div class="mb-5">
                                <h5 class="mb-4" style="color: var(--primary-color);">Connaissances Générales</h5>
                                <div class="p-4 rounded" style="background-color: var(--secondary-color);">
                                    <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Décrire la posture du cavalier à cheval à l'obstacle</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Nommer et reconnaître les mors de filet usuels</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Expliquer l'accord des aides</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Expliquer les règles de sécurité à appliquer en aire de travail et à l'extérieur</li>
                                        <li class="mb-0"><span class="fs-3 me-2">◈</span>Expliquer ce qu'est un pli et l'incurvation</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- S'occuper du Cheval -->
                            <div class="mb-5">
                                <h5 class="mb-4" style="color: var(--primary-color);">S'occuper du Cheval</h5>
                                <div class="p-4 rounded" style="background-color: var(--bg-color);">
                                    <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Mettre et enlever des protections de travail : protège-boulets, guêtres et cloches</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Mettre et enlever des protections de transport</li>
                                        <li class="mb-0"><span class="fs-3 me-2">◊</span>Inspecter et soigner les membres avant et après le travail</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Connaissance du Cheval -->
                            <div class="mb-5">
                                <h5 class="mb-4" style="color: var(--primary-color);">Connaissance du Cheval</h5>
                                <div class="p-4 rounded" style="background-color: var(--secondary-color);">
                                    <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Expliquer les conséquences de la vie domestique sur le cheval ou le poney</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Procéder à une identification de base déterminer sur un cheval ou un poney : son sexe, sa robe, ses marques, ses épis</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Citer les principales normes physiologiques du cheval: température, rythme cardiaque</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Identifier les signes de maladie: prostration, agitation, comportement inhabituel, inappétence, jetage, etc.</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Expliquer le mécanisme du galop à droite et à gauche et les reconnaître</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Décrire les besoins du cheval en fourrages, concentrés et minéraux</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Nommer les différentes parties du livret signalétique: carte d'identité + carnet de santé</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Citer et expliquer les soins périodiques obligatoires - vaccination et recommandés - vermifugation, soins dentaires...</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◈</span>Reconnaître les grandes familles d'aliments à distribuer : fourrages, concentrés et compléments minéraux</li>
                                        <li class="mb-0"><span class="fs-3 me-2">◈</span>Reconnaître les principaux aliments à éviter: les végétaux toxiques et les contaminants alimentaires</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pratique À Pied -->
                            <div class="mb-5">
                                <h5 class="mb-4" style="color: var(--primary-color);">Pratique Équestre à Pied</h5>
                                <div class="p-4 rounded" style="background-color: var(--bg-color);">
                                    <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Marcher en main quelques foulées en conservant un contact moelleux et permanent sur les deux rênes</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Faire reculer son cheval ou son poney en restant à distance</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Faire venir le cheval vers soi</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Obtenir une flexion latérale de l'encolure des deux côtés</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Trotter en main sur des lignes droites et des courbes larges</li>
                                        <li class="mb-0"><span class="fs-3 me-2">◊</span>Franchir des embûches simples au pas: type flaques, bâches, plans inclinés, pont de van ou de camion...</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Pratique À Cheval -->
                            <div class="mb-5">
                                <h5 class="mb-4" style="color: var(--primary-color);">Pratique Équestre à Cheval</h5>
                                <div class="p-4 rounded" style="background-color: var(--secondary-color);">
                                    <ul class="list-unstyled mb-0" style="font-size: 1.05rem; color: var(--text-color);">
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Trotter enlevé dans une bonne posture lors de changements de direction ou d'amplitude</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Maintenir une vitesse régulière sur un enchaînement de courbes et lignes droites au galop</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Être stable en équilibre sur ses étriers au galop et sur des dispositifs de sauts rapprochés à environ 80 cm</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Trotter, galoper et enchaîner des mouvements simples assis dans une bonne posture</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Diriger sur des courbes aux trois allures avec un pli interne</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Déplacer les épaules ou les hanches de son cheval d'un quart de tour au pas</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Prendre et conserver un contact permanent et moelleux avec la bouche de son cheval ou de son poney aux trois allures</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Pouvoir à volonté évoluer sans contact avec la bouche de son cheval ou son poney aux trois allures</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Partir au galop du pas sur le bon pied en ligne droite</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Varier la vitesse (l'amplitude) au trot enlevé et au galop</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Contrôler l'allure, la vitesse et la direction sur un enchaînement de sauts isolés à environ 70 cm</li>
                                        <li class="mb-2"><span class="fs-3 me-2">◊</span>Contrôler l'allure, la vitesse et la direction en terrain varié</li>
                                        <li class="mb-2"><strong style="color: var(--accent-color);">Réaliser une reprise combinée ou une reprise de Dressage et un parcours de CSO de niveau Club 4 ou de Hunter Galop® 4 ou épreuve Poney équivalente</strong></li>
                                        <li class="mb-0"><strong style="color: var(--accent-color);">Effectuer une sortie en extérieur aux trois allures</strong></li>
                                    </ul>
                                </div>
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
