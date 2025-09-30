<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/head.php');
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/nav.php');
$result = $conn->query("SELECT * FROM infoadmin");
$row = $result->fetch(PDO::FETCH_ASSOC);
$result4 = $conn->query("SELECT * FROM bank");
$row4 = $result4->fetch(PDO::FETCH_ASSOC);
?>
    <main class="content">
    <div class="modal fade" id="copyModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Thông báo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="center-text">Đã copy vào bộ nhớ tạm!</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default center-text" data-dismiss="modal">Xác nhận</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>


    <section id="about"style="margin-top:100px">

        <div class="container">
            <!-- Slider main container -->

            <!-- <div id="wrapper-slider">
                <swiper-container id="slider">
                    <swiper-slide class="slide">
                        <img src="/images/banner1 1.png" alt="" srcset="">
                    </swiper-slide>
                    <swiper-slide>Slide 2</swiper-slide>
                    <swiper-slide>Slide 3</swiper-slide>
                    <swiper-slide>Slide ...</swiper-slide>
                    
                </swiper-container>
            </div> -->
            
            <script>
                var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                },
                });
            </script>

            <div class="box-content mb-5">
            <div class="intro ">
                <!-- avatar image -->
                <img src="<?=$row['img'];?>" alt="Bolby" class="mb-4" style="width: 180px;border: 3px solid #007BFF;border-radius: 100%;">                

                <!-- info -->
                <h1 class="mb-2 mt-0 blue-text" style="text-align: center;font-size: 24px;"><?=$row['ten'];?><i style="color: #3a86ff;font-size: 22px;margin-left: 5px;" class="fa-solid fa-circle-check"></i></h1>                 <span class="blue-text">I'm A
                    <span class="text-rotating">GRAPHIC DESIGNER, DEVELOPER MMO, PHOTOGRAPHER</span>
                </span> 

                <!-- social icons -->
                <ul class="social-icons light list-inline mb-4 mt-1">
                    
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/<?=$row['linkfb'];?>">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://t.me/<?=$row['linktelegram'];?>">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.m.me/<?=$row['linkmess'];?>">
                            <i class="fab fa-facebook-messenger"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="">
                     <i class="fa-brands fa-chrome"></i>
                      <li class="list-inline-item">
                        <a href="https://www.behance.net/<?=$row['linkbehance'];?>">
                     <i class="fa-brands fa-square-behance"></i>
                        </a>
                    </li>
                    
                                    </ul>

                <!-- buttons -->
                <a href="#home" class="btn btn-duong btn-min-w ">THIẾT KẾ LOGO WEBSITE</a>
                    <a href="#" class="btn btn-duong btn-min-w ">CÁC SẢN PHẨM BANNER</a>
                    <a href="/logo.php" class="btn btn-duong btn-min-w ">CÁC SẢN PHẨM LOGO</a>
                    <a href=#" class="btn btn-duong btn-min-w ">HƯỚNG DẪN LÀM LOGO</a>
            </div>
            </div>
    </section>
    <section id="home">
        <div class="container">
            
            <!-- <h2 class="section-title wow fadeInUp">SẢN PHẨM ĐÃ LÀM</h2> -->

            <!-- MODAL -->

            <!-- <div class="row mb-4 mt-4">
                <div class="col-md-4 text-center">
                    <a href="#" class="" data-toggle="modal" data-target="#largeModal" style="display: block;position: relative; width: 100%; height: 100%;">
                        <thumb class="text-gallery-thumb">
                            Click để xem đầy đủ
                        </thumb>
                        <img class="gallery-thumb" src="http://localhost/public_html/images/Wallpaper/5m5kLI9.png" alt="" srcset="">
                    </a>
                </div>
            </div> -->



            <!-- large modal -->
            <!-- <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                             <h4 class="modal-title center-text" id="myModalLabel">Large Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="center-text">Modal Body</h3>
                            <img src="http://localhost/public_html/images/Wallpaper/5m5kLI9.png" alt="" srcset="" class="img-gallery">
                            <img src="http://localhost/public_html/images/Wallpaper/berries.jpg" alt="" srcset="" class="img-gallery">
                            <img src="http://localhost/public_html/images/Wallpaper/classroom.jpg" alt="" srcset="" class="img-gallery">

                            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default center-text" data-dismiss="modal">ĐÓNG</button>
                            
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- /MODAL -->
            <div class="spacer" data-height="10"></div>
            <!-- section title -->
            <div class="row mb-5">
                

            </div>



            <h2 class="section-title wow fadeInUp btn-duong-border">LOGO WEBSITE</h2>
            <div class="spacer" data-height="60"></div>
    <div class="row">
        <?php 
        $sql = "SELECT * FROM maulogo";
        $result = $conn->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        ?>
    <div class="col-xl-4 col-md-6">
    <div id="<?=$row['product']?>" class="product-card shadow wow fadeInUp">
        <div class="product-card-image">
            <img src="<?=$row['img']?>" alt="" srcset="">
        </div>
        <div class="product-card-bar">
            <span class="product-card-price btn btn-outline-primary"><?=number_format($row['cash'])?> VND</span>
            <a href="#blog" class="product-card-button btn btn-primary" onclick="pickProduct(`<?=$row['product']?>`)"> 
            <i style="margin-right: 5px;"  class="fa-solid fa-cart-shopping"></i>
                CHỌN LOGO
            </a>
        </div>
    </div>
</div>
<?php }?>
</div>
            <!-- row end -->


        </div>

    </section>


    <!-- section blog -->
    <section id="blog">

        <div class="container">

            <!-- section title -->
            <h2 class="section-title wow fadeInUp btn-duong-border">GIỎ HÀNG VÀ THANH TOÁN</h2>

            <div class="spacer" data-height="30"></div>

            <div class="row blog-wrapper">

                <div class="col-md-6">
                    <h2 class="section-title wow fadeInUp mb-3 btn-duong-border">SẢN PHẨM ĐÃ CHỌN</h2>
                    <div id="current-product" class="product-card shadow wow fadeInUp">
                        <div class="product-card-image">
                            <img src="./images/upload/iamhoang7.png" alt="" srcset="">
                        </div>
                        <div class="product-card-bar buy">
                            <span id="current-id">MÃ ĐANG CHỌN: 
                            </span>
                            <span class="product-card-name-input btn btn-primary">
                                <span>TÊN WEBSITE</span>
                                <input id="logo-name-input" class="form-control" type="text" placeholder="IAMHOANG.VN">
                            </span>
                            <p class="d-md-none" style="
    font-weight: bolder;
">THÔNG TIN THANH TOÁN</p>
                            <div class="d-md-none bank-card shadow wow fadeInUp">
                        <div class="d-md-none bank-card-info">
                            <div class="left">
                                <div class="bank-img" style="background-image: url('./images/contact/MoMo_Logo.png');"></div>
                                <div class="bank-infos">
                                    <span data-toggle="modal" data-target="#copyModal" class="bank-info" onclick="copyText(<?=$row4['stkmomo']?>)">
                                        SDT: 0<?=$row4['stkmomo']?>
                                        <svg width="14" height="14" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29169 1.375C2.03856 1.375 1.83335 1.5802 1.83335 1.83333V7.33333C1.83335 7.58647 1.62815 7.79167 1.37502 7.79167C1.12189 7.79167 0.916687 7.58647 0.916687 7.33333V1.83333C0.916687 1.07394 1.5323 0.458332 2.29169 0.458332H6.87502C7.12816 0.458332 7.33335 0.663537 7.33335 0.916665C7.33335 1.16979 7.12816 1.375 6.87502 1.375H2.29169ZM2.75002 3.66667C2.75002 2.90728 3.36563 2.29167 4.12502 2.29167H8.25002C9.00943 2.29167 9.62502 2.90728 9.62502 3.66667V9.16667C9.62502 9.92608 9.00943 10.5417 8.25002 10.5417H4.12502C3.36563 10.5417 2.75002 9.92608 2.75002 9.16667V3.66667ZM4.12502 3.20833C3.87189 3.20833 3.66669 3.41354 3.66669 3.66667V9.16667C3.66669 9.4198 3.87189 9.625 4.12502 9.625H8.25002C8.50316 9.625 8.70835 9.4198 8.70835 9.16667V3.66667C8.70835 3.41354 8.50316 3.20833 8.25002 3.20833H4.12502Z" fill="white" />
                                        </svg>
                                    </span>
                                    <span class="bank-info">CTK: <?=$row4['namemomo']?></span>
                                </div>
                            </div>
                            <div class="bank-img" style="background-image: url('./images/contact/momo.png');"></div>
                        </div>
                        <div class="bank-note">
                            <span>LƯU Ý: CHUYỂN KHOẢN GHI NỘI DUNG LÀ TÊN CỦA BẠN</span>
                        </div>
                    </div>

                    <div class="d-md-none bank-card shadow wow fadeInUp">
                        <div class="d-md-none bank-card-info">
                            <div class="left">
                                <div class="bank-img" style="background-image: url('./images/contact/Vietcombank-Logo-PNG-3\ 1.png');"></div>
                                <div class="bank-infos">
                                    <span data-toggle="modal" data-target="#copyModal" class="bank-info" onclick="copyText(<?=$row4['stkvcb']?>)">
                                        STK: <?=$row4['stkvcb']?>
                                        <svg width="14" height="14" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29169 1.375C2.03856 1.375 1.83335 1.5802 1.83335 1.83333V7.33333C1.83335 7.58647 1.62815 7.79167 1.37502 7.79167C1.12189 7.79167 0.916687 7.58647 0.916687 7.33333V1.83333C0.916687 1.07394 1.5323 0.458332 2.29169 0.458332H6.87502C7.12816 0.458332 7.33335 0.663537 7.33335 0.916665C7.33335 1.16979 7.12816 1.375 6.87502 1.375H2.29169ZM2.75002 3.66667C2.75002 2.90728 3.36563 2.29167 4.12502 2.29167H8.25002C9.00943 2.29167 9.62502 2.90728 9.62502 3.66667V9.16667C9.62502 9.92608 9.00943 10.5417 8.25002 10.5417H4.12502C3.36563 10.5417 2.75002 9.92608 2.75002 9.16667V3.66667ZM4.12502 3.20833C3.87189 3.20833 3.66669 3.41354 3.66669 3.66667V9.16667C3.66669 9.4198 3.87189 9.625 4.12502 9.625H8.25002C8.50316 9.625 8.70835 9.4198 8.70835 9.16667V3.66667C8.70835 3.41354 8.50316 3.20833 8.25002 3.20833H4.12502Z" fill="white" />
                                        </svg>
                                    </span>
                                    <span class="bank-info">CTK: <?=$row4['namevcb']?></span>
                                </div>
                            </div>
                            <div class="bank-img" style="background-image: url('./images/contact/VCB\ 1.png');"></div>
                        </div>
                        <div class="bank-note">
                            <span>LƯU Ý: CHUYỂN KHOẢN GHI NỘI DUNG LÀ TÊN CỦA BẠN</span>
                        </div>
                    </div>

                    <div class="d-md-none bank-card shadow wow fadeInUp">
                        <div class="d-md-none bank-card-info">
                            <div class="left">
                                <div class="bank-img" style="background-image: url('./images/contact/unnamed%201.png');"></div>
                                <div data-toggle="modal" data-target="#copyModal" class="bank-infos">
                                    <span class="bank-info" onclick="copyText(<?=$row4['stkmbbank']?>)">
                                        STK: <?=$row4['stkmbbank']?>
                                        <svg width="14" height="14" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29169 1.375C2.03856 1.375 1.83335 1.5802 1.83335 1.83333V7.33333C1.83335 7.58647 1.62815 7.79167 1.37502 7.79167C1.12189 7.79167 0.916687 7.58647 0.916687 7.33333V1.83333C0.916687 1.07394 1.5323 0.458332 2.29169 0.458332H6.87502C7.12816 0.458332 7.33335 0.663537 7.33335 0.916665C7.33335 1.16979 7.12816 1.375 6.87502 1.375H2.29169ZM2.75002 3.66667C2.75002 2.90728 3.36563 2.29167 4.12502 2.29167H8.25002C9.00943 2.29167 9.62502 2.90728 9.62502 3.66667V9.16667C9.62502 9.92608 9.00943 10.5417 8.25002 10.5417H4.12502C3.36563 10.5417 2.75002 9.92608 2.75002 9.16667V3.66667ZM4.12502 3.20833C3.87189 3.20833 3.66669 3.41354 3.66669 3.66667V9.16667C3.66669 9.4198 3.87189 9.625 4.12502 9.625H8.25002C8.50316 9.625 8.70835 9.4198 8.70835 9.16667V3.66667C8.70835 3.41354 8.50316 3.20833 8.25002 3.20833H4.12502Z" fill="white" />
                                        </svg>
                                    </span>
                                    <span class="bank-info">CTK: <?=$row4['namembbank']?></span>
                                </div>
                            </div>
                            <div class="bank-img" style="background-image: url('./images/contact/MB\ 1.png');"></div>
                        </div>
                        <div class="bank-note">
                            <span>LƯU Ý: CHUYỂN KHOẢN GHI NỘI DUNG LÀ TÊN CỦA BẠN</span>
                        </div>
                    </div>
                            <!-- <span class="product-card-name-input btn btn-primary">
                                <span>Thôn tin liên hệ</span>
                                <input id="logo-name-input" class="form-control logo-contact-input" type="text" placeholder="Link facebook, zalo, tele...">
                            </span> -->
                            <span style="font-weight: bold;margin-bottom: 15px;">THÔNG TIN LIÊN HỆ CỦA BẠN</span>
                            <textarea style="background-color: #007bff29;" rows="6" class="form-control logo-contact-input" placeholder="Hãy để lại thông tin liên hệ của bạn, sau khi nhận được yêu cầu Hoàng sẽ chủ động liên hệ cho bạn &#10;VD: LINK FACEBOOK, SDT ZALO, TELEGRAM"></textarea>
                            <span class="product-card-name-final-price btn btn-primary" style="background-color: #ffbb00;border-color: #ffbb00;">
                                <span id="final-price"> 0 VND</span>
                            </span>
                            <!-- <small>Sau khi chuyển khoản theo thông tin ở mục "THÔNG TIN THANH TOÁN"</small> -->
                            <button data-toggle="modal" data-target="#copyModal" class="btn btn-primary" id="btn-buy" onclick="sendRequest()">GỬI YÊU CẦU</button>
                        </div>
                    </div>

<br>
                </div>
                <div class="col-md-6">
                    <h2 class="d-none d-md-block section-title wow fadeInUp mb-3 btn-duong-border">THÔNG TIN THANH TOÁN</h2>

                    <div class="d-none d-md-block bank-card shadow wow fadeInUp">
                        <div class="bank-card-info">
                            <div class="left">
                                <div class="bank-img" style="background-image: url('./images/contact/MoMo_Logo.png');"></div>
                                <div class="bank-infos">
                                    <span data-toggle="modal" data-target="#copyModal" class="bank-info" onclick="copyText(<?=$row4['stkmomo']?>)">
                                        SDT: <?=$row4['stkmomo']?>
                                        <svg width="14" height="14" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29169 1.375C2.03856 1.375 1.83335 1.5802 1.83335 1.83333V7.33333C1.83335 7.58647 1.62815 7.79167 1.37502 7.79167C1.12189 7.79167 0.916687 7.58647 0.916687 7.33333V1.83333C0.916687 1.07394 1.5323 0.458332 2.29169 0.458332H6.87502C7.12816 0.458332 7.33335 0.663537 7.33335 0.916665C7.33335 1.16979 7.12816 1.375 6.87502 1.375H2.29169ZM2.75002 3.66667C2.75002 2.90728 3.36563 2.29167 4.12502 2.29167H8.25002C9.00943 2.29167 9.62502 2.90728 9.62502 3.66667V9.16667C9.62502 9.92608 9.00943 10.5417 8.25002 10.5417H4.12502C3.36563 10.5417 2.75002 9.92608 2.75002 9.16667V3.66667ZM4.12502 3.20833C3.87189 3.20833 3.66669 3.41354 3.66669 3.66667V9.16667C3.66669 9.4198 3.87189 9.625 4.12502 9.625H8.25002C8.50316 9.625 8.70835 9.4198 8.70835 9.16667V3.66667C8.70835 3.41354 8.50316 3.20833 8.25002 3.20833H4.12502Z" fill="white" />
                                        </svg>
                                    </span>
                                    <span class="bank-info">CTK: <?=$row4['namemomo']?></span>
                                </div>
                            </div>
                            <div class="bank-img" style="background-image: url('./images/contact/momo.png');"></div>
                        </div>
                        <div class="bank-note">
                            <span>LƯU Ý: CHUYỂN KHOẢN GHI NỘI DUNG LÀ TÊN CỦA BẠN</span>
                        </div>
                    </div>

                    <div class="d-none d-md-block bank-card shadow wow fadeInUp">
                        <div class="bank-card-info">
                            <div class="left">
                                <div class="bank-img" style="background-image: url('./images/contact/Vietcombank-Logo-PNG-3\ 1.png');"></div>
                                <div class="bank-infos">
                                    <span data-toggle="modal" data-target="#copyModal" class="bank-info" onclick="copyText(<?=$row4['stkvcb']?>)">
                                        STK: <?=$row4['stkvcb']?>
                                        <svg width="14" height="14" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29169 1.375C2.03856 1.375 1.83335 1.5802 1.83335 1.83333V7.33333C1.83335 7.58647 1.62815 7.79167 1.37502 7.79167C1.12189 7.79167 0.916687 7.58647 0.916687 7.33333V1.83333C0.916687 1.07394 1.5323 0.458332 2.29169 0.458332H6.87502C7.12816 0.458332 7.33335 0.663537 7.33335 0.916665C7.33335 1.16979 7.12816 1.375 6.87502 1.375H2.29169ZM2.75002 3.66667C2.75002 2.90728 3.36563 2.29167 4.12502 2.29167H8.25002C9.00943 2.29167 9.62502 2.90728 9.62502 3.66667V9.16667C9.62502 9.92608 9.00943 10.5417 8.25002 10.5417H4.12502C3.36563 10.5417 2.75002 9.92608 2.75002 9.16667V3.66667ZM4.12502 3.20833C3.87189 3.20833 3.66669 3.41354 3.66669 3.66667V9.16667C3.66669 9.4198 3.87189 9.625 4.12502 9.625H8.25002C8.50316 9.625 8.70835 9.4198 8.70835 9.16667V3.66667C8.70835 3.41354 8.50316 3.20833 8.25002 3.20833H4.12502Z" fill="white" />
                                        </svg>
                                    </span>
                                    <span class="bank-info">CTK: <?=$row4['namevcb']?></span>
                                </div>
                            </div>
                            <div class="bank-img" style="background-image: url('./images/contact/VCB\ 1.png');"></div>
                        </div>
                        <div class="bank-note">
                            <span>LƯU Ý: CHUYỂN KHOẢN GHI NỘI DUNG LÀ TÊN CỦA BẠN</span>
                        </div>
                    </div>

                    <div class="d-none d-md-block bank-card shadow wow fadeInUp">
                        <div class="bank-card-info">
                            <div class="left">
                                <div class="bank-img" style="background-image: url('./images/contact/unnamed%201.png');"></div>
                                <div data-toggle="modal" data-target="#copyModal" class="bank-infos">
                                    <span class="bank-info" onclick="copyText(<?=$row4['stkmbbank']?>)">
                                        STK: <?=$row4['stkmbbank']?>
                                        <svg width="14" height="14" viewbox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.29169 1.375C2.03856 1.375 1.83335 1.5802 1.83335 1.83333V7.33333C1.83335 7.58647 1.62815 7.79167 1.37502 7.79167C1.12189 7.79167 0.916687 7.58647 0.916687 7.33333V1.83333C0.916687 1.07394 1.5323 0.458332 2.29169 0.458332H6.87502C7.12816 0.458332 7.33335 0.663537 7.33335 0.916665C7.33335 1.16979 7.12816 1.375 6.87502 1.375H2.29169ZM2.75002 3.66667C2.75002 2.90728 3.36563 2.29167 4.12502 2.29167H8.25002C9.00943 2.29167 9.62502 2.90728 9.62502 3.66667V9.16667C9.62502 9.92608 9.00943 10.5417 8.25002 10.5417H4.12502C3.36563 10.5417 2.75002 9.92608 2.75002 9.16667V3.66667ZM4.12502 3.20833C3.87189 3.20833 3.66669 3.41354 3.66669 3.66667V9.16667C3.66669 9.4198 3.87189 9.625 4.12502 9.625H8.25002C8.50316 9.625 8.70835 9.4198 8.70835 9.16667V3.66667C8.70835 3.41354 8.50316 3.20833 8.25002 3.20833H4.12502Z" fill="white" />
                                        </svg>
                                    </span>
                                    <span class="bank-info">CTK: <?=$row4['namembbank']?></span>
                                </div>
                            </div>
                            <div class="bank-img" style="background-image: url('./images/contact/MB\ 1.png');"></div>
                        </div>
                        <div class="bank-note">
                            <span>LƯU Ý: CHUYỂN KHOẢN GHI NỘI DUNG LÀ TÊN CỦA BẠN</span>
                        </div>
                    </div>
                    <!-- <div class="spacer" data-height="20"></div>
                    <h2 class="section-title wow fadeInUp mb-3">LIÊN HỆ LẤY LOGO</h2>
                    <div class="bank-note">
                        <span>VUI LÒNG GỬI BILL THANH TOÁN QUA THÔNG TIN DƯỚI ĐÂY ĐỂ LẤY FILE LOGO</span>
                    </div>
                    <div class="spacer" data-height="20"></div>
                    <div id="contact" class="wow fadeInUp ">
                        <div class="contact-item btn btn-outline-primary">
                            <div class="contact-img shadow" style="background-image: url('./images/contact/facebook.png');"></div>

                            <a href="https://www.facebook.com/phuccoder14" class="contact-link">iamhoang.info</a>
                        </div>

                        <div class="contact-item btn btn-outline-primary">
                            <div class="contact-img shadow" style="background-image: url('./images/contact/zalo.png');"></div>

                            <a href="//zalo.me/phuccoder14" class="contact-link">08.2468.2006</a>
                        </div>

                        <div class="contact-item btn btn-outline-primary">
                            <div class="contact-img shadow" style="background-image: url('./images/contact/tele.png');"></div>
                            
                            <a href="https://t.me/phuccoder14"  class="contact-link">iamhoang9999</a>
                        </div>
                    </div> -->

            <h2 class="section-title wow fadeInUp btn-duong-border">ĐÁNH GIÁ</h2>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="box-content rate-box">
                        <img src="/images/upload/avt2.png" alt="" srcset="" style="width: 120px;">
                        <span>ceo & founder: facebook</span>
                        <p>Tôi thấy Founder đều là người có kinh nghiệm thực tiễn và hoạt động lâu năm trong Thiết Kế. Founder khá thẳng tính, chia sẻ thật lòng, không màu mè, có gì nói đó phù hợp với người mới và cả với người tham gia lâu năm trong mảng Design này.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="box-content rate-box">
                        <img src="/images/upload/avt2.png" alt="" srcset="" style="width: 120px;">
                        <span>ceo & founder: facebook</span>
                        <p>Tôi thấy Founder đều là người có kinh nghiệm thực tiễn và hoạt động lâu năm trong Thiết Kế. Founder khá thẳng tính, chia sẻ thật lòng, không màu mè, có gì nói đó phù hợp với người mới và cả với người tham gia lâu năm trong mảng Design này.</p>
                    </div>
                </div>
            </div>

        </div>
        

                </div>

            </div>

        </div>

    </section>

    <!-- section contact -->
    <div class="spacer" data-height="96"></div>
</main>
<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/foot.php');
?>