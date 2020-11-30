<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="../font/Poppins.css" rel="stylesheet">
    <link href="../font/Kaushan.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/Index.css">
    <script type="text/javascript" src="../jquery-ui/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../jquery-ui/jquery-ui.js"></script>
    <link type="text/css" rel="stylesheet" href="../jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/checkout.css">
    <script src="../js/cuon.js"></script>

    <title>Check Out</title>
    <?php
			$con = mysqli_connect("localhost","root","","linhkien") or die ("Không Thể Kết Nối !!!");
			mysqli_query($con,"SET NAMES'utf8'");
            $knsp=mysqli_query($con,"select * from hinhanh inner join sanpham on hinhanh.MaSP=sanpham.MaSP");
            $knsp1=mysqli_query($con,"select * from hinhanh inner join sanpham on hinhanh.MaSP=sanpham.MaSP");
            session_start();
            $tkkh=$_SESSION['username'];
            $getgh=mysqli_query($con,"select * from giohang where TenDN='$tkkh'");
    $g=mysqli_fetch_array($getgh);
    $magh=$g['MaGH'];
            $giohang=mysqli_query($con,"select * from giohang inner join khachhang on giohang.tendn=khachhang.tendn inner join chitietgh on giohang.magh=chitietgh.magh inner join sanpham on chitietgh.masp=sanpham.masp inner join hinhanh on sanpham.masp = hinhanh.masp where giohang.TenDN='$tkkh'");
            $giohang1=mysqli_query($con,"select * from giohang inner join khachhang on giohang.tendn=khachhang.tendn inner join chitietgh on giohang.magh=chitietgh.magh inner join sanpham on chitietgh.masp=sanpham.masp inner join hinhanh on sanpham.masp = hinhanh.masp where giohang.TenDN='$tkkh'");
            $giohang2=mysqli_query($con,"select * from giohang inner join khachhang on giohang.tendn=khachhang.tendn inner join chitietgh on giohang.magh=chitietgh.magh inner join sanpham on chitietgh.masp=sanpham.masp inner join hinhanh on sanpham.masp = hinhanh.masp where giohang.TenDN='$tkkh'");
            $gioh=mysqli_query($con,"select * from giohang where TenDN='$tkkh'");
            $gioh1=mysqli_query($con,"select * from giohang where TenDN='$tkkh'");
            $g=mysqli_fetch_array($gioh1);
            $sl=mysqli_fetch_array(mysqli_query($con,"select COUNT(MaGH) as sl from chitietgh where MaGH='$magh'"));
        ?>
        <style>
        .sanpham .baolisticon>.listicon>span{
    position: absolute;
    top: 50px;
    left: -50px;
    padding: 5px;
    text-align: center;
    width: 35px;
    height: 35px;
    font-size: 20px;
    color: red;
}
.sanpham .baolisticon>.listicon>.iconp{
    position: absolute;
    top: 50px;
    left: -50px;
    padding: 5px;
    text-align: center;
    width: 35px;
    height: 35px;
    font-size: 25px;
    color: #5f5f79;
    transition:0.5s;
}
.sanpham .baolisticon>.listicon>.icon>i,.iconp>i,.baolisticon>.listicon>.span{
    transition: all 0.5s ease;
}
.sanpham:hover .baolisticon>.listicon>.iconp{
    top:60px;
    left:0px;
}
        .sanpham:hover .baolisticon>.listicon>span{
    top:30px;
    left:0px;
}
.sanpham .baolisticon>.listicon>.iconp:hover>i{
    color: #ff1e00;
    transform: rotate(360deg);
}
        </style>
</head>

<body>
<div class="khungdangnhap">
        <div class="dangnhap">
            <form action="login.php" method="POST">
                <h3>Log In</h3>
                <div class="textbox">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username" value="">
                </div>
                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" value="">
                </div>
                <button class="nutdn" type="submit" name="dangnhap">Sign In</button>
                <div class="dongdn">
                    <button class="dongdangnhap" type="button"> Back </button>
                    <button class="modangky" type="button"> Sign Up </button>
                </div>
            </form>
        </div>
    </div>
    <div class="khungdangky">
            <div class="dangky">
                <form action="signup.php" method="POST">
                    <h3>Sign Up</h3>
                    <div class="textbox">
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Username" name="tk" value="">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-id-card"></i>
                        <input type="text" placeholder="Fullname" name="ht" value="">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-map-marker"></i>
                        <input type="text" placeholder="Address" name="dc" value="">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-phone"></i>
                        <input type="text" placeholder="Number Phone" name="sdt" value="">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-lock"></i>
                        <input type="password" placeholder="Password" name="mk" value="">
                    </div>
                    <div class="textbox">
                        <i class="fa fa-check"></i>
                        <input type="password" placeholder="Confirm Password" name="nlmk" value="">
                    </div>
                    <button class="nutdk" type="submit" name="dangky">Sign Up</button>
                    <div class="dongdk">
                        <button class="dongdangky" type="button"> Back </button>
                        <button class="modangnhap" type="button"> Log In </button>
                    </div>
                </form>
            </div>
        </div>
    <header>
        <div class="head">
            <div class="dau">
                <div id="logo">
                    <a href="Index.php">
                        <div class="logo">
                            <img src="../img/logo/cart.png" alt="logo">
                            <h4 class="logotext">Linhkien.com</h4>
                        </div>
                    </a>
                </div>
                <nav>
                    <ul class="menu">
                        <li class="sub"><a href="Index.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
                        <li class="sub" id="tl">
                            <a href="#">Categories <i class="fa fa-angle-down"></i></a>
                            <ul class="menucon">
                                <li><a href="Category.php?ct=CPU">CPU</a></li>
                                <li><a href="Category.php?ct=Mainboard">Mainboard</a></li>
                                <li><a href="Category.php?ct=VGA">VGA</a></li>
                                <li><a href="Category.php?ct=Ram">Ram</a></li>
                                <li><a href="Category.php?ct=HDD">HDD</a></li>
                                <li><a href="Category.php?ct=SSD">SSD</a></li>
                            </ul>
                        </li>
                        <li class="sub"><a href="Category.php?mt=Hot">Hot</a>
                        </li>
                        <li class="sub"><a href="Category.php?mt=New">New</a>
                        </li>
                    </ul>
                </nav>
                <div class="search">
                <form action="Category.php" method="GET">
                        <input type="text" class="tk" name="sr" placeholder="Search . . ">
                        <button type="submit">Search</button>
                        <img src="../img/logo/search.png" alt="" class="iconsearch">
                    </form>
                </div>

                <div class="cart">
                <?php 
                            if (isset($_SESSION['username']) && $_SESSION['username']){?>
                                 <div class="tkdn">
                        <a href="#">
                            <h4><?php echo $_SESSION['username']; ?></h4>
                            <a href="logout.php">
                            Log Out
                            </a>
                        </a>
                    </div>
                            <?php } else {?>
                    <div class="taikhoan">
                        <a href="#">
                            <h4>User</h4>
                            <img src="../img/logo/user.png" alt="cart">
                        </a>
                    </div>
                            <?php } ?>
                    <div class="giohang">
                        <h4><?php echo $sl['sl'] ?> </h4>
                        <img src="../img/logo/gh.png" alt="cart">
                        <div class="gioh">
                            <div class="dsgh">
                                <?php
                                if(mysqli_num_rows($giohang)>0){
                                while($spgh=mysqli_fetch_array($giohang)){ ?>
                                <div class="spgh">
                                    <div class="anhsp">
                                        <img src="../img/sanpham/<?php echo $spgh['LinkHA']; ?>" alt="">
                                    </div>
                                    <div class="bodysp">
                                        <h3><a href="#"><?php echo $spgh['TenSP']; ?> </a></h3>
                                        <h4 class="giasp"><span class="slsp"><?php echo $spgh['SLmua']?> X</span> <?php echo $spgh['Gia']?></h4>
                                    </div>
                                    <button class="delete">
                                        <a href="delcart.php?masp=<?php echo $spgh['MaSP'] ?>" style="color:white"}><i class="fa fa-close" style="color:white"></i></a>
                                    </button>
                                </div>
                                <?php }} ?>
                            </div>
                            <div class="tongtien">
                                <small><?php echo $sl['sl'] ?> Items selected </small>
                                <h5>SUBTOTAL : <?php
                                if(mysqli_num_rows($gioh)>0)
                                { $tt=mysqli_fetch_array($gioh); echo $tt['TongTien'];}
                                else{
                                    echo 0;
                                }?> $ </h5>
                            </div>
                            <div class="nutgh">
                            <?php if($magh){ ?>
                                <a href="rscart.php?ma=<?php echo $magh ?>" onclick="return confirm('Are you sure?')">RESET</a><?php } 
                                else{?>
                                    <a href="#" onclick="alert('No Items In Cart!!')">RESET</a>
                                <?php }?>
                                <a href="checkout.php">CHECKOUT<i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="khungbreadcrumb">
    <div class="breadcrumb-tree">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active">Check Out</li>
            </ul>
        </div>
    </div>
    <div class="khungthanhtoan">
        <div class="thanhtoan">
            <div class="sptt">
                <?php while($a=mysqli_fetch_array($giohang1)){?>
                <div class="sanpham">
                    <div class="baolisticon">
                        <div class="listicon">
                        <?php if($a['SLmua']==1){ ?>
                            <a href="down.php?masp=<?php echo $a['MaSP'] ?>" onclick="return confirm('Are you sure?')" class="icon" title="Remove To Cart">
                                <i class="fa fa-remove"></i>
                            </a>
                        <?php }else{ ?>
                            <a href="down.php?masp=<?php echo $a['MaSP'] ?>" class="icon" title="Remove To Cart">
                                <i class="fa fa-minus"></i>
                            </a>
                        <?php } ?>
                            <span><?php echo $a['SLmua'] ?></span>
                            <a href="up.php?masp=<?php echo $a['MaSP'] ?>" class="iconp" title="Add To Cart">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="hinhanhsp">
                        <img src="../img/sanpham/<?php echo $a['LinkHA'] ?>" alt="">
                    </div>
                    <div class="ttsp">
                        <div class="tensp">
                            <a href=<?php echo "product.php"."?id=".$a['MaSP'] ?>><?php echo $a['TenSP'] ?></a>
                        </div>
                        <div class="loaisp"><?php echo $a['LoaiSP'] ?></div>
                        <div class="giasp"><?php echo $a['ThanhTien'] ?> $</div>
                    </div>
                </div>
                <?php } ?>
               
            </div>
            <div class="sltt">
                <div class="dondathang">
                    <h2>Check Out</h2>
                    <div class="thandondathang">
                        <div class="spg">
                            <div class="spco"><strong>Products</strong></div>
                            <div class="giaspco"><strong>Price</strong></div>
                        </div>
                    </div>
                    <?php while($b=mysqli_fetch_array($giohang2)){?>
                    <div class="thandondathang">
                        <div class="spg">
                            <div class="spco"> <?php echo $b['SLmua'].' X '. $b['TenSP'] ?></div>
                            <div class="giaspco"><?php echo $b['ThanhTien'] ?> $</div>
                        </div>
                    </div>
                   
                   
                    <?php } ?>
                    <div class="thandondathang">
                        <div class="spg">
                            <div > <strong>Total</strong></div>
                            <div class="tonggia"><?php echo $g['TongTien'] ?> $</div>
                        </div>
                    </div>
                   
                    <a href="xlcheckout.php" class="nutthanhtoan">Check Out</a>
                    <a href="order.php?id=<?php echo $tkkh ?>" class="nutthanhtoan">Order Details</a>

                </div>
            </div>
        </div>
    </div>
    <div class="newsletter">
        <div class="newslt">
        <div class="news">
                <div class="r1">Search Product</div>
                <div class="r2">Enter Name,Category, . . .  To Search Product</div>
                <div class="r3">
                    <form action="Category.php" method="GET">
                        <input type="text" name="sr">
                        <button type="submit">
                            <span>Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="khungfooter">
        <div class="footer">
            <div class="thongtinlienhe">
                <h4>Contact Info</h4>
                <div class="tt">
                    <div><i class="fa fa-map-marker"></i><span>172/2A 3/2, Phường Hưng Lợi, Quận Ninh Kiều, Tp. Cần
                            Thơ</span></div>
                    <div><i class="fa fa-phone"></i><span>1900 6989</span></div>
                    <div><i class="fa fa-mobile-phone"></i><span>039 76 79 426</span></div>
                    <div><i class="fa fa-envelope"></i><span>liemh172@gmail.com</span></div>
                </div>
            </div>
            <div class="aboutus">
                <h4>About Us</h4>
                <div class="tt">
                    <div><i class="fa fa-building"></i><span>Công ty TNHH Linhkien.com</span></div>
                    <div><i class="fa fa-check"></i><span>Mã số thuế: 0515376871 do Sở Kế hoạch đầu tư TP Cần Thơ cấp
                            ngày 06/02/2019</span></div>
                </div>
            </div>
            <div class="hotro">
                <h4>Help</h4>
                <div class="tt">
                    <div>
                        <span> Tư Vấn Bán Hàng (8:30 - 18:00)
                            </br>
                            <span>039 76 79 426</span>
                        </span>
                    </div>
                    <div>
                        <span> Hỗ Trợ Bảo Hành (8:30 - 18:00)
                            </br>
                            <span>039 76 79 426</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/slide.js"></script>
    <script src="../js/slidesp.js"></script>
    <script src="../js/slidespm.js"></script>
</body>

</html>