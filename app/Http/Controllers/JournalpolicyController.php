<?php

namespace App\Http\Controllers;

use App\Journalpolicy;
use App\Journal;
use Illuminate\Http\Request;

class JournalpolicyController extends Controller
{
    /**
     * Show the form for creating the layout of the journal.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function createLayout()
    {
        $journalpolicy = Journalpolicy::latest()->first();
        return view('journals.journalpolicies.layout.create_layout', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the layout of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editLayout(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.layout.edit_layout', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the submission paper of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editPapersubmission(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.submission', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the publication paper of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editPaperpublication(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.publication', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the payment policy of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editPaymentpolicy(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.payment', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the guidelines of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editGuidelines(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.guidelines', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the payment policy of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editPlagiarismpolicy(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.plagiarism', compact('journalpolicy'));
    }

    /**
     * Show the form for editing the academic misconduct policy of the journal.
     *
     * @param  \App\Journal  $journalpolicy
     * @return \Illuminate\Http\Response
     */
    public function editAcademicmisconduct(Journalpolicy $journalpolicy)
    {
        return view('journals.journalpolicies.misconduct', compact('journalpolicy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function storeLayout()
    {
        $journalpolicy = Journalpolicy::create(request()->validate([
            'layout' => 'required',
        ]));
        return redirect()->route('journals.layout.edit', $journalpolicy->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updateLayout(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'layout' => 'required',
        ]));
        return redirect()->back();
    }

    /**
     * Update the spaper submission in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updatePaperSubmission(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'submission' => 'required',
        ]));

        return redirect()->back();
    }

    /**
     * Update the spaper submission in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updatePaperpublication(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'paperpublication' => 'required',
        ]));

        return redirect()->back();
    }

    /**
     * Update the spaper submission in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updatePaymentpolicy(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'payment_policy' => 'required',
        ]));

        return redirect()->back();
    }

    /**
     * Update the spaper submission in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updateGuidelines(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'guidelines' => 'required',
        ]));

        return redirect()->back();
    }

    /**
     * Update the spaper submission in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updatePlagiarismpolicy(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'plagiarism' => 'required',
        ]));

        return redirect()->back();
    }

    /**
     * Update the misconduct in storage.
     *
     * @param  \Illuminate\Http\Request  $journalpolicy
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function updateAcademicmisconduct(Journalpolicy $journalpolicy)
    {
        $journalpolicy->update(request()->validate([
            'academic_misconduct' => 'required',
        ]));

        return redirect()->back();
    }
}
