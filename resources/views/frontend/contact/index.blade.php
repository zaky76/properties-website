@extends('layouts.master')
<?php $title = "Welcare Properties Ltd."; ?>
@section('title', " $title ")
@section('contents')








<!-----------------banner slider----------------->





<!--inner banner start-->
<div class="innerBanner Loader">
    <img class="modify-img " data-image-small="/admin/uploads/page/contact-us/1920x562/1614763491y3nFE_s.jpg"
        data-image-large="/admin/uploads/page/contact-us/1920x562/1614763491y3nFE_l.jpg"
        data-image-standard="/admin/uploads/page/contact-us/1920x562/1614763491y3nFE_m.jpg" alt=""> <!--1366x400-->

    <div class="container">
        <div class="row">
            <h1 class="anim textOver"><span><span>Contact Us</span></span></h1>
        </div>
    </div>
</div>
<!--inner banner end-->



<!------ Location map start ------>
<section class="Location_map asContactMap">
    <div class="container-fluid p0">
        <div class="row Flex">
            <div class="col-md-5 Location_map__address pt100">
                <div class="Location_map__address__inner">
                    <!-- <h2 class="Title anim textOver"><span><span>Keep in Touch</span></span></h2>-->
                    <p class="anim justFade"><img src="/themes/cms/assets/images/static/location-pointer.svg" alt="">
                        <span>Rangs Babylonia, Level 9 & 10, 246, Bir Uttam Mir Shawkat Road, Tejgaon I/A,
                            Dhaka-1208</span>
                    </p>
                    <p class="anim justFade"><img src="/themes/cms/assets/images/static/call-icon.svg" alt=""><a
                            href="tel:16760" target="_blank">16760</a> </p>
                    <p class="anim justFade"><img src="/themes/cms/assets/images/static/icon-whatsapp.svg" alt=""><a
                            href="https://api.whatsapp.com/send/?phone=%2B8801708080822&text&type=phone_number&app_absent=0"
                            target="_blank" class="">+8801708080822</a> </p>

                    <p class="anim justFade"><img src="/themes/cms/assets/images/static/message-icon.svg" alt=""> <a
                            href="mailto:hello@edisonrealestatebd.com">hello@edisonrealestatebd.com</a></p>
                </div>

            </div>

            <div class="col-md-7 Location_map__map">
                <a href="https://goo.gl/maps/6UVuDvH1tXwJZLUh6"></a>
                <div id="map" data-map-pointer="/themes/cms/assets/images/static/pointer.png"></div>
            </div>
        </div>
    </div>
</section>
<!------ Location map start ------>

<!-------------form section start ------------->
<section class="homeForm pt100 pb100 asContactForm Loader">
    <img class=" modify-img " data-image-small="/themes/cms/assets/images/static/landowner.svg"
        data-image-large="/themes/cms/assets/images/static/landowner.svg"
        data-image-standard="/themes/cms/assets/images/static/landowner.svg" data-src=""
        src="/themes/cms/assets/images/static/blur.jpg" alt=""> <!-- 1366x700 -->
    <div class="container">
        <div class="row">

            <div class="Flex">
                <div class="homeForm__left col-md-7 anim boxOver">
                    <div class="homeForm__left__inner">
                        <img class=" modify-img"
                            data-image-small="/admin/uploads/page/contact-us/900x750/1614763453J9EfS_m.jpg"
                            data-image-large="/admin/uploads/page/contact-us/900x750/1614763453J9EfS_m.jpg"
                            data-image-standard="/admin/uploads/page/contact-us/900x750/1614763453J9EfS_m.jpg"
                            data-src="" src="/themes/cms/assets/images/static/blur.jpg" alt=""> <!-- 600x500 -->
                    </div>
                </div>


                <div class="col-md-5 homeForm__right pl0">
                    <div class="homeForm__right__form">
                        <h2 class="Title anim textOver"><span><span>contact us</span></span></h2>




                        <form id="contact-form" class="dynamic_form " action="/site/dynamic_form" method="post"
                            data-pjax="false">
                            <input type="hidden" name="_csrf-frontend"
                                value="w98AxeUvRTSPhW-UIMMSiiibz9Uzv4XFnN-kqgOZ6mur5zn2rnV1VbbgLvJW9n3CQMStgGHs7o3Wu531ed2oHQ==">
                            <input type="hidden" id="contact-form" class="form-control" name="form_id"
                                value="contact-form">



                            <div class="form-message-container success_wrapper hide success_wrapper_contact-form">
                                <div class="form-message-body">
                                    <span class="success_container_contact-form"></span>
                                </div>
                            </div>
                            <div class="form-message-container error_wrapper hide error_wrapper_contact-form">
                                <div class="form-message-body">
                                    <span class="error_container_contact-form"></span>
                                </div>
                            </div>
                            <input type="text" name="Dynamicform[spam_protector]" style="display:none;">
                            <div class="form-group">
                                <input type="text" id="name" name="Dynamicform[name]" class="form-control"
                                    placeholder="Full Name*">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="phone" name="Dynamicform[phone]"
                                    placeholder="Phone Number*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="Dynamicform[email]"
                                    placeholder="Email Address*">
                            </div>
                            <div class="form-group">
                                <textarea name="Dynamicform[message]" id="message" cols="30" rows="10"
                                    class="form-control" placeholder="Message*"></textarea>
                            </div>


                            <div class="form-group">
                                <button type="submit" class=" dynamic_submit_btn dcBtn"><span>submit</span></button>
                            </div>


                        </form>


                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-------------form section end ------------->







@endsection