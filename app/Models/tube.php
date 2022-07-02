<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed $capacity
 * @property mixed $qr
 * @property mixed $weight
 * @method static where(string $string)
 * @method static select(string $string, string $string1, string $string2, string $string3)
 */
class tube extends Model
{

    use  SoftDeletes;
    use HasFactory;
}
