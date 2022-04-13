<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>IoT Page Control</title>
    </head>
    <body>
        <section id="sidebar">
            <a href="#"class="brand">
                <i class="bx bxs-smile"></i>
                <span class="text">IoT Page Control</span>
            </a>
            <ul class="side-menu top">
                <li class="active">
                    <a href="#">
                        <i class="bx bxs-dashboard"></i>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class='bx bx-stats'></i>
                        <span class="text">Control</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-desktop' ></i>
                        <span class="text">Monitoring</span>
                    </a>
                </li> -->
            </ul>
            <ul class="side-menu">
                <li>
                    <a href="logout.php" class="logout">
                        <i class="bx bxs-log-out-circle"></i>
                        <span class="text">Logout</span>
                    </a>
                </li>
            </ul>
        </section>

        <section id="content">
            <nav>
                <i class='bx bx-menu'></i>
                <a href="#" class="nav-link">Control & Acquisition Data</a>
                <form action="#">
                    <div class="form-input">
                        
                    </div>
                </form>
                <input type="checkbox" id="switch-mode" hidden>
                
                <a href="#" class="profile">
                    <img src="img/user.png">
                </a>
                </nav>

                <main>
                    <div class="head-title">
                        <div class="left">
                            <h1>Dashboard</h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="#">Dashboard</a>
                                    <li>
                                        <i class="bx bx-chevron-right"></i>
                                    </li>
                                    <li>
                                        <a href="#" class="active">Home</a>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <ul class="box-info">
                        <li>
                            <i class="bx bxs-check-square"></i>
                            <span class="text">
                                <h3>2</h3>
                                <p>Active Sensor</p>
                            </span>
                        </li>
                        <li>
                            <i class="bx bxs-check-square"></i>
                            <span class="text">
                                <h3>1</h3>
                                <p>Active Actuators</p>
                            </span>
                        </li>
                        <li>
                            <i class='bx bxs-time-five' ></i>
                            <span class="text">
                                <h3>10:10 PM</h3>
                                <p>Time Now</p>
                            </span>
                            
                        </li>
                    </ul>

                    <ul class="box-info-bing">
                        <li>
                            <i class="bx bx-stats"></i>
                            <span class="text">
                                <h3>Control Panel</h3>

                            </span>
                        </li>
                        <li>
                            <i class="bx bx-desktop"></i>
                            <span class="text">
                                <h3>Monitoring Data</h3>

                            </span>
                        </li>
                    </ul>
                    <ul class="box-info-control">
                        <li>
                            <p>Button 1</p>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <p>Button 2</p>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <p>Button 3</p>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </li>
                        <li>
                            <p>Data: </p>
                        </li>
                    </ul>
                    <div class="sliderContainer">
                        <input type="range" min="0" max="100" value="0" id="myRange" class="slider-range">
                        <p>Value: <span id="value"></span></p>
                    </div>
                </main>
        </section>
        <script src="js/script.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>