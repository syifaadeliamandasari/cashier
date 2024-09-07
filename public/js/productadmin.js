$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});

    document.addEventListener("DOMContentLoaded", function(event) {
                const showNavbar = (toggleId, navId, bodyId, headerId) => {
                    const toggle = document.getElementById(toggleId),
                        nav = document.getElementById(navId),
                        bodypd = document.getElementById(bodyId),
                        headerpd = document.getElementById(headerId);

                    // Validate that all variables exist
                    if (toggle && nav && bodypd && headerpd) {
                        toggle.addEventListener('click', () => {
                            // show navbar
                            nav.classList.toggle('show');
                            // change icon
                            toggle.classList.toggle('bx-x');
                            // add padding to body
                            bodypd.classList.toggle('body-pd');
                            // add padding to header
                            headerpd.classList.toggle('body-pd');
                        });
                    }
                };

                showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

                // LINK ACTIVE
                const linkColor = document.querySelectorAll('.nav_link');

                function colorLink() {
                    if (linkColor) {
                        linkColor.forEach(l => l.classList.remove('active'));
                        this.classList.add('active');
                    }
                }
                linkColor.forEach(l => l.addEventListener('click', colorLink));
            });
            $(document).on('click', '.btn-edit', function() {
                var productId = $(this).data('id');

                $.get('/products/' + productId + '/edit', function(product) {
                    $('#editProductId').val(product.id);
                    $('#editItemCode').val(product.item_code);
                    $('#editNamaProduk').val(product.nama_produk);
                    $('#editHarga').val(product.harga);
                    $('#editStock').val(product.stock);
                    $('#currentImage').html('<img src="/storage/' + product.image + '" style="width: 100px;">');
                    $('#editProductModal').modal('show');
                });
            });
