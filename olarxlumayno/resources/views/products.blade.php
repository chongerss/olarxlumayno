<!DOCTYPE html>
<html>
<head>
    <title>Products - OLAYNO Lechon House</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff8ef;
        }

        nav {
            background: #8b1e12;
            padding: 20px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffb000;
        }

        h1 {
            text-align: center;
            color: #8b1e12;
            margin-top: 35px;
        }

        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            padding: 30px;
        }

        .card {
            background: white;
            width: 280px;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ccc;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card h2 {
            color: #8b1e12;
        }

        .price {
            color: #8b1e12;
            font-weight: bold;
        }

        footer {
            background: #8b1e12;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <!-- Navigation Menu -->
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('products') }}">Products</a>
        <a href="{{ route('contact') }}">Contact Us</a>
    </nav>

    <h1>Our Products</h1>

    <p style="text-align:center;">
        Discover our delicious and freshly prepared lechon products!
    </p>

    <div class="products">

        <!-- Whole Lechon Baboy -->
        <div class="card">
            <img src=""
                 alt="Whole Lechon Baboy">

            <h2>Whole Lechon Baboy</h2>

            <p>
                Perfect for birthdays, fiestas, celebrations,
                and family gatherings. Enjoy our delicious
                lechon with crispy skin and juicy meat.
            </p>

            <p class="price">Price: Contact Us</p>
        </div>

        <!-- Lechon Belly -->
        <div class="card">
            <img src=""
                 alt="Lechon Belly">

            <h2>Lechon Belly</h2>

            <p>
                Delicious roasted pork belly with crispy
                golden skin and flavorful, juicy meat.
                Perfect for sharing with family and friends.
            </p>

            <p class="price">Price: Contact Us</p>
        </div>

        <!-- Lechon Meals -->
        <div class="card">
            <img src=""
                 alt="Lechon Meals">

            <h2>Lechon Meals</h2>

            <p>
                A satisfying meal with delicious lechon
                and rice. Perfect for lunch, dinner,
                and everyday cravings.
            </p>

            <p class="price">Price: Contact Us</p>
        </div>

    </div>

    <footer>
        <p>&copy; 2026 OLAYNO Lechon House. All Rights Reserved.</p>
        <p>Sarap na babalik-balikan!</p>
    </footer>

</body>
</html>