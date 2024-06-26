<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   
    protected $table = "users";
    protected $primaryKey = 'user_id';
    public $incrementing = false;
    protected $keyType = 'string';

    use HasFactory;
    use HasUuids;

}
