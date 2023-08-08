@extends('frontend_layout')

@section('title')
        İletişim Sayfası
    @endsection

@section('content')

    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="page_header_parallax">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>İletişim BÖlümü</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="bcrumbs">
                            <li><a href="{{ route(".homepage") }}"><i class="fa fa-home"></i> Anasayfa</a></li>
                            <li>İletişim</li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- INNER CONTENT -->
    <div class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 margin30">
                    <p>Bizimler iletişime geçmek için alt taraftaki formu doldurarak bize iletebilir ve istek ve görüşlerinizi bildirebilirsiniz.en kısa sürede cevap verilecektir</p>
                    <div class="form-contact">
                        <div class="required">
                            <p>( <span style="color:red">*</span> fields are required )</p>
                        </div>
                        <form class="b-form b-contact-form contact-form" action="contact.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Name<span>*</span></label>
                                            <input class="field-name form-control input-lg"  type="text" placeholder="Name (required)">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">
                                            <label>Email Address<span>*</span></label>
                                            <input class="field-email form-control input-lg" type="text" placeholder="E-mail (required)">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">
                                    <label>Phone Number<span>*</span></label>
                                    <input class="field-phone form-control" placeholder="Phone Number" type="tel">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">
                                    <label>Message<span>*</span></label>
                                    <textarea rows="5" class="field-comments form-control input-lg" placeholder="Message"></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn-submit button btn-md">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--contact form-->
                </div>
                <div class="col-md-4">
                    <div class="map-border">
                        <div id="map-greyscale"></div>
                    </div>
                    <div class="space50"></div>
                    <h3 class="no-margin">İletişim Bilgilerimiz</h3>
                    <div class="space20"></div>
                    <ul class="contact-info">
                        <li>
                            <p><strong><i class="fa fa-map-marker"></i> Adres:</strong>{{ $iletisim->adres }}</p>
                        </li>
                        <li>
                            <p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="#">{{ $iletisim->email }}</a></p>
                        </li>
                        <li>
                            <p><strong><i class="fa fa-phone"></i> Phone:</strong>{{ $iletisim->phone }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- TWEET / SUBSCRIBE -->

    @endsection