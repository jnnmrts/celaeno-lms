<?php
// Include database connection file
include("../../../../database/connection.php");

// Define variables from form inputs
$title = $_POST['addTitle'];
$issn = $_POST['addISSN'];
$frequency = $_POST['addFrequency'];
$subject = $_POST['addSubject'];
$description = $_POST['addDescription'];
$publisher = $_POST['addPublisher'];
$publicationDate = $_POST['addPublicationDate'];
$volumeIssue = $_POST['addVolumeIssue'];
$language = $_POST['addLanguage'];
$schoolAffiliation = $_POST['addSchoolAffiliation'];
$accessUrl = $_POST['addAccessUrl'];
$shelvingLocation = $_POST['addShelvingLocation'];
$imageCover = $_FILES['addImageCover']['name']; // Get image cover filename

// Generate a unique filename
$uniqueFilename = uniqid() . "_" . $imageCover;

// Upload image cover file to specified directory with the unique filename
$targetDirectory = "../../../../uploads/magazine_journal/";
$targetFilePath = $targetDirectory . basename($uniqueFilename);
move_uploaded_file($_FILES["addImageCover"]["tmp_name"], $targetFilePath);

// SQL query to insert magazine/journal data into the database with the unique filename
$sql = "INSERT INTO magazines_journals (title, issn, frequency, subject, description, publisher, publication_date, volume_issue, language, school_affiliation, access_url, shelving_location, image_cover)
        VALUES ('$title', '$issn', '$frequency', '$subject', '$description', '$publisher', '$publicationDate', '$volumeIssue', '$language', '$schoolAffiliation', '$accessUrl', '$shelvingLocation', '$uniqueFilename')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "<script>
                alert('Magazine/Journal added successfully!');
                window.location.href='../../magazine_journal.php';
              </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
