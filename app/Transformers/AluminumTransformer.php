<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 12/18/2019
 * Time: 9:16 AM
 */

namespace App\Transformers;


use App\Model\Admin\AluminumModel;
use League\Fractal\TransformerAbstract;

class AluminumTransformer extends TransformerAbstract
{
    public function transform(AluminumModel $alu){
        return [
            'alu_id' => $alu->alu_id,
            'alu_name'=> $alu->alu_name,
            'alu_image'=> $alu->alu_image,
            'created_at' => $alu->created_at,
            'updated_at' => $alu->updated_at
        ];
    }
}