<?php

namespace App\Controllers;

use App\Helpers\Form_helper;
use App\Controllers\BaseController;
use App\Models\AlunoModel;
use App\Models\PosModel;
use App\Models\PreModel;
use App\Models\Ava_cursoModel;
use App\Models\Respostas_avaModel;



class AvaController extends BaseController
{

    function __construct(){
        
        /* Loading user modal and session library */
        $this->model = new AlunoModel();
        $this->model = new PosModel();
        $this->model = new PreModel();
        $this->model = new Ava_cursoModel();
        $this->model = new Respostas_avaModel();
  
        

    }
    public function index()
    {
        //
    }

    public function pre()
    {
        echo view('templates/header');
        return view('ava/pre');
    }


    public function ava_int()
    {
        echo view('templates/header');
        return view('ava/ava_int');
    }

    public function ava_curso()
    {
        echo view('templates/header');
        return view('ava/ava_curso');
    }


    public function pos()
    {
        echo view('templates/header');
        return view('ava/pos');
    }

    public function ficha_critica()
    {
        echo view('templates/header');
        return view('ava/ficha_critica');
    }

    public function save_pre()
    {
        $this->model->init_insert($this->request->getVar());
        return redirect()->to('home/logado');
    }


    public function save_ava_int()
    {
        echo view('templates/header');
        return redirect()->to('home/logado');
    }


    public function save_curso()
    {
        echo view('templates/header');
        return redirect()->to('home/logado');
    }


    public function save_pos()
    {
        echo view('templates/header');
        return redirect()->to('home/logado');
    }

    public function save_ficha_critica()
    {
        echo view('templates/header');
        return redirect()->to('home/logado');
    }

    public function create(){

        /* calling the insert function on model sending the form */
        $this->model->init_insert($this->request->getVar());

        /* add success message in flashdata */
        $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user added!</b></div>");

        /* return to default page */
        return redirect("/");

    }

    /* controller to update a user */
    public function update(){

        /* calling the update function on model sending the form */
        $this->model->init_update($this->request->getVar());

        /* add success message in flashdata */
        $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user edited!</b></div>");

        /* return to default page */
        return redirect("/");


    }

    /* controller to delete a user */
    public function delete($id = NULL){

        /* calling the delete function on model sending the url id */
        $this->model->init_delete($id);
        
        /* add success message in flashdata */
        $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user deleted!</b></div>");
        
        /* return to default page */
        return redirect("/");
        
    }
}
