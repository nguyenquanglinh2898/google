<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kyrie Irving - Google Search</title>
    <link rel="shorcut icon" href="../image/google_icon.png">
    <link rel="stylesheet" href="../font-awesome/css/all.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="../css/result.css">
    <script src="../js/google.js"></script>
</head>
<body>
<?php 
    $servername = "mysql";
    $username = "root";
    $password = "123456";
    $database = "google";
    
    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $database); 
    
    $sql = "SELECT * FROM article WHERE article.title LIKE '%".$_GET["search-keys"]."%' 
    OR article.desc LIKE '%".$_GET["search-keys"]."%'";

    $result = $conn->query($sql);
?>
    <header>
        <div class="brand">
            <a href="#">
                <img src="../image/googlelogo_color_92x30dp.png" alt="">
            </a>
        </div>
        <form action="result.php" class="search-engine" method="$_GET">
            <i class="fa fa-search icon-search"></i>
            <input type="text" title="Search" name="search-keys" id="search-keys" value="<?php echo $_GET["search-keys"] ?>" autocomplete="off">
            <div class="history-list">
                <div class="history">
                    <i class="far fa-clock"></i>
                    <p>lịch sử tìm kiếm</p>
                    <button>Remove</button>
                </div>
            </div>
            <i class="micro" title="Search by voice"></i>
        </form>
        <ul>
            <li>
                <a class="nine-dot" title="Google apps" onclick="sublist()"></a>
                <div class="hidden-bg">
                    <div class="hidden">
                        <ul class="nine-dot-list">
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                        </ul>
                        <ul class="nine-dot-list">
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <li><a href="#">
                                <img src="../image/labron.jpg" alt="">
                                <h3>Account</h3>
                            </a></li>
                            <div class="more-from-google">
                                <a href="#">More from Google</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a class="avatar" title="Google Account: Lonzo Ball  
(lonzoball@gmail.com)"></a></li>
        </ul>
    </header>
    <div class="main">
        <div class="left">
            <p class="result-stat">About 32,000,000 results (0.63 seconds)</p>
            <div class="result">
                <?php
                foreach( $result as $row ){
                ?>
                <div class="result-item">
                    <a href="#" class="title">
                    <span class="link"><?php echo $row['link'] ?></span>
                        <h3><?php echo $row['title'] ?></h3>
                    </a>
                    <p class="short-content"><?php echo $row['desc'] ?></p>
                </div>
                <?php
                }
                ?>
                
                        
            </div>
            <div class="related">
                <h3>Searches related to kyrie irving</h3>
                <ul>
                    <li><a href="#">kyrie irving <span>injury</span></a></li>
                    <li><a href="#">kyrie irving <span>espn</span></a></li>
                    <li><a href="#">kyrie irving <span>stats</span></a></li>
                    <li><a href="#">kyrie irving <span>height</span></a></li>
                    <li><a href="#">kyrie irving <span>nets</span></a></li>
                    <li><a href="#">kyrie irving <span>shoes</span></a></li>
                    <li><a href="#">kyrie irving <span>wife</span></a></li>
                    <li><a href="#">kyrie irving <span>highlights</span></a></li>
                </ul>
            </div>
        </div>
    </div>


    <script>
        $('#search-keys').focus(function(){
            $('.history-list')[0].style.display = 'block';
            $('.history-list')[0].style.boxShadow = '0px 1px 6px rgb(32,33,36,0.28)';
        });
        $('#search-keys').blur(function(){
            $('.history-list')[0].style.display = 'none';
            $('.history-list')[0].style.boxShadow = 'none';
        });
    </script>
</body>
</html>