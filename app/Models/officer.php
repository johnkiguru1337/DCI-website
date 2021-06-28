<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
    use HasFactory;
    protected $table='officers';
    protected $primaryKey='id';
    protected $hidden=['timestamps'];
    public $timestamps=true;
    protected $fillable=['officer_id','officer_name','officer_description',
    'officer_rank','armouryvehicle','indiscipline','familymembers','contact',
    'email','image_path','user_id'
    ];
}
