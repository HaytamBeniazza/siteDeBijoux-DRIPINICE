<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            if (empty($data['name'])) {
                $data['name_err'] = 'plaese enter your name';
            }

            if (empty($data['email'])) {
                $data['email_err'] = 'plaese enter email';
            } else {

                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'email is elready taken';
                }
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'plaese enter password';
            }

            elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'password must be at least 6 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'plaese enter confirm password';
            } else {

                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'password is not match';
                }
            }


            if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                } else {
                    die('wrong');
                }
            } else {
                $this->view('users/register', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];
            $this->view('users/register', $data);
        }
    }
    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            if (empty($data['email'])) {
                $data['email_err'] = 'plaese enter email';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'plaese enter password';
            }

            if ($this->userModel->findUserByEmail($data['email'])) {
            } else {
                $data['email_err'] = 'no user found';
            }

            if (empty($data['email_err'])) {

                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if ($loggedInUser) {

                    $this->creatUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'password incorrect';
                    $this->view('users/login', $data);
                }
            } else {
                $this->view('users/login', $data);
            }
        } else {

            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            $this->view('users/login', $data);
        }
    }
    public function creatUserSession($user)
    {
        $_SESSION['user_id'] = $user->id_user;
        $_SESSION['user_email'] = $user->mail_user;
        $_SESSION['user_name'] = $user->name_user;
        if($_SESSION['user_id'] == 7)  
        { 
            redirect('articles/dashbord');
        }else{
            redirect('pages/index');

        }
        
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('pages/index');
    }
  
}
