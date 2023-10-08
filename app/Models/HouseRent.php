<?php
namespace App\Models;
use CodeIgniter\Model;

Class HouseRent extends Model {
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