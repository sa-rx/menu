<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:العروض|اضافة عرض', ['only' => ['index']]);
        $this->middleware('permission:اضافة عرض|تعديل عرض', ['only' => ['create','store']]);
        $this->middleware('permission:تعديل عرض', ['only' => ['edit','update']]);
        $this->middleware('permission:حذف عرض', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::get();
        return view('offer.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
        ]);


        $offer = new Offer();
        $offer->create($request->all());
        return redirect()->to('offers')->with('message','تمت اضافة البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //$offer = Offer::get();
        return view('offer.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('offer.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $request->validate([
            'title'=>'required',
        ]);
        $offer -> update($request->all());
        return redirect()->to('offers')->with('message','تم تعديل البيانات بنجاح'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
          $offer->delete();
          return redirect()->to('offers')->with('message','تم الحذف  بنجاح');

    }
}
