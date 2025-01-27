<?php

namespace Agenciafmd\SocialMeta\Providers;

use Agenciafmd\SocialMeta\Http\Components\SocialMeta;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadBladeComponents();

        $this->loadBladeDirectives();

        $this->loadBladeComposers();

        $this->loadViews();
    }

    public function register()
    {
        //
    }

    protected function loadBladeComponents()
    {
        Blade::component('social-meta', SocialMeta::class);
    }

    protected function loadBladeComposers()
    {
        //
    }

    protected function loadBladeDirectives()
    {
        //
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'agenciafmd/social-meta');
    }
}
