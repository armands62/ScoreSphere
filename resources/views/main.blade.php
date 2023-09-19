<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>ScoreSphere</title>
</head>
<body>
    <nav style="background-color: #020408" class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- ScoreSphere Logo -->
            <a class="navbar-brand" href="#">SCORESPHERE</a>

            <!-- Navbar Toggle Button (for mobile) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav active-tab">
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="#">Results</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item mx-auto">
                        <a class="nav-link me-auto" href="#">News</a>
                    </li>
                </ul>

                <!-- Search Bar -->
                <form class="ms-auto d-flex me-3">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="submit">Search</button>
                </form>

                <!-- Login Button -->
                <ul class="navbar-nav">
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>