<?php
class usuariosController extends controller {

	public function index() {
		$data = array(
			'msg' => ''
		);

		if(!empty($_GET['error'])) {
			if($_GET['error'] == '1') {
				$data['msg'] = 'Usuário e/ou senha inválidos!';
				$data['alertTipo'] = 'alert-danger';
			}
		}

		$this->loadView('login', $data);
	}


	public function listar() {
		$data = array(
			'msg' => ''
		);

		$users = new Users();
		$data['usuarios'] = $users->listarTodos();

		$this->loadView('listar', $data);

	}

	public function cadastrar() {
		$data = array(
			'msg' => ''
		);

		if(!empty($_POST['nome'])) {
			$nome = $_POST['nome'];
			$senha = $_POST['pass'];
			$email = $_POST['email'];

			$users = new Users();
			$users->cadastrar($nome, $email, $senha);
			$data['msg'] = 'Cadastro Realizado com Sucesso';
			$data['alertTipo'] = 'alert-success';
		}
		$this->loadView('cadastrar', $data);

	}

	public function logout() {
		$users = new Users();
		$users->clearLoginHash();

		header("Location: ".BASE_URL.'login');
	}

}
















