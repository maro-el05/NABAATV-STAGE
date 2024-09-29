<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Post News</title>
    <link rel="stylesheet" href="path_to_bootstrap.css">
</head>

<body>
    <div class="container">
        <h2>Post a New Article</h2>
        <form action="post_article.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Article Title:</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Article Content:</label>
                <textarea class="form-control" name="content" rows="10" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" required>
                    <option value="sports">Sports</option>
                    <option value="politics">Politics</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="morocco">Morocco</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Article Image:</label>
                <input type="file" class="form-control" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Post Article</button>
        </form>
    </div>
</body>

</html> -->
<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Article posted successfully!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            overflow-x: hidden;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
        }

        .container-fluid {
            padding-bottom: 0;
        }

        .carousel-item {
            height: 32rem;
            background: #777;
            color: white;
            position: relative;
            background-position: center;
            background-size: cover;
        }

        .content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }

        #mainNavbar {
            background-color: white;
            transition: background-color 0.3s ease;
        }

        #mainNavbar.sticky-top {
            background-color: rgba(255, 255, 255, 0.9);
        }

        #mainNavbar {
            box-shadow: none;
        }

        #mainNavbar.sticky-top {
            box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.3);

        }

        .custom-card {
            width: 100%;
            max-height: 310px;
            overflow: visible;
            margin: 0 auto;
        }

        .navbar-nav .nav-link,
        .navbar-nav .nav-link:focus,
        .navbar-nav .nav-link:hover,
        .search-input,
        .btn-outline-success {
            color: #ffffff;
        }


        .search-input {
            height: 35px;
            width: 200px;
        }

        .btn {
            height: 35px;
            padding: 0 15px;
            line-height: 35px;
        }

        .btn-outline-success,
        .btn-outline-danger {
            color: #ffffff;
            border-color: #ffffff;
            width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-danger.btn-block {
            width: 120px;
            height: 35px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }

        footer .col-md-6 {
            position: relative;
        }

        footer .col-md-6:nth-child(2) {
            position: absolute;
            top: 0;
            left: 70%;
            transform: translateX(-50%);
            z-index: 1;
            width: 100%;
            text-align: center;
        }

        footer .col-md-6:nth-child(2) h5 {
            color: #ce3c4a !important;
            font-size: 28px;
        }

        footer .col-md-6:nth-child(2) .d-flex {
            justify-content: center;
            gap: 20px;
        }

        footer .col-md-6:nth-child(2) .d-flex a {
            font-size: 35px;
            color: white;
        }
    </style>

    <div id="top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNavbar">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    <img class="d-inline-block align-top" src="NABAA-TV-LOGO1.png" width="400" height="60" />
                </a>

            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#c2272e;">
            <div class="container-fluid">
                <a href="addArticle.html" class="btn btn-outline-success me-2" style="width: 150px;">Add Article</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="politics.php">Politics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sports.php">Sports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entertainement.php">Entertainment</a>
                        </li>
                    </ul>
                </div>

                <!-- Notifications button on the far right -->
                <a href="Messages.php" class="btn btn-outline-light" style="width: 150px;">
                    <i class="fa-solid fa-bell"></i> Notifications
                </a>

            </div>
        </nav>
    </header>
    <div class="container">
        <!-- News Section -->
        <div class="container my-4">
            <h1 class="text-center">Latest News</h1>
            <div id="newsContainer" class="row"></div>
        </div>


        <!-- Bootstrap and Custom Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>

        <!-- Script to Fetch and Display News -->
        <script>
            const apiKey = '1f389b12ee7c49c4b327d0cac892f9f5'; // Replace with your NewsAPI key
            const newsContainer = document.getElementById('newsContainer');

            // Fetch news from the API
            fetch(`https://newsapi.org/v2/top-headlines?country=us&apiKey=${apiKey}`)
                .then(response => response.json())
                .then(data => {
                    const validArticles = data.articles.filter(article => article.content && !article.content.includes('removed') && article.content.length > 100);

                    // Check if there are valid articles
                    if (validArticles.length === 0) {
                        newsContainer.innerHTML = '<p>No valid news articles available at the moment.</p>';
                        return;
                    }

                    // Loop through the valid articles and display them
                    validArticles.forEach((article, index) => {
                        const newsCard = `
                    <div class="card my-3 col-md-4">
                        <img src="${article.urlToImage || 'news-image-placeholder.jpg'}" class="card-img-top" alt="News Image" onerror="this.src='news-image-placeholder.jpg'">
                        <div class="card-body">
                            <h5 class="card-title">${article.title}</h5>
                            <p class="card-text">${article.description || 'No description available.'}</p>
                            <button class="btn btn-primary" onclick="viewFullArticle(${index})">Read More</button>
                        </div>
                    </div>
                `;
                        newsContainer.innerHTML += newsCard;
                    });

                    // Store the valid articles in localStorage for later use
                    localStorage.setItem('validArticles', encodeURIComponent(JSON.stringify(validArticles)));
                })
                .catch(error => console.error('Error fetching news:', error));

            // Function to view the full article
            function viewFullArticle(index) {
                const validArticles = JSON.parse(decodeURIComponent(localStorage.getItem('validArticles')));
                const selectedArticle = validArticles[index];
                localStorage.setItem('selectedArticle', encodeURIComponent(JSON.stringify(selectedArticle)));
                window.location.href = 'article.html';
            }
        </script>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        // Function to fetch articles
        function fetchArticles() {
            fetch('admin.php?show=all')
                .then(response => response.json())
                .then(data => {
                    const articlesDiv = document.getElementById('articles');
                    articlesDiv.innerHTML = '';
                    data.forEach(article => {
                        articlesDiv.innerHTML += `
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">${article.title}</h5>
                                        <img src="${article.image}" alt="${article.title}" class="img-fluid" style="max-height: 200px;">
                                        <p>${article.content}</p>
                                        <p><strong>Category:</strong> ${article.category}</p>
                                    </div>
                                </div>
                            `;
                    });
                });
        }

        // Fetch articles on page load
        fetchArticles();
    </script>

    <footer class="bg-dark text-white" style="position: relative; padding: 2rem 0; width:100% ;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-lg custom-card">
                        <div class="card-body text-center p-3">
                            <h3 class="card-title text-danger">Contact Us</h3>
                            <form action="contact.php" method="POST">
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email"></label>
                                            <input type="email" class="form-control border-danger" id="email"
                                                name="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="name"></label>
                                            <input type="text" class="form-control border-danger" id="name" name="name"
                                                placeholder="Enter your name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="message"></label>
                                    <textarea name="message" class="form-control border-danger" id="message"
                                        placeholder="Your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger btn-block mt-4">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center"
                    style="margin-left: 150px;  margin-top:100PX ;">
                    <h5 class="text-uppercase font-weight-bold w-100 text-center"
                        style="color: #ce3c4a !important; font-size: 28px;">
                        FOLLOW US ON ALL OUR SOCIALS
                    </h5>

                    <div class="d-flex justify-content-center mt-2">
                        <p class="me-3">
                            <a href="https://www.facebook.com/Nabaatvcom" class="btn-floating btn-sm text-white"
                                style="font-size: 35px;">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </p>
                        <p class="me-3">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 35px;">
                                <i class="fab fa-x"></i>
                            </a>
                        </p>
                        <p class="me-3">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 35px;">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </p>
                        <p class="me-3">
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 35px;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </p>
                        <p>
                            <a href="#" class="btn-floating btn-sm text-white" style="font-size: 35px;">
                                <i class="fab fa-threads"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a href="#top" class="text-white"
            style="position: absolute; bottom: 10px; left: 10px; color: #c2272e; text-decoration: none; font-size: 16px;">
            Back to Top
        </a>
    </footer>
</body>

</html>