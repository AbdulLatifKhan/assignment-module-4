<?php

class Product
{
    private int $productId;
    private string $ProductName;
    private float $productPrice;

    public function __construct($id, $name, $price)
    {
        $this->productId = $id;
        $this->ProductName = $name;
        $this->productPrice = $price;
    }

    public function getFormattedPrice(): string
    {
        return '$' . number_format($this->productPrice, 2);
    }

    public function showDetails()
    {
        echo "Product Details:\n";
        echo "- ID: {$this->productId}\n";
        echo "- Name: {$this->ProductName}\n";
        echo "- Price: {$this->getFormattedPrice()}";
    }

}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
