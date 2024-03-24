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
            <h4>Testimonial Content</h4>
        </div>
        <main class="table table-striped table-hover">
            <table id="admin-table">
                <thead>
                    <tr>
                        <td>
                            <a href="#addUserAdminModal" class="btn btn-success create" data-toggle="modal"
                                id="create-btn">
                                Create Testimonial
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

            <!-- 
            database table name
            - id
            - title_content
            - description_content
            - name_content
            - jobTitle_content 
        -->


            <!-- Add Modal HTML -->
            <div id="addUserAdminModal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" id="addUserAdminModalContent">
                        <!-- modified bellow this for other content -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Testimonial Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body add_jobPost">
                            <div class="form-group">
                                <label>Testimonial Title</label>
                                <input type="text" id="about_heading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Description </label>
                                <textarea class="form-control" id="about_text_input" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Author Name</label>
                                <input type="text" id="about_name_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Author Job Title<Title></Title></label>
                                <input type="text" id="about_jobTitle_input" class="form-control" required>
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
                            <h4 class="modal-title">Testimonial Content Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body view_jobPost">
                            <div class="form-group">
                                <label>Testimonial Title</label>
                                <input type="text" id="about_heading_input" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Description </label>
                                <textarea class="form-control" id="about_text_input" readonly></textarea>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Author Name</label>
                                <input type="text" id="about_name_input" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Author Job Title<Title></Title></label>
                                <input type="text" id="about_jobTitle_input" class="form-control" readonly>
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
                            <h4 class="modal-title">Edit Testimonial Content</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body edit_jobPost">
                            <div class="form-group">
                                <label>Testimonial Title</label>
                                <input type="text" id="about_heading_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Description </label>
                                <textarea class="form-control" id="about_text_input" required></textarea>
                                <input type="hidden" id="edit_id" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Author Name</label>
                                <input type="text" id="about_name_input" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Testimonial Author Job Title<Title></Title></label>
                                <input type="text" id="about_jobTitle_input" class="form-control" required>
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
                            <h4 class="modal-title">Delete Testimonial Content</h4>
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

    <!-- 
            database table name
            - id
            - title_content
            - description_content
            - name_content
            - jobTitle_content 
        -->
    <script>
        $(document).ready(function () {
            jobPostList();

        });

        function jobPostList() {
            $.ajax({
                type: 'get',
                url: "crud-testimonialContent-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let tr = '';

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
            let title_content = $('.add_jobPost #about_heading_input').val().trim();
            let description_content = $('.add_jobPost #about_text_input').val().trim();
            let name_content = $('.add_jobPost #about_name_input').val().trim();
            let jobTitle_content = $('.add_jobPost #about_jobTitle_input').val().trim();

            // Check if any of the required fields is empty
            if (!title_content || !description_content) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('title_content', title_content);
            formData.append('description_content', description_content);
            formData.append('name_content', name_content);
            formData.append('jobTitle_content', jobTitle_content);


            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-testimonialContent-add.php",
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
                url: "crud-testimonialContent-view.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    // Delete
                    $('.delete_userAdmin #delete_id').val(response.id);
                    $('#record_id').text('RECORD ID : ' + response.id);
                    // View
                    $('.view_jobPost #about_heading_input').val(response.title_content);
                    $('.view_jobPost #about_text_input').val(response.description_content);
                    $('.view_jobPost #about_name_input').val(response.name_content);
                    $('.view_jobPost #about_jobTitle_input').val(response.jobTitle_content);

                    // Edit
                    $('.edit_jobPost #about_heading_input').val(response.title_content);
                    $('.edit_jobPost #about_text_input').val(response.description_content);
                    $('.edit_jobPost #about_name_input').val(response.name_content);
                    $('.edit_jobPost #about_jobTitle_input').val(response.jobTitle_content);
                    $('.edit_jobPost #edit_id').val(response.id);

                }
            });
        }


        function editJobPost() {
            let title_content = $('.edit_jobPost #about_heading_input').val().trim();
            let description_content = $('.edit_jobPost #about_text_input').val().trim();
            let name_content = $('.edit_jobPost #about_name_input').val().trim();
            let jobTitle_content = $('.edit_jobPost #about_jobTitle_input').val().trim();
            let editId = $('.edit_jobPost #edit_id').val();

            // Check if any of the required fields is empty
            if (!title_content || !description_content || !name_content || !jobTitle_content) {
                alert('Please fill in all the required fields.');
                return; // Do not proceed if any field is empty
            }

            let formData = new FormData();
            formData.append('title_content', title_content);
            formData.append('description_content', description_content);
            formData.append('name_content', name_content);
            formData.append('jobTitle_content', jobTitle_content);
            formData.append('id', editId);

            $.ajax({
                type: 'post',
                data: formData,
                processData: false,
                contentType: false,
                url: "crud-testimonialContent-edit.php",
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
                url: "crud-testimonialContent-delete.php",
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