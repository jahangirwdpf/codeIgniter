<?php
namespace App\Models;
use CodeIgniter\Model;

Class RentModel extends Model {
    protected $table = 'house_rent';
    protected $allowedFields = [
            'rent',
            'gas',
            'current',
            'wifi',
            'bua',
            'city',
    ];
}