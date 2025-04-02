<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books'; // your table name
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'author', 'genre', 'published_year', 'description', 'slug'];
}
