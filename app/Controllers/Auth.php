<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Libraries\Hash;



use CodeIgniter\Validation\Validation;

class Auth extends BaseController
{
    public function __construct()
	{
		$this->userModel = new UserModel();
		helper (['form', 'url', 'form_validation']);
    }

    public function index()
    {
        //return view('auth/login');
        // $userModel = new UserModel();
        // $loggedUserID = session()->get('loggedUser');
        // $userInfo = $userModel->find($loggedUserID);
        $data =[
             'title'=>'Dashboard',
        //     'userInfo'=>$userInfo
         ];
        // return view('/dashboard', $data);
        //$data['user'] = $model->where('id', session()->get('id'))->first();
        echo view('templates/header', $data);
        echo view('auth/login');
        echo view('templates/footer');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function save()
    {
        // //validação
        // $validation = $this->validate([
        //     'user_nome' => 'required|min_length[3]|max_length[20]',
        //     'username' => 'required|min_length[3]|max_length[20]',
        //     'password' => 'required|min_length[6]|max_length[15]',
        //     'password_conf' => 'required|matches[password]',
        //     //'id_user_tipo'
        // ]);
        // if(!$validation){
        //     return view('auth/register', ['validation'=>$this->validator]);
        // }else{
        //     echo 'gravado';
        // }

        //novo
        $validation =  \Config\Services::validation();
        $data = [
            'validation' => \config\services::validation()
        ];
        $validation = $this->validate([
            'user_nome' => [
                'label'  => 'Nome',
                'rules'  => 'required|min_length[3]|max_length[20]',
                'errors' => [
                    'required' => 'Campo nome obrigatório (min 3 max 20)',
                    'min_length' => 'Tamanho mínimo do nome 3',
                ],
            ],
            'username' => [
                //'label'  => 'Rules.password',
                'rules'  => 'required|min_length[3]|max_length[20]',
                'errors' => [
                    'required' => 'Campo username obrigatório (min 3 max 20)',
                ],
            ],
            'password' => [
                //'label'  => 'Rules.password',
                'rules'  => 'required|min_length[6]|max_length[15]',
                'errors' => [
                    'required' => 'Campo password obrigatório',
                    'min_length' => 'Tamanho mínimo da password 6',
                    'max_length' => 'Tamanho máximo da password 15',
                ],
            ],
            'password_conf' => [
                //'label'  => 'Rules.password',
                'rules'  => 'required|min_length[6]|max_length[15]|matches[password]',
                'errors' => [
                    'required' => 'Campo confirmar password obrigatório',
                    'matches'=> 'passwords não são iguais'
                ],
            ],
            'id_user_tipo' => [
                //'label'  => 'Rules.password',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Selecione tipo de usuário',
                ],
            ],
        ]
    );
        if(!$validation){
            return view('auth/register', ['validation'=>$this->validator]);
        }else{
            //inserindo no banco
            $user_nome = $this->request->getPost('user_nome');
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $password_conf = $this->request->getPost('password_conf');
            $id_user_tipo = $this->request->getPost('id_user_tipo');

            $values = [
                'user_nome'=>$user_nome,
                'username'=>$username,
                'password'=>Hash::make($password),
                //'password_conf'=>$password_conf,
                'id_user_tipo'=>$id_user_tipo,
            ];

            //$usersModel = new
            $userModel = new UserModel();
            $query = $userModel->insert($values);
            //$this->unset($values);
            //$values = '';
            //return view('auth/register');
            if(!$query){
                return redirect()->back()->with('fail', 'Não foi possível salvar!');
            }else{
                return redirect()->to('auth/register')->with('success', 'Gravado com sucesso.');
            }
        }
        

    }
    function check(){
        //echo "Checando usuário...........";
        $validation = $this->validate([
            'username'=>[
                'rules'=>'required|is_not_unique[s_user.username]',
                'errors'=>[
                    'required'=>'Username é obrigatório!',
                    'is_not_unique'=>'Usuário não cadastrato!'
                ]
                ],
                'password'=>[
                    'required'=>'required',
                    'errors'=>[
                        'required'=>'password é obrigatório'
                    ]

                ]
        ]);
        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $userModel = new UserModel();
            $user_info = $userModel->where('username', $username)->first();
            $check_password = Hash::check($password, $user_info['password']);

            // dd($user_info);
            if(!$check_password){
                session()->setFlashdata('fail', 'Senha incorreta!');
                return redirect()->to('/auth')->withInput();
            }else{
                $id_user = $user_info['id_user'];
                $id_user_tipo = $user_info['id_user_tipo'];
                session()->set('loggedUser', $id_user);
                session()->set('tipoUser', $id_user_tipo);
                // dd(session());
                return redirect()->to('home/logado');
            }
        }
    }
    // $data = [
    //                 'id_user' => $user_info['id_user'],
    //                 'user_nome' => $user_info['user_nome'],
    //                 'username' => $user_info['username'],
    //                 'id_user_tipo' => $user_info['id_user_tipo'],
    //                 'isLoggedIn' => true,
    //                 ];

    //         session()->set($data);

    // private function setUserSession($user){
    //     $data = [
    //         'id' => $user['id'],
    //         'firstname' => $user['firstname'],
    //         'lastname' => $user['lastname'],
    //         'email' => $user['email'],
    //         'isLoggedIn' => true,
    //     ];

    //     session()->set($data);
    //     return true;
    // }


    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail',     'Usuário desconectado!');

        }
    }
}

