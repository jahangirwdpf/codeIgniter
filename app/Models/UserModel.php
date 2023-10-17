<?php
namespace App\Models;
use CodeIgniter\Model;

Class UserModel extends Model {
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $allowedFields = [
            'name',
            'address',
            'email',
            'mobile',
            'password',
    ];
}