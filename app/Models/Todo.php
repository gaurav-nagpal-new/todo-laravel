<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Eloquent assumes table is Todos - plural of the name of the model
class Todo extends Model
{
    use HasFactory;
}
