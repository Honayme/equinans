<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Poney d'<span>Argent</span></h1>
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
                            <div class="alert border-0 shadow-sm" style="background: linear-gradient(135deg, #C0C0C0 0%, #A8A8A8 100%); color: white;">
                                <h2 class="mb-3">PONEY D'ARGENT</h2>
                                <p class="lead mb-2">Cycle 1 - Familiarisation</p>
                                <p class="mb-0" style="font-size: 0.95rem; opacity: 0.95;">Je me familiarise avec le comportement du poney et la vie au poney-club</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color); border-left: 4px solid #C0C0C0;">
                            <h4 class="mb-3" style="color: #808080; font-family: var(--accent-font);">
                                <i class="fa-solid fa-seedling me-2"></i>Comprendre le poney et son environnement
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.1rem;">
                                Le Poney d'Argent permet à l'enfant d'observer et de comprendre le comportement du poney. Il découvre les différents espaces du poney-club et gagne en autonomie dans les gestes quotidiens.
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
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-warehouse me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Connaître la sellerie, dire son lieu et son rôle</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-map-marked-alt me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Connaître le manège ou la carrière, dire son lieu et son rôle</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-route me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Montrer la piste</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-link me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Montrer le mors, la têtière et le frontal sur le filet</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-circle-nodes me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Montrer le licol</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-wheat-awn me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Reconnaître la paille</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- S'occuper du poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-hands-bubbles me-2"></i>S'occuper du poney
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-unlock me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Détacher une boucle : sous-gorge ou muserolle ou croupière...</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-ring me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Enlever un licol</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-box-archive me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Ranger la selle et le tapis avec aide</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Connaissances du poney -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-graduation-cap me-2"></i>Connaissances du poney
                                </h3>
                            </div>
                            <div class="p-4 rounded" style="background-color: var(--bg-color); border-left: 4px solid #808080;">
                                <ul class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    <li class="mb-3">
                                        <i class="fa-solid fa-ear-listen me-2" style="color: #808080;"></i>
                                        Observer mon poney : les oreilles
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa-solid fa-utensils me-2" style="color: #808080;"></i>
                                        Reconnaître quand le poney mange, quand il boit, quand il se repose
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa-solid fa-droplet me-2" style="color: #808080;"></i>
                                        Reconnaître quand le poney urine, quand il fait un crottin
                                    </li>
                                    <li class="mb-0">
                                        <i class="fa-solid fa-palette me-2" style="color: #808080;"></i>
                                        Nommer une robe
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Pratique équestre à pied -->
                        <div class="mb-5">
                            <div class="mb-4 p-3 rounded" style="background-color: var(--secondary-color);">
                                <h3 class="mb-0" style="color: var(--primary-color); font-family: var(--accent-font); font-size: 1.75rem;">
                                    <i class="fa-solid fa-shoe-prints me-2"></i>Pratique équestre à pied
                                </h3>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #696969; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">1</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Amener seul le poney en filet sur le terrain</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #696969; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">2</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Changer de côté en passant sous l'encolure</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #696969; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">3</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Faire le tour du poney</p>
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
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FAFAFA 0%, #E8E8E8 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-stairs me-3 mt-1" style="color: #696969; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #696969;">Monter</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Me mettre à poney avec ou sans montoir avec aide</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FAFAFA 0%, #E8E8E8 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-arrow-down me-3 mt-1" style="color: #696969; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #696969;">Descendre</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Descendre seul</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FAFAFA 0%, #E8E8E8 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-compass me-3 mt-1" style="color: #696969; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #696969;">Diriger</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Diriger au pas sur des courbes simples</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FAFAFA 0%, #E8E8E8 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-hand-stop me-3 mt-1" style="color: #696969; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #696969;">Contrôler les allures</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Arrêter et repartir au pas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-4 rounded" style="background: linear-gradient(135deg, #FAFAFA 0%, #E8E8E8 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-grip-lines me-3 mt-1" style="color: #696969; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #696969;">Maîtrise des rênes</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Lâcher et reprendre les rênes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Encadré récapitulatif -->
                        <div class="mb-5 p-4 rounded" style="background: linear-gradient(135deg, #F8F8F8 0%, #E0E0E0 100%); border: 2px solid #C0C0C0;">
                            <h4 class="mb-3" style="color: #696969; font-family: var(--accent-font);">
                                <i class="fa-solid fa-medal me-2"></i>En résumé : Le Poney d'Argent
                            </h4>
                            <p class="mb-2" style="color: var(--text-color);">
                                <strong>Le Poney d'Argent</strong> permet à l'enfant de progresser dans sa relation avec le poney :
                            </p>
                            <ul class="mb-0" style="color: var(--text-color);">
                                <li>Comprendre le comportement du poney à travers l'observation (oreilles, activités quotidiennes)</li>
                                <li>Découvrir les différents espaces du poney-club (sellerie, manège, carrière)</li>
                                <li>Gagner en autonomie dans le travail à pied et les soins de base</li>
                                <li>Progresser à poney : monter seul, diriger sur des courbes, gérer les rênes</li>
                                <li>Manipuler le matériel (boucles, licol, filet)</li>
                            </ul>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galops.poney.poney-bronze') }}" class="text-decoration-none" style="color: #CD7F32;">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Poney de Bronze
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galops.poney.poney-or') }}" class="text-decoration-none" style="color: #FFD700;">
                                        Poney d'Or<i class="fa-solid fa-arrow-right ms-2"></i>
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
