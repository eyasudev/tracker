<?php

namespace App\Http\Repositories;

use App\Models\OfferIpView;
use App\Models\ViewerIp;

class OfferIpViewRepository
{
    public function collect($offerId, $clientIp)
    {
        $offer = OfferIpView::where('offer_id',$offerId)->firstOrCreate(['offer_id',$offerId]);
        $userIps = $offer->viewerIps->user_ip;
        if (array_search($clientIp,$userIps) == false) {
            ViewerIp::create(['offer_id' => $offerId, "user_ip" => $clientIp]);
            $offer->increment('views',1);
        }
    }

    public function clear($offerId)
    {
        $offer = OfferIpView::where('offer_id',$offerId)->get();
        $offer->update(['views'=>0]);
    }

    public function delete($offerId)
    {
        OfferIpView::where('offer_id',$offerId)->delete();
    }

    public function get($offerId)
    {
        return OfferIpView::where("offer_id",$offerId)->get('views');
    }
}
