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
    <title>Admin Crud Application</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/admin-table.css">
</head>

<body>
    <div class="container-fluid admin-container">
        <div class="my-3">
            <h4>Admin Dashboard</h4>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 d-flex">
                <div class="card flex-fill border-0 illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <?php echo "<h4>Welcome Back, $username</h4>" ?>
                                    <p class="mb-0">Admin Dashborad, TalentUs</p>
                                </div>
                            </div>

                            <div class="col-6 align-self-end text-end">
                                <img src="assets/images/customer.png" class="img-fluid illustration"
                                    alt="Admin Support">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="table table-striped table-hover">
                <!-- <a href="adminLogout.php">Logout</a> -->
                <table id="admin-table">
                    <thead>
                        <tr>
                            <td>
                                <a href="#addUserAdminModal" class="btn btn-success create" data-toggle="modal">Create
                                    Admin</a>
                            </td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="userAdmin_data">
                    </tbody>
                </table>

                <!-- Add Modal HTML -->
                <div id="addUserAdminModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" id="addUserAdminModalContent">
                            <div class="modal-header">
                                <h4 class="modal-title">Add User Admin</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body add_userAdmin">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" id="username_input" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password_input" class="form-control password_input_add"
                                        required>
                                    <input type="checkbox" onclick="addAdminTogglePassword()"> Show Password
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-success create" value="Add"
                                    onclick="addUserAdmin()">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal HTML -->
                <div id="editUserAdminModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" id="editUserAdminModalContent">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit UserAdmin</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body edit_userAdmin">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" id="username_input" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="password_input" class="form-control password_input_edit"
                                        required>
                                    <input type="checkbox" onclick="editAdminTogglePassword()"> Show Password
                                    <input type="hidden" id="admin_id" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-info edit" onclick="editUserAdmin()" value="Save">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Delete Modal HTML -->
                <div id="deleteUserAdminModal" class="modal fade">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content" id="deleteUserAdminModalContent">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete Admin User</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body delete_userAdmin">
                                <p>Are you sure you want to delete these Record?</p>
                                <p class="text-danger text-center font-weight-bold" id="record_id"></p>
                                <input type="hidden" id="delete_id">
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger delete" onclick="deleteAdminUser()"
                                    value="Delete">
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            userAdminList();

        });

        function editAdminTogglePassword() {
            let passwordInput = document.querySelector(".password_input_edit");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }

        function addAdminTogglePassword() {
            let passwordInput = document.querySelector(".password_input_add");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }

        function userAdminList() {
            $.ajax({
                type: 'get',
                url: "admin-user-list.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    let tr = '';
                    for (let i = 0; i < response.length; i++) {
                        let id = response[i].id;
                        let username = response[i].username;
                        let password = response[i].password;
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + username + '</td>';
                        tr += '<td>' + password + '</td>';
                        tr += '<td>';
                        tr +=
                            '<a href="#editUserAdminModal" class="m-1 btn edit " data-toggle="modal" onclick=viewAdminUser("' +
                            id +
                            '")>Edit</a>';
                        tr +=
                            '<a href="#deleteUserAdminModal" class="m-1 btn delete" data-toggle="modal" onclick=viewAdminUser("' +
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

        function addUserAdmin() {
            let username = $('.add_userAdmin #username_input').val().trim();
            let password = $('.add_userAdmin #password_input').val().trim();

            // Check if the required fields are empty
            if (!username || !password) {
                alert('Please fill in both the username and password fields.');
                return; // Do not proceed if any field is empty
            }

            $.ajax({
                type: 'post',
                data: {
                    username: username,
                    password: password,
                },
                url: "admin-user-add.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('#addUserAdminModal').modal('hide');
                    userAdminList();
                    alert(response.message);
                }

            })
        }

        function viewAdminUser(id = 2) {
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "admin-user-view.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('.edit_userAdmin  #username_input').val(response.username);
                    $('.edit_userAdmin  #password_input').val(response.password);
                    $('.edit_userAdmin #admin_id').val(response.id);
                    $('.delete_userAdmin #delete_id').val(response.id);
                    $('#record_id').text('RECORD #' + response.id);
                }
            })
        }


        function editUserAdmin() {
            let username = $('.edit_userAdmin #username_input').val().trim();
            let password = $('.edit_userAdmin #password_input').val().trim();
            let adminId = $('.edit_userAdmin #admin_id').val();

            // Check if the required fields are empty
            if (!username || !password) {
                alert('Please fill in both the username and password fields.');
                return; // Do not proceed if any field is empty
            }

            $.ajax({
                type: 'post',
                data: {
                    username: username,
                    password: password,
                    admin_id: adminId,
                },
                url: "admin-user-edit.php",
                success: function (data) {
                    let response = JSON.parse(data);
                    $('#editUserAdminModal').modal('hide');
                    userAdminList();
                    alert(response.message);
                }

            })
        }

        function deleteAdminUser() {
            var id = $('#delete_id').val();
            $('#deleteUserAdminModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    id: id,
                },
                url: "admin-user-delete.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    userAdminList();
                    alert(response.message);
                }
            })
        }

    </script>
</body>

</html>