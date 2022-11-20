<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Law extends Model
{
    use HasFactory;
    protected $table = "laws";
    protected $fillable=[
        "name",
        "file",
        "num_laws",
        "date",
    ];
}
