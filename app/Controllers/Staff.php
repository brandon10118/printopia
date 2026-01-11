<?php
namespace App\Controllers;

class Staff extends BaseController {
    public function index() {
        $data = [
            'title' => 'Staff Dashboard',
        ];

        return view('include\\head_view', $data)
            .view('include\\nav_view')
            .view('staff_view', $data)
            .view('include\\foot_view');
    }
}

?>
