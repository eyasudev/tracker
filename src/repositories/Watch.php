<?php

namespace Puppyter\Tracker\repositories;

use App\Models\OfferView;

class Watch
{
    public static function collect($offerId)
    {
        $offer = OfferView::where('offer_id',$offerId)->first();
        if ($offer == null)
        {
            $offer = OfferView::create(['offer_id'=>$offerId]);
        }
        $offer->increment('views',1);
        return $offer;
    }

    public static function clear($offerId)
    {
        $offer = OfferView::where('offer_id',$offerId)->get();
        $offer->update(['count'=>0]);
        return $offer;
    }

    public static function delete($offerId)
    {
        OfferView::where('offer_id',$offerId)->delete();
        return true;
    }

    public static function get()
    {
        $tops = OfferView::orderBy('views')->limit(10)->get();
        foreach ($tops as $top) {
            $top['offer'] = $top->offer;
            $top['offer']['model_id'] = $top['offer']->model->name;
            $top['offer']['manufacture_id']= $top['offer']->manufacture->name;
            $top['offer']['motor_id']= $top['offer']->motor->name;
            $top['offer']['body_type_id'] = $top['offer']->bodyType->name;
        }
        return $tops;

    }

    public static function getForId($offerId)
    {
        return OfferView::where('offer_id',$offerId)->get('views');
    }
}
