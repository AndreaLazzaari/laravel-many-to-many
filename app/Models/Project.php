<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'request',
        'date',
        'author',
        'type_id'

    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
