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
    include 'partials/_dbconnect.php';
    include 'partials/_header.php';
  
  ?>
    <?php
$id = $_GET['catid'];
$sql = "SELECT * FROM `categories` WHERE categori_id=$id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $catname = $row['categori_name'];
                $catdesc = $row['categori_discription'];
            }
?>

    <?php
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
$th_tittle = $_POST['tittle'];
$th_desc = $_POST['desc'];
$sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_tittle', '$th_desc', '$id', '0', current_timestamp())";
$result = mysqli_query($conn, $sql);

    if($result){
        echo '<div class="alert alert-success" role="alert">
                ✅ Your question has been posted successfully!
              </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
                ❌ Failed to submit the question.
              </div>';
    }

}
?>


    <div class="container my-4">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Wellcome to the <?php echo $catname; ?> formus</h4>
            <p> <?php echo $catdesc; ?> </p>
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
                <label for="exampleInputEmail1" class="form-label">Problem Tittle</label>
                <input type="text" class="form-control" id="tittle" name="tittle" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Keep your tittle as short and crisp as possible</div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">elaburate your problem</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
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
     <h1 class="p-3">Browse Question</h1>

        <?php
$id = $_GET['catid'];
$sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
$result = mysqli_query($conn, $sql);

$noResult = true;

while($row = mysqli_fetch_assoc($result)){
    $noResult = false;
    $thread_id = $row['thread_id'];
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];

    echo '<div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="images/user-default.img" width="50px" alt="...">
            </div>
            <div class="as-0">
                <h5 class="ms-3"> <a class="text-dark" href="thread.php?threadid=' . $thread_id . '">'. $title .'</a></h5>
                <div class="flex-grow-1 ms-3">
                    '. $desc .'
                </div>
            </div>
        </div>';
}

if($noResult){
    echo '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">No questions for this category</h4>
            <p>Be the first person to ask a question.</p>
            <hr>
          </div>';
}
?>




        <!-- Maybe futher it use for templete  -->

        <!-- <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="images/user-default.img" width="50px" alt="...">
            </div>
            <div class="as-0">
                <h5 class="ms-3">Unable to install Payaudio error in window</h5>
                <div class="flex-grow-1 ms-3">
                    This is some content from a media component. You can replace this with any content and adjust it as
                    needed.
                </div>
            </div>
        </div> -->

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