<html>
<?php include_once "connection.php"; ?>

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="bg-text">
        <img src="./logo.png" width="75" height="75">
    </div>
    <nav class="navbar navbar-expand-lg mt-3 mx-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-start flex-grow mx-5">
                    <li class="nav-item passive">
                        <a class="nav-link" href="#"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Products</a>
                    </li>
                    <div class="brandName">
                        <h3><b>Burger Bite</b></h3>
                    </div>
                </ul>
                <ul class="navbar-nav justify-content-end flex-grow-1 mx-5">
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><ion-icon name="cart-outline"></ion-icon></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userprofile.php"><ion-icon name="person-outline"></ion-icon></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
            <table class="table cart">
                <thead class="cart-header">
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr class="totalamt">
                        <td colspan="2">TOTAL AMOUNT:</td>
                        <td class="total amount">17 679,00</td>
                    </tr>
                </tfoot>

                <tbody>
                    <tr>
                        <td>
                            <div class="product_img">
                                <img src="burg.png">
                                <p class="price_name">BURGER</p>
                                <a class='delete' href='delete_item.php'><ion-icon name="trash-outline"></ion-icon></a>
                            </div>
                        </td>
                        <td><input type="number" class="form-control" id="item_qty" name="item_qty" min="1" max="10"
                                value="1">
                        <td class="subtotal"><span>28.00</span>
                    </tr>
                </tbody>
            </table>
            <div>
            <div class="back_check">
                <a href="product.php"class="btn btn-secondary">Back</a>
                <a href="product.php"class="btn btn-primary" type="submit">Proceed</a>
            </div>
        </div>
</body>
<script src="js/bootstrap.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>