<?php

namespace App\Models;

use CodeIgniter\Model;

class Sayuran_model extends Model
{
    protected $table = 'sayuran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'harga', 'stok'];
}
