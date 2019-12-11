<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class DoorModel extends Model
{
    protected $table = 'doors';
    protected $primaryKey = 'door_id';
    protected $guarded = [];
}
