<?php
namespace App\Models;
use CodeIgniter\Model;

Class Bazar extends Model {
    protected $table = 'bazar';
    protected $allowedFields = 
    [
            'p_des',
            'price',
            'comment',
    ];
}