<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trisha Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f1e8;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 40px auto;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            margin: 0;
            color: #2e7d32;
            font-size: 34px;
        }

        .actions {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            transition: 0.2s;
            min-width: 140px;
        }

        .btn:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .add {
            background: #fbc02d;
            color: #333;
        }

        .logout {
            background: #2e7d32;
            color: white;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th {
            background: #2e7d32;
            color: white;
            padding: 14px;
            text-align: center;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        tr:hover {
            background: #fffde7;
        }

        .edit {
            color: #2e7d32;
            font-weight: bold;
            text-decoration: none;
        }

        .delete {
            color: #c62828;
            font-weight: bold;
            text-decoration: none;
        }

        @media (max-width: 600px) {

            .container {
                width: 95%;
                margin: 20px auto;
                padding: 20px 15px;
                border-radius: 15px;
            }

            .header h1 {
                font-size: 28px;
            }

            .actions {
                flex-direction: column;
                width: 100%;
            }

            .btn {
                width: 100%;
                max-width: 300px;
                padding: 13px 20px;
                border-radius: 30px;
            }

            table {
                font-size: 14px;
            }

            th,
            td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Trisha Store</h1>
    </div>

    <div class="actions">

        <a
            href="http://localhost/Lab_5/products-crud/public/products/create"
            class="btn add"
        >
            + Add Product
        </a>

        <a
            href="http://localhost/Lab_5/products-crud/public/auth/logout"
            class="btn logout"
        >
            Logout
        </a>

    </div>

    <div class="table-wrapper">

        <table>

            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>

            <?php foreach ($products as $product): ?>

            <tr>

                <td>
                    <?= $product['id']; ?>
                </td>

                <td>
                    <?= htmlspecialchars($product['product_name']); ?>
                </td>

                <td>
                    <?= htmlspecialchars($product['description']); ?>
                </td>

                <td>
                    ₱<?= number_format($product['price'], 2); ?>
                </td>

                <td>
                    <?= $product['quantity']; ?>
                </td>

                <td>

                    <a
                        href="http://localhost/Lab_5/products-crud/public/products/edit/<?= $product['id']; ?>"
                        class="edit"
                    >
                        Edit
                    </a>

                    |

                    <a
                        href="http://localhost/Lab_5/products-crud/public/products/delete/<?= $product['id']; ?>"
                        class="delete"
                        onclick="return confirm('Delete this product?');"
                    >
                        Delete
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>

</div>

</body>
</html>