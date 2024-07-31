<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <style>
        .modal-content {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        border-bottom: 1px solid #eee;
    }

    .modal-body {
        padding: 20px;
    }

    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg">
            <div class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Logo" style="width: 50px; height:40px;">
                TaskMaster
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ressources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="user/user_login.php" class="btn" id="logBtn" role="button">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="user/register.php" class="btn btn-success btn-active btn-md" role="button">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/image1.jpg" class="d-block w-100" alt="..."><br>
                <div class="carousel-caption d-none d-md-block" style="color:black;">
                    <h5>Manage Your Projects Efficiently</h5>
                    <p>Streamline your workflow with our project management tools.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/image2.jpeg" class="d-block w-100" alt="..."><br>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Collaborate with Your Team</h5>
                    <p>Work together and achieve more with collaborative features.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/image3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Stay on Track</h5>
                    <p>Keep track of deadlines and milestones with our scheduling tools.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="explanation">
        <div class="container">
            <h2>Why Choose Our Project Management Tool?</h2>
            <p>
                Our project management application helps you to manage your projects more efficiently, collaborate with your team members effectively, and stay on top of your deadlines. With a user-friendly interface and a variety of features, you can streamline your workflow and improve productivity.
            </p><br>
        </div>
    </section>

    <section class="call-to-action text-center">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>
                Take the first step towards better project management today. Our tools are designed to help you achieve more and simplify your workflow.
            </p>
            <a href="#" class="btn btn-primary ">Start</a>
        </div>
    </section>

    <section class="functions text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center my-4">Project Management Tools</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="feature-card">
                                <a href="#task-tracking">
                                    <img src="images/image4.png" alt="Task Tracking">
                                    <div class="card-body">
                                        <h4>Task Tracking</h4>
                                        <p>Monitor and track your tasks to ensure timely completion.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-card">
                                <a href="#team-collaboration">
                                    <img src="images/image5.jpg" alt="Team Collaboration">
                                    <div class="card-body">
                                        <h4>Team Collaboration</h4>
                                        <p>Facilitate effective communication and collaboration within your team.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-card">
                                <a href="#report-generation">
                                    <img src="images/image6.jpg" alt="Report Generation">
                                    <div class="card-body">
                                        <h4>Report Generation</h4>
                                        <p>Generate comprehensive reports to keep track of your project progress.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="feature-card">
                                <a href="#resource-management">
                                    <img src="images/image7.jpg" alt="Resource Management">
                                    <div class="card-body">
                                        <h4>Resource Management</h4>
                                        <p>Manage your resources efficiently to maximize productivity.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        
        <footer>
            <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>If you have any questions or need further information, feel free to reach out to us. We're here to help!</p>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Email Us</h4>
                        <p>support@example.com</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Call Us</h4>
                        <p>(123) 456-7890</p>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="container text-center">
            <p>&copy; 2024 TaskMaster. All rights reserved.</p>
        </div>
    </footer>


    
</body>
</html>
