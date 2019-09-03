<?php
session_start();
// unset($_SESSION['todo']);
$todo = $_POST['todo_input'];
$duedate = $_POST['todo_due'];
$submit = $_POST['submit'];
$delete_todo = $_GET['delete'];


$_SESSION['todo'][] = [
   "todo_item" => $todo,
   "todo_due" => $duedate,
   "delete" => $delete_todo
];

if (isset($todo)) {
   header("location:index.php");
}
?>