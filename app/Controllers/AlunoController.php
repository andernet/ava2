<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AlunoModel;
use App\Helpers\Form_helper;


class AlunoController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    private $alunoModel;

    public function __construct()
	{
		$this->alunoModel = new AlunoModel();
		helper (['form']);
	}
    public function index()
    {
        
    }

    public function lista_aluno()
    {
        ///

    }
    


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    
    public function save()
    {

        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
         //let's do the validation here

            
         $rules = [
             'nome_aluno' => 'required|min_length[3]|max_length[20]',
             //'lastname' => 'required|min_length[3]|max_length[20]',
             //'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
             //'password' => 'required|min_length[8]|max_length[255]',
             //'password_confirm' => 'matches[password]',
               // 'cod_aluno' => 'is_unique[aluno.cod_aluno]',                 
         ];

         if (! $this->validate($rules)) {
            //dd('aqui');
             $data['validation'] = $this->validator;
         }else{
             $model = new AlunoModel();

             //$cod_aluno = 

             

             $newData = [
                 'nome_aluno' => $this->request->getVar('nome_aluno'),
                 'cpf' => $this->request->getVar('cpf'),
                 'id_curso' => $this->request->getVar('id_curso'),
                 'id_tratamento' => $this->request->getVar('id_tratamento'),
                 'id_posto' => $this->request->getVar('id_posto'),
                 'id_quadro' => $this->request->getVar('id_quadro'),
                 'id_especialidade' => $this->request->getVar('id_especialidade'),
                 'id_om' => $this->request->getVar('id_om'),
                 'id_situacao' => $this->request->getVar('id_situacao'),
                 'saram' => $this->request->getVar('saram'),
                 'cod_aluno' => $this->request->getVar('id_curso').$this->request->getVar('cpf'),
                 'password' => $this->request->getVar('password'),
                 //'' => $this->request->getVar(''),
                 
             ];
             echo '<pre>';

             print_r($newData);

            $model->save($newData);
            $session = session();
            $session->setFlashdata('success', 'Successful Registration');
             return redirect()->to('/');

         }
        }
    }

 //    /**
 //     * Create a new resource object, from "posted" parameters
 //     *
 //     * @return mixed
 //     */
 //    public function cad_aluno()
 //    {
 //        echo view('templates/header');
 //        echo view('aluno/form_cad_aluno');
	// }

 //    /**
 //     * Return the editable properties of a resource object
 //     *
 //     * @return mixed
 //     */
 //    public function edit($id = null)
 //    {
 //        //
 //    }

 //    /**
 //     * Add or update a model resource, from "posted" properties
 //     *
 //     * @return mixed
 //     */
 //    public function update($id = null)
 //    {
 //        //
 //    }

 //    /**
 //     * Delete the designated resource object from the model
 //     *
 //     * @return mixed
 //     */
 //    public function delete($id_aluno = null)
 //    {
 //        if($this->alunoModel->delete($id_aluno)){
 //            $data['messages'] = ['message' => 'Aluno excluido'];
 //            echo view('templates/header');
 //            return view('aluno/lista_aluno', $data); 
 //        } else{
 //            echo 'erro';
 //        }
    
 //    }

 //     /* controller to create a new user */
 //    public function create(){

 //        /* calling the insert function on model sending the form */
 //        $this->model->init_insert($this->request->getVar());

 //        /* add success message in flashdata */
 //        $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user added!</b></div>");

 //        /* return to default page */
 //        return redirect("/");

 //    }

 //    /* controller to update a user */
 //    public function update(){

 //        /* calling the update function on model sending the form */
 //        $this->model->init_update($this->request->getVar());

 //        /* add success message in flashdata */
 //        $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user edited!</b></div>");

 //        /* return to default page */
 //        return redirect("/");


 //    }

 //    /* controller to delete a user */
 //    public function delete($id = NULL){

 //        /* calling the delete function on model sending the url id */
 //        $this->model->init_delete($id);
        
 //        /* add success message in flashdata */
 //        $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user deleted!</b></div>");
        
 //        /* return to default page */
 //        return redirect("/");
        
 //    }

}
