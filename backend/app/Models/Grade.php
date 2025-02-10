<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    protected $table = 'grades';

    // Define the fillable fields
    protected $fillable = [
        'user_id',
        'assignment_id',
        'grade',
        'comments'
    ];

    // Define the relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}
