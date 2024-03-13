<footer class="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm">
                {{-- <span style="color: #F4F4F4;font-family: 'DM Sans';font-style: normal; font-weight: 400;
font-size: 16px;">The process of adding structures to areas of land, also known as real property sites.</span> --}}



                <p class="copyright">
                    <!--                <small>&copy; 2019</small>-->
                </p>

                <div class="know">
                    <a href="#" class="know-btn"> Knowledge Center <i class="fa fa-long-arrow-right"
                            aria-hidden="true"></i></a>

                </div>
            </div>


            <div class="col-sm">
                <h3 style="color: #6E7E1D">Links</h3>
                <ul class="list-unstyled links">
                    <li><a href="#about_us" class="scrollLink">About us</a></li>
                    <li><a href="{{ url('what-we-do') }}">What we do</a></li>
                    <li><a href="{{ url('our-categories') }}"> Our Categories
                    <li>
                    <li><a href="#">Directory of RTP
                    <li>

                </ul>
            </div>
            <!--
            <div class="col-sm">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Testimonial</a></li>
              </ul>
            </div>
-->
            <div class="col-sm">
                <h3 style="color: #6E7E1D">Links</h3>
                <ul class="list-unstyled links">
                    <li><a href="{{ url('blog') }}">Blogs</a></li>
                    <li><a href="{{ url('teams') }}">Teams</a></li>
                    <li><a href="{{ url('testimonials') }}">Testimonial</a></li>


                </ul>
            </div>
            <div class="col-md-3">
                <h3 style="color: #6E7E1D">Follow us</h3>
                <ul class="list-unstyled social">
                    <li><a href="#"><img src="https://builderstreat.ca/public/images/Facebook.svg"></a></li>
                    <li><a href="#"><img src="https://builderstreat.ca/public/images/Instagram.svg"></a></li>
                    <li><a href="#"><img src="https://builderstreat.ca/public/images/Twitter.svg"></a></li>
                    <li><a href="#"><img src="https://builderstreat.ca/public/images/Youtube.svg"></li>
                    <!--                <li><a href="#"><span class="icon-paper-plane"></span></a></li>-->
                </ul>
                <p style="color:#fff;">BUILDERSTREAT SOLUTIONS INC.<br>
                    304 – 8920 Woodbine Avenue<br>
                    Markham, ON, L3R 9W9</p>
                <a href="#" style="color:#fff !important;">ceo@builderstreat.ca</a>

            </div>

        </div>
        <!-- end col-4 -->
        <div class="col-12">
            <div class="footer-bottom"> <span style="color: #fff">© 2022 Builderstreat Solutions Inc.</span>
                <ul>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>
            <!-- end footer-bottom -->
        </div>
        <!-- end col-12  -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i> <small>Scroll Up</small> </a>
    <!-- end scroll-top -->
</footer>
<!-- end footer -->

<div id="sales-specialist-form">
    <form>
        <div class="form-group"> <span>Full Name</span>
            <input type="text">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Phone Number</span>
            <input type="text">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Current E-mail</span>
            <input type="email">
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <input type="submit" value="REQUEST A CALL">
        </div>
        <!-- end form-group -->
    </form>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>
<style>
    .footer .footer-bottom {
        width: 100%;
        display: block;
        margin-top: 50px;
        border-top: 1px dotted rgba(255, 255, 255, 0.2);
        padding: 40px 0;
        text-align: center;
    }

    .social {
        display: flex;
        gap: 10px;
        margin-top: 24px;
        margin-left: -13px;
    }

    .know {
        margin-top: 37px;
    }

    .list-unstyled a {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 34px;
        /* identical to box height */


        color: #FFFFFF;
    }

    a.footer-logo {
        width: 297px;
        height: 87px;
        /* left: 150px; */
        /* top: 6419px; */
        font-family: 'DM Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 180%;
        color: #F4F4F4;
    }

    .know-btn {
        padding: 16px 24px;
        width: 216px;
        height: 56px;
        font-family: 'Ubuntu';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;

        /* White */

        color: #FFFFFF;
        margin-top: 3%;
        background: #6E7E1D;
        border-radius: 2px;
    }
</style>

<script>
    $(document).ready(function() {
        $(".scrollLink").click(function(event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top
            }, 500);
        });
    });
</script>


<!-- end sales-specialist-form -->
