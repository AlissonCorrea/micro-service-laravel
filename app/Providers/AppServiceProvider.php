<?php

namespace App\Providers;

use App\Model\Customer;
use App\Model\Transaction;
use App\Observers\CustomerObserver;
use App\Observers\TransactionObserver;
use Illuminate\Support\ServiceProvider;

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
        Transaction::observe(TransactionObserver::class);
        Customer::observe(CustomerObserver::class);
    }
}
