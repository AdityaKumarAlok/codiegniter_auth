<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    protected $returnType = 'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['firstname', 'lastname', 'email', 'password'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]'
    ];

    protected $validationMessages = [];
    protected $skipValidation = false;
}
?>