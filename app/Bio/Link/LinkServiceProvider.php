<?php

namespace Bio\Link;

use Bio\Link\LinkService;
use Bio\Link\LinkRepository;
use Illuminate\Support\ServiceProvider;

class LinkServiceProvider extends ServiceProvider
{
    /**
     * This provider is deferred and should be lazy loaded.
     *
     * @var boolean
     */
   protected $defer = true;

    public function register()
    {
        $this->app->singleton(LinkService::class, function () {
            $service = new LinkService(
                $this->app->make(LinkRepository::class)
            );
            return $service;
        });
    }

    public function provides()
    {
        return [LinkService::class];
    }
}