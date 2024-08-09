<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sidebar Menu HTML and CSS | CodingNepal</title>
  <!-- Linking Google Font Link For Icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="{{ asset('css/dashboardadmin.css') }}" />
</head>
<body>
  <aside class="sidebar">
    <div class="sidebar-header">
      <img src="assets/booklogo.png" alt="logo" class="logo"/>
      <h2>Ngegrill</h2>
    </div>
    <ul class="sidebar-links">
      <h4>
        <span>General</span>
        <div class="menu-separator"></div>
      </h4>
      <li>
        <a href="#"><span class="material-symbols-outlined"> folder </span>Menu</a>
      </li>
      <li>
        <li>
            <a href="#"><span class="material-symbols-outlined"> shopping_cart   </span>Menu</a>
          </li>
          <li>
        <a href="#"><span class="material-symbols-outlined"> groups </span>Users</a>
      </li>
      <h4>
        <span>Account</span>
        <div class="menu-separator"></div>
      </h4>
      <li>
        <a href="#"><span class="material-symbols-outlined"> account_circle </span>Profile</a>
      </li>
      <li>
        <a href="#"><span class="material-symbols-outlined"> logout </span>Logout</a>
      </li>
    </ul>
    <div class="user-account">
      <div class="user-profile">
        <img src="assets/potoprofil.png" alt="Profile Image" class="pt" />
        <div class="user-detail">
          <h3>Ndaa</h3>
          <span>Admin   </span>
        </div>
      </div>
    </div>
  </aside>

</body>
</html>
