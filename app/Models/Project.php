<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $fillable=[
        "name",
        "target_group",
        "budget",
        "duration_start",
        "duration_end",
        "donor",
        "partner",
        "goals",
        "idea"
    ];

}
