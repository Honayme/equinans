<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>3</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galop® 3 de Cavalier</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
            <livewire:galops.cheval.partials.menu
                :galopActif="3"
                icone='<i class="fa-solid fa-trophy" style="font-size: 2rem; color: #E5B566;"></i>'
                titre="Maîtriser les Trois Allures"
                description="Le Galop® 3 permet d'approfondir la technique équestre et de progresser dans l'autonomie."
            />

                <div class="col-lg-9">
                    <div class="service-single-content">
                        <!-- En-tête -->
                        <div class="galop-header mb-5">
                            <div class="alert border-0 shadow-sm" style="background-color: var(--accent-color); color: var(--primary-color);">
                                <h2 class="mb-3" style="color: var(--primary-color);">GALOP® 3</h2>
                                <p class="lead mb-0" style="color: var(--primary-color);">Maîtriser les trois allures - Approfondir la technique équestre</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                            Le Galop® 3 se compose de la partie spécifique du Galop 3 de cavalier, plus la partie commune à tous les Galops® 3.
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
                                <div class="col-12">
                                    <div class="p-4 rounded" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-hand-sparkles me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Soins Complets</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Effectuer un pansage complet, entretenir les harnachements, la litière, les sabots.</p>
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
                                                <p class="mb-0" style="color: var(--text-color);">Mener son cheval ou son poney sur des courbes serrées au pas, le faire reculer droit et déplacer ses épaules et ses hanches sur plusieurs pas.</p>
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
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Évoluer aux trois allures dans une bonne posture assise ou en équilibre sur ses étriers suivant les situations</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Trotter enlevé sur un diagonal défini et partir au galop sur le bon pied</li>
                                                    <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Enchaîner un parcours avec des contrats d'allures et de tracé précis, aux trois allures</li>
                                                    <li class="mb-0"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Enchaîner des obstacles isolés de 50 cm et des dispositifs simples de sauts rapprochés</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les aides pour tourner</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer comment partir au galop par aides diagonales</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les conditions élémentaires du bon abord d'un obstacle: tracé, vitesse, équilibre</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Dessiner sur un papier et nommer la demi-volte et la demi-volte renversée</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire la posture du cavalier assis et expliquer l'assiette</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer la raison du changement de diagonal au trot enlevé</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer l'action des aides: agir, résister, céder</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier quelques disciplines équestres sportives et leurs caractéristiques, dont celles pratiquées dans son club</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Ajuster le harnachement</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Démonter, remonter et entretenir un filet</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Effectuer un pansage complet de son cheval ou de son poney</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Curer les pieds postérieurs</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Doucher les membres</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Graisser les pieds</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Entretenir la litière</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Entretenir l'abreuvoir ou le lieu d'abreuvement</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer la répartition des activités du cheval à l'état naturel</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer ce que sont le troupeau, la hiérarchie, la dominance, les affinités, l'instinct grégaire et leurs conséquences</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les différentes litières</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer et situer les parties extérieures du cheval</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer et situer les parties du sabot</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer le rôle de l'entretien des pieds et de la ferrure</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer le mécanisme du pas et du trot</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer et reconnaître 3 races de poneys et 3 races de chevaux minimum</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître et nommer les différents épis: de tête, de crinière</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître, nommer et décrire: les déclinaisons du bai: isabelle et souris, les déclinaisons de l'alezan: alezan brûlé, café au lait, palomino</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître et nommer les différentes marques blanches: liste, en tête, balzane</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Mener son cheval ou son poney en main en enchaînant des courbes serrées au pas des deux côtés</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Reculer avec lui droit sur quelques foulées</li>
                                    <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Déplacer ses épaules ou ses hanches sur plusieurs pas</li>
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
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Trotter enlevé sur un diagonal défini et en changer à volonté</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Déchausser et rechausser ses étriers au trot et au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être stable en équilibre sur ses étriers au trot</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Maintenir son équilibre sur ses étriers au pas et au galop</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Être assis au trot et au galop en cherchant à conserver une bonne posture</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Obtenir une vitesse adaptée dans chaque allure</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger au trot sur un tracé précis comprenant des courbes serrées et au galop sur un tracé défini</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Changer d'allure sur des transitions simples en un point précis: arrêt ↔ pas; pas ↔ trot; galop ⇨ trot</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Partir au galop sur le bon pied du pas ou du trot sur une courbe</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Accélérer et ralentir aux trois allures</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Sauter un obstacle isolé de 60 cm environ en contrôlant l'allure et la direction à l'abord et à la réception</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Enchaîner des obstacles isolés de 50 cm environ sur un tracé simple</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Sauter sur la piste des dispositifs simples d'obstacles rapprochés d'environ 60 cm dans une bonne posture</li>
                                    <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Aller en extérieur et en terrain varié</li>
                                    <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Réaliser un parcours type Galop® 3</strong></li>
                                </ul>
                            </div>

                            <!-- Résumé -->
                            <div class="p-4 rounded" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #C8DFFF 100%); border: 2px solid var(--accent-color);">
                                <h4 class="mb-3" style="color: var(--primary-color);">
                                    <i class="fa-solid fa-clipboard-check me-2" style="color: var(--accent-color);"></i>En résumé
                                </h4>
                                <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    Le Galop® 3 marque une étape importante dans votre progression équestre. Vous apprenez à maîtriser les trois allures
                                    avec précision, à partir au galop sur le bon pied, et à enchaîner des parcours d'obstacles. Les connaissances théoriques
                                    s'enrichissent avec l'anatomie équine, la ferrure, les robes, et les comportements sociaux des chevaux. Les soins deviennent
                                    plus complets avec l'entretien du harnachement, de la litière et des pieds.
                                </p>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galop.2') }}" class="text-decoration-none" style="color: var(--text-color);">
                                        ← Galop® 2
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galop.4') }}" class="text-decoration-none" style="color: var(--accent-color);">
                                        Galop® 4 →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Service Single End -->

</div>
