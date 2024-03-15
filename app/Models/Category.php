<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /* Relazione one-to-many con la tabella categorie*/
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
