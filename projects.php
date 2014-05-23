<?php
$page = "projects";
include "header.php";
include "menu.php";
include "data.php";
?>

<div class="container-fluid">

<h4>Projects</h4>
<ul>
    <li>Project 0: Introduction to Python. <a href="http://www.codecademy.com/tracks/python">Complete the CodeAcademy Python Track.</a> (No Due Date)</li>
    <li>Project 1: <a href="project1.php">Search</a>. </li>
    <li>Project 2: Constraint Satisfaction Problems. </li>
    <li>Project 3: TBD. </li>
</ul>

<br />
<h4>Software</h4>
<?php list_other($software_list); ?>

<?
include "footer.php";
?>
