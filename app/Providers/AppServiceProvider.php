<?php

namespace App\Providers;

use App\Models\ElementFacture;
use App\Models\ElementRecette;
use App\Models\ReglementFacture;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ElementRecette::created(function ($elemnt) {
            $elemnt->update(['montant' => $elemnt->quantite * $elemnt->prix_unitaire]);
        });

        ElementFacture::created(function ($elemnt) {
            $elemnt->update(['montant_total' => $elemnt->quantite * $elemnt->prix_unitaire]);
        });

        ReglementFacture::created(function ($regle) {
            $regle->update(['reste' => $regle->net - $regle->versement]);
        });

        User::created(function ($users) {
            $users->update(['login' => $users->nom. '.' . $users->prenom]);
            $users->update(['password' => Hash::make('password')]);
        });
    }
}
