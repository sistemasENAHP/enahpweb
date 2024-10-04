<?php

return [
    App\Providers\AppServiceProvider::class,
    // App\Providers\EventServiceProvider::class,
    App\Providers\BroadcastServiceProvider::class,
    Jenssegers\Agent\ServiceProvider::class,
    Spatie\EloquentSortable\EloquentSortableServiceProvider::class,
    Spatie\Permission\PermissionServiceProvider::class,
     Barryvdh\DomPDF\ServiceProvider::class,
        Barryvdh\Snappy\ServiceProvider::class,
        Maatwebsite\Excel\ExcelServiceProvider::class,
        Pusher\Beams\Laravel\PusherBeamsServiceProvider::class,
];
