<?php

namespace App\Listeners;

use App\Events\CreateOrderEvent;
use App\Models\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateInvoiceListener
{
    /**
     * Create the event listener.
     */
    public function __construct(){}

    /**
     * Handle the event.
     */
    public function handle(CreateOrderEvent $event): void
    {
        Invoice::create([
            'amount' => $event->order->amount,
            'order_id' => $event->order->id
        ]);
    }
}
