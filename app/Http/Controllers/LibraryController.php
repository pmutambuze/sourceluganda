<?php

namespace App\Http\Controllers;

use App\Library;
use App\Category;
use App\Http\Requests\LibraryRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = Library::all()->load('category');

        return view('library.index', compact('library'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $library = Library::all()->load(['category', 'owner']);

        return view('library.admin.index', compact('library'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('library.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LibraryRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('document_url')->store('library');

        $data['document_url'] = $file;

        Library::create($data);

        return route('library.index')->with('You have successfully added content');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Library  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $library = Library::findOrFail($id)->load(['owner', 'category']);

        $categories = Category::all();

        return view('library.show', compact('library', 'categories'));
    }


    /**
     * approve the publish request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $library = Library::findOrFail($id);

        request('approved') ? $library->approve() : $library->disapprove();

        return redirect()->back()->with('You have successfully approved the library content');
    }

     /**
     * download a document from file storage
     * @param  Project $project
     * @param    $id
     * @return
     */
    public function download($id)
    {
        $library = Library::findOrFail($id);

        if($library->library_url == null){
            return redirect()->back()->with('No attachment available for this content.Contact the owner to upload it');
        }

        return Storage::download($library->library_url);
    }

     /**
     * publish the library content
     * @param  Project $project
     * @param    $id
     * @return
     */
    public function publish($id)
    {
        $library = Library::findOrFail($id);

        if($library->approved == false){
            return redirect()->back()->with('You must publish the Content first before publishing it.');
        }

        $library->update([
            'status' => 'published'
        ]);

        return redirect()->back()->with('You have successfully published the library content');
    }

    /**
     * view/display document in the users browser
     * @param  Project $project
     * @param    $id
     * @return
     */
    public function view($id)
    {
        $library = Library::findOrFail($id);

        if($library->library_url == null){
            return redirect()->back()->with('No attachment available for this content.Contact the owner to upload it');
        }

        return response()->file('storage/' . $library->library_url);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Library  $id
     * @return \Illuminate\Http\Response
     */
    public function adminshow($id)
    {
        $library = Library::findOrFail($id)->load(['owner', 'category']);

        $categories = Category::all();

        return view('library.admin.show', compact('library', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $library = Library::findOrFail($id);

        $categories = Category::all();

        return view('library.edit', compact('library','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(LibraryRequest $request, $id)
    {

        $library = Library::findOrFail($id);

        $this->authorize('update', $library);

        $library->update($request->validated());

        return route('library.index')->with('You have updated content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $library = Library::findOrFail($id);

        $this->authorize('delete', $library);

        $library->delete();

        return route('library.index')->with('You have deleted content');
    }
}
