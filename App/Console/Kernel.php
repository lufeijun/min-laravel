<?php
namespace App\Console;

use Lufeijun1234\Console\Scheduling\Schedule;
use Lufeijun1234\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

  protected function commands()
  {
    $this->load(__DIR__.'/Commands');
//
//    require base_path('routes/console.php');
  }
}
