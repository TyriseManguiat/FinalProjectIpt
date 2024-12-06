<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiariesController extends Controller
{
    /**
     * Show the diaries page.
     *
     * @return \Illuminate\View\View
     */
    public function showDiariesPage()
    {
        return view('diaries.diaries'); // This will return the 'diaries.blade.php' view
    }
}
