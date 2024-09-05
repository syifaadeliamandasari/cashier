<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
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
                    <a href="{{ route('admin') }}" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{ route('productadmin') }}" class="nav_link">
                        <i class='bx bx-shopping-bag nav_icon'></i>
                        <span class="nav_name">Products</span>
                    </a>
                    <a href="{{ route('users.index') }}" class="nav_link active">
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
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <!-- Gambar Profil dengan Preview -->
                    <img id="profile-image" class="rounded-circle mt-5" src="assets/booklogo.png" alt="Profile Picture" width="200">
                    <input type="file" id="profile-picture" class="form-control mt-3" name="profile_picture" accept="image/*">
                    <span class="font-weight-bold mt-2">John Doe</span>
                    <span class="text-black-50">john_doe12@bbb.com</span>
                    <span>Admin</span>
                </div>

            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="text-right">Edit your profile</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="John"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="Doe" placeholder="Doe"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="headline" value="UI/UX Developer"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/profile.js') }}"></script>
</body>
</html>
