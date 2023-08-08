<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4 class="space30">Hakkımızda</h4>
                <img src="{{ asset("frontend/images/basic/logo-ico.png") }}" class="img-responsive space20" alt=""/>
                <p>Lorem ipsum dolor sit amet consec tetur elit vel quam ligula. Duis vel pulvinar diam in lacus non nisl commodo convallis.</p>
                <p>Phasellus rutrum urna ut nibh congue, ut vehicula nibh ultricies.</p>
            </div>
            <div class="col-md-4">
                <h4 class="space30">Son Eklenen Blog</h4>
                <ul class="f-posts">
                    @foreach($blogalt as $kblog)
                    <li>
                        <img src="{{ asset("_images/blog/".$kblog->blog_resim) }}" class="img-responsive" alt=""/>
                        <h5><a href="{{ route(".blogdetay",["id"=>$kblog->blog_selflink]) }}">{{ $kblog->blog_baslik }}</a></h5>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="space30">İletişim</h4>
                <ul class="c-info">
                    <li><i class="fa fa-map-marker"></i>{{ $iletisim->adres }}
                    </li>
                    <li>
                    </li>
                    <li><i class="fa fa-phone"></i>{{ $iletisim->phone }}</li>
                    <li><i class="fa fa-envelope-o"></i>{{ $iletisim->email }}</li>
                    <li><i class="fa fa-skype"></i> Atakmedya</li>
                </ul>
                <div class="clearfix space10"></div>
            </div>

        </div>
    </div>
</footer>


<!-- FOOTER COPYRIGHT -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>&copy; Copyright 2022. Atakmedya. Tasarım ve dizany.</p>
            </div>
            <div class="col-md-4">
                <div class="f-social pull-right">
                    <a class="fa fa-twitter" href="{{ $genelayar->sosyal_twitter }}"></a>
                    <a class="fa fa-facebook" href="{{ $genelayar->sosyal_facebook }}"></a>
                    <a class="fa fa-linkedin" href="{{ $genelayar->sosyal_facebook }}"></a>
                    <a class="fa fa-dribbble" href="{{ $genelayar->sosyal_facebook }}"></a>
                    <a class="fa fa-google-plus" href="{{ $genelayar->sosyal_facebook }}"></a>
                </div>
            </div>
        </div>
    </div>
</div>