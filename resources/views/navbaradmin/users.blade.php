<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/usersadmin.css') }}" />
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
    <!--Container Main start-->
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>List <b>User</b></h2></div>
                        <div class="col-sm-4">
                            <button type="button" class="btn add-new" style="background-color: #6EACDA; color: white;" data-toggle="modal" data-target="#addNewModal">
                                <i class="fa fa-plus"></i> Add New
                            </button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roll }}</td>
                            <td>
                                <!-- Edit Button -->
                                <button
                                    type="button"
                                    class="btn btn-edit"
                                    title="Edit"
                                    style="background-color: #269f1d; color: white; width: 67px"
                                    data-id="{{ $user->id }}"
                                    data-name="{{ $user->name }}"
                                    data-email="{{ $user->email }}"
                                    data-roll="{{ $user->roll }}"
                                    data-toggle="modal"
                                    data-target="#editUserModal">
                                    <i class="fa fa-pencil"></i> Edit
                                </button>

                                <!-- Delete Button -->
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete" style="background-color: #dc3545; color: white;" title="Delete" onclick="return confirm('Are you sure you want to delete this user?');">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal HTML untuk Edit User -->
    <div id="editUserModal" class="modal fade" style="width: 100%;background-color:rgb(66, 68, 68)">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="editUserForm" method="post" action="{{ route('users.update', 0) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="editUserId">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="editUserName" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="editUserEmail" required>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" name="roll" required>
                                <option value="admin" {{ isset($user) && $user->roll == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="petugas" {{ isset($user) && $user->roll == 'petugas' ? 'selected' : '' }}>Petugas</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Save Changes">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal HTML untuk Add New User -->
    <div id="addNewModal" class="modal fade" style="width: 100%;background-color:rgb(66, 68, 68)">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="addNewUserForm" method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add New User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <select class="form-control" name="roll" required>
                                <option value="admin" {{ isset($user) && $user->roll == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="petugas" {{ isset($user) && $user->roll == 'petugas' ? 'selected' : '' }}>Petugas</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/useradmin.js') }}"></script>
</body>
</html>
