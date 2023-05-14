<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    // columns id;title;done
    protected $fillable = ['title', 'done'];
    protected $table = 'todo';
}
