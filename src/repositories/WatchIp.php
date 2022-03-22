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
        return $offer;
    }

    public static function clear($offerId)
    {
        $offer = OfferIpView::where('offer_id',$offerId)->get();
        $offer->update(['views'=>0]);
        return $offer;
    }

    public static function delete($offerId)
    {
        OfferIpView::where('offer_id',$offerId)->delete();
        return true;
    }

    public static function get()
    {
        $topsIp = OfferIpView::orderBy('views')->take(10)->get();
        foreach ($topsIp as $topIp){
            $topIp['offer'] = $topIp->offer;
            $topIp['offer']['model_id'] = $topIp['offer']->model->name;
            $topIp['offer']['manufacture_id']= $topIp['offer']->manufacture->name;
            $topIp['offer']['motor_id']= $topIp['offer']->motor->name;
            $topIp['offer']['body_type_id'] = $topIp['offer']->bodyType->name;
        }
        return $topsIp;
    }

    public static function getForId($offerId)
    {
        return OfferIpView::where('offer_id',$offerId)->get('views');
    }
}
