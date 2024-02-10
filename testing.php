<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Candidate CV</title>
</head>

<body>
    <h2>Upload Candidate CV</h2>
     

    <form action="upload_cv.php" method="post" enctype="multipart/form-data">
        <label for="cv">Select CV file:</label>
        <input type="file" name="cv" id="cv" accept=".pdf, .doc, .docx" required>

        <br>

        <label for="candidateName">Candidate Name:</label>
        <input type="text" name="candidateName" id="candidateName" required>
        <br>
        <input type="submit" value="Upload CV">
    </form>
</body>
</html>
