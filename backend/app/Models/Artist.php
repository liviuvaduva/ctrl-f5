<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany
     */
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
