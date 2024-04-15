<?php
include("../../../../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $bookId = mysqli_real_escape_string($conn, $_POST['bookId']);
    $editTitle = mysqli_real_escape_string($conn, $_POST['editTitle']);
    $editAuthors = mysqli_real_escape_string($conn, $_POST['editAuthors']);
    $editISBN = mysqli_real_escape_string($conn, $_POST['editISBN']);
    $editPublisher = mysqli_real_escape_string($conn, $_POST['editPublisher']);
    $editPublicationDate = mysqli_real_escape_string($conn, $_POST['editPublicationDate']);
    $editPlaceOfPublication = mysqli_real_escape_string($conn, $_POST['editPlaceOfPublication']);
    $editEdition = mysqli_real_escape_string($conn, $_POST['editEdition']);
    $editLanguage = mysqli_real_escape_string($conn, $_POST['editLanguage']);
    $editNumPages = mysqli_real_escape_string($conn, $_POST['editNumPages']);
    $editShelvingLocation = mysqli_real_escape_string($conn, $_POST['editShelvingLocation']);
    $editCallNumber = mysqli_real_escape_string($conn, $_POST['editCallNumber']);
    $editAccessionNumber = mysqli_real_escape_string($conn, $_POST['editAccessionNumber']);
    $editCopyrightYear = mysqli_real_escape_string($conn, $_POST['editCopyrightYear']);
    $editSubject = mysqli_real_escape_string($conn, $_POST['editSubject']);

    // Update book details in the database
    $sql = "UPDATE books SET 
            book_title = '$editTitle',
            authors = '$editAuthors',
            isbn = '$editISBN',
            publisher = '$editPublisher',
            publication_date = '$editPublicationDate',
            place_of_publication = '$editPlaceOfPublication',
            edition = '$editEdition',
            language = '$editLanguage',
            number_of_pages = '$editNumPages',
            shelving_location = '$editShelvingLocation',
            call_number_ddc = '$editCallNumber',
            accession_number = '$editAccessionNumber',
            copyright_year = '$editCopyrightYear',
            subject = '$editSubject'
            WHERE book_id = '$bookId'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Book details updated successfully!');
                window.location.href='../../books.php';
              </script>";
    } else {
        echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
                window.location.href='../../books.php';
              </script>";
    }

    mysqli_close($conn);
}
?>
