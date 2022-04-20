<?php

namespace App\Console\Commands\Orders;

use App\Models\Admin;
use App\Models\OrderShipping;
use App\Notifications\Dashboard\Orders\ShipmentReminderNotification;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ShipmentReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shipping:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Alert notifications about today shipments.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $shipments = OrderShipping::with('order:id,user_id')
                                    ->pending()
                                    ->whereDate('order_shippings.date', '<=', Carbon::today())
                                    ->get();
        $admin = Admin::first();

        foreach($shipments as $shipment){
            $admin->notify(new ShipmentReminderNotification($shipment));
        }
        return 0;
    }
}
