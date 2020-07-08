<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Subscriptionplan;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * attach a feature to a plan.
     *
     * @return \Illuminate\Http\Response
     */
    public function attachPlan(Request $request, $id)
    {
        $plan = Subscriptionplan::findOrFail($id);
        if ($plan->features->contains($request->feature)) {
            return redirect()->back();
        }
        $plan->features()->attach($request->feature);
        return redirect()->back();
    }

    /**
     * attach a feature to a plan.
     *
     * @return \Illuminate\Http\Response
     */
    public function detachPlan($feature, $plan)
    {
        $plan = Subscriptionplan::findOrFail($plan);
        $feature = Feature::findOrFail($feature);
        if ($plan->features->contains($feature)) {
            $plan->features()->detach($feature);
            return redirect()->back();
        }
        return redirect()->back();
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
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
    }
}
