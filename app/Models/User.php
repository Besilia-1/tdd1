<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
>>>>>>> d8cfa6857abfc0fda17adff471c324b51e52af10
=======
>>>>>>> 6bde659 (Initial commit)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> d8cfa6857abfc0fda17adff471c324b51e52af10
=======
     * @var list<string>
>>>>>>> 6bde659 (Initial commit)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> d8cfa6857abfc0fda17adff471c324b51e52af10
=======
     * @var list<string>
>>>>>>> 6bde659 (Initial commit)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
    public function chirps(): HasMany
    {
        return $this->hasMany(Chirp::class);
    }
=======
>>>>>>> d8cfa6857abfc0fda17adff471c324b51e52af10
=======
>>>>>>> 6bde659 (Initial commit)
}
