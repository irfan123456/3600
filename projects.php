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

<h4>Extra Problems</h4>
<ul>
    <li><a href="problems/missionaries.pdf">Missionaries and cannibals</a></li>
    <li><a href="problems/search.pdf">Search</a></li>
    <li><a href="problems/search2.pdf">Search 2</a></li>
    <li><a href="problems/csp.pdf">Constraint satisfaction</a></li>
    <li><a href="problems/chute.pdf">Expectiminimax</a></li>
</ul>

<br />
<h4>Software</h4>
<?php list_other($software_list); ?>

<?
include "footer.php";
?>
