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
    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert" id="welcomeAlert">
        <strong>Contact us❤️</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
    setTimeout(function() {
        const alert = document.getElementById('welcomeAlert');
        if (alert) {
            const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
            bsAlert.close();
        }
    }, 2000);
    </script>

    <div class="container">
        <div class="container my-5">
            <h2 class="text-center mb-4 text-primary fw-bold">Report an Issue</h2>

            <form class="row g-3 col-md-8 mx-auto p-4 shadow-lg rounded bg-light">
                <!-- Username -->
                <div class="col-md-6 text-center mx-auto">
                    <label for="username" class="form-label fw-semibold d-block text-center">Username</label>
                    <input type="text" class="form-control text-center mx-auto" id="username" class="username"
                        placeholder="Enter your username" style="max-width: 300px;">
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label for="description" class="form-label fw-semibold">Issue Type</label>
                    <textarea class="form-control" id="description" id="description" ></textarea>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label for="description" class="form-label fw-semibold">Describe Your Issue</label>
                    <textarea class="form-control" id="description" id="description" rows="4"
                        placeholder="Please explain your issue here..." required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success px-5">Submit</button>
                </div>
            </form>
        </div>

    </div>
    <?php include 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
        integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
</body>

</html>