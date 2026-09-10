<?php

class Products extends Controller
{
    public function __construct()
    {
        parent::__construct();

        // SESSION AUTHENTICATION
        // Only authenticated users can access Products
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: /Lab_5/products-crud/public/auth/login');
            exit;
        }

        $this->call->model('ProductModel', 'product');
    }

    // =========================
    // READ
    // =========================

    public function index()
    {
        $data['products'] = $this->product->all();

        $this->call->view('products/index', $data);
    }

    // =========================
    // CREATE - FORM
    // =========================

    public function create()
    {
        $this->call->view('products/create');
    }

    // =========================
    // CREATE - SAVE
    // =========================

    public function store()
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->product->insert($data);

        header('Location: /Lab_5/products-crud/public/products');
        exit;
    }

    // =========================
    // UPDATE - FORM
    // =========================

    public function edit($id)
    {
        $data['product'] = $this->product->find($id);

        $this->call->view('products/edit', $data);
    }

    // =========================
    // UPDATE - SAVE
    // =========================

    public function update($id)
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->product->update($id, $data);

        header('Location: /Lab_5/products-crud/public/products');
        exit;
    }

    // =========================
    // DELETE
    // =========================

    public function delete($id)
    {
        $this->product->delete($id);

        header('Location: /Lab_5/products-crud/public/products');
        exit;
    }
}