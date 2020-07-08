<?php

namespace App\Http\Controllers;

use App\Http\Requests\JournalsRequest;
use App\Http\Resources\JournalsCollection;
use App\Journal;
use App\Journalpolicy;
use App\Member;

class JournalController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')
            ->only(['create', 'getAllJournals', 'update', 'edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = new JournalsCollection(Journal::latest('updated_at')
            ->get());
        return view('journals.guests.index', compact('journals'));
    }

    /**
     * Admin Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllJournals()
    {
        $journals = new JournalsCollection(Journal::latest('updated_at')
            ->get());
        return view('journals.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JournalsRequest $request)
    {
        $journal = auth()->user()
            ->journals()
            ->create($request->validated());

        return $journal->path()
            ->with('You have successfully added a journal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        $members = Member::all();
        $journalpolicy = Journalpolicy::latest()->first();
        return view('journals.guests.show', compact('journal', 'members', 'journalpolicy'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function adminShow(Journal $journal)
    {
        $journal = $journal->load('creator');

        return view('journals.show', compact('journal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        $members = Member::all();
        return view('journals.edit', compact('journal', 'members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Journal $journal, JournalsRequest $request)
    {
        $journal->update($request->validated());
        // dd($update);
        return redirect()->route('journals.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
    }
}
