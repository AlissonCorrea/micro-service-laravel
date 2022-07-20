<?php

namespace App\Observers;

use App\Model\Customer;
use Bschmitt\Amqp\Message;

class CustomerObserver
{
    /**
     * Handle the customer "created" event.
     *
     * @param  App\Model\Customer  $customer
     * @return void
     */
    public function created(Customer $customer)
    {
        $message = new Message($customer->toJson());
        $amqp = new \Bschmitt\Amqp\Amqp();
        $amqp->publish('customer-routing-key', $message , ['queue' => 'customer-queue']);
    }

    /**
     * Handle the customer "updated" event.
     *
     * @param  App\Model\Customer  $customer
     * @return void
     */
    public function updated(Customer $customer)
    {
        //
    }

    /**
     * Handle the customer "deleted" event.
     *
     * @param  App\Model\Customer  $customer
     * @return void
     */
    public function deleted(Customer $customer)
    {
        //
    }

    /**
     * Handle the customer "restored" event.
     *
     * @param  App\Model\Customer  $customer
     * @return void
     */
    public function restored(Customer $customer)
    {
        //
    }

    /**
     * Handle the customer "force deleted" event.
     *
     * @param  App\Model\Customer  $customer
     * @return void
     */
    public function forceDeleted(Customer $customer)
    {
        //
    }
}
