<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss - Coding forum</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
<?php
include 'partials/_header.php';
include 'partials/_dbconnect.php';

if(isset($_GET['threadid']) && is_numeric($_GET['threadid'])){
    $id = $_GET['threadid'];
} else {
    die("❌ threadid is missing in URL.");
}

$sql = "SELECT * FROM `threads` WHERE thread_id = $id";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("❌ SQL Query Failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
$title = $row['thread_title'];
$desc = $row['thread_desc'];


?>


    <div class="container my-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"><?php echo $title; ?> </h4>
            <p> <?php echo $desc; ?> </p>
            <hr>
            <p class="mb-0">This is pree to pree forum to sharing knowlegde with each other. No Spam / Advertising /
                Self-promote in the formus is not allow. require members to be respectful and to keep discussions
                on-topic, avoiding personal attacks, harassment, and offensive language.</p>
            <a><button type="button" class="btn btn-success mb-2 mt-4">Learn more</button></a>
        </div>
    </div>

    <div class="container py-2">
        <h1>discussions</h1>
    </div>

    <?php
  include 'partials/_footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
        integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
</body>

</html>