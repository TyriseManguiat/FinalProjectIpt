<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    // Show the start page
  // In StartController.php

public function showStartPage()
{
    return view('start.index'); // Return the Blade view for the start page
}
}