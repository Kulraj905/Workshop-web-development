<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'message'];
<<<<<<< HEAD
    protected $useTimestamps = false;
               
=======
    protected $useTimestamps = true;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
}
