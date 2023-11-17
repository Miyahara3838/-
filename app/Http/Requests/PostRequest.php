<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.facility_name' => 'required|string|max50',
            'post.good' => 'required|string|max5',
            'post.temperature' => 'required|string|max100',
            'post.outside_air' => 'required|string|max100',
            'post.meal' => 'required|string|max100',
            'post.other' => 'required|string|max200',
        ];
    }
}
