<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>Argent</span></h1>
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
                                <h2 class="mb-3">GALOP® D'ARGENT</h2>
                                <p class="lead mb-0">Développer son autonomie et sa communication avec le poney</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color); border-left: 4px solid #C0C0C0;">
                            <h4 class="mb-3" style="color: #808080; font-family: var(--accent-font);">
                                <i class="fa-solid fa-lightbulb me-2"></i>Je fais des choix en fonction de mes sensations et des réactions du poney
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.1rem;">
                                Le Galop® d'Argent permet au cavalier de gagner en autonomie et d'affiner sa communication avec le poney. Il apprend à observer, comprendre et s'adapter aux réactions de sa monture.
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
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-id-card me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Connaître la fédération, la licence</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-briefcase me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Connaître 4 métiers liés au poney-club</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #C0C0C0;">
                                        <i class="fa-solid fa-ruler me-2" style="color: #C0C0C0;"></i>
                                        <span style="color: var(--text-color);">Connaître les distances de sécurité à poney</span>
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
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-saddle me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Entretenir la selle</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-link me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Mettre un licol</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-knot me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Reproduire un nœud d'attache</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-hourglass-half me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Prendre et curer les postérieurs</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A8A8A8;">
                                        <i class="fa-solid fa-brush me-2" style="color: #A8A8A8;"></i>
                                        <span style="color: var(--text-color);">Utiliser étrille, bouchon et brosse douce</span>
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
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #909090;">
                                    <i class="fa-solid fa-brain me-2" style="color: #909090;"></i>
                                    <span style="color: var(--text-color);">Connaître les caractéristiques principales du comportement des poneys</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #909090;">
                                    <i class="fa-solid fa-venus-mars me-2" style="color: #909090;"></i>
                                    <span style="color: var(--text-color);">Différencier poney et ponette</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #909090;">
                                    <i class="fa-solid fa-palette me-2" style="color: #909090;"></i>
                                    <span style="color: var(--text-color);">Connaître les 5 robes de base</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #909090;">
                                    <i class="fa-solid fa-eye me-2" style="color: #909090;"></i>
                                    <span style="color: var(--text-color);">Reconnaître des attitudes spécifiques du poney</span>
                                </li>
                                <li class="mb-3 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #909090;">
                                    <i class="fa-solid fa-paw me-2" style="color: #909090;"></i>
                                    <span style="color: var(--text-color);">Connaître les principales parties du corps du poney</span>
                                </li>
                                <li class="mb-0 p-3 rounded" style="background-color: var(--bg-color); border-left: 3px solid #909090;">
                                    <i class="fa-solid fa-apple-alt me-2" style="color: #909090;"></i>
                                    <span style="color: var(--text-color);">Connaître l'alimentation distribuée dans mon poney-club</span>
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
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #E8E8E8 0%, #C0C0C0 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #808080; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">1</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Faire reculer le poney</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #E8E8E8 0%, #C0C0C0 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #808080; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">2</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Faire trotter le poney quelques foulées en ligne droite</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #E8E8E8 0%, #C0C0C0 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #808080; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">3</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Ajuster ma position près de mon poney en fonction des situations</p>
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
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-circle-check me-3 mt-1" style="color: #808080; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #606060;">Autonomie en selle</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Me mettre seul en selle</li>
                                                    <li>Descendre au pas</li>
                                                    <li>Ressangler en selle avec aide</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-route me-3 mt-1" style="color: #808080; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #606060;">Parcours et obstacles</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Franchir un parcours simple de barres au sol au trot</li>
                                                    <li>Alterner en équilibre et assis</li>
                                                    <li>Enchaîner courbes et transitions</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-gauge-high me-3 mt-1" style="color: #808080; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #606060;">Contrôle des allures</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Accélérer et ralentir le trot</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #F5F5F5 0%, #D3D3D3 100%); border: 2px solid #C0C0C0;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-wind me-3 mt-1" style="color: #808080; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #606060;">Maîtrise du galop</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Partir au galop</li>
                                                    <li>Conserver le galop</li>
                                                    <li>Repasser au trot</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Encadré récapitulatif -->
                        <div class="mb-5 p-4 rounded" style="background: linear-gradient(135deg, #F8F8F8 0%, #E0E0E0 100%); border: 2px solid #C0C0C0;">
                            <h4 class="mb-3" style="color: #606060; font-family: var(--accent-font);">
                                <i class="fa-solid fa-medal me-2"></i>En résumé : Le Galop® d'Argent
                            </h4>
                            <p class="mb-2" style="color: var(--text-color);">
                                <strong>Le Galop® d'Argent</strong> marque une étape importante dans l'apprentissage équestre. Le cavalier :
                            </p>
                            <ul class="mb-0" style="color: var(--text-color);">
                                <li>Gagne en autonomie dans les soins et en selle</li>
                                <li>Développe sa capacité d'observation et d'adaptation</li>
                                <li>Approfondit ses connaissances sur le comportement et l'anatomie du poney</li>
                                <li>Maîtrise les trois allures et commence à travailler la précision</li>
                            </ul>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('galops.poney.galop-bronze') }}" class="text-decoration-none" style="color: #CD7F32;">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Galop® de Bronze
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galops.poney.galop-or') }}" class="text-decoration-none" style="color: #FFD700;">
                                        Galop® d'Or<i class="fa-solid fa-arrow-right ms-2"></i>
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
