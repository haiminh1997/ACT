<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 12/12/2019
 * Time: 4:24 PM
 */

namespace App\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user) {
        return [
            'user' => $user->user,
            'user_name' => $user->user_name,
            'user_password' => $user->user_password,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at

        ];
    }
}