<?php

namespace App\Controllers;
use App\Models\AlunoModel;
use App\Models\UserModel;
use App\Libraries\Hash;

class CertificadoController extends BaseController
{
	public function __construct()
	{
		$this->userModel = new AlunoModel();

	}
    public function index()
    {
    	echo view('templates/header');
        echo view('certificados/lista');
        echo view('templates/footer');
    }

    public function teste($data = null)
    {
    	return view('templates/header');
        return view('certificados/certificado_f', $data);
        return view('templates/footer');
    }

     public function geraPDF($data = null, $data2 = null)
     // public function geraPDF($query = null)
	 {

	 	$nome_arquivo = 'teste23';
		$mpdf = new \Mpdf\Mpdf();

		$mpdf->AddPage('L', '', '', '', '', 29, 25, 55, 30, 18, 12);
		// $html = view('certificados/certificado_f',[]);
		$html = view('certificados/certificado_f', $data);
		$mpdf->WriteHTML($html);
		$html = ob_get_clean();
		$mpdf->AddPage('L', '', '', '', '', 29, 25, 55, 30, 18, 12);
		$html = view('certificados/certificado_v',$data2);
		$mpdf->WriteHTML($html);
		$this->response->setHeader('Content-Type', 'application/pdf');
		//$mpdf->Output('arjun.pdf','I'); // opens in browser
		//$mpdf->Output("$nome_arquivo.pdf", 'I');
		return redirect($mpdf->Output("$nome_arquivo.pdf", 'I'))->to( site_url('/') );
		//$mpdf->Output('arjun.pdf','D'); 
		
	 }


	 public function geraCertificado($cod_aluno = null){
	 	$db = \Config\Database::connect();
	 	$builder = $db->table('s_certificado_emitido');
	 	$builder->select('cod_aluno');
	 	$builder->where('cod_aluno ', $cod_aluno );
	 	$data['dados'] = $builder->get()->getRow();
		if ( isset($data['dados'])) {
			$data =[
				'erro' => 'ja',
			];
			return redirect()->to('AlunoController/');
		} else {
			$cod_verificacao = uniqid();
			//$sql = "insert into s_certificado_emitido (cod_aluno, cod_verificacao) VALUES('" . $data['dados']."','". $cod_verificacao ."'";
			$sql = "insert into s_certificado_emitido (cod_aluno, cod_verificacao) VALUES('".$cod_aluno."', '". $cod_verificacao ."')";
			
			$db->query($sql);
			return redirect()->to('/AlunoController/');
		}
	 }

	 public function select_certificado($id_aluno = null)
	 {	
	 	$db      = \Config\Database::connect();
        $builder = $db->table('s_aluno as a');
        $builder->where('id_aluno ', $id_aluno );

        $builder->select('
            a.nome_aluno, 
            a.id_aluno, 
            a.cpf, 
            a.saram,
            a.cod_aluno,
            c.curso_sigla, 
            c.id_curso, 
            o.om_sigla, 
            c.curso_periodo, 
            t.tratamento, 
            q.quadro, 
            p.posto_sigla, 
            e.especialidade, 
            c-e.cod_verificacao,
            s.situacao');
        
        $builder->join('p_especialidade e', 'e.id_especialidade = a.id_especialidade', 'left');
        $builder->join('p_om o', 'o.id_om = a.id_om', 'left');
        $builder->join('p_posto p', 'p.id_posto = a.id_posto', 'left');
        $builder->join('p_quadro q', 'q.id_quadro = a.id_quadro', 'left');
        $builder->join('p_tratamento t', 't.id_tratamento = a.id_tratamento', 'left');
        $builder->join('p_curso c', 'c.id_curso = a.id_curso', 'left');
        $builder->join('s_certificado_emitido c-e', 'c-e.cod_aluno = a.cod_aluno', 'left');
        $builder->join('p_situacao s', 's.id_situacao = a.id_situacao', 'left');

        //retorna objeto para acessar $dados->nome
		$data['dados'] = $builder->get()->getRow();
		$db      = \Config\Database::connect();
        $builder = $db->table('p_cursos_curriculo as c');
        $builder->where('id_curso ', $data['dados']->id_curso);
        //gera um array
        $data2['dados'] = $builder->get()->getResultArray();
		$this->geraPDF($data, $data2);	 	
	 }
}




