<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.facility_name' => 'required|string|max:50',
            // 'post.good' => 'required|string|max:5',
            'post.temperature' => 'required|string|max:100',
            'post.outside_air' => 'required|string|max:100',
            'post.meal' => 'required|string|max:100',
            'post.other' => 'required|string|max:200',
        ];
    }
}
