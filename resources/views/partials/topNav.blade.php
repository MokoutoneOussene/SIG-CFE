<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white"
    id="sidenavAccordion">
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i
            data-feather="menu"></i></button>
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="">SIG - CFE</a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0"><i
            data-feather="grid"></i></button>
    <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="#" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">NAVIGATION RAPIDE
    </a>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel"
        style="height: 36vh;">
        <div class="offcanvas-body">
            <div class="d-flex">
                <div class="col-lg-2 col-md-12">
                    <img src="{{ asset('images/auth-bg.jpg') }}" alt="logo" class="img-fluid" style="width: 80%"/>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_famille.index') }}">Familles</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_base_taxable.index') }}">Bases taxable</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_categorie.index') }}">Catégories</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_contribuable.index') }}">Contribuables</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_fornisseur.index') }}">Fournisseurs</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_source_prelevement.index') }}">Source de prelèvement</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_ordre_recette.index') }}">Créer ordre de recette</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_facture_fournisseur.index') }}">Créer facture fournisseur</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('reglement_recette') }}">Règlement recette</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('reglement_facture') }}">Règlement fact fourn</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="#" data-bs-toggle="modal" data-bs-target="#etatBudgetDepense">Etat budgets dépenses</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="#" data-bs-toggle="modal" data-bs-target="#etatBudgetRecette">Etat budgets recettes</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('depense_recette') }}">Etat Recettes - Dépenses</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_reglement_fournisseur.index') }}">Règlements facture fournisseur</a>
                            </div>
                            <div class="shadow mb-2">
                                <a class="nav-link text-dark" href="{{ route('module_reglement.index') }}">Règlements ordre de recette</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="navbar-nav align-items-center ms-auto">
        <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><img class="img-fluid" src="{{ asset('images/auth-bg.jpg') }}" /></a>
            <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up"
                aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="{{ asset('images/auth-bg.jpg') }}" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}
                        </div>
                        <div class="dropdown-user-details-email">
                            <a href="javascript:;">{{ Auth::user()->role }}</a>
                        </div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('module_utilisateur.show', [Auth::user()->id]) }}">
                    <div class="dropdown-item-icon"><i data-feather="user"></i></div>Profil
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                        {{ __('Se déconnecter') }}
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
