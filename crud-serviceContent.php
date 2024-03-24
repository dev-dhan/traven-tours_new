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
            <h4>Service Content</h4>
        </div>
        <main class="table table-striped table-hover">
            <table id="admin-table">
                <thead>
                    <tr>
                        <td>
                            <a href="#addUserAdminModal" class="btn btn-success create" data-toggle="modal"
                                id="create-btn">
                                Create Service
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Title Content</th>
                        <th>Description Content</th>
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
                            <h4 class="modal-title">Add Service Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body add_jobPost">
                            <div class="form-group">
                                <label>Service Image</label>
                                <input type="file" id="about_image_input" class="form-control" accept="image/*" required>
                                <small id="add_imageValidationError" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Service Title</label>
                                <input type="text" id="about_heading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Service Description </label>
                                <textarea class="form-control" id="about_text_input" required></textarea>
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
                            <h4 class="modal-title">Service Content Details</h4>
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
                                <label>Service Title</label>
                                <input type="text" id="about_heading_input" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Service Description </label>
                                <textarea class="form-control" id="about_text_input" readonly></textarea>
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
                            <h4 class="modal-title">Edit Service Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body edit_jobPost">
                            <div class="form-group">
                                <label>Current Service Image</label>
                                <div class="d-block" id="job-img-container">
                                    <img src="" alt="job image" id="main-img-current"
                                        class="border border-secondary rounded">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="file" id="about_image_input" class="form-control" accept="image/*" required>
                                <small id="edit_imageValidationError" style="color: red;"></small>
                            </div>
                            <div class="form-group">
                                <label>Service Title</label>
                                <input type="text" id="about_heading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Service Description </label>
                                <textarea class="form-control" id="about_text_input" required></textarea>
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
                            <h4 class="modal-title">Delete Service Content</h4>
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
                url: "crud-serviceContent-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let tr = '';

                    // condition to disable create button when have 1 record

                    // if (response.length > 0) {
                    //     $('#create-btn').hide();
                    // } else {
                    //     $('#create-btn').show();
                    // }

                    for (let i = 0; i < response.length; i++) {
                        let id = response[i].id;
                        let title_content = response[i].title_content;
                        let description_content = response[i].description_content;
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + title_content + '</td>';
                        tr += '<td>' + description_content + '</td>';
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
            let fileInput = $('.add_jobPost #about_image_input')[0];
            let image_content = fileInput.files[0];
            let title_content = $('.add_jobPost #about_heading_input').val().trim();
            let description_content = $('.add_jobPost #about_text_input').val().trim();
            // Check if any of the required fields is empty
            if (!image_content || !title_content || !description_content) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('image_content', image_content);
            formData.append('title_content', title_content);
            formData.append('description_content', description_content);

            // $.ajax({
            //     type: 'post',
            //     data: formData,
            //     processData: false,
            //     contentType: false,
            //     cache:false,
            //     url: "crud-serviceContent-add.php",
            //     success: function (data) {
            //         let response = JSON.parse(data);
            //         $('#addUserAdminModal').modal('hide');
            //         jobPostList();
            //         alert(response.message);
            //     }
            // });
            $.ajax({
        type: 'post',
        // data: formData,
        data: JSON.stringify(formData),
        processData: false,
        contentType: false,
        cache: false, // Disable caching for large data
        url: "crud-serviceContent-add.php",
        success: function (data) {
            let response = JSON.parse(data);
            $('#addUserAdminModal').modal('hide');
            jobPostList();
            alert(response.message);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.error("Error:", errorThrown);
            // Handle errors appropriately
    }
});
        }

        function viewJobPost(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "crud-serviceContent-view.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let dynamicJobImage = `uploads`;
                    // Delete
                    $('.delete_userAdmin #delete_id').val(response.id);
                    $('#record_id').text('RECORD TITLE : ' + response.title_content);
                    // View
                    $('.view_jobPost #job-img').attr('src', `./uploads/${response.image_content}`);
                    $('.view_jobPost #about_heading_input').val(response.title_content);
                    $('.view_jobPost #about_text_input').val(response.description_content);
                    // Edit
                    $('.edit_jobPost #main-img-current').attr('src', `./uploads/${response.image_content}`);
                    $('.edit_jobPost #about_image_input').val('');
                    $('.edit_jobPost #about_heading_input').val(response.title_content);
                    $('.edit_jobPost #about_text_input').val(response.description_content);
                    $('.edit_jobPost #edit_id').val(response.id);

                    $('.edit_jobPost #about_image_input').on('change', function () {
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
            let fileInput = $('.edit_jobPost #about_image_input')[0];
            let image_content = fileInput.files[0];
            let title_content = $('.edit_jobPost #about_heading_input').val().trim();
            let description_content = $('.edit_jobPost #about_text_input').val().trim();
            let editId = $('.edit_jobPost #edit_id').val();

            // Check if any of the required fields is empty
            if ( !title_content || !description_content) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('image_content', image_content);
            formData.append('title_content', title_content);
            formData.append('description_content', description_content);
            formData.append('id', editId);

            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-serviceContent-edit.php",
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
                url: "crud-serviceContent-delete.php",
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