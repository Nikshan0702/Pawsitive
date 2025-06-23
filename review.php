<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Review System</title>
<link rel="stylesheet" type="text/css" href="css/review.css">




</head>
<body>


<h2 style="color: black; margin-top: 50px">Leave a Comment:</h2>
<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "reviews";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for adding a new comment
if(isset($_POST['submit_comment'])) {
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comments (comment, datetime) VALUES (?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $comment);
    if ($stmt->execute()) {
        echo '<div class="popup">Thank you for your comment!</div>';
    } else {
        echo '<div class="popup">Error: Unable to add comment.</div>';
    }
    $stmt->close();
}

// Handle form submission for deleting a comment
if(isset($_POST['delete_comment'])) {
    $comment_id = $_POST['delete_comment'];
    $sql = "DELETE FROM comments WHERE comment_Id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $comment_id);
    if ($stmt->execute()) {
        echo '<div class="popup">Comment deleted successfully!</div>';
    } else {
        echo '<div class="popup">Error deleting comment: ' . $conn->error . '</div>';
    }
    $stmt->close();
}

// Handle form submission for updating a comment
if(isset($_POST['update_comment'])) {
    $comment_id = $_POST['comment_id'];
    $updated_comment = $_POST['updated_comment'];
    if (!empty($updated_comment)) {
        $sql = "UPDATE comments SET comment=? WHERE comment_Id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $updated_comment, $comment_id);
        if ($stmt->execute()) {
            echo '<div class="popup">Comment updated successfully!</div>';
        } else {
            echo '<div class="popup">Error updating comment: ' . $conn->error . '</div>';
        }
        $stmt->close();
    } else {
        echo '<div class="popup">Please enter a comment to update.</div>';
    }
}

// Close the database connection
$conn->close();
?>

<form method="post" action="" onsubmit="return validateCommentForm()">
    <textarea name="comment" rows="4" cols="50" style="width: 700px; height:60px; margin-left: 40px; margin-top: 40px;"></textarea><br>
    <input type="submit" name="submit_comment" value="Submit Comment" style="width:140px; height: 30px; margin-left: 40px; background-color: grey; margin-top: 10px;">
</form>

<h2 style="color: black; margin-bottom: 80px; margin-top: 80px;">Show Comments:</h2>
<button id="show-comments" onclick="toggleComments() " style=" background-color: grey; width:140px; height: 30px; margin-left: 40px; margin-top: 20px; margin-bottom: 22px;">Show Comments</button>

<div class="comment-container hide-comments">
    <?php
    // Reconnect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Read comments
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='comment'>" . $row["comment"]. "
                <form method='post' action='' onsubmit='return confirm(\"Are you sure you want to delete this comment?\")'>
                    <input type='hidden' name='delete_comment' value='".$row["comment_Id"]."'>
                    <input type='submit' value='Delete'>
                </form> 
                <form method='post' action='' onsubmit='return validateUpdateCommentForm(this)'>
                    <input type='hidden' name='comment_id' value='".$row["comment_Id"]."'>
                    <textarea name='updated_comment' rows='2' cols='30'></textarea>
                    <input type='submit' name='update_comment' value='Update'>
                </form>
            </div>";
        }
    } else
     {
        echo "No comments yet.";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>


<script>
   

    function validateCommentForm() {
        var commentField = document.querySelector('textarea[name="comment"]');
        var comment = commentField.value.trim();
        if (comment === "") {
            alert("Please enter a comment.");
            commentField.focus();
            return false;
        }
        return true;
    }

    function validateUpdateCommentForm(form) {
        var updatedCommentField = form.querySelector('textarea[name="updated_comment"]');
        var updatedComment = updatedCommentField.value.trim();
        if (updatedComment === "") {
            alert("Please enter a comment to update.");
            updatedCommentField.focus();
            return false;
        }
        return true;
    }

    function toggleComments() {
        var commentsContainer = document.querySelector(".comment-container");
        commentsContainer.classList.toggle("hide-comments");
    }
</script>

<?php include 'newfooter.php'; ?>