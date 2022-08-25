<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frizura extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'vreme',
    ];

    public function termin()
    {
        return $this->hasMany(Termin::class);
    }









}
