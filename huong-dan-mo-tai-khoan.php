<?php $body = '' ?>
<?php $page = 'huongdan' ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="huongdan__motaikhoan uk-height-viewport uk-flex uk-flex-middle uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-section uk-width-1-1">
        <div class="uk-container uk-container-large">
            <div class="item__24 uk-text-center uk-light">
                <h3 class="uk-h3 uk-text-center uk-text-uppercase home__title item__10">
                    HƯỚNG DẪN MỞ TÀI KHOẢN <br class="uk-visible@m">
                    CHỨNG KHOÁN TECHCOMBANK
                </h3>
                <div class="item__10">
                    <span class="huongdan__motaikhoan__txt">Có ngay tài khoản để giao dịch chứng khoán sau khi hoàn tất các bước sau! </span>
                </div>
            </div>
            <div class="item__24">
                <div class="uk-grid uk-flex-bottom" uk-grid>
                    <div class="uk-width-2-5@m">
                        <img uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true" src="images/mo-tai-khoan-tcbs-20220421140736.png" alt="HƯỚNG DẪN MỞ TÀI KHOẢN
CHỨNG KHOÁN TECHCOMBANK">
                    </div>
                    <div class="uk-width-expand" uk-scrollspy="cls: animate; target: .anima; delay: 200; repeat: true">
                        <?php for ($i=1;$i<=5;$i++): ?>
                        <div class="huongdan__motaikhoan__item anima">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-1-3">
                                    <div class="huongdan__step">
                                        <?php if ($i==1): ?>
                                            Bước 1: Chuẩn bị
                                        <?php endif; ?>

                                        <?php if ($i==2): ?>
                                            Bước 2: Điền các thông tin cơ bản
                                        <?php endif; ?>

                                        <?php if ($i==3): ?>
                                            Bước 3: Cung cấp hình ảnh CMND/CCCD
                                        <?php endif; ?>

                                        <?php if ($i==4): ?>
                                            Bước 4: Xác thực khách hàng qua video
                                        <?php endif; ?>

                                        <?php if ($i==5): ?>
                                            Bước 5: Ký hợp đồng điện tử
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="uk-width-auto uk-visible@m">
                                    <div class="huongdan__motaikhoan__box"></div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="huongdan__motaikhoan__card uk-card uk-card-default uk-padding-small">
                                        <?php if ($i==1): ?>
                                            <div>- Điện thoại thông minh hoặc laptop có camera</div>
                                            <div>- CMND hoặc CCCD còn hiệu lực</div>
                                            <div>- Email, số điện thoại, số tài khoản ngân hàng</div>
                                        <?php endif; ?>

                                        <?php if ($i==2): ?>
                                            <div>Vui lòng truy cập <a href="">https://iwp.tcbs.com.vn/</a> để mở tài khoản TCBS của chứng khoán Techcombank Securities</div>
                                        <?php endif; ?>

                                        <?php if ($i==3): ?>
                                            <div>Ở bước này vui lòng đăng tải ảnh chụp mặt trước mặt sau của CMND/CCCD</div>
                                            <div>Lưu ý: Hình ảnh rõ nét, không mờ, không nhòe</div>
                                        <?php endif; ?>

                                        <?php if ($i==4): ?>
                                            <div>Để thực hiện bước này cần đảm bảo thiết bị xác thực có camera và trang phục lịch sự</div>
                                        <?php endif; ?>

                                        <?php if ($i==5): ?>
                                            <div>Ở mục này quý khách hãy xem lại thông tin, điều khoản và thực hiện ký hợp đồng mở tài khoản điện tử tại chứng khoánTechcombank.</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="item__24 uk-text-center uk-light">
                <a target="_blank" href="https://tcinvest.tcbs.com.vn/guest/login?openAccount=true&IWPCode=105C988916" class="home__blockChuongtrinh__btn uk-button uk-button-default">BẮT ĐẦU MỞ TÀI KHOẢN</a>
            </div>
        </div>
    </div>
</div>

<!--CHƯƠNG TRÌNH ƯU ĐÃI-->
<div class="home__blockChuongtrinh uk-light uk-section uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-container">
        <div class="home__blockChuongtrinh__item">
            <h3 class="uk-h3 uk-text-center uk-text-uppercase home__title">
                CHƯƠNG TRÌNH ƯU ĐÃI <br class="uk-visible@m">
                KHI MỞ MỚI TÀI KHOẢN CHỨNG KHOÁN TECHCOMBANK
            </h3>
        </div>
        <div class="home__blockChuongtrinh__item">
            <div class="uk-flex-middle uk-flex-center uk-child-width-auto@m" uk-grid>
                <div>
                    <img style="width: 418px" src="images/big-icon12x-20211217163600.png" alt="CHƯƠNG TRÌNH ƯU ĐÃI
KHI MỞ MỚI TÀI KHOẢN CHỨNG KHOÁN TECHCOMBANK">
                </div>
                <div>
                    <ul class="uk-list home__blockChuongtrinh__list">
                        <li>Miễn phí tới <span>200 triệu</span> phí giao dịch</li>
                        <li>Nhận ngay <span>100 iXu</span> khi mở thành công</li>
                        <li>Tài khoản <span>VIP</span>, số tài khoản đẹp theo sở thích</li>
                        <li>Hỗ trợ mở tài khoản TCBS ngay tại nhà</li>
                        <li>Đăng ký Online nhanh gọn sau 3 phút</li>
                    </ul>
                    <a target="_blank" href="https://tcinvest.tcbs.com.vn/guest/login?openAccount=true&IWPCode=105C988916" class="home__blockChuongtrinh__btn uk-button uk-button-default">ĐĂNG KÝ MỞ THEO CHƯƠNG TRÌNH</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/CHƯƠNG TRÌNH ƯU ĐÃI-->

<!--Cauhoi-->
<div class="uk-section uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-container">
        <div class="item__40 uk-light">
            <h3 class="uk-h3 uk-text-center uk-text-uppercase home__title">
                03 CÂU HỎI KHI MỞ TÀI KHOẢN
            </h3>
        </div>
        <div class="item__40">
            <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/reviews-04.svg',
                        'title' => '01. Khách hàng cần chuẩn bị giấy tờ gì để mở tài khoản ?',
                        'desc' => 'Cần chuẩn bị CMND hoặc CCCD còn hiệu lực. Ngoài ra cần có mail, số điện thoại, số tài khoản ngân hàng.',
                    ),
                    array(
                        'src' => 'images/faq-04.svg',
                        'title' => '02. Mở tài khoản chứng khoán Techcombank có mất phí không ?',
                        'desc' => 'Chúng tôi hoàn toàn miễn phí duy trì, mở tài khoản chứng khoán Techcombank.',
                    ),
                    array(
                        'src' => 'images/faq-05.svg',
                        'title' => '03.Đăng ký tài khoản sau bao lâu được giao dịch ?',
                        'desc' => 'Sau khoảng 2 ngày làm việc tài khoản được duyệt kích hoạt, khi đó khách hàng có thể giao dịch.',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="huongdan__card uk-card uk-card-default uk-card-body uk-border-rounded uk-flex uk-flex-column">
                        <div class="uk-flex-auto item__10">
                            <div class="huongdan__boximg">
                                <img class="uk-responsive-height" src="<?= $v['src'] ?>" alt="<?= $v['title'] ?>">
                            </div>
                            <h3 class="uk-h3 huongdan__card__title"><?= $v['title'] ?></h3>
                        </div>
                        <div class="item__10">
                            <div class="huongdan__card__desc"><?= $v['desc'] ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--/Cauhoi-->

<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-text-center item__10 huongdan__title">Không bao giờ là quá sớm để đầu tư, theo cách của bạn, <br class="uk-visible@m">
            vì lợi ích thực sự của bạn</div>
        <div class="uk-text-center uk-light item__10">
            <a target="_blank" href="https://tcinvest.tcbs.com.vn/guest/login?openAccount=true&IWPCode=105C988916" class="home__blockChuongtrinh__btn uk-button uk-button-default">ĐĂNG KÝ MỞ THEO CHƯƠNG TRÌNH ƯU ĐÃI TẠI ĐÂY</a>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>