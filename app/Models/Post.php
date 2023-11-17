<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable =[
    'facility_name',
    'good',
    'temperature',
    'outside_air',
    'meal',
    'other',
    ];
    
    public function getPaginateBylimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
