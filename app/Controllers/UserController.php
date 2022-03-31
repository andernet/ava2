<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Helpers\Form_helper;

class UserController extends BaseController
{
    private $userModel;


	public function __construct()
	{
		$this->userModel = new UserModel();
		helper (['form']);
	}

	public function index()
	{
		echo view('templates/header');

        $db      = \Config\Database::connect();
        $builder = $db->table('s_user as u');

        $builder->select('
            u.username, 
            u.nome, 
            u.id_user, 
            u.cpf, 
            u.saram,
            u.cod_aluno,
            c.curso_sigla, 
            o.om_sigla, 
            c.curso_periodo, 
            t.tratamento, 
            q.quadro, 
            p.posto_sigla, 
            e.especialidade, 
            c-e.cod_verificacao,
            s.situacao');
        
        $builder->join('p_especialidade e', 'e.id_especialidade = u.id_especialidade', 'left');
        $builder->join('p_om o', 'o.id_om = u.id_om', 'left');
        $builder->join('p_posto p', 'p.id_posto = u.id_posto', 'left');
        $builder->join('p_quadro q', 'q.id_quadro = u.id_quadro', 'left');
        $builder->join('p_tratamento t', 't.id_tratamento = u.id_tratamento', 'left');
        $builder->join('p_curso c', 'c.id_curso = u.id_curso', 'left');
        $builder->join('s_certificado_emitido c-e', 'c-e.cod_aluno = u.cod_aluno', 'left');
        $builder->join('p_situacao s', 's.id_situacao = u.id_situacao', 'left');

        //dd($builder->getCompiledSelect());
        
        $query['aluno'] = $builder->get()->getResultArray();
        
        return view('users/users', $query);   
        //return view('aluno/lista_aluno', [
        //  'aluno' => $this->alunoModel->paginate(10),
        //  'pager' => $this->alunoModel->pager
        // ]);
	}

	public function login()
	{
		$data = [];

		echo view('include_files/header');
        echo view('include_files/nav');
		//return view('login');
		echo view('login');
		echo view('include_files/footer');
	}

	public function list()
	{
		echo view('include_files/header');
        echo view('include_files/nav');
		return view('users/users', [
			'users' => $this->userModel->paginate(10),
			'pager' => $this->userModel->pager
		]);
	}

	public function delete($id_user)
	{
		if ($this->userModel->delete($user_id)) {
			return redirect()->to('UserController');
			// echo view('messages', [
			// 	'message' => 'Usuário Excluído com Sucesso'
			// ]);
		} else {
			echo "Erro.";
		}
	}


	public function cad_user() {
		
		$data = [];

        if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'user_nome' => 'required|min_length[3]|max_length[20]',
				'username' => 'required|min_length[3]|max_length[20]',
				'password' => 'required|min_length[6]|max_length[255]',
				'password_confirm' => 'matches[password]',
				'id_user_tipo' => 'required|min_length[1]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'user_nome' => $this->request->getVar('user_nome'),
					'username' => $this->request->getVar('username'),
					'password' => $this->request->getVar('password'),
					'id_user_tipo' => $this->request->getVar('id_user_tipo'),
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Registrado com sucesso.');
				return redirect()->to('/UserController/cad_user');

			}
		}

		echo view('templates/header', $data);
        echo view('users/cad_user');
        echo view('templates/footer');

		//https://www.youtube.com/watch?v=SbiszsRnETo
    }

	public function store()
	{
		if ($this->userModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Usuário salvo com sucesso'
			]);
		} else {
			echo "Ocorreu um erro.";
		}
	}

	public function edit($id)
	{
		return view('form', [
			'user' => $this->userModel->find($id)
		]);
	}

	public function send_cert()
    {
        echo 'x';
    }


    //  /* controller to create a new user */
    // public function create(){

    //     /* calling the insert function on model sending the form */
    //     $this->model->init_insert($this->request->getVar());

    //     /* add success message in flashdata */
    //     $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user added!</b></div>");

    //     /* return to default page */
    //     return redirect("/");

    // }

    // /* controller to update a user */
    // public function update(){

    //     /* calling the update function on model sending the form */
    //     $this->model->init_update($this->request->getVar());

    //      add success message in flashdata 
    //     $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user edited!</b></div>");

    //     /* return to default page */
    //     return redirect("/");


    // }

    // /* controller to delete a user */
    // public function delete($id = NULL){

    //     /* calling the delete function on model sending the url id */
    //     $this->model->init_delete($id);
        
    //     /* add success message in flashdata */
    //     $this->session->setFlashdata('message', "<div class = 'alert alert-success'><b>Success, user deleted!</b></div>");
        
    //     /* return to default page */
    //     return redirect("/");
        
    // }

}
