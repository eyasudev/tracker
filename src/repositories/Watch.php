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
    }

    public static function clear($offerId)
    {
        $offer = OfferView::where('offer_id',$offerId)->get();
        $offer->update(['count'=>0]);
    }

    public static function delete($offerId)
    {
        OfferView::where('offer_id',$offerId)->delete();
    }

    public static function get()
    {
        return OfferView::orderBy('views')->limit(10)->get();
    }
}
