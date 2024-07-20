<?php
class Source extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Source'
        ];

        $this->view('source', $data);
    }
}
