<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crime extends Model
{
    use HasFactory;
    protected $table='crimes';
    protected $primaryKey='id';
    protected $hidden=['timestamps'];
    public $timestamps=true;
    protected $fillable=['crime_id','officer_id','crime_description'];
}
