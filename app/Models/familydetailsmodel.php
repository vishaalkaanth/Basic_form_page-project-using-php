<?php

namespace App\Models;

use CodeIgniter\Model;

class FamilyDetailsModel extends Model
{
    protected $table = 'add_details';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'relation', 'relation_name'];

    public function getFamilyDetails($userid)
    {
        return $this->where('user_id', $userid)->findAll();
    }

    public function insertFamilyDetails($data)
    {
        return $this->insert($data);
    }
}
