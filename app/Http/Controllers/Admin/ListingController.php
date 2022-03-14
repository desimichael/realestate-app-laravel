<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Helper\Helper;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::paginate(2);

        return view('admin/listings/index', [
            'listings' => $listings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/listings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required'
        ]);

        $listing = new Listing();
        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');



        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}-{$request->bedrooms}-{$request->bathrooms}-{$request->squarefootage}");
        $listing->save();


        
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit")->with('success', 'Successfully Created New Listing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $slug, $id)
    {
        $listing = Listing::where([
            'id' => $id,
            'slug' => $slug,
            ])->first();
        
        return view('admin/listings/edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, $id)
    {
         request()->validate([
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'required'
        ]);

        $listing = Listing::where([
            'id' => $id,
            'slug' => $slug,
            ])->first();
        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->bedrooms = $request->get('bedrooms');
        $listing->bathrooms = $request->get('bathrooms');
        $listing->squarefootage = $request->get('squarefootage');



        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}-{$request->bedrooms}-{$request->bathrooms}-{$request->squarefootage}");
        $listing->save();


        
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit")->with('success', 'Successfully Updated Listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
        $listing = Listing::find($id);
        $listing->delete();

        return redirect("/admin/listings")->with('success', 'Successfully Deleted Listing');
    }
}