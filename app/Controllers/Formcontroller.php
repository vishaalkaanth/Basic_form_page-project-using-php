<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FormModel;

class Formcontroller extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('form');
    }

    public function submitForm()
    {
        helper(['form']);

        $rules = [
            'Name'        => 'required|min_length[2]|max_length[50]',
            'Email'       => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user_list.Email]',
            'Mobile'      => 'required|exact_length[10]|regex_match[/^[6789]\d{9}$/]|is_unique[user_list.Mobile]',
            'Gender'      => 'required',
            'Education'   => 'required',
            'Hobbies'     => 'required',
            'Description' => 'required',
            'Imagefile'   => 'uploaded[Imagefile]|mime_in[Imagefile,image/jpg,image/jpeg,image/png]|max_size[Imagefile,1024]',
            'Address'     => 'required',
        ];


        if ($this->validate($rules)) {
            $name = $this->request->getVar('Name');
            $email = $this->request->getVar('Email');
            $mobile = $this->request->getVar('Mobile');
            $gender = $this->request->getVar('Gender');
            $education = implode(',', $this->request->getVar('Education'));
            $hobbies = implode(',', $this->request->getVar('Hobbies'));
            $description = $this->request->getVar('Description');
            $address = $this->request->getVar('Address');
            $imagefile = $this->request->getFile('Imagefile');

            $ext = $imagefile->getClientExtension();
            $newname =  $mobile . '.' . $ext;
            $imagefile->move('assets/profile_images/', $newname);

            $formModel = new FormModel();
            $data = [
                'Name'        => $name,
                'Email'       => $email,
                'Mobile'      => $mobile,
                'Gender'      => $gender,
                'Education'   => $education,
                'Hobbies'     => $hobbies,
                'Description' => $description,
                'Imagefile'   => $newname,
                'Address'     => $address,
            ];

            session()->set('mobile', $mobile);
            $formModel->save($data);
            return redirect()->to('/userprofile');
        } else {
            $data['validation'] = $this->validator;
            echo view('form', $data);
        }
    }
}


