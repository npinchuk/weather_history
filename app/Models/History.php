<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder whereDateAt(string $dateAt)
 */
class History extends Model
{
    use HasFactory;

    protected $table = 'history';

    public $timestamps = false;

    protected $fillable = [
        'temp',
        'date_at',
    ];
}
