<?php
// Include database connection file
include("../../../../database/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define variables from form inputs
    $ebookTitle = mysqli_real_escape_string($conn, $_POST['ebookTitle']);
    $authors = mysqli_real_escape_string($conn, $_POST['authors']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $publicationDate = mysqli_real_escape_string($conn, $_POST['publicationDate']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $language = mysqli_real_escape_string($conn, $_POST['language']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $format = mysqli_real_escape_string($conn, $_POST['format']);
    $accessUrl = mysqli_real_escape_string($conn, $_POST['accessUrl']);
    $imageCover = $_FILES['imageCover']['name']; // Get image cover filename

    // Generate a unique filename
    $uniqueFilename = uniqid() . "_" . $imageCover;

    // Upload image cover file to specified directory with the unique filename
    $targetDirectory = "../../../../uploads/";
    $targetFilePath = $targetDirectory . basename($uniqueFilename);
    move_uploaded_file($_FILES["imageCover"]["tmp_name"], $targetFilePath);

    // SQL query to insert e-book data into e-books table with the unique filename
    $sql = "INSERT INTO ebooks (ebook_title, authors, publisher, publication_date, description, language, subject, format, access_url, image_cover)
            VALUES ('$ebookTitle', '$authors', '$publisher', '$publicationDate', '$description', '$language', '$subject', '$format', '$accessUrl', '$uniqueFilename')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('E-Book added successfully!');
                window.location.href='../../ebooks.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>