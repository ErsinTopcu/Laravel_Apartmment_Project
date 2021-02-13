<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    #one to Many (Inverse) /Belongs to
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
