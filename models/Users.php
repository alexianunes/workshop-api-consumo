<?php
class Users extends Model {

	private $uid;


	public function listarTodos() {

		$url = BASE_URL_API.'/usuarios/listar';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=utf-8") );
		$result = curl_exec($ch);
		curl_close($ch);

		$result2 = json_decode($result);

		echo $result;
	}


	public function cadastrar($nome, $email, $senha) {

		$url = BASE_URL_API.'/usuarios/cadastrar';
		$campos = array('nome' => $nome, 'email' => $email, 'senha' => $senha);
		// var_dump($campos);exit;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $campos); //enviar post
		$result = curl_exec($ch);

		curl_close($ch);

		$result = json_decode($result, true);

		echo $result;
	}


	public function verificarLogin() {
		if(!empty($_SESSION['loginhash'])) {
			$s = $_SESSION['loginhash'];

			$sql = "SELECT * FROM users WHERE loginhash = :hash";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(":hash", $s);
			$sql->execute();

			if($sql->rowCount() > 0) {
				$data = $sql->fetch();
				$this->uid = $data['id'];

				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

}









