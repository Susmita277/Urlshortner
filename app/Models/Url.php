<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Url extends Model
{
    use HasFactory;
    protected $table= 'urls';
    protected $guarded=[];//data which is not included in mass assignment
    protected $fillable =[
        'original_url',
        'short_url',
        'title',
    ];

    public function visitor():HasMany{
        return $this->hasMany(Visitor::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
