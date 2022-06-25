<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        'name',
        'slug'
    ];

    public static function search() 
    {
        return empty($search)
        ? static::query()
        : static::query()->where('id', 'like', '%' . $search . '%')
                         ->orWhere('name', 'like', '%' . $search . '%');
    }
}
