<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class AluminumModel extends Model
{
    protected $table = 'aluminums';
    protected $primaryKey = 'alu_id';
    protected $guarded = [];
}
