<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('css/dashboardadmin.css') }}" />
  <link rel="icon" href="{{ asset('assets/fashion.png') }}" type="image/png">
  <style>
    .table-wrapper {
      display: flex;
      justify-content: space-between;
    }
    table {
      width: 48%;
    }
  </style>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="assets/fashion.png" alt="Logo" class="nav_logo-img">
                    <span class="nav_logo-name">CuteBaju</span>
                </a>

                <div class="nav_list">
                    <a href="{{ route('admin') }}" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{ route('productadmin') }}" class="nav_link">
                        <i class='bx bx-shopping-bag nav_icon'></i>
                        <span class="nav_name">Products</span>
                    </a>
                    <a href="{{ route('users.index') }}" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="{{ route('profile') }}" class="nav_link">
                        <i class='bx bx-user-circle nav_icon'></i>
                        <span class="nav_name">Profile</span>
                    </a>
                    <a href="{{ route('login') }}" class="nav_link">
                        <i class='bx bx-log-out nav_icon'></i>
                        <span class="nav_name">Log Out</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-wrapper">
        <!-- Container for Product Info -->
        <div class="container">
            <div class="text-container">
              <h3 class="bookk">Product</h3>
              <h5 class="bookk">{{ $products->count() }}</h5> <!-- Menampilkan jumlah produk -->
            </div>
        </div>

        <!-- Container for User Info -->
        <div class="container">
            <div class="text-container">
              <h3 class="bookk">Users</h3>
              <h5 class="bookk">{{ $users->count() }}</h5> <!-- Menampilkan jumlah pengguna -->
            </div>
        </div>
    </div>

    <!-- Wrapper for both tables -->
    <div class="table-wrapper">
        <!-- Table for Products -->
        <table>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Product</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->nama_produk }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Table for Users -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roll }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/dashboardadmin.js') }}"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
