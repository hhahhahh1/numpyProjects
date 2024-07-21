<?php
class Demo extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Demo'
        ];

        $this->view('demo', $data);
    }
}
