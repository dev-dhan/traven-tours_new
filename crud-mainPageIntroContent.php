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
    #job-img,
    #main-img-current {
        width: 100%;
        height: 100%;
    }

    #job-img-container {
        width: 200px;
        height: 200px;
    }
</style>

<body>
    <div class="container-fluid admin-container">
        <div class="my-3">
            <h4>Introduction Content</h4>
        </div>
        <main class="table table-striped table-hover">
            <table id="admin-table">
                <thead>
                    <tr>
                        <td>
                            <!-- <a href="#addUserAdminModal" class="btn btn-success create" data-toggle="modal" disabled="disabled" style="pointer-events: none; opacity: 0.5;">Create Introduction</a> -->
                            <a href="#addUserAdminModal" class="btn btn-success create" data-toggle="modal"
                                id="create-btn">
                                Create Introduction
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Sub Heading Content</th>
                        <th>Heading Content</th>
                        <th>Text Content</th>
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
                            <h4 class="modal-title">Add Introduction Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body add_jobPost">
                            <div class="form-group">
                                <label>Main Image</label>
                                <input type="file" id="mainImage_input" class="form-control" accept="image/*" required>
                                <small id="add_imageValidationError" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Main Subheading</label>
                                <input type="text" id="mainSubheading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Main Heading</label>
                                <input type="text" id="mainHeading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Main Text</label>
                                <textarea class="form-control" id="mainText_input" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success create" value="Add" onclick="addJobPost()">
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Modal HTML -->
            <div id="viewUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="viewUserAdminModalContent">
                        <div class="modal-header">
                            <h4 class="modal-title">Introduction Content Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body view_jobPost">
                            <div class="form-group">
                                <div class="mx-auto d-block" id="job-img-container">
                                    <img src="assets/images/talentusph_logo.png" alt="job image" id="job-img"
                                        class="border border-secondary rounded">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Main Subheading</label>
                                <input type="text" id="mainSubheading_input" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Main Heading</label>
                                <input type="text" id="mainHeading_input" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Main Text</label>
                                <textarea class="form-control" id="mainText_input" readonly></textarea>
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
                            <h4 class="modal-title">Edit Introduction Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body edit_jobPost">
                            <div class="form-group">
                                <label>Current Main Image</label>
                                <div class="d-block" id="job-img-container">
                                    <img src="" alt="job image" id="main-img-current"
                                        class="border border-secondary rounded">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" id="mainImage_input" class="form-control" accept="image/*" required>
                                <small id="edit_imageValidationError" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Main Subheading</label>
                                <input type="text" id="mainSubheading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Main Heading</label>
                                <input type="text" id="mainHeading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Main Text</label>
                                <textarea class="form-control" id="mainText_input" required></textarea>
                                <input type="hidden" id="edit_id" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info edit" onclick="editJobPost()" value="Save">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delete Modal HTML -->
            <div id="deleteUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content" id="deleteUserAdminModalContent">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Introduction Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body delete_userAdmin">
                            <p>Are you sure you want to delete these Content?</p>
                            <p class="text-danger text-center font-weight-bold" id="record_id"></p>
                            <input type="hidden" id="delete_id">
                        </div>
                        <input type="hidden" id="delete_id">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger delete" onclick="deleteJobPost()" value="Delete">
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            jobPostList();

            $('.add_jobPost #jobImage_input').on('change', function () {
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

        function jobPostList() {
            $.ajax({
                type: 'get',
                url: "crud-mainPageIntroContent-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let tr = '';

                    // condition to disable create button when have 1 record

                    if (response.length > 0) {
                        $('#create-btn').hide();
                    } else {
                        $('#create-btn').show();
                    }

                    for (let i = 0; i < response.length; i++) {
                        let id = response[i].id;
                        let main_subheading = response[i].main_subheading;
                        let main_heading = response[i].main_heading;
                        let main_text = response[i].main_text;
                        tr += '<tr>';
                        tr += '<td>' + main_subheading + '</td>';
                        tr += '<td>' + main_heading + '</td>';
                        tr += '<td>' + main_text + '</td>';
                        tr += '<td>';
                        tr +=
                            '<a href="#viewUserAdminModal" class="m-1 btn view" data-toggle="modal" onclick=viewJobPost("' +
                            id +
                            '")>View</a>';
                        tr +=
                            '<a href="#editUserAdminModal" class="m-1 btn edit " data-toggle="modal" onclick=viewJobPost("' +
                            id +
                            '")>Edit</a>';
                        tr +=
                            '<a href="#deleteUserAdminModal" class="m-1 btn delete" data-toggle="modal" onclick=viewJobPost("' +
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

        function addJobPost() {
            let fileInput = $('.add_jobPost #mainImage_input')[0];
            let mainImage = fileInput.files[0];
            let mainSubheading = $('.add_jobPost #mainSubheading_input').val().trim();
            let mainHeading = $('.add_jobPost #mainHeading_input').val().trim();
            let mainText = $('.add_jobPost #mainText_input').val().trim();
            // Check if any of the required fields is empty
            if (!mainImage || !mainSubheading || !mainHeading || !mainText) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('mainImage', mainImage);
            formData.append('mainSubheading', mainSubheading);
            formData.append('mainHeading', mainHeading);
            formData.append('mainText', mainText);

            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-mainPageIntroContent-add.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('#addUserAdminModal').modal('hide');
                    jobPostList();
                    alert(response.message);
                }
            });
        }

        function viewJobPost(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud-mainPageIntroContent-view.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let dynamicJobImage = `uploads`;
                    // Delete
                    $('.delete_userAdmin #delete_id').val(response.id);
                    $('#record_id').text('RECORD TITLE : ' + response.main_heading);
                    // View
                    $('.view_jobPost #job-img').attr('src', `./uploads/${response.main_image}`);
                    $('.view_jobPost #mainSubheading_input').val(response.main_subheading);
                    $('.view_jobPost #mainHeading_input').val(response.main_heading);
                    $('.view_jobPost #mainText_input').val(response.main_text);
                    // Edit
                    $('.edit_jobPost #main-img-current').attr('src', `./uploads/${response.main_image}`);
                    $('.edit_jobPost #mainImage_input').val('');
                    $('.edit_jobPost #mainSubheading_input').val(response.main_subheading);
                    $('.edit_jobPost #mainHeading_input').val(response.main_heading);
                    $('.edit_jobPost #mainText_input').val(response.main_text);
                    $('.edit_jobPost #edit_id').val(response.id);

                    $('.edit_jobPost #mainImage_input').on('change', function () {
                        const fileInput = this;
                        const maxSize = 2 * 1024 * 1024; // 2MB
                        const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Add more extensions if needed
                        const jobImageCurrent = $('#main-img-current');
                        const fileReader = new FileReader();

                        if (fileInput.files.length > 0) {
                            const fileName = fileInput.files[0].name;
                            const fileSize = fileInput.files[0].size;
                            const fileExtension = fileName.split('.').pop().toLowerCase();

                            if (fileSize > maxSize) {
                                $('#edit_imageValidationError').html('Image size exceeds 2MB. Please choose a smaller image.');
                                $(fileInput).val(''); // Clear the selected file
                                jobImageCurrent.prop('src', `./uploads/${response.job_image}`);
                            } else if (!allowedExtensions.includes(fileExtension)) {
                                $('#edit_imageValidationError').html('Invalid file format. Please choose a valid image file.');
                                $(fileInput).val(''); // Clear the selected file
                                jobImageCurrent.prop('src', `./uploads/${response.job_image}`);
                            } else {
                                $('#edit_imageValidationError').html('');
                                fileReader.onload = function (event) {
                                    // Use prop method for boolean attribute 'src'
                                    jobImageCurrent.prop('src', event.target.result);
                                };

                                fileReader.readAsDataURL(fileInput.files[0]);
                            }
                        }
                    });
                }
            });
        }


        function editJobPost() {
            let fileInput = $('.edit_jobPost #mainImage_input')[0];
            let mainImage = fileInput.files[0];
            let mainSubheading = $('.edit_jobPost #mainSubheading_input').val().trim();
            let mainHeading = $('.edit_jobPost #mainHeading_input').val().trim();
            let mainText = $('.edit_jobPost #mainText_input').val().trim();
            let editId = $('.edit_jobPost #edit_id').val();

            // Check if any of the required fields is empty
            if (!mainSubheading || !mainHeading || !mainText) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('mainImage', mainImage);
            formData.append('mainSubheading', mainSubheading);
            formData.append('mainHeading', mainHeading);
            formData.append('mainText', mainText);
            formData.append('id', editId);

            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-mainPageIntroContent-edit.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('#editUserAdminModal').modal('hide');
                    jobPostList();
                    alert(response.message);
                }

            });
        }

        function deleteJobPost() {
            var id = $('#delete_id').val();
            $('#deleteUserAdminModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud-mainPageIntroContent-delete.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    jobPostList();
                    alert(response.message);
                }
            })
        }

    </script>
</body>

</html>