<?php
namespace App\Models;
use CodeIgniter\Model;

Class UserModel extends Model {
    protected $table = 'member';
    protected $allowedFields = [
            'name',
            'email',
            'password',
            'address',
            'gender',
    ];
}