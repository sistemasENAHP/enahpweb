<!-- <?php

// namespace App\Providers;

// use Illuminate\Auth\Events\Registered;
// // use Illuminate\Events\Notificaciones;
// use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
// use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
// use Illuminate\Support\Facades\Event;
// use App\Events\UltimoRegistroEvento;
// use App\Listeners\UltimoRegistroListener;
// use App\Events\SoporteEvento;
// use App\Listeners\SoporteListener;
// class EventServiceProvider extends ServiceProvider
// {
//     /**
//      * The event listener mappings for the application.
//      *
//      * @var array<class-string, array<int, class-string>>
//      */
//     protected $listen = [

//        Registered::class => [
//             SendEmailVerificationNotification::class,
//             // Notificaciones::class,
//         ],


//        'App\Events\SoporteEvento' => [
//             'App\Listeners\SoporteListener',
//         ],




//     ];

//     /**
//      * Register any events for your application.
//      *
//      * @return void
//      */
//     public function boot()
//     {
// //           Event::listen(
// //         SoporteEvento::class,
// //        SoporteListener::class,
// //     );

// //           Event::listen(Authenticated::class, function ($user) {
// //     $user->last_login_at = now();
// //     $user->save();
// // });


//     }
// }
