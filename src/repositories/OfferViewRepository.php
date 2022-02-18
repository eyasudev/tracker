<?php

namespace App\Http\Repositories;

use App\Models\OfferView;

class OfferViewRepository
{
    public function collect($offerId)
    {
        $offer = OfferView::where('offer_id',$offerId)->firstOrCreate(['offer_id'=>$offerId]);
        $offer->increment('views',1);
    }

    public function clear($offerId)
    {
        $offer = OfferView::where('offer_id',$offerId)->getOrCreate();
        $offer->update(['count'=>0]);
    }

    public function delete($offerId)
    {
        OfferView::where('offer_id',$offerId)->delete();
    }

    public function get($offerId)
    {
        return OfferView::where('offer_id',$offerId)->get('views');
    }
}
