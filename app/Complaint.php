<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = "complaints";
    public $primaryKey = 'id';
    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
