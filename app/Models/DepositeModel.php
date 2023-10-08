<?php
namespace App\Models;
use CodeIgniter\Model;

Class DepositeModel extends Model {
    protected $table = 'bristy';
    protected $allowedFields = 
    [
        'name',
        'email',
    ];

}