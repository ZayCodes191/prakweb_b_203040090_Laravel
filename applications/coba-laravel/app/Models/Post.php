<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $guarded = [
        'id','created_at','published_at'
    ];

    protected $with = ['category','author'];

    // one to one
    public function category(){
        return $this->belongsTo(Category::class);
    }
    // user jadi author
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}