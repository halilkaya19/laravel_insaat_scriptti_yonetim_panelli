<?php

namespace App\Providers;

use App\Models\genelayarlar;
use App\Models\hizmetlerimiz;
use App\Models\iletisim;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        $genelayar = genelayarlar::where("id","1")->first();
        $iletisim = iletisim::where("id","1")->first();
        $hizmetsayfaları = hizmetlerimiz::all();
        View()->share('genelayar',$genelayar);
        View()->share('iletisim',$iletisim);
        View()->share('hizmetlistesi',$hizmetsayfaları);
    }
}
