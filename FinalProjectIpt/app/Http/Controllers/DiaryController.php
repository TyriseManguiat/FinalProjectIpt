<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaryEntry;

class DiaryController extends Controller
{
    /**
     * Show the diary entries for the authenticated user.
     *
     * @return \Illuminate\View\View
     */
    public function showDiaries()
    {
        // Get the authenticated user's diary entries
        $diaryEntries = DiaryEntry::where('username', auth()->user()->username)->get();

        return view('diaries.display', compact('diaryEntries'));
    }
}
