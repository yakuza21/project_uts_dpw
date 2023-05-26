<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/botstrap_modified.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Responsive Food website</title>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Food Aceh</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#app">App</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#subscribe">Subscribe</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Enter your favourite food" aria-label="Search">
                  <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <div class="body">
            <span>WELCOME</span>
            <h1>MAKANAN</h1>
            <div class="btn-team">
                <button class="btn-white">Contact Us</button>
                <button class="btn-white">Our Menu</button>
            </div>
        </div>
    </div>
    <div class="discover" id="about">
        <h2>About <span class="text-danger">Our </span> Service</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam optio voluptas, nemo, esse nihil beatae facere ipsam ipsa eius enim totam libero repellat ut! Est, omnis nulla commodi, repellendus voluptas eligendi iusto, saepe deleniti a vel hic deserunt necessitatibus sapiente cupiditate ipsum ad dolorum impedit facilis. Obcaecati commodi quibusdam porro animi repudiandae earum architecto nihil nesciunt, impedit, nemo maiores id!</p>
        <img src="assests/food.jpg" alt="Food">
    </div>
    <div class="divider"></div>
    <div class="topdishes" id="menu">
        <h2>Discover Our <span class="text-danger">Top </span>Dishes</h2>
        <div class="row card-dishes">
            <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="assests/mie aceh.png" alt="Food Name">
                <div class="card-body py-4 text-center">
                  <h3 class="h5 mt-1">Mie Aceh</h3>
                </div></a></div>
            <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="assests/dendeng aceh.png" alt="Food Name">
                <div class="card-body py-4 text-center">
                  <h3 class="h5 mt-1">dendeng Aceh</h3>
                </div></a></div>
            <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="assests/ayam tangkap.png" alt="Food Name">
                <div class="card-body py-4 text-center">
                  <h3 class="h5 mt-1">Ayam tangkap</h3>
                </div></a></div>
            <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="assests/rujak aceh.png" alt="Food Name">
                <div class="card-body py-4 text-center">
                  <h3 class="h5 mt-1">rujak aceh </h3>
                </div></a></div>
            <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="assests/martabak aceh.png" alt="Food Name">
                <div class="card-body py-4 text-center">
                  <h3 class="h5 mt-1">martabak Aceh</h3>
                </div></a></div>
            <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="assests/bubur kanji rumbi.png" alt="Food Name">
                <div class="card-body py-4 text-center">
                  <h3 class="h5 mt-1">bubur kanji rumbi</h3>
                </div></a></div>
          </div>
    </div>
    <div class="divider"></div>
    <div class="app" id="app">
        <div class="left">
            <h2>Presenting Our New <br>Food Aceh App</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum vel pariatur, dolores beatae facere libero molestiae quidem fuga veniam tenetur.</p>
            <img src="assests/store.png" alt="download" class="downloadImg">
        </div>
    </div>
    <div class="subscribe" id="subscribe">
        <h2>Subscribe To <span class="text-danger">Our </span>Newsletter</h2>
        <div class="form">
            <div class="input-group mb-3 newsletterForm">
                <input type="text" class="form-control" placeholder="Enter your Email ID here">
                <button class="input-group-text btn btn-danger">Subscribe</button>
            </div>
        </div>
    </div>
    <div class="divider"></div>
    <div class="footer">
        <footer>
            ©2023 Makanan Aceh 
        </footer>
    </div>
    <script src="js/nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>