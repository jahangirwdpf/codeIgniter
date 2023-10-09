<?php
namespace App\Models;
use CodeIgniter\Model;

Class DepositeModel extends Model {
    protected $table = 'deposite';
    protected $allowedFields = 
    [
        'name',
        'email',
    ];

}