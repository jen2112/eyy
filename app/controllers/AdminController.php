<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AdminController extends Controller {
	public function adlogin() {
		$this->call->view('login');
	}
	public function adminLogin(){
		$email = $this->io->post('email');
		$password = $this->io->post('password');
	   
		$data = [
		'email' => $email,
		'password' => $password
		];
	   
		$admin = $this->AdminLogin_model->findAdminEmail($email);
		   
		if(is_null($admin)) {
		$this->call->view('admin/dashboard');
		}
	   
		if($password !== $admin['password']) {
		$this->call->view('admin/dashboard');
		}
		$this->call->view('admin/dashboard');
   }
   public function register(){
    $data['home'] = $this->AdminLog_model->getUsers();
    return $this->call->view('login', $data);
    }
    public function save() {
        if ($this->form_validation->submitted()) {
            $this->form_validation
            ->name('email')->required()->min_length(5)
            ->name('password')->required();

        if ($this->form_validation->run()) {
            if ($this->AdminLog_model->save(
                $this->io->post('email'),
                $this->io->post('password')
            )) {
                redirect('/login');
            } else {
                $this->form_validation->errors();
            }
        }
    }

            $data['home'] = $this->AdminLog_model->getUsers();
            $this->call->view('login', $data);
}

}
?>
