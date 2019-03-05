<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use BladeX;

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
        // @todo Bug - Should register component directories but this doesn't seem to work
        // BladeX::component([
        //     'components.*',
        //     'amp.*',
        //     'page.*'
        // ]);

        // Having to register each component manually - not great!
        BladeX::component('amp.ampBoilerplate');
        BladeX::component('amp.ampScripts');
        BladeX::component('page.pageCss');
        BladeX::component('page.pageFonts');
        BladeX::component('page.pageFooter');
        BladeX::component('page.pageFooterCopyright');
        BladeX::component('page.pageSlitherBanners');
        BladeX::component('components.alert');
        BladeX::prefix('vs');
    }
}
