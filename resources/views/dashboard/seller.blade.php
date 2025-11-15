<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page for seller</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f9fa;
        }

        /* Header */
        header {
            background-color: #343a40;
            color: white;
            padding: 20px;
        }

        header .container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Banner */
        .banner {
            background: url("https://via.placeholder.com/1200x300?text=Welcome+Seller") no-repeat center;
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(230, 45, 119);
            font-size: 36px;
            font-weight: bold;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
        }

        /* Products */
        .products {
            max-width: 1200px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }

        .product-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            transition: 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            border-radius: 4px;
            height: 180px;
            object-fit: cover;
        }

        .product-card img:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .product-card h4 {
            margin: 10px 0 5px;
            color: #333;
        }

        .product-card p {
            color: #777;
            font-size: 14px;
        }

        .product-card .price {
            color: #28a745;
            font-weight: bold;
            margin-top: 8px;
        }

        /* Footer */
        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>Seller Dashboard</h1>
            </div>
            <nav>
                <a id="home" href="#">Home</a>
                <a id="my-product" href="#">My Products</a>
                <a id="add-product" href="#">Add Product</a>
                <a id="order" href="#">Orders</a>
                <a id="logout" href="#">Logout</a>
            </nav>
        </div>
    </header>

    <!-- Banner -->
    <div class="banner">Welcome Back, Seller!</div>

    <!-- Product Grid -->
    <section class="products">
        @foreach ($products as $product)
            <div class="product-card">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                @else
                    <img src="https://via.placeholder.com/150" alt="No image">
                @endif
                <h4>{{ $product->name }}</h4>
                <p>{{ $product->description }}</p>
                <div class="price">${{ number_format($product->price, 2) }}</div>
            </div>
        @endforeach
    </section>

    <!-- Footer -->
    <footer>&copy; 2025 Your E-Commerce Platform | All rights reserved.</footer>
    <script>
        var home = document.getElementById("home");
        var home = document.getElementById("my-product");
        var home = document.getElementById("add-product");
        var home = document.getElementById("order");
        var home = document.getElementById("logout");

        function style() {
            home.addEventListener("click", function(event) {
                event.preventDefault;
                home.style.background.blue, color.cyan;
            });
        }
        style();
    </script>
</body>

</html>
