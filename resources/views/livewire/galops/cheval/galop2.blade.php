<div>
<!-- Page Header Start -->
<div class="page-header bg-section parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>2</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galop® 2 de Cavalier</li>
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
                :galopActif="2"
                icone='<i class="fa-solid fa-trophy" style="font-size: 2rem; color: #E5B566;"></i>'
                titre="Évoluer aux Trois Allures"
                description="Le Galop® 2 permet de progresser dans la maîtrise des trois allures et de découvrir le saut d'obstacle."
            />

            <div class="col-lg-9">
                <div class="service-single-content">
                    <!-- En-tête -->
                    <div class="galop-header mb-5">
                        <div class="alert border-0 shadow-sm" style="background-color: var(--accent-color); color: var(--primary-color);">
                            <h2 class="mb-3" style="color: var(--primary-color);">GALOP® 2</h2>
                            <p class="lead mb-0" style="color: var(--primary-color);">Évoluer aux trois allures - Découvrir le saut d'obstacle</p>
                        </div>
                    </div>

                    <!-- Introduction -->
                    <p class="mb-4" style="color: var(--text-color); font-size: 1.1rem;">
                        Le Galop® 2 se compose de la partie spécifique du Galop® 2 de cavalier, plus la partie commune à tous les Galops® 2.
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
                                        <i class="fa-solid fa-brush me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                        <div>
                                            <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Préparation</h5>
                                            <p class="mb-0" style="color: var(--text-color);">Panser son cheval ou son poney, le préparer et le brider.</p>
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
                                            <p class="mb-0" style="color: var(--text-color);">Le mener sur un tracé précis, faire bouger ses épaules et ses hanches.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="p-4 rounded" style="background: linear-gradient(135deg, #F5F5F5 0%, #E8E8E8 100%); border: 2px solid var(--primary-color);">
                                    <div class="d-flex align-items-start">
                                        <i class="fa-solid fa-horse me-3 mt-1" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                        <div>
                                            <h5 class="mb-3"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>En selle</h5>
                                            <ul class="list-unstyled mb-0" style="color: var(--text-color);">
                                                <li class="mb-2"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Réaliser individuellement des parcours avec des contrats d'allures et de tracé au pas, au trot et au galop en alternant l'équilibre assis et sur les étriers</li>
                                                <li class="mb-0"><i class="fa-solid fa-check-circle me-2" style="color: var(--accent-color);"></i>Sauter un petit obstacle</li>
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
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Expliquer les aides pour avancer et leur graduation</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer les parties du filet et de la selle</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Dessiner sur un papier et nommer les figures de manège usuelles: cercle, volte, diagonale, doubler</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Citer les règles de circulation à mettre en pratique dans un manège ou une carrière</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître et nommer la brosse douce, l'étrille, le bouchon et le cure-pied</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Caractériser les différents types de logements des chevaux: pré, paddock, stabulation, box, stalle</li>
                                <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Identifier les principales activités équestres de la FFE et les principales activités proposées par son club</li>
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
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Seller</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Entretenir la selle</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Aborder un cheval ou un poney en stabulation, au paddock ou au pré</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Le lâcher dans son box, son pré ou dans la stabulation</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Observer les comportements des chevaux ou poneys entre eux</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Mettre un filet</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Faire un pansage en utilisant la brosse douce, l'étrille et le bouchon</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Curer les pieds antérieurs, prendre un postérieur</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Faire un nœud d'attache</li>
                                <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Distribuer les aliments</li>
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
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire les caractéristiques principales des 5 sens du cheval ou du poney</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire leurs comportements entre eux</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire leur comportement alimentaire</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire la bouche du cheval et comment il s'alimente</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Reconnaître les aliments de base suivants: herbe, foin, paille, céréales, granulés</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Connaître leurs besoins en eau et les modes d'abreuvement</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer et reconnaître trois races de chevaux ou de poneys présentes dans son club</li>
                                <li class="mb-3"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Nommer et reconnaître:
                                    <ul class="mt-2 ms-4">
                                        <li class="mb-1">Le blanc, le gris, le crème et le chocolat: dites autres robes</li>
                                    </ul>
                                </li>
                                <li class="mb-3"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Les taches:
                                    <ul class="mt-2 ms-4">
                                        <li class="mb-1">Petites = tachetée</li>
                                        <li class="mb-1">Grandes = Pie: Noir Pie, Alezan Pie, Bai Pie</li>
                                    </ul>
                                </li>
                                <li class="mb-0"><span class="fs-5 me-2" style="color: #4A90E2;">◈</span>Décrire et montrer les parties principales des membres: genou, jarret, canon, boulet, pâturon, couronne, sabot</li>
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
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Déplacer ses épaules ou ses hanches un pas minimum, à partir de l'arrêt</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Déplacer la tête du cheval ou du poney à droite et à gauche, en haut et en bas</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Faire reculer son cheval ou son poney de 2 pas minimum</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Le mener en main sur un tracé précis alternant des lignes droites et des courbes des deux côtés</li>
                                <li class="mb-0"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Le mener en main au trot quelques foulées</li>
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
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Se mettre seul en selle</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Ressangler seul en selle</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Régler seul ses étriers à pied et à cheval</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Mettre en pratique les règles de circulation</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Lâcher ses rênes, les reprendre et les ajuster au trot enlevé</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Trotter assis en cherchant une bonne posture</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Galoper assis en cherchant une bonne posture</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Alterner l'équilibre assis et sur les étriers au pas, au trot et au galop</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Partir au galop et maintenir le galop</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Changer d'allure sur des transitions simples et progressives: arrêt ↔ pas; pas ↔ trot; trot ⇨ galop</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Diriger au pas et au trot sur un tracé défini incluant: cercle, volte, diagonale et doubler</li>
                                <li class="mb-2"><span class="fs-5 me-2" style="color: var(--primary-color);">◊</span>Sauter un petit obstacle sur la piste au trot et au galop</li>
                                <li class="mb-0"><strong style="color: var(--accent-color);"><i class="fa-solid fa-star me-2"></i>Réaliser un parcours type Galop® 2</strong></li>
                            </ul>
                        </div>

                        <!-- Résumé -->
                        <div class="p-4 rounded" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #C8DFFF 100%); border: 2px solid var(--accent-color);">
                            <h4 class="mb-3" style="color: var(--primary-color);">
                                <i class="fa-solid fa-clipboard-check me-2" style="color: var(--accent-color);"></i>En résumé
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                Le Galop® 2 vous permet de progresser dans la maîtrise des trois allures (pas, trot, galop) et de découvrir le saut d'obstacle.
                                Vous apprenez à seller et brider votre cheval, à le mener en main avec précision, et à réaliser des parcours avec des contrats
                                d'allures. Les connaissances théoriques portent sur l'anatomie, l'alimentation, les robes et les comportements équins.
                            </p>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ route('galop.1') }}" class="text-decoration-none" style="color: var(--text-color);">
                                    ← Galop® 1
                                </a>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('galop.3') }}" class="text-decoration-none" style="color: var(--accent-color);">
                                    Galop® 3 →
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
