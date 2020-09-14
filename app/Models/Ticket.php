<?php

namespace App\Models;

use App\Http\Requests\TicketFilterRequest;
use Database\Seeders\TicketSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use EloquentBuilder;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'from', 'to', 'user_id', 'train_id'
    ];

     /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
