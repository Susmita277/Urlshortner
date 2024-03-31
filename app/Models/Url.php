<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;

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

    public static function boot(){
        parent::boot();
        static::creating(function ($item){
          Log::info('Creating event call:' . $item);
        });

        static::created(function ($item){
            Log::info('Created the record:' . $item);
          });
    }

    public function visitor():HasMany{
        return $this->hasMany(Visitor::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
