<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OffersList;
use App\Models\OffersListMore;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    public function storeOffer(Request $request)
    {
        Offer::create($request->only('slogan', 'description', 'status', 'created_by'));
        return redirect()->back();
    }

    public function storeOffersList(Request $request)
    {
        OffersList::create($request->only('offers_id', 'header', 'image', 'title', 'description', 'status', 'created_by'));
        return redirect()->back();
    }

    public function updateOfferStatus($id)
    {
        $offer = Offer::find($id);
        $offer->status = !$offer->status;
        $offer->save();

        return redirect()->back();
    }

    public function updateOffersListStatus($id)
    {
        $offerList = OffersList::find($id);
        $offerList->status = !$offerList->status;
        $offerList->save();

        return redirect()->back();
    }

    public function updateOffersListMoreStatus($id)
    {
        $offerListMore = OffersListMore::find($id);
        $offerListMore->status = !$offerListMore->status;
        $offerListMore->save();

        return redirect()->back();
    }
}
