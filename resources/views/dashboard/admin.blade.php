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
                    <img src="assets/cute.png" alt="Logo" class="nav_logo-img">
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
                    <a href="#" class="nav_link">
                        <i class='bx bx-user-circle nav_icon'></i>
                        <span class="nav_name">Profile</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-log-out nav_icon'></i>
                        <span class="nav_name">Log Out</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-wrapper">
        <div class="container">
            <div class="text-container">
              <h3 class="bookk">Product</h3>
              <h5 class="bookk">13</h5>
            </div>
          </div>
        <div class="container">
          <div class="text-container">
            <h3 class="bookk">Users</h3>
            <h5 class="bookk">100</h5>
          </div>
        </div>
      </div>

      <!-- Wrapper for both tables -->
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name Product</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Burger Cheese</td>
              <td>45</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Ice Coffe</td>
              <td>120</td>
            </tr>
            <tr>
              <td>3</td>
              <td>French Fries</td>
              <td>200</td>
            </tr>
            <!-- Tambahkan baris-baris data lainnya sesuai kebutuhan -->
          </tbody>
        </table>

        <table>
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name Product</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Burger Cheese</td>
              <td>45</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Ice Coffe</td>
              <td>120</td>
            </tr>
            <tr>
              <td>3</td>
              <td>French Fries</td>
              <td>200</td>
            </tr>
            <!-- Tambahkan baris-baris data lainnya sesuai kebutuhan -->
          </tbody>
        </table>
      </div>

    <script src="{{ asset('js/dashboardadmin.js') }}"></script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
</body>
</html>
