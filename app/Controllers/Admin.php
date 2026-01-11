<?php
namespace App\Controllers;

class Admin extends BaseController {
    public function index() {
        $data = [
            'title' => 'Admin Dashboard',
        ];

        return view('include\\head_view', $data)
            .view('include\\nav_view')
            .view('admin_view', $data)
            .view('include\\foot_view');
    }
}

?>
