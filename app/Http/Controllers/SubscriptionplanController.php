<?php

namespace App\Http\Controllers;

use App\Subscriptionplan;
use App\Feature;
use Illuminate\Http\Request;

class SubscriptionplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptionplans = Subscriptionplan::all();
        return view('subscriptionplans.index', compact('subscriptionplans'));
    }

    /**
     * Display a listing of the resource on the admin panel
     *
     * @return \Illuminate\Http\Response
     */
    public function getallPlans()
    {
        $subscriptionplans = Subscriptionplan::all();
        $features = Feature::all();
        return view('subscriptionplans.admin.index', compact('subscriptionplans', 'features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscriptionplan  $subscriptionplan
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriptionplan $subscriptionplan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscriptionplan  $subscriptionplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriptionplan $subscriptionplan)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscriptionplan  $subscriptionplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriptionplan $subscriptionplan)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriptionplan  $subscriptionplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriptionplan $subscriptionplan)
    {
    }
}
