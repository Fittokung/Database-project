<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaryEntry;
use Illuminate\Support\Facades\Auth;
use App\Models\Emotion;


class DiaryEntryController extends Controller
{
    public function index()
    {
        $diaryEntries = Auth::user()->diaryEntries()->get();
        return view('diary.index', compact('diaryEntries'));
    }
    public function create()
    {
        return view('diary.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'content' => 'required|string',
        ]);
        Auth::user()->diaryEntries()->create($validated);
        return redirect()->route('diary.index')->with(
            'status',
            'Diary entry added successfully!'
        );
    }
    public function show(string $id)
    {
        $diaryEntry = Auth::user()->diaryEntries()->findOrFail($id);
        return view('diary.show', compact('diaryEntry'));
    }
    public function edit(string $id)
    {
        $diaryEntry = Auth::user()->diaryEntries()->findOrFail($id);
        return view('diary.edit', compact('diaryEntry'));
    }
    public function update(Request $request, string $id)
    {
        // Retrieve the diary entry by its ID
        $diaryEntry = DiaryEntry::findOrFail($id);
        $validated = $request->validate([
            'date' => 'required|date',
            'content' => 'required|string',
        ]);
        $diaryEntry->update($validated);
        return redirect()->route('diary.index')->with(
            'status',
            'Diary entry updated successfully!'
        );
    }
    public function destroy(string $id)
    {
        // Retrieve the diary entry by its ID
        $diaryEntry = DiaryEntry::findOrFail($id);
        // Delete the retrieved diary entry
        $diaryEntry->delete();
        // Redirect back to the diary index with a success message
        return redirect()->route('diary.index')->with(
            'status',
            'Diary entry deleted successfully!'
        );
    }

}
