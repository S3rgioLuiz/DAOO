<?php

namespace Sergi\Atividade03\controller\api;

use Sergi\Atividade03\model\Usuario as ModelUsuario;
use Exception;

class Usuario extends Controller
{

	private ModelUsuario $model;
	// private $model;

	public function __construct()
	{
		try {
			$this->model = new ModelUsuario();
			$this->setHeader(200);
		} catch (Exception $error) {
			$this->setHeader(500, "Erro ao conectar ao banco!");
			json_encode(["error" => $error->getMessage()]);
		}
	}

	public function index()
	{
		// echo json_encode([
		// 	"msg"=>"ola mundo!!"
		// ]);
		echo json_encode($this->model->read());
	}

	// public function daoo($msg){
	// 	echo $msg;
	// }

	public function show($id)
	{
		$usuario = $this->model->read($id);
		if ($usuario) {
			$response = ['usuario' => $usuario];
		} else {
			$response = ['Erro' => "Usuário não encontrado"];
			header('HTTP/1.0 404 Not Found');
		}
		echo json_encode($response);
	}

	public function store()
	{
		try {
			$this->validateUsuarioRequest();

			$this->model = new Usuario(
                $_POST['apelido'],
				$_POST['nome'],
				$_POST['email'],
				$_POST['pontuacao'],
				$_POST['senha']
			);

			$this->model->status = isset($_POST['status']);


			if ($this->model->create()) {
				echo json_encode([
					"success" => "Usuário criado com sucesso!",
					"data" => $this->model->getColumns()
				]);
			} else {
				$msg = 'Erro ao cadastrar usuário!';
				$this->setHeader(500, $msg);
				throw new Exception($msg);
			}
		} catch (Exception $error) {
			echo json_encode([
				"error" => $error->getMessage(),
				"trace" => $error->getTrace()
			]);
		}
	}

	public function update()
	{
		try {
			if (!$this->validatePostRequest(['id']))
				throw new Exception("Informe o ID do Usuário!!");

			$this->validateUsuarioRequest();

			$this->model = new Usuario(
				$_POST['apelido'],
				$_POST['nome'],
				$_POST['email'],
				$_POST['pontuacao'],
				$_POST['senha']
			);
			$this->model->id = $_POST["id"];
			$this->model->status = isset($_POST['status']);

			// error_log(print_r($this->model,TRUE));
			// throw new \Exception('LOG');

			if ($this->model->update())
				echo json_encode([
					"success" => "Usuário atualizado com sucesso!",
					"data" => $this->model->getColumns()
				]);
			else throw new Exception("Erro ao atualizar usuário!");
		} catch (Exception $error) {
			$this->setHeader(500, 'Erro interno do servidor!!!!');
			echo json_encode([
				"error" => $error->getMessage()
			]);
		}
	}

	public function remove()
	{
		try {
			if (!isset($_POST["id"])) {
				$this->setHeader(400, 'Bad Request.');
				throw new Exception('Erro: id obrigatorio!');
			}
			$id = $_POST["id"];
			if ($this->model->delete($id)) {
				$response = ["message:" => "Usuário id:$id removido com sucesso!"];
			} else {
				$this->setHeader(500, 'Internal Error.');
				throw new Exception("Erro ao remover Usuário!");
			}
			echo json_encode($response);
		} catch (Exception $error) {
			echo json_encode([
				"error" => $error->getMessage()
			]);
		}
	}

	public function filter(): void
	{

		if (!isset($_POST))
			echo json_encode(["error" => "enviar os filtros"]);
		$reulsts = $this->model->filter($_POST);
		echo json_encode($reulsts);
	}

	private function validateUsuarioRequest()
	{
		$fields = [
            'apelido',
			'nome',
			'email',
			'pontuacao',
			'senha'
		];
		if (!$this->validatePostRequest($fields))
			throw new Exception('Erro: campos imcompletos!');
	}
}