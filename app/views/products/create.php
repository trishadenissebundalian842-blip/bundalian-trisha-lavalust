<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trisha Store - Add Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f5f1e8;
        }

        .container {
            width: 90%;
            max-width: 500px;
            background: white;
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
            color: #2e7d32;
            font-size: 32px;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 16px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 12px;
            font-size: 15px;
            outline: none;
            font-family: Arial, sans-serif;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input:focus,
        textarea:focus {
            border-color: #2e7d32;
        }

        .button {
            width: 100%;
            padding: 13px;
            margin-top: 20px;
            border: none;
            border-radius: 30px;
            background: #2e7d32;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #2e7d32;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .container {
                width: 92%;
                padding: 30px 22px;
            }

            .header h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Trisha Store</h1>
    </div>

    <form
        action="http://localhost/Lab_5/products-crud/public/products/store"
        method="POST"
    >

        <label>Product Name:</label>
        <input
            type="text"
            name="product_name"
            required
        >

        <br><br>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <br><br>

        <label>Price:</label>
        <input
            type="number"
            name="price"
            step="0.01"
            required
        >

        <br><br>

        <label>Quantity:</label>
        <input
            type="number"
            name="quantity"
            required
        >

        <button type="submit" class="button">
            Add Product
        </button>

    </form>

    <a
        href="http://localhost/Lab_5/products-crud/public/products"
        class="back"
    >
        Back to Products
    </a>

</div>

</body>
</html>