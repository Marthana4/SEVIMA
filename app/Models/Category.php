<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table ="categories";
    protected $primaryKey = 'id_category';
    protected $fillable = [
        'id_category',
        'id',
        'id_course',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id');
    }
}
