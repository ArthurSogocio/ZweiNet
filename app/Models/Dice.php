<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dice extends Model {
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'dice';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
