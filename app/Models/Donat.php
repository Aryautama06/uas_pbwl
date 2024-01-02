<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donat extends Model
{
    use HasFactory;

    protected $table = "donat";

    protected $primaryKey = "id";

    protected $guarded = [];

    
}
