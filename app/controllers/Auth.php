<?php

class Auth extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->library('session');
    }

    private function base_url()
    {
        $base = dirname($_SERVER['SCRIPT_NAME']);
        return ($base === '/' || $base === '\\') ? '' : rtrim($base, '/\\');
    }

    public function login()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            header('Location: ' . $this->base_url() . '/products');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username === 'admin' && $password === 'admin123') {
                $this->session->set_userdata([
                    'username' => 'admin',
                    'logged_in' => true
                ]);

                header('Location: ' . $this->base_url() . '/products');
                exit;
            }

            $data['error'] = 'Invalid username or password.';
            $this->call->view('auth/login', $data);
            return;
        }

        $this->call->view('auth/login');
    }

    public function logout()
    {
        $this->session->unset_userdata([
            'username',
            'logged_in'
        ]);

        header('Location: ' . $this->base_url() . '/auth/login');
        exit;
    }
}