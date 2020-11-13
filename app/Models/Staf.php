<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    // Table Name
    protected $table = 'staff';
    // Primary Key
    public $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
