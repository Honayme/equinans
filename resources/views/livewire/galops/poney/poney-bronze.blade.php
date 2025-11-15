<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Galop® <span>Bronze</span></h1>
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
                            <div class="alert border-0 shadow-sm" style="background: linear-gradient(135deg, #CD7F32 0%, #A0522D 100%); color: white;">
                                <h2 class="mb-3">PONEY DE BRONZE</h2>
                                <p class="lead mb-2">Cycle 1 - Première découverte</p>
                                <p class="mb-0" style="font-size: 0.95rem; opacity: 0.95;">Je découvre le poney et le poney-club</p>
                            </div>
                        </div>

                        <!-- Introduction -->
                        <div class="mb-5 p-4 rounded" style="background-color: var(--secondary-color); border-left: 4px solid #CD7F32;">
                            <h4 class="mb-3" style="color: #8B4513; font-family: var(--accent-font);">
                                <i class="fa-solid fa-baby me-2"></i>La toute première aventure équestre
                            </h4>
                            <p class="mb-0" style="color: var(--text-color); font-size: 1.1rem;">
                                Le Poney de Bronze est le tout premier niveau pour les jeunes enfants. C'est la découverte du poney, du poney-club et des premières sensations à poney dans un cadre ludique et sécurisant.
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
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #CD7F32;">
                                        <i class="fa-solid fa-user-tie me-2" style="color: #CD7F32;"></i>
                                        <span style="color: var(--text-color);">Reconnaître le moniteur et dire son prénom</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #CD7F32;">
                                        <i class="fa-solid fa-hard-hat me-2" style="color: #CD7F32;"></i>
                                        <span style="color: var(--text-color);">Mettre mon casque</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #CD7F32;">
                                        <i class="fa-solid fa-link me-2" style="color: #CD7F32;"></i>
                                        <span style="color: var(--text-color);">Montrer le filet et les rênes</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #CD7F32;">
                                        <i class="fa-solid fa-saddle me-2" style="color: #CD7F32;"></i>
                                        <span style="color: var(--text-color);">Montrer la selle</span>
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
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A0522D;">
                                        <i class="fa-solid fa-brush me-2" style="color: #A0522D;"></i>
                                        <span style="color: var(--text-color);">Brosser le corps</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A0522D;">
                                        <i class="fa-solid fa-broom me-2" style="color: #A0522D;"></i>
                                        <span style="color: var(--text-color);">Brosser la queue</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A0522D;">
                                        <i class="fa-solid fa-box me-2" style="color: #A0522D;"></i>
                                        <span style="color: var(--text-color);">Ranger la brosse</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded h-100" style="background-color: var(--bg-color); border-left: 3px solid #A0522D;">
                                        <i class="fa-solid fa-box-archive me-2" style="color: #A0522D;"></i>
                                        <span style="color: var(--text-color);">Ranger le filet</span>
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
                            <div class="p-4 rounded" style="background-color: var(--bg-color); border-left: 4px solid #8B4513;">
                                <ul class="mb-0" style="color: var(--text-color); font-size: 1.05rem;">
                                    <li class="mb-3">
                                        <i class="fa-solid fa-id-badge me-2" style="color: #8B4513;"></i>
                                        Retenir le nom de mon poney
                                    </li>
                                    <li class="mb-3">
                                        <i class="fa-solid fa-eye me-2" style="color: #8B4513;"></i>
                                        Reconnaître mon poney parmi les autres
                                    </li>
                                    <li class="mb-0">
                                        <i class="fa-solid fa-horse me-2" style="color: #8B4513;"></i>
                                        Montrer les principales parties du corps du poney
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
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #DEB887 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #8B4513; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">1</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Aborder un poney attaché, capter son attention</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #DEB887 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #8B4513; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">2</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Me positionner près d'un poney attaché et le caresser</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF8DC 0%, #DEB887 100%);">
                                        <div class="mb-3">
                                            <span class="badge rounded-circle p-3" style="background-color: white; color: #8B4513; font-size: 1.5rem; width: 60px; height: 60px; display: inline-flex; align-items: center; justify-content: center;">3</span>
                                        </div>
                                        <p class="mb-0" style="color: var(--text-color); font-weight: 500;">Amener le poney en filet sur le terrain avec aide</p>
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
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF5EE 0%, #F5DEB3 100%); border: 2px solid #CD7F32;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-arrow-up me-3 mt-1" style="color: #8B4513; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B4513;">Monter et descendre</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Avec aide</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF5EE 0%, #F5DEB3 100%); border: 2px solid #CD7F32;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-chair me-3 mt-1" style="color: #8B4513; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B4513;">Position</h5>
                                                <p class="mb-0" style="color: var(--text-color);">Être assis au pas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF5EE 0%, #F5DEB3 100%); border: 2px solid #CD7F32;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-hand me-3 mt-1" style="color: #8B4513; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B4513;">Contact avec le poney</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Caresser</li>
                                                    <li>Me coucher sur l'encolure</li>
                                                    <li>Toucher les oreilles, toucher la queue</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-4 rounded h-100" style="background: linear-gradient(135deg, #FFF5EE 0%, #F5DEB3 100%); border: 2px solid #CD7F32;">
                                        <div class="d-flex align-items-start">
                                            <i class="fa-solid fa-grip-lines me-3 mt-1" style="color: #8B4513; font-size: 1.5rem;"></i>
                                            <div>
                                                <h5 class="mb-2" style="color: #8B4513;">Découverte des rênes</h5>
                                                <ul class="mb-0" style="color: var(--text-color);">
                                                    <li>Prendre les rênes</li>
                                                    <li>Lâcher les rênes et lever les mains</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Encadré récapitulatif -->
                        <div class="mb-5 p-4 rounded" style="background: linear-gradient(135deg, #FFF8DC 0%, #F5DEB3 100%); border: 2px solid #CD7F32;">
                            <h4 class="mb-3" style="color: #8B4513; font-family: var(--accent-font);">
                                <i class="fa-solid fa-medal me-2"></i>En résumé : Le Poney de Bronze
                            </h4>
                            <p class="mb-2" style="color: var(--text-color);">
                                <strong>Le Poney de Bronze</strong> est le tout premier niveau pour les jeunes enfants. Il permet de :
                            </p>
                            <ul class="mb-0" style="color: var(--text-color);">
                                <li>Découvrir le poney-club et créer un lien avec son moniteur</li>
                                <li>Apprendre à approcher et caresser le poney en sécurité</li>
                                <li>Faire connaissance avec le matériel de base (selle, filet, casque)</li>
                                <li>Prendre confiance à poney à travers des exercices ludiques</li>
                                <li>Participer aux premiers soins du poney (brossage)</li>
                            </ul>
                        </div>

                        <!-- Navigation -->
                        <div class="pt-4 mt-5" style="border-top: 1px solid var(--divider-color);">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{ route('services') }}" class="text-decoration-none" style="color: var(--primary-color);">
                                        <i class="fa-solid fa-arrow-left me-2"></i>Retour aux services
                                    </a>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="{{ route('galops.poney.poney-argent') }}" class="text-decoration-none" style="color: #C0C0C0;">
                                        Poney d'Argent<i class="fa-solid fa-arrow-right ms-2"></i>
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
