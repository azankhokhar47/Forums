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
        <strong>Welcome ❤️</strong>
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
        <section class="hero">
            <div class="container">
                <h1>About <span class="text-warning">iDiscuss Forum</span></h1>
                <p class="lead mt-3">A place where coders connect, learn, and solve problems together ❤️</p>
            </div>
        </section>

        <section class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/2721/2721293.png" class="img-fluid"
                        alt="Community">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="text-muted">
                        Our mission is to build a community-driven platform where programmers of all skill levels can
                        discuss, learn, and grow together.
                        Whether you’re a beginner struggling with your first PHP script or an expert debugging a complex
                        Java application,
                        iDiscuss Forum is here to help you.
                    </p>
                    <ul>
                        <li>🌱 Share your coding issues and get real solutions.</li>
                        <li>💡 Learn from other developers and improve your skills.</li>
                        <li>🤝 Collaborate and connect with passionate programmers worldwide.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <h1>About <span class="text-warning">iDiscuss Forum</span></h1>
                <p class="lead mt-3">A one-man project built with passion for coders, by a coder ❤️</p>
            </div>
        </section>
        
        <section class="container my-5 text-center">
            <img src="images/azan2.pic.jpg" alt="Azan Khokhar" class="about-img mb-3" style="
         width:160px; 
         height:160px; 
         border-radius:50%; 
         object-fit:contain; 
         background:#fff; 
         padding:6px;
         box-shadow:0 4px 12px rgba(0,0,0,0.3);
       ">

            <h2 class="mb-2">Azan Khokhar</h2>
            <p class="text-muted">Founder • Designer • Full Stack Developer</p>

            <div class="quote-box mx-auto col-md-8">
                "I built iDiscuss Forum to create a friendly and helpful space where developers can learn, grow, and
                solve programming challenges together."
            </div>
        </section>

        <section class="container my-5">
            <h2 class="section-title text-center mb-4">My Mission</h2>
            <p class="text-muted text-center col-md-10 mx-auto mb-5">
                As a passionate web developer, I understand how frustrating it can be to get stuck on a problem for
                hours.
                That’s why I created iDiscuss Forum — a simple yet powerful platform where anyone can post their coding
                issues
                and get real solutions from a supportive community.
            </p>

            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-4 mb-md-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/906/906343.png" class="img-fluid rounded"
                        alt="Colorful Programming Illustration">
                </div>
                <div class="col-md-6">
                    <ul class="text-muted">
                        <li>💡 Build a place where programmers can learn from each other.</li>
                        <li>🌍 Encourage collaboration and open discussion in technology.</li>
                        <li>🚀 Help beginners grow and become confident developers.</li>
                        <li>❤️ Keep everything clean, friendly, and community-driven.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container my-5 text-center">
            <h2 class="section-title mb-4">The Future of iDiscuss Forum</h2>
            <p class="text-muted col-md-10 mx-auto">
                I plan to expand iDiscuss Forum into a full developer hub with tutorials, code sharing,
                user profiles, and real-time discussions. My goal is to make it one of the best platforms for
                programmers to connect and grow their skills together.
            </p>
        </section>
    </div>
    <?php include 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"
        integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
</body>

</html>