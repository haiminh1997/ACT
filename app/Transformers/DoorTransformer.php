<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 12/18/2019
 * Time: 9:16 AM
 */

namespace App\Transformers;


use App\Model\Admin\DoorModel;
use League\Fractal\TransformerAbstract;

class DoorTransformer extends TransformerAbstract
{
  public function transform(DoorModel $door){
      return [
          'door_id' => $door->door_id,
          'door_name' => $door->door_name,
          'door_image' =>$door->door_image,
          'created_at' => $door->created_at,
          'updated_at' => $door->updated_at
      ];
  }

}