<?php

namespace App\Controllers;

use App\Core\Controller;

class Film extends Controller
{
    public object $model;

    public function __construct()
    {
        parent::cekLogin();
        $this->model = new \App\Models\Film(); // Koreksi penamaan kelas model
    }

    public function index()
    {
        $data['rows'] = $this->model->show();
        $this->dashboard('film/index', $data);
    }

    public function input()
    {
        $this->dashboard('film/input');
    }

    public function save()
    {
        $this->model->save();
        header('location:' . URL . '/film'); // Gunakan metode header
    }

    public function edit(int $id)
    {
        $data['row'] = $this->model->edit($id);
        $this->dashboard('film/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/film'); // Gunakan metode header
    }

    public function delete(int $id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/film'); // Gunakan metode header
    }
}
