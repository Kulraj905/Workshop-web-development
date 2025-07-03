<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
<<<<<<< HEAD
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'genre', 'published_year', 'description', 'slug', 'image'];
=======
    protected $table = 'books'; // your table name
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'genre', 'published_year', 'description', 'slug'];
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
}
