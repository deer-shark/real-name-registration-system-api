<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * 啟動任何應用程式服務。
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(function ($query) {
            Log::info($query->sql);
            // $query->bindings
            // $query->time
        });
    }
}
