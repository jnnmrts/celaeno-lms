<?php
include("../../../../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST['ebook_id'], $_POST['editEbookTitle'], $_POST['editAuthors'], $_POST['editPublisher'], $_POST['editPublicationDate'], $_POST['editDescription'], $_POST['editLanguage'], $_POST['editSubject'], $_POST['editFormat'], $_POST['editAccessUrl'])) {
        
        // Retrieve data from POST request
        $ebookId = $_POST['ebook_id'];
        $title = $_POST['editEbookTitle'];
        $authors = $_POST['editAuthors'];
        $publisher = $_POST['editPublisher'];
        $publicationDate = $_POST['editPublicationDate'];
        $description = $_POST['editDescription'];
        $language = $_POST['editLanguage'];
        $subject = $_POST['editSubject'];
        $format = $_POST['editFormat'];
        $accessUrl = $_POST['editAccessUrl'];
        
        // Prepare update query
        $sql = "UPDATE ebooks SET ebook_title='$title', authors='$authors', publisher='$publisher', publication_date='$publicationDate', description='$description', language='$language', subject='$subject', format='$format', access_url='$accessUrl' WHERE ebook_id=$ebookId";

        // Execute the update query
        if (mysqli_query($conn, $sql)) {
            echo "E-book details updated successfully.";
        } else {
            echo "Error updating e-book details: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
