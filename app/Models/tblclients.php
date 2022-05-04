<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblclients extends Model
{
    use HasFactory;
    protected $table="tblclient";
    
    protected $primaryKey="ID";

    public $timestamps=false;
}
