<?php

namespace App\Providers;

use App\Services\Shiftbase;
use Illuminate\Support\ServiceProvider;

class ShiftbaseProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            \App\Interfaces\Shiftbase::class,
            fn (): Shiftbase => new Shiftbase(config('services.shiftbase.token'), config('services.shiftbase.base_url'))
        );
    }

    public function boot(): void
    {
        //
    }
}
