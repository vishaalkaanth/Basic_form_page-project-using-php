<?php

namespace App\Models;

use CodeIgniter\Model;

class FormModel extends Model
{
    protected $table = 'user_list';
    
    protected $allowedFields = [
        'id',
        'Name',
        'Email',
        'Mobile',
        'Gender',
        'Education',
        'Hobbies',
        'Imagefile',
        'Description',
        'Address',
        'status'
    ];

    public function updateProfile($id, $data)
    {
        $this->where('id', $id)->update($data);
    }
}

