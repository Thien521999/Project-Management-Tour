<?php 
    include "view/layout/head-tour-detail.php";
    require "dao/tour.php";
?>

<div class="app__content-wrap">
    <div class="content_header">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <ul class="content__top">
                        <li class="content__item"><i class="fas fa-home"></i></li>
                        <li class="content__item"><a href="">Trang chủ </a></li>
                        <li class="content__item">-</li>
                        <li class="content__item">Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapForm-contact">
        <div class="grid wide">
            <div class="wrapForm__content wrapForm--contact">
                <div class="row">
                    <div class="col l-6 m-6 c-12">
                        <div class="wrapForm__title">DU LỊCH TRONG NƯỚC</div>
                        <div class="wrapForm__beWrap">
                            <div class="wrapForm__be">
                                <span class="wrapForm__envelope"><i class="fas fa-envelope envelope"></i></span>dulichtrongnuoc@dulichviet.com.vn
                            </div>
                            <div class="wrapForm__be">
                                <span class="wrapForm__phone"><i class="fas fa-phone-volume volume"></i></span>028.7305.6789 - Ext: 301 - 309</div>
                        </div>
                        <div class="phoneWrap">
                            <div class="hotline">0909.189.888</div>
                            <div class="hotline">0903.933.788</div>
                        </div>
                        <div class="text-center">
                            <img src="//dulichviet.com.vn/images/form/1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        <form action="" id="formContact" name="formContact" method="post" class="validate" novalidate="novalidate">
                            <div class="wrapForm__form-group">
                                <div class="wrapForm__txt">Dấu <span class="dau-sao">*</span> là thông tin bắt buộc</div>
                            </div>
                            <div class="wrapForm__form-group">
                                <label class="wrapForm__label wrapForm__txt" for="">Họ tên <span class="dau-sao">*</span></label>
                                <div class="div_input"><input class="wrapForm__input" name="Name" id="Name" type="text" value="" required="" title="Vui lòng nhập Họ tên" aria-required="true" /></div>
                            </div>
                            <div class="wrapForm__form-group">
                                <label class="wrapForm__label wrapForm__txt" for="">Email <span class="dau-sao">*</span></label>
                                <div class="div_input"><input class="wrapForm__input" name="Mail" id="Mail" type="text" value="" required="" aria-required="true" /></div>
                            </div>
                            <div class="wrapForm__form-group">
                                <label class="wrapForm__label wrapForm__txt" for="">Số điện thoại <span class="dau-sao">*</span></label>
                                <div class="div_input"><input class="wrapForm__input" name="Phone" id="Phone" type="text" value="" required="" title="Vui lòng nhập Số điện thoại" aria-required="true" /></div>
                            </div>
                            <div class="wrapForm__form-group">
                                <label class="wrapForm__label wrapForm__txt" for="">Địa chỉ </label>
                                <div class="div_input"><input class="wrapForm__input" name="Address" id="Address" type="text" value="" /></div>
                            </div>
                            <div class="wrapForm__form-group">
                                <label class="wrapForm__label wrapForm__txt" for="">Yêu cầu <span class="dau-sao">*</span></label>
                                <div class="div_input"><textarea class="Note" name="Note" id="Note" rows="7" required="" title="Vui lòng nhập Yêu cầu" aria-required="true"></textarea></div>
                            </div>
                            <div class="wrapForm__form-group">
                                <label class="wrapForm__label wrapForm__txt" for="">Bạn biết thông tin qua:</label>
                                <div class="div_input"><input class="wrapForm__input" name="MuntiValue" id="MuntiValue" type="text" value="" /></div>
                            </div>
                            <div class="wrapForm__form-group">
                                <div class="row">
                                    <div class="col l-8 m-8 c-12">
                                        <div class="g-recaptcha" data-sitekey="6LcLuVsUAAAAAMskyU79Vd20sa2lt_OatyHJBXAI">
                                            <div style="width: 304px; height: 78px;">
                                                <div>
                                                    <iframe
                                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcLuVsUAAAAAMskyU79Vd20sa2lt_OatyHJBXAI&amp;co=aHR0cHM6Ly9kdWxpY2h2aWV0LmNvbS52bjo0NDM.&amp;hl=en&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;size=normal&amp;cb=i1ohkb18zmtc"
                                                        width="304"
                                                        height="78"
                                                        role="presentation"
                                                        name="a-po1kyyjgh5au"
                                                        frameborder="0"
                                                        scrolling="no"
                                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                                                    ></iframe>
                                                </div>
                                                <textarea
                                                    id="g-recaptcha-response"
                                                    name="g-recaptcha-response"
                                                    class="g-recaptcha-response"
                                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"
                                                ></textarea>
                                            </div>
                                            <iframe style="display: none;"></iframe>
                                        </div>
                                    </div>
                                    <div class="col l-4 m-8 c-12">                                  
                                        <button class="wrapForm__button" type="submit" class="btn-submit" data-value="1" data-serviceid="15113"><span class="wrapForm__submit">Gửi</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require "view/layout/footer-detail.php";
?>

