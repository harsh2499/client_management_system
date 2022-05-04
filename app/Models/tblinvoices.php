<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblinvoices extends Model
{
    use HasFactory;

    protected $table="tblinvoice";
    
    protected $primaryKey="ID";

    

    public $timestamps=false;
}
