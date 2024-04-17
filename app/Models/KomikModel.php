<?php

namespace App\Models;

use CodeIgniter\Model;

class Komik extends Model
{
    protected $table = 'komik';
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];
}