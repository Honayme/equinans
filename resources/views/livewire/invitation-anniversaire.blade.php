<div>
    <!-- Page Header Start -->
    <div class="page-header bg-section parallaxie" style="background-image: url('{{ asset('storage/hero-section/background-equinans.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Invitation <span>Anniversaire</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invitation Anniversaire</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Form Section Start -->
    <div class="contact-us-form" style="margin-top: 4rem; margin-bottom: 4rem;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">Formulaire d'invitation</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Nous sommes ravis de l'<span>accueillir</span></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Instructions Start -->
                    <div class="alert alert-info wow fadeInUp mb-5" role="alert">
                        <h5 class="mb-3"><i class="fa-solid fa-circle-info me-2"></i>Voici les 2 étapes à suivre :</h5>
                        <ol class="mb-0">
                            <li class="mb-2"><strong>1°)</strong> Confirmer sa venue aux parents de son ami(e) et connaître l'heure de rendez-vous. (Le n° de téléphone des parents se trouve sur le carton d'invitation)</li>
                            <li><strong>2°)</strong> Compléter la fiche de renseignements ci-dessous.</li>
                        </ol>
                        <p class="text-danger mt-3 mb-0"><strong>Attention :</strong> Nous ne pourrons pas accueillir votre enfant si cette fiche n'est pas remplie. Cette fiche n'est pas envoyée aux parents, vous devez confirmer votre venue !</p>
                    </div>
                    <!-- Instructions End -->
                </div>

                <div class="col-lg-10">
                    @if($successMessage)
                        <div class="alert alert-success alert-dismissible fade show wow fadeInUp" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i>{{ $successMessage }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Contact Form Start -->
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.2s">
                        <form wire:submit.prevent="submit">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="nom" class="form-label">Nom *</label>
                                        <input type="text"
                                               class="form-control @error('nom') is-invalid @enderror"
                                               id="nom"
                                               wire:model="nom"
                                               placeholder="Nom de l'enfant">
                                        @error('nom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="prenom" class="form-label">Prénom *</label>
                                        <input type="text"
                                               class="form-control @error('prenom') is-invalid @enderror"
                                               id="prenom"
                                               wire:model="prenom"
                                               placeholder="Prénom de l'enfant">
                                        @error('prenom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group mb-4">
                                        <label for="age" class="form-label">Âge *</label>
                                        <input type="number"
                                               class="form-control @error('age') is-invalid @enderror"
                                               id="age"
                                               wire:model="age"
                                               placeholder="Âge"
                                               min="3"
                                               max="18">
                                        @error('age')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group mb-4">
                                        <label for="email" class="form-label">Adresse email *</label>
                                        <input type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               id="email"
                                               wire:model="email"
                                               placeholder="votre.email@exemple.com">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="telephone" class="form-label">Téléphone *</label>
                                        <input type="tel"
                                               class="form-control @error('telephone') is-invalid @enderror"
                                               id="telephone"
                                               wire:model="telephone"
                                               placeholder="06 12 34 56 78">
                                        @error('telephone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="invite_par" class="form-label">Mon enfant est invité à l'anniversaire de *</label>
                                        <input type="text"
                                               class="form-control @error('invite_par') is-invalid @enderror"
                                               id="invite_par"
                                               wire:model="invite_par"
                                               placeholder="Nom et prénom de l'ami(e)">
                                        @error('invite_par')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <div class="form-check">
                                            <input type="checkbox"
                                                   class="form-check-input @error('attestation_sante') is-invalid @enderror"
                                                   id="attestation_sante"
                                                   wire:model="attestation_sante">
                                            <label class="form-check-label" for="attestation_sante">
                                                J'atteste que mon enfant n'a pas de contre-indication à la pratique de l'équitation sur poney *
                                            </label>
                                            @error('attestation_sante')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-4">
                                        <label for="autorisation" class="form-label">Autorisation parentale *</label>
                                        <textarea class="form-control @error('autorisation') is-invalid @enderror"
                                                  id="autorisation"
                                                  wire:model="autorisation"
                                                  rows="3"
                                                  placeholder="Écrivez : 'J'autorise' suivi du nom et prénom de votre enfant à pratiquer une activité à poney au centre équestre Equinans"></textarea>
                                        <small class="form-text text-muted">
                                            Exemple : "J'autorise Sophie Martin à pratiquer une activité à poney au centre équestre Equinans"
                                        </small>
                                        @error('autorisation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group form-group-btn">
                                        <button type="submit" class="btn-default">
                                            <span wire:loading.remove>Valider l'inscription</span>
                                            <span wire:loading>
                                                <i class="fa-solid fa-spinner fa-spin me-2"></i>Envoi en cours...
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Section End -->
</div>
