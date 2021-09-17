<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    protected $fillable = [
        'post_id',
        'post_key',
        'user_id',
        'user_key',
        'title',
        'description',
        'category_key',
        'post_type',
        'price',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
        'like_count',
        'share_count',
        'download',
        'is_sold',
        'purchase_user_key',
        'sold_datetime',
        'post_amount_received',
        'status',
        'bank_name',
        'account_name',
        'account_number',
        'ifsc_code',
        'created_at',
    ];
}
