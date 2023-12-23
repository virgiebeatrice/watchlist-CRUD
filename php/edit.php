<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/edit.css?v=<?php echo time(); ?>" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="logo.png" alt="Logo" class="logo__1">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <button><a class="nav-link mx-2" href="home.php">Home</a></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#footer">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- Add -->

        <div class="judul mt-3 mb-3">
            <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
            <h1>Add Your Movie Here</h1>
        </div>

        <div class="proses">
            <form action="add.php" method="POST"> 

                <div class="mb-3 row m-auto">
                    <label for="name" class="col-sm-2 col-form-label">Movie Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="ex: Power Rangers">
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-8">
                        <select id="genre" name="genre" class="form-select">
                            <option selected>--Movies Genre--</option>
                            <option>Action</option>
                            <option>Comedy</option>
                            <option>Drama</option>
                            <option>Horor</option>
                            <option>Musical</option>
                            <option>Romance</option>
                            <option>Sci-Fi</option>
                            <option>Thriller</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="name" class="col-sm-2 col-form-label">Link Photo</label>
                    <div class="col-sm-8">
                        <input type="text" name="photo" class="form-control" id="foto" >
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="genre" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-8">
                        <select id="genre" name="rating" class="form-select">
                            <option selected>--Rating--</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="genre" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-8">
                        <select id="genre" name="category" class="form-select">
                            <option selected>--Category--</option>
                            <option>My Favorite</option>
                            <option>Marvel Collection</option>
                            <option>Indonesia Movies</option>
                            <option>Anime</option>
                            <option>K-Movie</option>
                        </select>
                    </div>
                </div>
                
                <div class="mt-4 row m-auto">
                    <div class="sumbit">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa-solid fa-floppy-disk me-2" style="color: #ffffff;"></i>
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>



        <!-- Update -->

        <div class="judul mt-5 mb-3">
            <span><i class="fa-solid fa-minus fa-rotate-90"></i></span>
            <h1>Update Your Movie Here</h1>
        </div>

        <div class="proses mb-5">
            <form action="update.php" method="POST">

                <div class="mb-3 row m-auto">
                    <label for="name" class="col-sm-2 col-form-label">Movie Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="ex: Power Rangers">
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="genre" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-8">
                        <select id="genre" class="form-select" name="genre">
                            <option selected>--Movies Genre--</option>
                            <option>Action</option>
                            <option>Comedy</option>
                            <option>Drama</option>
                            <option>Horor</option>
                            <option>Musical</option>
                            <option>Romance</option>
                            <option>Sci-Fi</option>
                            <option>Thriller</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="photo" class="col-sm-2 col-form-label">Link Photo</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="photo" name="photo">
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="rating" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-8">
                        <select id="rating" class="form-select" name="rating">
                            <option selected>--Rating--</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row m-auto">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-8">
                        <select id="category" class="form-select" name="category">
                            <option selected>--Category--</option>
                            <option>My Favorite</option>
                            <option>Marvel Collection</option>
                            <option>Indonesia Movies</option>
                            <option>Anime</option>
                            <option>K-Movie</option>
                        </select>
                    </div>
                </div>
                
                <div class="mt-4 row m-auto">
                    <div class="sumbit">
                        <button type="submit" name="action" class="btn btn-success">
                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i>
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer id="footer" class="container-fluid m-0">
        <div class="wrap-footer">
            <div class="footer-1">
            <h2>About Us</h2>
            <p>Virgie Beatrice and Naili Sapira</p>
            </div>
            <div class="footer-2">
            <a href="">
                <i class="fa-brands fa-instagram" style="color: #190019;"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-imdb" style="color: #190019;"></i>
            </a>
            <a href="">
                <i class="fa-solid fa-envelope" style="color: #190019;"></i>
            </a>
            
            </div>
        </div>
        </div>
        <div class="copyright">
        <p>&copyCopyright 2023. my WATCHlist</p>
        </div>
    </footer>
    
    <script src="https://kit.fontawesome.com/8b0b03f283.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>