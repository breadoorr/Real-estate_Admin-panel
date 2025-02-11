<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['property_id', 'photo_path', 'is_primary'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
