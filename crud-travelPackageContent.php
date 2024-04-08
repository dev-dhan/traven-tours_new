<?php
if (!isset($_SESSION['username'])) {
    header('Location: admin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/admin-table.css">
</head>
<style>
    #travel_package_image,
    #travel_package_image-current {
        width: 100%;
        height: 100%;
    }

    #travel_package_image-container {
        width: 200px;
        height: 200px;
    }
</style>

<body>
    <div class="container-fluid admin-container">
        <div class="my-3">
            <h4>Tour Package Dashboard</h4>
        </div>
        <main class="table table-striped table-hover">
            <!-- <a href="adminLogout.php">Logout</a> -->
            <table id="admin-table">
                <thead>
                    <tr>
                        <td>
                            <a href="#addUserAdminModal" class="btn btn-success create" data-toggle="modal">Create
                                Package</a>
                        </td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Tour Package Title</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="userAdmin_data">
                </tbody>
            </table>

            <!-- Add Modal HTML -->
            <div id="addUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="addUserAdminModalContent">
                        <!-- modified bellow this for other content -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Package</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body add_travelPackage">
                            <div class="form-group">
                                <label>Package Image</label>
                                <input type="file" id="travel_package_image" class="form-control" accept="image/*" required>
                                <small id="add_imageValidationError" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Package Price</label>
                                <input type="text" id="travel_package_price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Promo</label>
                                <input type="text" id="travel_package_promo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Location</label>
                                <input type="text" id="travel_package_location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Contact</label>
                                <input type="text" id="travel_package_contact" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Title</label>
                                <input type="text" id="travel_package_description_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Description</label>
                                <textarea class="form-control" id="travel_package_description_content" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Package Contact Details</label>
                                <input type="text" id="travel_package_contact_details" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success create" value="Add" onclick="addTravelPackage()">
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Modal HTML -->
            <div id="viewUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="viewUserAdminModalContent">
                        <div class="modal-header">
                            <h4 class="modal-title">Package Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body view_travelPackage">
                            <div class="form-group">
                                <div class="mx-auto d-block" id="travel_package_image-container">
                                    <img src="assets/images/talentusph_logo.png" alt="job image" id="travel_package_image"
                                        class="border border-secondary rounded">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Package Price</label>
                                <input type="text" id="travel_package_price" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Package Promo</label>
                                <input type="text" id="travel_package_promo" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Package Location</label>
                                <input type="text" id="travel_package_location" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Package Contact</label>
                                <input type="text" id="travel_package_contact" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Package Title</label>
                                <input type="text" id="travel_package_description_title" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Package Description</label>
                                <textarea class="form-control" id="travel_package_description_content" readonly></textarea>
                            </div>
                            <div class="form-group">
                                <label>Package Contact Details</label>
                                <input type="text" id="travel_package_contact_details" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Modal HTML -->
            <div id="editUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="editUserAdminModalContent">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Package</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body edit_travelPackage">
                            <div class="form-group">
                                <label>Current Promo Image</label>
                                <div class="d-block" id="travel_package_image-container">
                                    <img src="" alt="job image" id="travel_package_image-current"
                                        class="border border-secondary rounded">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" id="travel_package_image" class="form-control" accept="image/*" required>
                                <small id="edit_imageValidationError" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Package Price</label>
                                <input type="text" id="travel_package_price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Promo</label>
                                <input type="text" id="travel_package_promo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Location</label>
                                <input type="text" id="travel_package_location" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Contact</label>
                                <input type="text" id="travel_package_contact" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Title</label>
                                <input type="text" id="travel_package_description_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Package Description</label>
                                <textarea class="form-control" id="travel_package_description_content" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Package Contact Details</label>
                                <input type="text" id="travel_package_contact_details" class="form-control" required>
                                <input type="hidden" id="edit_id" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info edit" onclick="editTravelPackage()" value="Save">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal HTML -->
            <div id="deleteUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content" id="deleteUserAdminModalContent">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Package</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body delete_travelPackage">
                            <p>Are you sure you want to delete these Record?</p>
                            <p class="text-danger text-center font-weight-bold" id="record_id"></p>
                            <input type="hidden" id="delete_id">
                        </div>
                        <input type="hidden" id="delete_id">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger delete" onclick="deleteTravelPackage()" value="Delete">
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            travelPackageList();

            $('.add_travelPackage #travel_package_image').on('change', function () {
                var fileInput = this;
                var maxSize = 2 * 1024 * 1024; // 2MB
                var allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Add more extensions if needed

                if (fileInput.files.length > 0) {
                    var fileName = fileInput.files[0].name;
                    var fileSize = fileInput.files[0].size;
                    var fileExtension = fileName.split('.').pop().toLowerCase();

                    if (fileSize > maxSize) {
                        $('#add_imageValidationError').html('Image size exceeds 2MB. Please choose a smaller image.');
                        $(fileInput).val(''); // Clear the selected file
                    } else if (!allowedExtensions.includes(fileExtension)) {
                        $('#add_imageValidationError').html('Invalid file format. Please choose a valid image file.');
                        $(fileInput).val(''); // Clear the selected file
                    } else {
                        $('#add_imageValidationError').html('');
                    }
                }
            });

        });

        function travelPackageList() {
            $.ajax({
                type: 'get',
                url: "crud-travelPackageContent-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let tr = '';
                    for (let i = 0; i < response.length; i++) {
                        let id = response[i].id;
                        let travel_package_description_title = response[i].travel_package_description_title;
                        let date_created = response[i].date_created;
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + travel_package_description_title + '</td>';
                        tr += '<td>' + date_created + '</td>';
                        tr += '<td>';
                        tr +=
                            '<a href="#viewUserAdminModal" class="m-1 btn view" data-toggle="modal" onclick=viewTravelPackage("' +
                            id +
                            '")>View</a>';
                        tr +=
                            '<a href="#editUserAdminModal" class="m-1 btn edit " data-toggle="modal" onclick=viewTravelPackage("' +
                            id +
                            '")>Edit</a>';
                        tr +=
                            '<a href="#deleteUserAdminModal" class="m-1 btn delete" data-toggle="modal" onclick=viewTravelPackage("' +
                            id +
                            '")>Delete</a>';
                        tr += '</td>';
                        tr += '</tr>';
                    }
                    // $('.loading').hide();
                    $('#userAdmin_data').html(tr);
                }
            });
        }

        function addTravelPackage() {
            let fileInput = $('.add_travelPackage #travel_package_image')[0];
            let travel_package_image = fileInput.files[0];
            let travel_package_price = $('.add_travelPackage #travel_package_price').val().trim();
            let travel_package_promo = $('.add_travelPackage #travel_package_contact').val().trim();
            let travel_package_location = $('.add_travelPackage #travel_package_location').val().trim();
            let travel_package_contact = $('.add_travelPackage #travel_package_contact').val().trim();
            let travel_package_description_title = $('.add_travelPackage #travel_package_description_title').val().trim();
            let travel_package_description_content = $('.add_travelPackage #travel_package_description_content').val().trim();
            let travel_package_contact_details = $('.add_travelPackage #travel_package_contact_details').val().trim();

            // Check if any of the required fields is empty
            if (!travel_package_image || !travel_package_price || !travel_package_promo || !travel_package_location || !travel_package_contact || !travel_package_description_title || !travel_package_description_content || !travel_package_contact_details ) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('travel_package_image', travel_package_image);
            formData.append('travel_package_price', travel_package_price);
            formData.append('travel_package_promo', travel_package_promo);
            formData.append('travel_package_location', travel_package_location);
            formData.append('travel_package_contact', travel_package_contact);
            formData.append('travel_package_description_title', travel_package_description_title);
            formData.append('travel_package_description_content', travel_package_description_content);
            formData.append('travel_package_contact_details', travel_package_contact_details);


            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-travelPackageContent-add.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('#addUserAdminModal').modal('hide');
                    travelPackageList();
                    alert(response.message);
                }
            });
        }

        function viewTravelPackage(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud-travelPackageContent-view.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    // let dynamicJobImage = `uploads`;

                    // Delete
                    $('.delete_travelPackage #delete_id').val(response.id);
                    $('#record_id').text('RECORD #' + response.id);

                    // View
                    console.log(response);
                    $('.view_travelPackage #travel_package_image').attr('src', `./uploads/${response.travel_package_image}`);
                    $('.view_travelPackage #travel_package_price').val(response.travel_package_price);
                    $('.view_travelPackage #travel_package_promo').val(response.travel_package_promo);
                    $('.view_travelPackage #travel_package_location').val(response.travel_package_location);
                    $('.view_travelPackage #travel_package_contact').val(response.travel_package_contact);
                    $('.view_travelPackage #travel_package_description_title').val(response.travel_package_description_title);
                    $('.view_travelPackage #travel_package_description_content').val(response.travel_package_description_content);
                    $('.view_travelPackage #travel_package_contact_details').val(response.travel_package_contact_details);

                    // Edit
                    console.log(response);
                    $('.edit_travelPackage #travel_package_image-current').attr('src', `./uploads/${response.travel_package_image}`);
                    $('.edit_travelPackage #travel_package_price').val(response.travel_package_price);
                    $('.edit_travelPackage #travel_package_promo').val(response.travel_package_promo);
                    $('.edit_travelPackage #travel_package_location').val(response.travel_package_location);
                    $('.edit_travelPackage #travel_package_contact').val(response.travel_package_contact);
                    $('.edit_travelPackage #travel_package_description_title').val(response.travel_package_description_title);
                    $('.edit_travelPackage #travel_package_description_content').val(response.travel_package_description_content);
                    $('.edit_travelPackage #travel_package_contact_details').val(response.travel_package_contact_details);
                    $('.edit_travelPackage #edit_id').val(response.id);

                    $('.edit_travelPackage #travel_package_image').on('change', function () {
                        const fileInput = this;
                        const maxSize = 2 * 1024 * 1024; // 2MB
                        const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Add more extensions if needed
                        const travelImageCurrent = $('#travel_package_image-current');
                        const fileReader = new FileReader();

                        if (fileInput.files.length > 0) {
                            const fileName = fileInput.files[0].name;
                            const fileSize = fileInput.files[0].size;
                            const fileExtension = fileName.split('.').pop().toLowerCase();

                            if (fileSize > maxSize) {
                                $('#edit_imageValidationError').html('Image size exceeds 2MB. Please choose a smaller image.');
                                $(fileInput).val(''); // Clear the selected file
                                travelImageCurrent.prop('src', `./uploads/${response.job_image}`);
                            } else if (!allowedExtensions.includes(fileExtension)) {
                                $('#edit_imageValidationError').html('Invalid file format. Please choose a valid image file.');
                                $(fileInput).val(''); // Clear the selected file
                                travelImageCurrent.prop('src', `./uploads/${response.job_image}`);
                            } else {
                                $('#edit_imageValidationError').html('');
                                fileReader.onload = function (event) {
                                    // Use prop method for boolean attribute 'src'
                                    travelImageCurrent.prop('src', event.target.result);
                                };

                                fileReader.readAsDataURL(fileInput.files[0]);
                            }
                        }
                    });
                }
            });
        }


        function editTravelPackage() {
            let fileInput = $('.edit_travelPackage #travel_package_image')[0];
            let travel_package_image = fileInput.files[0];
            let travel_package_price = $('.edit_travelPackage #travel_package_price').val().trim();
            let travel_package_promo = $('.edit_travelPackage #travel_package_promo').val().trim();
            let travel_package_location = $('.edit_travelPackage #travel_package_location').val().trim();
            let travel_package_contact = $('.edit_travelPackage #travel_package_contact').val().trim();
            let travel_package_description_title = $('.edit_travelPackage #travel_package_description_title').val().trim();
            let travel_package_description_content = $('.edit_travelPackage #travel_package_description_content').val().trim();
            let travel_package_contact_details = $('.edit_travelPackage #travel_package_contact_details').val().trim();
            let editId = $('.edit_travelPackage #edit_id').val();

            // Check if any of the required fields is empty
            if (!travel_package_price || !travel_package_promo || !travel_package_location || !travel_package_contact || !travel_package_description_title || !travel_package_description_content || !travel_package_contact_details) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('travel_package_image', travel_package_image);
            formData.append('travel_package_price', travel_package_price);
            formData.append('travel_package_promo', travel_package_promo);
            formData.append('travel_package_location', travel_package_location);
            formData.append('travel_package_contact', travel_package_contact);
            formData.append('travel_package_description_title', travel_package_description_title);
            formData.append('travel_package_description_content', travel_package_description_content);
            formData.append('travel_package_contact_details', travel_package_contact_details);
            formData.append('id', editId);
            
            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-travelPackageContent-edit.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('#editUserAdminModal').modal('hide');
                    travelPackageList();
                    alert(response.message);
                }

            });
        }

        function deleteTravelPackage() {
            var id = $('#delete_id').val();
            $('#deleteUserAdminModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud-travelPackageContent-delete.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    travelPackageList();
                    alert(response.message);
                }
            })
        }

    </script>
</body>

</html>