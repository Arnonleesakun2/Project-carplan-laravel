<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;




class Prefixs extends Model
{
    use HasFactory;
    public function employees(): HasMany
    {
        return $this->HasMany(Employees::class,'prefix_id');
    }
}
