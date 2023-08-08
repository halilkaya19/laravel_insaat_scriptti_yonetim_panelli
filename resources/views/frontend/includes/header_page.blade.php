<header id="header-main">
    <div class="container">
        <div class="navbar yamm navbar-default">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route(".homepage") }}" class="navbar-brand"><img src="{{ asset("frontend/images/basic/logo.png") }}" width="40" alt=""/></a>
            </div>

            <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route(".homepage") }}">Anasayfa</a></li>


                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            Hizmetlerimiz							</a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach($hizmetlistesi as $hskey)
                            <li><a href="{{ route(".hizmetdetay",["selflink"=>$hskey->hizmet_selflink]) }}">{{ $hskey->hizmet_baslik }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route(".projeler") }}">Projeler</a>
                    </li>
                    <li>
                        <a href="{{ route(".blog") }}">Blog</a>
                    </li>

                    <li>
                        <a href="{{ route(".iletisim") }}">İletişim</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>