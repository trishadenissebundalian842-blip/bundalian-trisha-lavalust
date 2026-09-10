<?php

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primary_key = 'id';

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'quantity'
    ];

    public function __construct()
    {
        parent::__construct();
    }
}