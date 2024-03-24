<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting Form</title>
</head>

<body>
    <h2>Job Posting Form</h2>
    <form action="job-post-add.php" method="POST" enctype="multipart/form-data">
        <!-- ID is auto-incremented, so it's not included in the form -->

        <!-- Job Image -->
        <label for="job_image">Job Image:</label>
        <input type="file" id="job_image" name="job_image" accept="image/*" required>
        <br>
        <!-- Job Role -->
        <label for="job_role">Job Role:</label>
        <input type="text" id="job_role" name="job_role" required>
        <br>
        <!-- Location -->
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
        <br>
        <!-- Job Type -->
        <label for="job_type">Job Type:</label>
        <input type="text" id="job_type" name="job_type" required>
        <br>
        <!-- Date Created -->
        <!-- <label for="date_created">Date Created:</label>
        <input type="date" id="date_created" name="date_created" required>
        <br> -->
        <!-- Job Description -->
        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" rows="4" required></textarea>
        <br>
        <!-- Qualification -->
        <label for="qualification">Qualification:</label>
        <input type="text" id="qualification" name="qualification" required>
        <br>
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
</body>

</html>