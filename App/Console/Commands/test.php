<?php


namespace App\Console\Commands;

use Lufeijun1234\Console\Command;

class test extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'test';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = '描述';

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {
    echo "test console";
  }



}