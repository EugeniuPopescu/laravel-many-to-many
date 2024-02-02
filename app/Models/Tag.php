<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "link",
    ];

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }
}
