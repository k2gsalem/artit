<?php

namespace App\Transformers;

use App\Post;
use League\Fractal\TransformerAbstract;

class PostTransformer extends TransformerAbstract
{
    public function transform(Post $model)
    {
        return [
            'post_id' => (int)$model->post_id,
            'post_key' => (string)$model->post_key,
            'user_id' => (int)$model->user_id,
            'user_key' => (string)$model->user_key,
            'title' => (string)$model->title,
            'description' => (string)$model->description,
            'category_key' => (string)$model->category_key,
            'post_type' => (string)$model->post_type,
            'price' => (string)$model->price,
            'image1' => (string)$model->image1,
            'image2' => (string)$model->image2,
            'image3' => (string)$model->image3,
            'image4' => (string)$model->image4,
            'image5' => (string)$model->image5,
            'image6' => (string)$model->image6,
            'image7' => (string)$model->image7,
            'image8' => (string)$model->image8,
            'like_count' => (int)$model->like_count,
            'share_count' => (int)$model->share_count,
            'download' => (int)$model->download,
            'is_sold' => (string)$model->is_sold,
            'purchase_user_key' => (string)$model->purchase_user_key,
            'sold_datetime' => (string)$model->sold_datetime,
            'post_amount_received' => (string)$model->post_amount_received,
            'status' => (string)$model->status,
            'bank_name' => (string)$model->bank_name,
            'account_name' => (string)$model->account_name,
            'account_number' => (string)$model->account_number,
            'ifsc_code' => (string)$model->ifsc_code,
            'created_at' => (string)$model->created_at,
        ];
    }
}
