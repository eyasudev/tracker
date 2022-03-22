<?php

namespace Puppyter\Tracker\Controllers;

use App\Services\OfferService;
use Illuminate\Http\Request;
use Puppyter\Tracker\repositories\Watch;
use Puppyter\Tracker\repositories\WatchIp;

class TrackerController extends \App\Http\Controllers\Controller
{
    public function show()
    {
        $tops = Watch::get();
        $topsIp = WatchIp::get();
        return response()->view('puppyter::tracker',['tops'=>$tops->toArray(),'topsIp'=>$topsIp->toArray()]);
    }
}
