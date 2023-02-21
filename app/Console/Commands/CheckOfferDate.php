<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CheckOfferDate extends Command
{
  
    protected $signature = 'check:offer';

   
    protected $description = 'This command check the offer date . If the offer date was expire , will delete it';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $offer = DB::table('offers')->where('end_date','<',Carbon::Today())->get()->first();
        DB::table('product_offer')->where('offer_id' , $offer->id)->delete();
        DB::table('offers')->where('id' , $offer->id)->delete();
        $this->info('Cron job Successfully!');
    }
}