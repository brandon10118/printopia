<?php
namespace App\Controllers;

class Users extends BaseController {
    public function index() {
        $usermodel = model('Users_model');

        $data = array(
            'title' => 'TW32 App - Welcome',
            'users' => $usermodel->findAll()
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('userslist_view', $data)
            .view('include\foot_view');
    }

    public function add() {
        $data = array(
            'title' => 'TW32 App - Add New User',
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('adduser_view')
            .view('include\foot_view');
    }

    public function insert() {
        $usermodel = model('Users_model');

        $data = array (
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
        );

        $usermodel->insert($data);

        return redirect()->to('users');
    }

    public function view($id) {
        $usermodel = model('Users_model');

        $data = array(
            'title' => 'TW32 App - View User Record',
            'user' => $usermodel->find($id)
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('viewuser_view', $data)
            .view('include\foot_view');
    }

    public function edit($id) {
        $usermodel = model('Users_model');

        $data = array(
            'title' => 'TW32 App - View User Record',
            'user' => $usermodel->find($id)
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('updateuser_view', $data)
            .view('include\foot_view');
    }

    public function update($id) {
        $usermodel = model('Users_model');

        $data = array (
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
        );

        $usermodel->update($id, $data);

        return redirect()->to('users');
    }

    public function delete($id) {
        $usermodel = model('Users_model');
        $usermodel->delete($id);
        return redirect()->to('users');
    }
}
?>