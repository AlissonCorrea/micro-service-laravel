<?php

namespace App\Observers;

use App\Model\Transaction;
use Bschmitt\Amqp\Amqp;
use Bschmitt\Amqp\Message;

class TransactionObserver
{
    /**
     * Handle the transaction "created" event.
     *
     * @param App\Model\Transaction  $transaction
     * @return void
     */
    public function created(Transaction $transaction)
    {
        $message = new Message($transaction->toJson());
        $amqp = new \Bschmitt\Amqp\Amqp();
        $amqp->publish('transaction-routing-key', $message , ['queue' => 'transaction-queue']);
    }

    /**
     * Handle the transaction "updated" event.
     *
     * @param  App\Model\Transaction  $transaction
     * @return void
     */
    public function updated(Transaction $transaction)
    {
        //
    }

    /**
     * Handle the transaction "deleted" event.
     *
     * @param  App\Model\Transaction  $transaction
     * @return void
     */
    public function deleted(Transaction $transaction)
    {
        //
    }

    /**
     * Handle the transaction "restored" event.
     *
     * @param  App\Model\Transaction  $transaction
     * @return void
     */
    public function restored(Transaction $transaction)
    {
        //
    }

    /**
     * Handle the transaction "force deleted" event.
     *
     * @param  App\Model\Transaction  $transaction
     * @return void
     */
    public function forceDeleted(Transaction $transaction)
    {
        //
    }
}
