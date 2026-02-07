<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
}
?>

<h1>Admin Dashboard</h1>

<ul>
    <li><a href="edit_story.php">Edit Our Story</a></li>
    <li><a href="edit_values.php">Edit Core Values</a></li>
    <li><a href="edit_programs.php">Edit Programs</a></li>
    <li><a href="edit_team.php">Edit Team Members</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
