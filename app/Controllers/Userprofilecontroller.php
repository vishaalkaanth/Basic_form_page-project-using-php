<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormModel;
use App\Models\FamilyDetailsModel;  

class Userprofilecontroller extends Controller
{
    public function index()
    {
        $formModel = new FormModel();
        $data['user_data'] = $formModel->where('Mobile', session('mobile'))->first();
        return view('userprofile', $data);
    }


    public function report()
    {
        $formModel = new FormModel();
        $data['users_data'] = $formModel->where('status', '1')->findAll();

        return view('reportpage', $data);
    }


    public function edituserprofile($userid)
    {
        $formModel = new FormModel();
        $data['user_data'] = $formModel->find($userid);

        return view('edituserprofile', $data);
    }


    public function viewuserprofile($userid)
    {
        $formModel = new FormModel();
        $data['user_data'] = $formModel->find($userid);

        return view('userprofile', $data);
    }


    public function deleteprofile($userid)
    {
        $formModel = new FormModel();

        $formModel->update($userid, ['status' => '0']);

        $data['users_data'] = $formModel->where('status', '1')->findAll();

        return view('reportpage', $data);
    }


    public function additionalDetails($userid)
    {
        $data['user_id'] = $userid;
        return view('additional_details', $data);
    }


    public function submitFamilyDetails()           
    {
        $userid = $this->request->getPost('user_id');
        $fatherName = $this->request->getPost('father_name');
        $motherName = $this->request->getPost('mother_name');
        $brotherName = $this->request->getPost('brother_name');
        $sisterName = $this->request->getPost('sister_name');
        $spouseName = $this->request->getPost('spouse_name');
        $maritalStatus = $this->request->getPost('maritalStatus'); 

        $familyDetailsModel = new FamilyDetailsModel();

        $dataFather = [
            'user_id' => $userid,
            'relation' => 'Father',
            'relation_name' => $fatherName,
        ];
        $familyDetailsModel->insertFamilyDetails($dataFather);

        $dataMother = [
            'user_id' => $userid,
            'relation' => 'Mother',
            'relation_name' => $motherName,
        ];
        $familyDetailsModel->insertFamilyDetails($dataMother);

        $dataBrother = [
            'user_id' => $userid,
            'relation' => 'Brother',
            'relation_name' => $brotherName,
        ];
        $familyDetailsModel->insertFamilyDetails($dataBrother);

        $dataSister = [
            'user_id' => $userid,
            'relation' => 'Sister',
            'relation_name' => $sisterName,
        ];
        $familyDetailsModel->insertFamilyDetails($dataSister);

   
        if ($maritalStatus === 'married') {
            $dataSpouse = [
                'user_id' => $userid,
                'relation' => 'Spouse',
                'relation_name' => $spouseName,
            ];
            $familyDetailsModel->insertFamilyDetails($dataSpouse);
        }

        return redirect()->to('/reportpage');
    }
}
