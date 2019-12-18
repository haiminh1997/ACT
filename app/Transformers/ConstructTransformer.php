<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 12/12/2019
 * Time: 11:15 AM
 */

namespace App\Transformers;


use App\Model\Admin\ConstructModel;
use League\Fractal\TransformerAbstract;

class ConstructTransformer extends TransformerAbstract
{
    public function transform(ConstructModel $const) {
        return [
            'const_id' => $const->const_id,
            'const_name' => $const->const_name,
            'created_at' => $const->created_at,
            'updated_at' => $const->updated_at

        ];
    }
}