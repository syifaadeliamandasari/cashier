document.addEventListener("DOMContentLoaded", function(event) {
    // Function to show/hide the navbar
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
              nav = document.getElementById(navId),
              bodypd = document.getElementById(bodyId),
              headerpd = document.getElementById(headerId);

        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                nav.classList.toggle('show');
                toggle.classList.toggle('bx-x');
                bodypd.classList.toggle('body-pd');
                headerpd.classList.toggle('body-pd');
            });
        }
    };

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

    // Function to activate the clicked link
    const linkColor = document.querySelectorAll('.nav_link');
    function colorLink() {
        linkColor.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink));
});

// Function to toggle edit mode
function toggleEditMode() {
    const profileInfo = document.getElementById('profile-info');
    const editForm = document.getElementById('edit-form');
    const editButton = document.getElementById('edit-button');

    if (editForm.style.display === 'none' || editForm.style.display === '') {
        profileInfo.style.display = 'none';
        editForm.style.display = 'block';
        editButton.textContent = 'Cancel';
    } else {
        profileInfo.style.display = 'block';
        editForm.style.display = 'none';
        editButton.textContent = 'Edit';
    }
}

// Function to preview the image
function previewImage(event) {
    const profileImage = document.getElementById('profile-image');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            profileImage.style.backgroundImage = `url(${e.target.result})`;
            profileImage.style.backgroundSize = 'cover';
            profileImage.style.backgroundPosition = 'center';
            profileImage.innerHTML = ''; // Clear the icon
        }
        reader.readAsDataURL(file);
    }
}

// Function to save changes
function saveChanges() {
    // Implement the logic to save changes
    toggleEditMode();
}

// Function to cancel edit
function cancelEdit() {
    // Implement the logic to cancel edit
    toggleEditMode();
}
