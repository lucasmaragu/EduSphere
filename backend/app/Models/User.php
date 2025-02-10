<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; 
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory, Notifiable, HasApiTokens; // Agrega `HasApiTokens` aquí

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user')
                    ->withPivot('role'); // Relación con los cursos
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
