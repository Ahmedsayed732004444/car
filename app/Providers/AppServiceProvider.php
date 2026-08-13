<?php

namespace App\Providers;

use App\Enums\user\UserRoleEnum;
use App\Models\BrandCar;
use App\Models\Category;
use App\Models\CategoryHasBrandField;
use App\Models\City;
use App\Models\CustomField;
use App\Observers\BrandCarObserver;
use App\Observers\CategoryHasBrandFieldObserver;
use App\Observers\CategoryObserver;
use App\Observers\CityObserver;
use App\Observers\CustomFieldObserver;
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
    }
}
