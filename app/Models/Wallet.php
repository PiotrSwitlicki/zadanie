<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "wallet";
    protected $fillable = [
        'id',
        'user_id',
        'ballance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
