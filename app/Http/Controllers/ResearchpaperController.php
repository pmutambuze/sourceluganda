<?php

namespace App\Http\Controllers;

use App\Researchpaper;
use App\Journal;
use Illuminate\Http\Request;
use App\Http\Requests\ResearchPaperRequest;

class ResearchpaperController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $journals = Journal::all();
        return view('researchpapers.create', compact('journals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResearchpaperRequest $request)
    {
        Researchpaper::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Researchpaper  $researchpaper
     * @return \Illuminate\Http\Response
     */
    public function show(Researchpaper $researchpaper)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Researchpaper  $researchpaper
     * @return \Illuminate\Http\Response
     */
    public function edit(Researchpaper $researchpaper)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Researchpaper  $researchpaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Researchpaper $researchpaper)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Researchpaper  $researchpaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Researchpaper $researchpaper)
    {
    }
}
