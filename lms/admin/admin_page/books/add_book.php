<?php
// Include database connection file
include("../../../../database/connection.php");

// Define variables from form inputs
$bookTitle = $_POST['bookTitle'];
$authors = $_POST['authors'];
$isbn = $_POST['isbn'];
$publisher = $_POST['publisher'];
$publicationDate = $_POST['publicationDate'];
$placeOfPublication = $_POST['placeOfPublication'];
$edition = $_POST['edition'];
$language = $_POST['language'];
$numberOfPages = $_POST['numberOfPages'];
$shelvingLocation = $_POST['shelvingLocation'];
$callNumber = $_POST['callNumber'];
$accessionNumber = $_POST['accessionNumber'];
$catalogCategory = $_POST['catalogCategory']; // Added catalog category
$copyrightYear = $_POST['copyrightYear'];
$subject = $_POST['subject'];
$imageCover = $_FILES['imageCover']['name']; // Get image cover filename

// Generate a unique filename
$uniqueFilename = uniqid() . "_" . $imageCover;

// Upload image cover file to specified directory with the unique filename
$targetDirectory = "../../../../uploads/";
$targetFilePath = $targetDirectory . basename($uniqueFilename);
move_uploaded_file($_FILES["imageCover"]["tmp_name"], $targetFilePath);

// SQL query to insert book data into books table with the unique filename
$sql = "INSERT INTO books (book_title, authors, isbn, publisher, publication_date, place_of_publication, edition, language, number_of_pages, shelving_location, call_number_ddc, accession_number, catalog_name, copyright_year, subject, image_cover)
        VALUES ('$bookTitle', '$authors', '$isbn', '$publisher', '$publicationDate', '$placeOfPublication', '$edition', '$language', '$numberOfPages', '$shelvingLocation', '$callNumber', '$accessionNumber', '$catalogCategory', '$copyrightYear', '$subject', '$uniqueFilename')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "<script>
                alert('Book added successfully!');
                window.location.href='../../books.php';
              </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
