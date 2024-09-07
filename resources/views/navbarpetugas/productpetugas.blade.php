<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Product Admin</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href='https://unpkg.com/boxicons/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/productadmin.css') }}" />
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
                    <span class="nav_logo-name">Cute</span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('admin') }}" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="{{ route('productadmin') }}" class="nav_link active">
                        <i class='bx bx-shopping-bag nav_icon'></i>
                        <span class="nav_name">Products</span>
                    </a>
                    <a href="{{ route('userspetugas') }}" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Users</span>
                    </a>
                    <a href="{{ route('profilepetugas') }}" class="nav_link">
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
    <!--Container Main start-->
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>List <b>Product</b></h2></div>
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
                            <th>Kode Barang</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->item_code }}</td>
                            <td>{{ $product->nama_produk }}</td>
                            <td>{{ $product->harga }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" style="width: 50%">
                                @endif
                            </td>
                            <td>
                                <!-- Edit Button -->
                                <button
                                type="button"
                                class="btn btn-edit"
                                title="Edit"
                                style="background-color: #269f1d; color: white; width: 67px"
                                data-id="{{ $product->id }}"
                                data-item-code="{{ $product->item_code }}"
                                data-nama-produk="{{ $product->nama_produk }}"
                                data-harga="{{ $product->harga }}"
                                data-stock="{{ $product->stock }}"
                                data-image="{{ $product->image }}"
                                data-toggle="modal"
                                data-target="#editProductModal">
                                <i class="fa fa-pencil"></i> Edit
                            </button>

                                <!-- Delete Button -->
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
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
    <div id="editProductModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="editProductForm" method="post" enctype="multipart/form-data" action="{{ route('products.update', 0) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h4 class="modal-title" id="editProductModalLabel">Edit Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="editProductId">
                        <div class="form-group">
                            <label for="editItemCode">Item Code</label>
                            <input type="text" class="form-control" name="item_code" id="editItemCode" required>
                        </div>
                        <div class="form-group">
                            <label for="editNamaProduk">Nama Produk</label>
                            <input type="text" class="form-control" name="nama_produk" id="editNamaProduk" required>
                        </div>
                        <div class="form-group">
                            <label for="editHarga">Harga</label>
                            <input type="number" class="form-control" name="harga" id="editHarga" required>
                        </div>
                        <div class="form-group">
                            <label for="editStock">Stock</label>
                            <input type="number" class="form-control" name="stock" id="editStock" required>
                        </div>
                        <div class="form-group">
                            <label for="editImage">Image</label>
                            <input type="file" class="form-control" name="image" id="editImage">
                            <div id="currentImage"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Modal HTML for Add New Product -->
<div id="addNewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addNewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="addNewForm" method="post" enctype="multipart/form-data" action="{{ route('products.store') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="addNewModalLabel">Add New Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editProductId">
                    <div class="form-group">
                        <label for="editItemCode">Item Code</label>
                        <input type="text" class="form-control" name="item_code" id="editItemCode" required>
                    </div>
                    <div class="form-group">
                        <label for="editNamaProduk">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk" id="editNamaProduk" required>
                    </div>
                    <div class="form-group">
                        <label for="editHarga">Harga</label>
                        <input type="number" class="form-control" name="harga" id="editHarga" required>
                    </div>
                    <div class="form-group">
                        <label for="editStock">Stock</label>
                        <input type="number" class="form-control" name="stock" id="editStock" required>
                    </div>
                    <div class="form-group">
                        <label for="editImage">Image</label>
                        <input type="file" class="form-control" name="image" id="editImage">
                        <div id="currentImage"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/productadmin.js') }}"></script>
</body>
</html>
