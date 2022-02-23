<?php

namespace Puppyter\Tracker\repositories;

use App\Models\OfferIpView;
use App\Models\ViewerIp;

class WatchIp
{
    public static function collect($offerId, $clientIp)
    {
        $offer = OfferIpView::where('offer_id',$offerId)->first();
        if($offer == null){
            $offer = OfferIpView::create(['offer_id'=>$offerId]);
        }
        $userIps = ViewerIp::where('offer_ip_view_id',$offer->id)->get('user_ip')->toArray();

        if ($userIps == null) {
            $userIps[] = ViewerIp::create(['offer_ip_view_id' => $offer->id, "user_ip" => $clientIp])->toArray();
            $offer->increment('views');
        }
        if (array_search($clientIp,$userIps[0]) == false) {
            ViewerIp::create(['offer_ip_view_id' => $offer->id, "user_ip" => $clientIp]);
            $offer->increment('views');
        }
    }

    public static function clear($offerId)
    {
        $offer = OfferIpView::where('offer_id',$offerId)->get();
        $offer->update(['views'=>0]);
    }

    public static function delete($offerId)
    {
        OfferIpView::where('offer_id',$offerId)->delete();
    }

    public static function get()
    {
        return OfferIpView::orderBy('views')->take(10)->get();
    }

    public function getForId($offerId)
    {
        return OfferIpView::where('offer_id',$offerId)->get('views');
    }
}
