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
    <!-- alter table threads add FULLTEXT(`thread_title`,`thread_desc`); -->
    <div class="container my-3">
        <h1 class="py-3">Search results for <em>"<?php echo $_GET['search'] ?>"</em></h1>

        <?php
        $query = $_GET["search"];
    $sql = "select * from threads where match(thread_title,thread_desc) against ('$query')";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    $title = $row['thread_tittle'];
    $desc = $row['thread_desc'];

    echo'<div class="result">
            <h3> <a href="" class="text-dark">Can not install by Audio</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nostrum. Repudiandae consequatur,
                consectetur sed deleniti iste tempora quos, incidunt provident numquam quia nostrum. Rerum ipsam omnis
                illo hic quos doloribus, nihil quas numquam consectetur dicta
                necessitatibus error natus exercitationem laboriosam eligendi, saepe nemo incidunt ea. Et nam assumenda
                qui illo, eum voluptatibus.</p>
        </div>';
}
?>

        

        <div class="result">
            <h3> <a href="" class="text-dark">Can not install by Audio</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nostrum. Repudiandae consequatur,
                consectetur sed deleniti iste tempora quos, incidunt provident numquam quia nostrum. Rerum ipsam omnis
                illo hic dolor libero.
                Numquam commodi nesciunt placeat cupiditate eaque reiciendis possimus illo voluptates perferendis
                tempora ipsam aspernatur iste magni ipsa culpa exercitationem, eligendi non blanditiis et maiores.
                Provident rem dicta maxime. Fugit, saepe.
                Unde doloremque tempore sed nostrum sequi quos doloribus, nihil quas numquam consectetur dicta
                necessitatibus error natus exercitationem laboriosam eligendi, saepe nemo incidunt ea. Et nam assumenda
                qui illo, eum voluptatibus.</p>
        </div>

        <div class="result">
            <h3> <a href="" class="text-dark">Can not install by Audio</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nostrum. Repudiandae consequatur,
                consectetur sed deleniti iste tempora quos, incidunt provident numquam quia nostrum. Rerum ipsam omnis
                illo hic dolor libero.
                Numquam commodi nesciunt placeat cupiditate eaque reiciendis possimus illo voluptates perferendis
                tempora ipsam aspernatur iste magni ipsa culpa exercitationem, eligendi non blanditiis et maiores.
                Provident rem dicta maxime. Fugit, saepe.
                Unde doloremque tempore sed nostrum sequi quos doloribus, nihil quas numquam consectetur dicta
                necessitatibus error natus exercitationem laboriosam eligendi, saepe nemo incidunt ea. Et nam assumenda
                qui illo, eum voluptatibus.</p>
        </div>

        <div class="result">
            <h3> <a href="" class="text-dark">Can not install by Audio</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nostrum. Repudiandae consequatur,
                consectetur sed deleniti iste tempora quos, incidunt provident numquam quia nostrum. Rerum ipsam omnis
                illo hic dolor libero.
                Numquam commodi nesciunt placeat cupiditate eaque reiciendis possimus illo voluptates perferendis
                tempora ipsam aspernatur iste magni ipsa culpa exercitationem, eligendi non blanditiis et maiores.
                Provident rem dicta maxime. Fugit, saepe.
                Unde doloremque tempore sed nostrum sequi quos doloribus, nihil quas numquam consectetur dicta
                necessitatibus error natus exercitationem laboriosam eligendi, saepe nemo incidunt ea. Et nam assumenda
                qui illo, eum voluptatibus.</p>
        </div>

        <div class="result">
            <h3> <a href="" class="text-dark">Can not install by Audio</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nostrum. Repudiandae consequatur,
                consectetur sed deleniti iste tempora quos, incidunt provident numquam quia nostrum. Rerum ipsam omnis
                illo hic dolor libero.
                Numquam commodi nesciunt placeat cupiditate eaque reiciendis possimus illo voluptates perferendis
                tempora ipsam aspernatur iste magni ipsa culpa exercitationem, eligendi non blanditiis et maiores.
                Provident rem dicta maxime. Fugit, saepe.
                Unde doloremque tempore sed nostrum sequi quos doloribus, nihil quas numquam consectetur dicta
                necessitatibus error natus exercitationem laboriosam eligendi, saepe nemo incidunt ea. Et nam assumenda
                qui illo, eum voluptatibus.</p>
        </div>

        <div class="result">
            <h3> <a href="" class="text-dark">Can not install by Audio</a>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, nostrum. Repudiandae consequatur,
                consectetur sed deleniti iste tempora quos, incidunt provident numquam quia nostrum. Rerum ipsam omnis
                illo hic dolor libero.
                Numquam commodi nesciunt placeat cupiditate eaque reiciendis possimus illo voluptates perferendis
                tempora ipsam aspernatur iste magni ipsa culpa exercitationem, eligendi non blanditiis et maiores.
                Provident rem dicta maxime. Fugit, saepe.
                Unde doloremque tempore sed nostrum sequi quos doloribus, nihil quas numquam consectetur dicta
                necessitatibus error natus exercitationem laboriosam eligendi, saepe nemo incidunt ea. Et nam assumenda
                qui illo, eum voluptatibus.</p>
        </div>
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