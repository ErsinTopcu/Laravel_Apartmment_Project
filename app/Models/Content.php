<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $appends = [
        'parent',
    ];

    #one to Many (Inverse) /Belongs to
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    #One to MAny Inverse
    public function parent()
    {
        return $this->belongsTo(Menu::class,'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class,'parent_id');
    }
}
