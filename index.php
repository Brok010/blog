    
<?php include('includes/header.php'); ?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="#" class="navbar-brand">Brok's blog</a>
        <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu"
            >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a href="travel.php" class="nav-link">Travel</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="sport.php" class="nav-link">Sport</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="#about-me" class="nav-link">About me</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
    <body>
        <!-- showcase -->
        <section class="bg-white text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>My journey </span></h1>
                        <p class="lead my-4">
                            Just going around bothering people
                        </p>
                        <button class="btn btn-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Travel logs</button>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block mb-5" src="img/showcase.jpg" alt="Picture of me sitting on a rock with a landscape view behind me">
                </div>
            </div>
        </section>

        <!-- Divider -->
        <section class="bg-secondary text-white  p-2">
            <div class="container">
                <h3 class="mb-2 mb-md-0"> Recents </h3>
            </div>
        </section>

        <!-- Boxes -->
        <section class="p-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-dark text-white">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <h3 class="card-title mb-3">
                                    Card 1
                                </h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus harum corrupti dolores ad iste impedit maiores autem consequuntur blanditiis est tempora expedita deserunt quo alias pariatur eveniet, soluta quia ullam?
                                </p>
                                <a href="#" class="btn btn-secondary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-white">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <h3 class="card-title mb-3">
                                    Card 2
                                </h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus harum corrupti dolores ad iste impedit maiores autem consequuntur blanditiis est tempora expedita deserunt quo alias pariatur eveniet, soluta quia ullam?
                                </p>
                                <a href="#" class="btn btn-light">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-white text-dark">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                                <h3 class="card-title mb-3">
                                    Card 3
                                </h3>
                                <p class="card-text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus harum corrupti dolores ad iste impedit maiores autem consequuntur blanditiis est tempora expedita deserunt quo alias pariatur eveniet, soluta quia ullam?
                                </p>
                                <a href="#" class="btn btn-dark">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  

        <!-- About me -->
        <section id="about-me" class="p-5  bg-white">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/me.jpg" class="img-fluid" alt=""/>   
                    </div>
                    <div class="col-md p-5">
                        <h2>About me</h2>
                        <p class="lead">
                            I don't know what I'm doing most of my time..
                        </p>
                        <p>
                            The more I think about who I'm the less I know what to talk about. 
                            So to keep it short, I like exploring new places,
                            preferably places that you can't see in your/my everyday life.
                        </p>
                        <p>
                            I travel on a budget, leading to some fun and adventurous stories. 
                            Being young and with no one waiting for me at home, I often take extra 
                            steps to get my adrenaline pumping. This sometimes lands me in interesting 
                            situations because, as I mentioned before, most of the time, I don't know what I'm doing.
                        </p>
                        <a href="#" class="btn btn-secondary mt-3"> Georgian mountains
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacts -->
        <section id="contact" class="p-5 bg-white">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md">
                        <h2 class="text-center mb-4">Contact info</h2>
                        <ul class="list-group list-group-flush lead text-center">
                            <li class="list-group-item">
                                <span class="fw-bold">Main Location:</span> Kadaň, Chomutovská 1619, 432 01
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Phone:</span> +420 605 100 915
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">E-mail:</span> brokvo@gmail.com
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Instagram:</span> @bvodrazka
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>    
<?php include('includes/footer.php'); ?>