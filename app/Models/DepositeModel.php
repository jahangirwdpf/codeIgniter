<?php
namespace App\Models;
use CodeIgniter\Model;

Class DepositeModel extends Model
{
    protected $table = 'deposite';
    protected $primaryKey = 'd_id';

    protected $allowedFields = 
    [
        'date',
        'deposite',
        'member_id',
        'price',
    ];
}