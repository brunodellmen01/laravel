<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'lastname',
        'company_id',
        'email',
        'phone',
    ];

    public function company()
    {
        return $this->belongsTo(\App\Models\Companies::class, 'company_id')->withTrashed();
    }
}
