<?php

namespace App\Models;

<<<<<<< HEAD
use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{ 
    use HasFactory;
    protected $fillable = [
        'message',
    ];
        protected $dispatchesEvents = [
            'created' => ChirpCreated::class,
        ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //
   
=======
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    //
>>>>>>> 6bde659 (Initial commit)
}
