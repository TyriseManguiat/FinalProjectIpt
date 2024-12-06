<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaryEntry extends Model
{
    use HasFactory;

    protected $table = 'diary_entry'; // Use the correct table name
    protected $fillable = ['username', 'Date', 'Diary']; // Ensure these fields are fillable
}
