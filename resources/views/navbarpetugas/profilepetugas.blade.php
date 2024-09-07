<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Ensure Font Awesome is included -->
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
  <link rel="icon" href="{{ asset('assets/fashion.png') }}" type="image/png">
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
                    <a href="{{ route('petugas') }}" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{ route('productpetugas') }}" class="nav_link">
                        <i class='bx bx-shopping-bag nav_icon'></i>
                        <span class="nav_name">Products</span>
                    </a>
                    <a href="{{ route('userspetugas') }}" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="{{ route('profilepetugas') }}" class="nav_link active">
                        <i class='bx bx-user-circle nav_icon'></i>
                        <span class="nav_name">Profile</span>
                    </a>
                    <a href="{{ route('loginpetugas') }}" class="nav_link">
                        <i class='bx bx-log-out nav_icon'></i>
                        <span class="nav_name">Log Out</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <div id="profile-image" class="img-radius">
                                            <i class="fas fa-user"></i> <!-- Font Awesome icon -->
                                        </div>
                                    </div>
                                    <input type="file" id="image-upload" style="display: none;" onchange="previewImage(event)">
                                    <h6 style="font-size: 25px; margin-left: 20px" id="user-name" class="f-w-600">Zhaskia</h6>
                                    <p style="font-size: 15px; margin-left: 20px;" id="user-role">Admin</p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <button style="margin-left: 20px; background-color: #03346E; color: #fff; border: none;" class="btn mt-2" onclick="document.getElementById('image-upload').click()">Change</button>
                                    <div style="margin-right: 50px; margin-top: 2%" class="d-flex justify-content-end">
                                        <button class="btn btn-light" id="edit-button" onclick="toggleEditMode()">Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block" id="profile-info">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Profile</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 id="user-email" class="text-muted f-w-400">zhaskia@gmail.com</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Username</p>
                                            <h6 id="user-phone" class="text-muted f-w-400">98979989898</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Alamat</p>
                                            <h6 id="address" class="text-muted f-w-400">Sam Disuja</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Password Lama</p>
                                            <h6 id="old-password" class="text-muted f-w-400">Dinoter husainm</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Password Baru</p>
                                            <h6 id="new-password" class="text-muted f-w-400">Sam Disuja</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Konfirmasi Password Baru</p>
                                            <h6 id="confirm-password" class="text-muted f-w-400">Dinoter husainm</h6>
                                        </div>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="instagram"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div id="edit-form" style="display: none;">
                                    <form>
                                        <label>Email:</label>
                                        <input type="email" id="email-input" value="">
                                        <br>
                                        <label>Username:</label>
                                        <input type="text" id="username-input" value="">
                                        <br>
                                        <label>Alamat:</label>
                                        <input type="text" id="address-input" value="">
                                        <br>
                                        <label>Password Lama:</label>
                                        <input type="password" id="old-password-input" value="">
                                        <br>
                                        <label>Password Baru:</label>
                                        <input type="password" id="new-password-input" value="">
                                        <br>
                                        <label>Konfirmasi Password Baru:</label>
                                        <input type="password" id="confirm-password-input" value="">
                                        <br>
                                        <div class="button">
                                          <button type="button" class="btn btn-success" onclick="saveChanges()">Save</button>
                                          <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/profile.js') }}"></script>
</body>
</html>
