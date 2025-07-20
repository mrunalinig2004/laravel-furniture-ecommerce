<!DOCTYPE html>
<html>
<head>
    <title>Products - My Shop</title>
    <!-- ✅ Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- ✅ Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">🪑 FurnitureStore</a>
            <div>
                <a class="nav-link d-inline" href="/">Home</a>
                <a class="nav-link d-inline" href="/products">Products</a>
                <a class="nav-link d-inline" href="/contact">Contact</a>
                <a class="nav-link d-inline" href="/cart">Cart</a> <!-- Optional -->
            </div>
        </div>
    </nav>

    <!-- ✅ Product List -->
    <div class="container mt-4">
        <h1 class="mb-4">Furniture Products</h1>

        <ul class="list-group mb-4">

            <!-- Product 1 -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
                🛋️ Sofa Set - ₹15,000
                <form action="{{ route('add.to.cart') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="name" value="Modern Sofa Set">
                    <input type="hidden" name="price" value="15000">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button>
                </form>
            </li>

            <!-- Product 2 -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
                🍽️ Dining Table - ₹12,000
                <form action="{{ route('add.to.cart') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="name" value="Dining Table">
                    <input type="hidden" name="price" value="12000">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button>
                </form>
            </li>

            <!-- Product 3 -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
                🪑 Chair - ₹2,000
                <form action="{{ route('add.to.cart') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="name" value="Chair">
                    <input type="hidden" name="price" value="2000">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button>
                </form>
            </li>

            <!-- Product 4 -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
                🛏️ Bed - ₹18,000
                <form action="{{ route('add.to.cart') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="id" value="4">
                    <input type="hidden" name="name" value="Queen Size Bed">
                    <input type="hidden" name="price" value="18000">
                    <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button>
                </form>
            </li>

        </ul>

        <a href="/" class="btn btn-secondary me-2">← Back to Home</a>
        <a href="/cart" class="btn btn-success">🛒 View Cart</a>
    </div>

    <!-- ✅ Bootstrap JS (supports responsive navbar etc) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
