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

<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
$comment = $_POST['comment'];
$sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '0', current_timestamp());
";
$result = mysqli_query($conn, $sql);

    if($result){
        echo '<div class="alert alert-success" role="alert">
                ✅ Your comment has been posted successfully!
              </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                ❌ Failed to submit the comment.
              </div>';
    }

}
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

    <?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
   echo'<div class="container">
        <h1>Start a discussion</h1>
        <form action="'.$_SERVER["REQUEST_URI"]  .'"  method="post">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Post comment</button>
        </form>
    </div>';
}
    else{
       echo' <div class="container">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  You are not logged in, plz login to be able to install discussion.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

</div>';
    }
?>

    <div class="container py-2">
        <h1>discussions</h1>

<?php
$thread_id = $_GET['threadid'];
$sql = "SELECT * FROM `comments` WHERE thread_id=$thread_id";
$result = mysqli_query($conn, $sql);
$noResult = true;

while($row = mysqli_fetch_assoc($result)){
    $noResult = false;
    $comment_id = $row['comment_id'];
    $content = $row['comment_content'];
    $comment_time = $row['comment_time'];

    echo '<div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="images/user-default.img" width="50px" alt="...">
            </div>
            <div class="as-0">
                <div class="flex-grow-1 ms-3">
                <p class="fw-bold my-0">Anonymous user '. $comment_time .'</p>
                    '. $content .'
                </div>
            </div>
        </div>';
}

// Show no result message
if($noResult){
    echo '<div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">No comments yet</h4>
            <p>Be the first person to reply.</p>
            <hr>
          </div>';
}
?>
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