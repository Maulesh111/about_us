<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $story = $_POST["story"];
    file_put_contents("story.txt", $story);
    echo "Story updated successfully!";
}

$existingStory = file_exists("story.txt") ? file_get_contents("story.txt") : "";
?>

<h2>Edit Our Story</h2>

<form method="post">
    <textarea name="story" rows="8" cols="50"><?php echo $existingStory; ?></textarea><br><br>
    <button type="submit">Save</button>
</form>
