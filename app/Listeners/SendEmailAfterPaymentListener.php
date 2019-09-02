<?php

namespace KGrecu\Listeners;

use KGrecu\Events\OrderCompleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use KGrecu\Mail\OrderCreated;

class SendEmailAfterPaymentListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderCompleted  $event
     * @return void
     */
    public function handle(OrderCompleted $event)
    {
        $order = $event->getOrder();
        \Mail::to($order->user)->send(new OrderCreated($order, $order->user));
    }
}
