<?php
namespace App\Controllers;

class Index extends BaseController {
    public function index() {
        $data = array(
            'title' => 'TW32 App - Welcome',
            'name' => 'JayCee'
        );

        return view('include\head_view', $data)
            .view('include\nav_view')
            .view('main_view', $data)
            .view('include\foot_view');
    }
}
?>