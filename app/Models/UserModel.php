<?php
namespace App\Models;
use CodeIgniter\Model;

Class UserModel extends Model {
    protected $table = 'member';
    protected $primaryKey = 'm_id';
    protected $allowedFields = [
            'name',
            'address',
            'email',
            'mobile',
            'password',
    ];
}