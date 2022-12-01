<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sprout extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "sprouts";
    protected $fillable = [
        'user_id',
        'title',
        'ingredients',
        'preparation',
        'description',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
