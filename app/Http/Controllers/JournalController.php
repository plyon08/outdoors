<?php

namespace App\Http\Controllers;

use App\Journal;
use App\User;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journal = Journal::where('user_id', auth()->id())->orderBy('place_name', 'asc')->paginate(20);

        return view('index', compact('journal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'place_name' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $entry = new Journal;

        $entry->user_id = auth()->id();
        $entry->place_name = request('place_name');
        $entry->category = request('category');
        $entry->content = request('content');

        $entry->save();

        session()->flash('message', 'Journal Entry Saved Successfully!');

        return redirect('/journal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        return view('show', compact('journal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        return view('edit', compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        $this->validate(request(), [
            'place_name' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        $journal = Journal::find($journal->id);
        $journal->place_name = request('place_name');
        $journal->category = request('category');
        $journal->content = request('content');

        $journal->save();

        session()->flash('message', 'Journal Entry Updated Successfully!');

        return redirect('/journal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        $journal = Journal::find($journal->id);

        $journal->delete();

        session()->flash('message', 'Journal Entry Deleted Successfully!');

        return redirect('/journal');
    }
}
