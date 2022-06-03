<?php $data["title"] = "Chứng Khoán Techcombank, Công Ty CP Chứng Khoán Kỹ Thương"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--GIỚI THIỆU-->
<div class="home__blockGioithieu uk-light uk-section uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-container">
        <div class="item__30">
            <h1 class="uk-h1 home__blockGioithieu__title">
                GIỚI THIỆU <br class="uk-visible@m">
                CHỨNG KHOÁN TECHCOMBANK
            </h1>
            <p class="home__blockGioithieu__txt">Chứng khoán Techcombank là công ty chứng khoán uy tín hàng đầu tại Việt Nam. Trong lĩnh vực trái phiếu doanh nghiệp, chứng khoán Techcombank luôn duy trì vị trí số 1 với hơn 213.322 tỉ đồng trái phiếu được tư vấn phát hành trong giai đoạn 2014-2019 và phân phối cho các nhà đầu tư đa dạng. Năng lực vượt trội trong mảng nghiệp vụ này của chứng khoán Techcombank đã được những tổ chức xếp hạng quốc tế danh tiếng công nhận.</p>
        </div>
        <div class="item__30">
            <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>
                <?php
                $data = array(
                    array(
                        'src' => 'images/chung-khoan-tot-nhat-20210821122458.png',
                        'txt' => 'Nhà thu xếp chứng khoán nợ tốt nhất Việt Nam năm 2016 và nhà tư vấn trái phiếu tốt nhất Việt Nam năm 2018 - 2019',
                    ),
                    array(
                        'src' => 'images/southestasia-20210821122544.png',
                        'txt' => 'Chứng khoán Techcombank đạt giải thưởng nhà tư vấn trái phiếu tốt nhất Việt Nam (2007 – 2019)',
                    ),
                    array(
                        'src' => 'images/1524656786aaa2018logo-20210821122608.jpeg',
                        'txt' => 'Chứng khoán Techcombank đạt giải thưởng nhà tư vấn trái phiếu tốt nhất Việt Nam năm 2018 - 2019',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="home__blockGioithieu__card uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="home__blockGioithieu__boximg">
                            <img class="uk-responsive-height" src="<?= $v['src'] ?>" alt="">
                        </div>
                        <div class="home__blockGioithieu__card__txt"><?= $v['txt'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="item__30 uk-text-center">
            <a target="_blank" href="https://tcinvest.tcbs.com.vn/guest/login?openAccount=true&IWPCode=105C988916" class="home__blockChuongtrinh__btn uk-button uk-button-default">ĐĂNG KÝ MỞ TÀI KHOẢN CHỨNG KHOÁN</a>
        </div>
    </div>
</div>
<!--/GIỚI THIỆU-->

<!--THÀNH TÍCH NỔI BẬT-->
<div class="home__blockThanhtich uk-light uk-section uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-container">
        <div class="item__24">
            <h3 class="uk-h3 uk-text-center uk-text-uppercase home__title">
                THÀNH TÍCH NỔI BẬT <br class="uk-visible@m">
                TẠI CHỨNG KHOÁN TECHCOMBANK
            </h3>
        </div>
        <div class="item__24">
            <p class="home__blockThanhtich__txt">Công ty cổ phần chứng khoán Techcombank (TCBS) đứng vị trí số 1 thị trường về lĩnh vực trái phiếu doanh nghiệp (TPDN). Trong 5 năm liên tiếp 2016 – 2020, thị phần giao dịch TPDN tại Sở giao dịch chứng khoán TP.HCM (HOSE) của TCBS luôn ở mức trên 65%.</p>
            <p class="home__blockThanhtich__txt">Năm 2019, những chỉ số tài chính chủ lực chứng khoán Techcombank tiếp tục duy trì ở mức độ vững mạnh và an toàn cao. Tỷ suất lợi nhuận trên vốn chủ sở hữu (ROE) đạt mức 38%, tổng tái ản tăng 45%, biên lợi nhuận ròng giữ ở mức ổn định với tỷ lệ 67%, tỷ suất lợi nhuận sau thuế trên mỗi CBNV của chứng khoán Techcombank năm 2019 đạt mức 5,4 tỷ đồng/người, là các chỉ số cao nhất trong các công ty chứng khoán top đầu.</p>
        </div>
        <div class="item__24">
            <div class="uk-child-width-auto uk-flex-center" uk-grid>
                <div>
                    <div class="uk-cover-container">
                        <img src="images/tai-khoan-tcbs-20210821131716.png" alt="" uk-cover="">
                        <canvas width="260" height="154"></canvas>
                    </div>
                </div>
                <div>
                    <div class="uk-cover-container">
                        <img src="images/thanh-tich-tcbs-20210821131909.png" alt="" uk-cover="">
                        <canvas width="260" height="154"></canvas>
                    </div>
                </div>
                <div>
                    <div class="uk-cover-container">
                        <img src="images/thanh-tich-chung-khoan-tcbs-20210821131836.png" alt="" uk-cover="">
                        <canvas width="260" height="154"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/THÀNH TÍCH NỔI BẬT-->

<!--TCWEALTH-->
<div class="home__block01 uk-light uk-section uk-background-norepeat uk-background-top-center uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-container">
        <div class="uk-flex-middle" uk-grid>
            <div class="uk-width-2-5@m">
                <div class="home__block01__item">
                    <h3 class="uk-h3 home__block01__title">TCWEALTH</h3>
                    <div class="home__block01__txt">Robo Advisor đầu tiên được phát triển tại Việt Nam</div>
                    <ul class="uk-list home__block01__list">
                        <li>Công cụ online tư vấn tài chính cá nhân.</li>
                        <li>Mô tả dòng tiền chi tiết, đưa ra bức tranh tài chính toàn cảnh của mỗi cá nhân.</li>
                        <li>Hỗ trợ người dùng lên kế hoạch đầu tư phù hợp với từng mục tiêu cụ thể trong tương lai.</li>
                        <li>Thông minh, chuyên biệt và luôn miễn phí.</li>
                    </ul>
                </div>
                <div class="home__block01__item">
                    <h3 class="uk-h3 home__block01__title">TCANALYSIS</h3>
                    <div class="home__block01__txt">Một cổng tin vạn doanh nghiệp</div>
                    <ul class="uk-list home__block01__list">
                        <li>Phân tích toàn diện và chuyên sâu cho hơn 1.350 công ty niêm yết.</li>
                        <li>Hệ thống báo cáo 1 click đầy đủ và miễn phí.</li>
                        <li>Công cụ Market Watch dõi theo mọi chuyển động thị trường và các ngành nghề.</li>
                    </ul>
                </div>
            </div>
            <div class="uk-width-expand uk-text-center">
                <img src="images/tcinvest_by_tcbs_2021-20210821131013.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--/TCWEALTH-->

<!--SẢN PHẨM ĐẦU TƯ-->
<div class="home__blockSanpham uk-section uk-background-norepeat uk-background-top-left uk-background-cover" data-src="images/capture-recovered-20220421114429.jpeg" uk-img>
    <div class="uk-container">
        <div class="home__blockSanpham__item">
            <h3 class="uk-h3 uk-text-center uk-text-uppercase home__title">
                SẢN PHẨM ĐẦU TƯ <br class="uk-visible@m">
                TẠI CHỨNG KHOÁN TECHCOMBANK
            </h3>
        </div>
        <div class="home__blockSanpham__item">
            <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>
                <div>
                    <div class="home__blockSanpham__card uk-card uk-card-body uk-card-default">
                        <div class="item__20">
                            <div>
                                <div class="uk-cover-container uk-flex-inline">
                                    <img src="images/red-ibond-20210821132447.png" alt="" uk-cover="">
                                    <canvas width="78" height="78"></canvas>
                                </div>
                            </div>
                            <h4 class="uk-h4 home__blockSanpham__title">iBond</h4>
                            <div class="home__blockSanpham__txt">Trái phiếu doanh nghiệp</div>
                        </div>
                        <div class="item__20">
                            <div class="home__blockSanpham__txt home__blockSanpham__txt--c1">49.772 khách hàng đang sở hữu và 128.525 tỷ đồng tổng doanh số đã bán ra.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__blockSanpham__card uk-card uk-card-body uk-card-default">
                        <div class="item__20">
                            <div>
                                <div class="uk-cover-container uk-flex-inline">
                                    <img src="images/red-ifund-20210821133202.png" alt="" uk-cover="">
                                    <canvas width="78" height="78"></canvas>
                                </div>
                            </div>
                            <h4 class="uk-h4 home__blockSanpham__title">iFund</h4>
                            <div class="home__blockSanpham__txt">Quỹ mở Trái phiếu & Cổ phiếu</div>
                        </div>
                        <div class="item__20">
                            <div class="home__blockSanpham__txt home__blockSanpham__txt--c1">Các quỹ đầu tư chuyên biệt về trái phiếu (Techcom Bond Fund - TCBF, Techcom FlexiCash Fund - FlexiCA$H ) và cổ phiếu (Techcom Equity Fund - TCEF). Số tiền đầu tư chỉ từ 10.000 đồng.</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home__blockSanpham__card uk-card uk-card-body uk-card-default">
                        <div class="item__20">
                            <div>
                                <div class="uk-cover-container uk-flex-inline">
                                    <img src="images/tcbs-san-pham-20210821133601.png" alt="" uk-cover="">
                                    <canvas width="78" height="78"></canvas>
                                </div>
                            </div>
                            <h4 class="uk-h4 home__blockSanpham__title">TCREIT</h4>
                            <div class="home__blockSanpham__txt">Quỹ đầu tư Bất động sản</div>
                        </div>
                        <div class="item__20">
                            <div class="home__blockSanpham__txt home__blockSanpham__txt--c1">Quỹ đầu tư Bất động sản duy nhất tại Việt Nam với 90% lợi nhuận được chia lại cho nhà đầu tư hàng năm theo luật định.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/SẢN PHẨM ĐẦU TƯ-->

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
                    <img style="width: 418px" src="images/big-icon12x-20211217163600.png" alt="">
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
<?php require "template-parts/layouts/footer.php"; ?>