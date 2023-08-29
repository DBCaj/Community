<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class DisableInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:deactivate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Disable inactive users.';

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
        Log::info('users:deactivate command is now running');
        $inactiveThreshold = Carbon::now()->subMonth();

        User::where('status', 1)
        ->where('last_activity', '<', $inactiveThreshold)
        ->update([
            'status' => 0,
        ]);

        $this->info('Inactive users has been inactivated');
        
        return 0;
    }
}
