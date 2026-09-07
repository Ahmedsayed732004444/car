<?php

namespace App\Providers;

use App\Enums\user\UserRoleEnum;
use App\Events\NotificationBadgeUpdated;
use App\Models\BrandCar;
use App\Models\Category;
use App\Models\CategoryHasBrandField;
use App\Models\City;
use App\Models\CustomField;
use App\Notifications\SendNotification;
use App\Observers\BrandCarObserver;
use App\Observers\CategoryHasBrandFieldObserver;
use App\Observers\CategoryObserver;
use App\Observers\CityObserver;
use App\Observers\CustomFieldObserver;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        City::observe(CityObserver::class);
        BrandCar::observe(BrandCarObserver::class);
        Category::observe(CategoryObserver::class);
        CategoryHasBrandField::observe(CategoryHasBrandFieldObserver::class);
        CustomField::observe(CustomFieldObserver::class);

        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole(UserRoleEnum::Super_Admin->value) ? true : null;
        });

        if ($this->app->environment('production') || env('FORCE_HTTPS', false)) {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        // Whenever a SendNotification is delivered (via ->notify()), also
        // broadcast NotificationBadgeUpdated on the user's private channel
        // so the Flutter app updates in real time instead of relying on
        // polling. This fires automatically for every current and future
        // ->notify(new SendNotification(...)) call in the app — no need
        // to touch each call site individually.
        Event::listen(function (NotificationSent $event) {
            if ($event->notification instanceof SendNotification) {
                NotificationBadgeUpdated::dispatch(
                    $event->notifiable->id,
                    $event->notification->toArray($event->notifiable)['category'] ?? null,
                    []
                );
            }
        });
    }
}