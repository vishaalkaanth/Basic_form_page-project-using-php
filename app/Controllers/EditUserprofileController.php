<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormModel;

class EditUserprofileController extends Controller
{

    public function index()
    {
        $formModel = new FormModel();

        $userData = $formModel->where('Mobile', session('mobile'))->first();

        if ($userData) {
            $data['id'] = $userData['id'];
            $data['Name'] = $userData['Name'];
            $data['Email'] = $userData['Email'];
            $data['Mobile'] = $userData['Mobile'];
            $data['Gender'] = $userData['Gender'];
            $data['Education'] = $userData['Education'];
            $data['Hobbies'] = $userData['Hobbies'];
            $data['Description'] = $userData['Description'];
            $data['Imagefile'] = $userData['Imagefile'];
            $data['Address'] = $userData['Address'];

            return view('edituserprofile', $data);
        } else {

            return redirect()->to(base_url('/form'));
        }
    }

    public function updateprofile()
    {
        $formModel = new FormModel();

        $id = $this->request->getVar('id');

        $name = $this->request->getVar('Name');
        $email = $this->request->getVar('Email');
        $mobile = $this->request->getVar('Mobile');
        $gender = $this->request->getVar('Gender');
        $education = implode(',', $this->request->getVar('Education'));
        $hobbies = implode(',', $this->request->getVar('Hobbies'));
        $description = $this->request->getVar('Description');
        $address = $this->request->getVar('Address');
        $imagefile = $this->request->getFile('Imagefile');

        $data = [
            'Name'        => $name,
            'Email'       => $email,
            'Mobile'      => $mobile,
            'Gender'      => $gender,
            'Education'   => $education,
            'Hobbies'     => $hobbies,
            'Description' => $description,
            'Address'     => $address,
        ];

        if ($imagefile->isValid() && !$imagefile->hasMoved()) {

            $newname = $imagefile->getRandomName();
            $imagefile->move('assets/profile_images/', $newname);

            $data['Imagefile'] = $newname;
        }

        $formModel->update($id, $data);
        return redirect()->to('/reportpage');
    }
}
