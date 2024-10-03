<?php

class Home extends Controller{
    public function index(){
        $data = [
            "title" => "Welcome OOP PHP"
        ];
        $this->view("templates/header", $data);
        $this->view("admin/index");
        $this->view("templates/footer");
    }
}