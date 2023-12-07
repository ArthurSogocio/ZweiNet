<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiceModels extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'dice_models';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
