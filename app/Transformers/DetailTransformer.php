<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 12/18/2019
 * Time: 9:17 AM
 */

namespace App\Transformers;


use App\Model\Admin\DetailModel;
use League\Fractal\TransformerAbstract;

class DetailTransformer extends TransformerAbstract
{
    public function transform(DetailModel $detail){
       return [
           'detail_id'=> $detail->detail_id,
           'nameCustomer'=> $detail->nameCustomer,
           'symbol_door'=> $detail->symbol_door,
           'image'=> $detail->image,
           'width'=> $detail->width,
           'height'=> $detail->height,
           'H1'=> $detail->H1,
           'HCC'=> $detail->HCC,
           'type_glass'=> $detail->type_glass,
           'count'=> $detail->count,
           'price_glass'=> $detail->price_glass,
           'price_alu'=> $detail->price_alu,
           'created_at' => $detail->created_at,
           'updated_at' => $detail->updated_at
       ];
    }

}