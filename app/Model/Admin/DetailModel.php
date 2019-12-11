<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class DetailModel extends Model
{
    protected $table = 'detail_doors';
    protected $primaryKey = 'detail_id';
    protected $guarded = [];
}
