<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Kuliner extends Model
=======
class Berita extends Model
>>>>>>> 6f9107990c83b11e86fb21c08e2fa788fb3c2642
{
    use HasFactory;

    protected $table = 'kuliner';
    protected $guarded = ['id_kuliner'];
}
