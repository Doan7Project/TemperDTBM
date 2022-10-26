@extends('User.main.main')
@section('content')

<!-- feature -->
<style>
    .contact {
        padding-top: 80px;
        padding-bottom: 50px;
    }

    .contact__widget {
        margin-bottom: 30px;
    }

    .contact__widget span {
        font-size: 36px;
        color: #17a2b8;
        font-family: 'Heebo', sans-serif;
        font-family: 'Source Serif Pro', serif;
    }

    .contact__widget h4 {
        color: #1c1c1c;
        font-weight: 700;
        margin-bottom: 6px;
        margin-top: 18px;
    }

    .contact__widget p {
        color: #666666;
        margin-bottom: 0;
    }

    .map {
        height: 500px;
        position: relative;
    }

    .map iframe {
        width: 100%;
    }

    .map .map-inside {
        position: absolute;
        left: 50%;
        top: 160px;
        -webkit-transform: translateX(-175px);
        -ms-transform: translateX(-175px);
        transform: translateX(-175px);
    }

    .map .map-inside i {
        font-size: 48px;
        color: #7fad39;
        position: absolute;
        bottom: -75px;
        left: 50%;
        -webkit-transform: translateX(-18px);
        -ms-transform: translateX(-18px);
        transform: translateX(-18px);
    }

    .map .map-inside .inside-widget {
        width: 350px;
        background: #ffffff;
        text-align: center;
        padding: 23px 0;
        position: relative;
        z-index: 1;
        -webkit-box-shadow: 0 0 20px 5px rgba(12, 7, 26, 0.15);
        box-shadow: 0 0 20px 5px rgba(12, 7, 26, 0.15);
    }

    .map .map-inside .inside-widget:after {
        position: absolute;
        left: 50%;
        bottom: -30px;
        -webkit-transform: translateX(-6px);
        -ms-transform: translateX(-6px);
        transform: translateX(-6px);
        border: 12px solid transparent;
        border-top: 30px solid #ffffff;
        content: "";
        z-index: -1;
    }

    .map .map-inside .inside-widget h4 {
        font-size: 22px;
        font-weight: 700;
        color: #1c1c1c;
        margin-bottom: 4px;
    }

    .map .map-inside .inside-widget ul li {
        list-style: none;
        font-size: 16px;
        color: #666666;
        line-height: 26px;
    }

    .text {
        color: rgb(161, 166, 171);
        position: absolute;
        top: 200px;
        right: 35%;
        font-size: 80px;
        font-family: 'Heebo', sans-serif;
        font-family: 'Source Serif Pro', serif;

    }

    .text-sologan {
        color: #A2BDBD;
        position: absolute;
        top: 320px;
        right: 25%;
        font-size: 20px;
        font-family: 'Heebo', sans-serif;
        font-family: 'Source Serif Pro', serif;

    }
</style>
<section>
    <h1 class="text">CONTACT</h1>

    <img src="images/contactmen.webp" alt="" width="100%" height="500px">
</section>
<section class=" contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone">
                        <i class="fa fa-phone"></i>
                    </span>
                    <h4>Phone</h4>
                    <p>+01-3-8888-6868</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt">
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <h4>Address</h4>
                    <p>590 Cach Mang thang 8 - District 3 -HCM city</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"><i class="fa fa-clock-o"></i></span>
                    <h4>Open time</h4>
                    <p>10:00 am to 23:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <h4>Email</h4>
                    <p>hello@colorlib.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.246300131862!2d106.65209221471854!3d10.792438492310668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752935383feb7f%3A0xfebc21cd3e7bfe9c!2zNTkwIMSQLiBDw6FjaCBN4bqhbmcgVGjDoW5nIDgsIFBoxrDhu51uZyA3LCBRdeG6rW4gMywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1666785609235!5m2!1svi!2s"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="map-inside">
        <i class="icon_pin"></i>
        <div class="inside-widget">
            <h4>TP.HCM</h4>
            <ul>
                <li>Phone: +12-345-6789</li>
                <li>Add: 16 Creek Ave. Farmingdale, NY</li>
            </ul>
        </div>
    </div>
</div>

@endsection