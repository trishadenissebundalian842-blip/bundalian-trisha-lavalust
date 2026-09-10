<?php

class Auth extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('session');
    }

    public function login()
    {
        // If already logged in, go to products
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            header('Location: /Lab_5/products-crud/public/products');
            exit;
        }

        // Process login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $username = $_POST['username'];
            $password = $_POST['password'];

            // Simple authentication for the laboratory exercise
            if ($username === 'admin' && $password === 'admin123') {

                $this->session->set_userdata([
                    'username' => 'admin',
                    'logged_in' => true
                ]);

                header('Location: /Lab_5/products-crud/public/products');
                exit;
            }

            $data['error'] = 'Invalid username or password.';

            $this->call->view('auth/login', $data);
            return;
        }

        // Display login page
        $this->call->view('auth/login');
    }

    public function logout()
    {
        $this->session->unset_userdata([
            'username',
            'logged_in'
        ]);

        header('Location: /Lab_5/products-crud/public/auth/login');
        exit;
    }
}