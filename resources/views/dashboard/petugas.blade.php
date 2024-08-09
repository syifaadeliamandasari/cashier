<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sidebar Menu HTML and CSS</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('css/petugas.css') }}" />
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <img src="assets/booklogo.png" alt="Logo" class="nav_logo-img">
                    <span class="nav_logo-name">MochiId</span>
                </a>

                <div class="nav_list">
                    <a href="#" class="nav_link active">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-shopping-bag nav_icon'></i>
                        <span class="nav_name">Products</span>
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
              <h3 class="bookk">Menu</h3>
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
      </tbody>
      <tbody>
        <tr>
          <td>2</td>
          <td>Ice Coffe</td>
          <td>120</td>
        </tr>
        <!-- Tambahkan baris-baris data lainnya sesuai kebutuhan -->
      </tbody>
      <tbody>
        <tr>
          <td>3</td>
          <td>French Fries</td>
          <td>200</td>
        </tr>
        <!-- Tambahkan baris-baris data lainnya sesuai kebutuhan -->
      </tbody>
    </table>
    <script src="{{ asset('js/petugas.js') }}"></script>
</body>
</html>
