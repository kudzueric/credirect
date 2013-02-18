<?php class UserShell extends AppShell {
	public $uses = array ('User');

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

	public function password() {
		if ($this->args[0] && $this->args[1]) {
			$user = $this->User->findByUsername($this->args[0]);
			if ($user) {
				$this->User->create($user);
				$this->User->save(array('password', $this->args[1]));
				$this->out("user updated");
			} else { 
				$this->out("user not found");
			}
			

		} else {
			$this->out("not enough parameters");
		}
	}
}
