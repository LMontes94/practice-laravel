<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class CreateOrderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a new random order';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Order::create([
            'user_id' => 10,
            'amount' => 25
        ]);
        return Command::SUCCESS;
    }
}
