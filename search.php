<?php
    session_start();
    $_SESSION['user']="cuong"; 
    $html="";
    if( array_key_exists( "content", $_GET ) && $_GET[ 'content' ] != NULL ) {
        // Feedback for end user
        $html .= '<pre>Hello ' . $_GET['content'] . '</pre>';
    }
    
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/menu1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./public/css/style.css">
<script src="https://kit.fontawesome.com/db45193d3b.js" crossorigin="anonymous"></script>
<script src="./public/js/main.js"></script>
<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
<link href="./rateit/scripts/rateit.css" rel="stylesheet" type="text/css">
<script src="./rateit/scripts/jquery.rateit.js"></script>

    <?php
    
    if(isset($_SESSION['user'])) $user=$_SESSION['user'];
    ?>
</head>

<body class="Login pb-5 mb-5" style="background: linear-gradient(#e66465, #9198e5);background-repeat: no-repeat;">
    <!---Header------------------------------------------------------------------------------------------------------->
    <header class="d-flex bg-gradient flex-sm-row justify-content-center p-2">

        <div class="align-self-center p-2">
            <div id="menu" class="d-flex justify-content-end">
                <a href="#" class="d-sm-none d-flex " style="text-decoration:none;">
                    <i class="material-icons" style="color: white;vertical-align: middle;font-size: 36px;">menu</i>
                </a>
            </div>
            <!-----------------MENU PHONE-------------------------------------------------------------------->
            <div id="menu1" style="display: none;">hello</div>
            <div class="d-flex">
                <nav id="menu2" class=" align-self-end navbar-nav-scroll navbar-expand-sm navbar-light justify-content-end p-0 d-none d-sm-flex">
                    <ul class="navbar-nav flex-column flex-sm-row d-flex" style="font-family: 'Roboto', sans-serif; ">
                        <li class="nav-item pr-3 d-flex">
                            <a id="menubar" href="./" class="pl-0 mn nav-link font-menu1 cool-link ltr" style="color:#ffffff;"><i class="d-none d-sm-block material-icons" style="color: #ffffff;vertical-align: middle;">house</i></a>
                        </li>
                        <li class="nav-item pr-3">
                            <a id="manager" class="btn mn nav-link font-menu1 cool-link ltr" style="color:#ffffff;"><i class="fas fa-headphones"></i> Khám phá</a>
                        </li>
                        <li class="nav-item pr-3 ltr">
                            <a href="./editInfor"  id="menubar" class="btn mn nav-link font-menu1 cool-link" style="color:#ffffff">
                                <i class="fas fa-user"></i><?php
                                                            $usern = 'Đăng nhập';
                                                            if (!empty($_SESSION['user'])) {
                                                                $usern = "Sửa thông tin tài khoản";
                                                            }
                                                            echo $usern;
                                                            ?></a>
                        </li>
                    </ul>
                    <script>
                        var mn = document.getElementsByClassName("mn");
                        var size = mn.length;
                        var s = 0.8;
                        for (var i = size - 1; i >= 0; i--) {
                            mn[i].style.animationDuration = "" + s + "s";
                            s += 0.2;
                        }
                    </script>
                </nav>
            </div>
    </header>
    <div id="mainhome" class="container">
    <div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5" style="color:#383e56;">
    <h1 class="font-weight"><i style="color:#be4bdb;" class="fas fa-music"></i> Ứng dụng nghe nhạc số 1 thế giới <i style="color:#be4bdb;" class="fas fa-music"></i></h1>
    <div class="col-12 p-5">
        <h5 style="color:#e84a5f;">Các tính năng, hoạt động của trang</h5>
        <p>1. Trang dùng ajax tăng trải nhiệm người dùng</p>
        <p>2. Các chức năng hữu ích cho người nghe và nghệ sỹ</p>
        <p>.....</p>
        
    </div>
    <form method = "get" action ="./search.php">
  <div class="form-group">
    
    <input type="txt" name="content" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tìm kiếm">
    <small id="emailHelp" class="form-text text-muted">Tìm kiếm bài nhạc hot nhất mà bạn thích nào !!!!</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="row justify-content-around bg-light rounded-lg shadow-lg mt-5 p-5">
    <div class="row w-100 justify-content-center">
        <i style="color: #40bad5; font-size: 48px;" class="fas fa-tachometer-alt"></i>
    </div>
    <a id="user" class="btn btn-info col-md-3 mt-5 mb-5 rounded-lg m-1">
        <div class="row p-4 justify-content-center">
            Bạn là người nghe
        </div>
        <div class="row p-3 bd d-flex justify-content-center m-0">
            <i style="font-size: 32px;" class="fas fa-users""></i>
        </div>
    </a>
    <a id="artist"  class="btn btn-info col-md-3 mt-5 mb-5 rounded-lg m-1">
        <div class="row p-4 justify-content-center">
            Bạn là nghệ sỹ
        </div>
        <div class="row p-3 bd d-flex justify-content-center m-0">
            <i style="font-size:32px;" class="fas fa-user-cog"></i>
        </div>
    </a>
</div>
<script>
    $(document).ready(function(){
        $("#user").click(function(){
            var user='<?php if(isset($_SESSION['user'])) echo $_SESSION['user']; else echo '';?>';
            if(user =='') alert('không có quyền truy cập, vui lòng đăng nhập');
            else{
////////   gọi controller user để hiển thị trang cho người dùng nghe nhạc ////////////////////////////////////////////////////////////////////
                $.post('./userNormal',function(data){
                    $("#mainhome").html(data);
                });
            }
        });
        $("#artist").click(function(){
            var user='<?php if(isset($_SESSION['user'])) echo $_SESSION['vip']; else echo '';?>';
            if(user != 3) alert("Chỉ dành cho nghệ sỹ");
            else{
///////     gọi controller artist để hiển thị trang cho nghệ sỹ///////////////////////////////////////////////////////////////////////////////
                $.post('./artist',function(data){
                    $("#mainhome").html(data);
                });
            }
        });
    });
</script>

    </div>

    <!--<footer class="container-fluid bg-gradient w-100">
        <div class="row d-flex justify-content-center flex-column">
            
                <div>&copy Nguyễn Văn Cường</div>
                <div>Phone: 0989839428</div>
        
        </div>
    </footer>
    -->
    <script>
        var count = 1;
        $(document).ready(function() {
            
            $("#manager").click(function() {
                var user = '<?php if (isset($_SESSION['user'])) echo $_SESSION['user']; else echo ''; ?>';
                if (user == ''){
                    let cf=confirm('không có quyền truy cập, vui lòng đăng nhập');
                    if(cf) location.assign('./login');
                }
                else {
                    $.post('./ajax/product', function(data) {
                        $("#mainhome").html(data);
                    });
                }
            });
            $("#menu").click(function() {
                var list = document.getElementById("menubar");
                var idx, leng = list.length;
                for (idx = 0; idx < leng; idx++) {
                    list[idx].classList.remove("ltr");
                }
                var menu = $("#menu2");
                if (count % 2) {
                    menu.addClass("d-flex");
                    menu.slideDown("slow");
                } else {
                    menu.removeClass("d-flex");
                }
                count++;
            });
        });
    </script>
</body>

</html>
<?php
    echo $html;
?>