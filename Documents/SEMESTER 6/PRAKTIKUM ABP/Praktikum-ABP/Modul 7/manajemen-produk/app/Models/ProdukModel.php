<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table            = 'produk';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nama', 'kategori', 'harga'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = '';
}