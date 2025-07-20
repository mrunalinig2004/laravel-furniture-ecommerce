<!DOCTYPE html>
<html>
<head>
    <title>Your Cart - FurnitureStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">🪑 FurnitureStore</a>
    <div>
      <a class="nav-link d-inline" href="/">Home</a>
      <a class="nav-link d-inline" href="/products">Products</a>
      <a class="nav-link d-inline" href="/cart">Cart</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
    <h1>Your Cart</h1>
    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach($cart as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>₹{{ number_format($item['price']) }}</td>
                        <td>₹{{ number_format($item['price'] * $item['quantity']) }}</td>
                        <td>
                            <a href="{{ route('cart.remove', $item['id']) }}" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
                    @php $total += $item['price'] * $item['quantity']; @endphp
                @endforeach
                <tr>
                    <th colspan="3" class="text-end">Total:</th>
                    <th colspan="2">₹{{ number_format($total) }}</th>
                </tr>
            </tbody>
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif
    <a href="/products" class="btn btn-primary">← Continue Shopping</a>
</div>
</body>
</html>
