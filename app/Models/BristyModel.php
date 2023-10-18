<?php
namespace App\Models;
use CodeIgniter\Model;

Class BristyModel extends Model {
    protected $table = 'bristy';
    protected $allowedFields = 
    [
        'name',
        'email',
    ];

}