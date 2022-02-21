<?php

namespace Puppyter\Tracker\repositories;

use App\Models\OfferIpView;
use App\Models\ViewerIp;

class WatchIp
{
    public function collect($offerId, $clientIp)
    {
        $offer = OfferIpView::where('offer_id',$offerId)->first();
        if($offer == null){
            $offer = OfferIpView::create(['offer_id'=>$offerId]);
        }
        $userIps = ViewerIp::where('offer_ip_view_id',$offer->id)->get('user_ip')->toArray();

        if ($userIps == null) {
            $userIps[] = ViewerIp::create(['offer_ip_view_id' => $offer->id, "user_ip" => $clientIp])->toArray();
        }
        if (array_search($clientIp,$userIps[0]) == false) {
            ViewerIp::create(['offer_ip_view_id' => $offer->id, "user_ip" => $clientIp]);
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
