<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerModels extends Model
{
    use HasFactory;
    protected $table = "players";
    protected $fillable = [
        'name',
    ];
}
