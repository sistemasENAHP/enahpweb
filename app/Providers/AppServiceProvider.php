<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Orders\Events\PodcastProcessed;
use App\Domain\Orders\Listeners\SendPodcastNotification;
use Illuminate\Support\Facades\Event;
use App\Events\SoporteEvento;
use App\Events\NotificacionesSistema;
use App\Listeners\SoporteListener;
use App\Listeners\NotificacionesSistemaListener;
use App\Events\NotificacionUsuario;
use App\Listeners\NotificacionUsuarioListener;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
           SoporteEvento::class,
            SoporteListener::class,
            NotificacionesSistema::class,
            NotificacionesSistemaListener::class,
            NotificacionUsuario::class,
            NotificacionUsuarioListener::class

        );
    }
}
