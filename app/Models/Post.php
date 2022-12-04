<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
<<<<<<< HEAD
    public function getByLimit(int $limit_count = 10) {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
=======
    protected $fillable = [
        'title',
        'body'
        ];
        
    public function getPaginateByLimit(int $limit_count = S)
    {
        return $this->orderby('updated_at', 'DESC')->paginate($limit_count);
>>>>>>> origin/master
    }
}
