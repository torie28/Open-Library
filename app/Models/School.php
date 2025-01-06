<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    // If the table name is different from the plural of the model name (i.e., 'schools')
    protected $table = 'schools';

    // If you want to specify which fields are fillable
    protected $fillable = ['name', 'religion', 'location']; // Example field
}
