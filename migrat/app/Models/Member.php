<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Define the table name (optional if it matches the plural of the model name)
    protected $table = 'members'; // Adjust this if your table name differs

    // Specify which fields are mass-assignable
    protected $fillable = [
        'name',
        'email',
        'phone_number', 
        'address', 
        // Add more fields as per your table columns
    ];
}

