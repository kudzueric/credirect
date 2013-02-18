<?php class UserShell extends AppShell {
	public $uses = array ('User');

	public function main() {
		$this->out("testing");
	}

	public function add() {
		$username = $this->args[0];
		$password = $this->args[1];
		if ($username && $password) {
			$this->User->create(array('username' => $username, 'password' => $password, 'role' => 'admin'));
			$this->User->save();
		
		} else {
			$this->out("could not create user");
		}
		
	}
}
