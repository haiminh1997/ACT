<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class ConstructModel extends Model
{
    protected $table = 'constructs';
    protected $primaryKey = 'const_id';
    protected $guarded = [];
}
