@extends("template.app")
@section("content")
<section class="first-page-section">
    <div id="slides" class="carousel slide" data-ride="carousel">
        <!-- Indicators (optional) -->
        <ol class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-color: #212327;">
                <div class="ui hidden divider"></div>
                <div class="ui two column centered grid">
                    <p class="six wide column text-center text-light first-text">Office & Coworking Space</p>

                </div>
                <div class="ui one column centered grid">
                    <h2 class="three wide column text-center text-light ui huge header"><span>Temukan Ruangan Untuk
                        </span><span style="color:#016936">Setiap Pekerjaan</span></h2>

                </div>
                <div class="ui one column centered grid">
                    <p class="five wide column text-center text-light text-description">Dengan berbagai pilihan
                        ruangan yang dapat disesuaikan dengan kebutuhan Anda, kami akan membantu Anda mencari
                        ruangan kerja yang sesuai dengan anggaran dan kebutuhan Anda. Temukan ruangan kerja Anda
                        sekarang dan tingkatkan produktivitas kerja Anda!</p>
                </div>
                <div class="ui one column centered grid">
                    <img src="{{asset("img/Group-11608.png")}}" class="column">

                </div>
            </div>
            <div class="carousel-item bg-light">
                <div class="ui one column centered grid">
                    <div class="ui hidden divider"></div>
                    <h2 class="three wide column text-center ui huge header first-text" style="color: #212327;">
                        <span>Sesuaikan dengan </span><span style="color:#016936">Kebutuhan</span>
                    </h2>
                </div>
                <div class="ui hidden divider"></div>
                <div class="ui centered grid">
                    <div class="five wide column">
                        <p>Rayakan perayaan dan acara terbaik dengan tempat pilihan terbaik dan akses lebih mudah.
                        </p>
                        <ul class="list-group text-center">
                            <li class="list-group-item ui green basic button">
                                <div class="text-dark">Event</div>
                            </li>
                            <div class="ui hidden divider"></div>
                            <li class="list-group-item ui green basic button">
                                <div class="text-dark">Meeting</div>
                            </li>
                            <div class="ui hidden divider"></div>
                            <li class="list-group-item ui green basic button">
                                <div class="text-dark">Photo Shot</div>
                            </li>
                            <div class="ui hidden divider"></div>
                            <li class="list-group-item ui green basic button">
                                <div class="text-dark">Video Shot</div>
                            </li>
                            <div class="ui hidden divider"></div>
                        </ul>
                    </div>

                    <div class="five wide column">
                        <img src="{{asset('img/Frame-52999.png')}}" alt="gambar">
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-color: #212327;">
                <div class="ui hidden divider"></div>
                <div class="ui hidden divider"></div>
                <div class="ui centered grid">

                    <div class="two wide column">
                        <img src="{{asset('img/Frame-52999.png')}}" alt="gambar" width="400" height="300">
                    </div>

                    <div class="twelve wide column">
                        <div class="ui centered grid">
                            <div class="ui hidden divider"></div>
                            <h2 class="six wide column text-center text-light ui huge header"><span
                                    style="color:#016936">Space Terbaik </span><span>untuk Semua Tim dan Pekerjaan
                                    Anda</span></h2>
                        </div>
                        <div class="ui one column centered grid">
                            <p class="seven wide column text-center text-light text-description">Dengan berbagai
                                pilihan ruangan yang dapat disesuaikan dengan kebutuhan Anda, kami akan membantu
                                Anda mencari ruangan kerja yang sesuai dengan anggaran dan kebutuhan Anda. Temukan
                                ruangan kerja Anda sekarang dan tingkatkan produktivitas kerja Anda!</p>
                        </div>

                    </div>
                </div>
                <div class="ui hidden divider"></div>
                <br>
                <div class="ui centered grid">
                    <div class="list-group-item ui two wide column green button text-center">
                        Mulai
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>

            </div>
        </div>

        <!-- Controls (optional) -->
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



</section>

<section class="bg-light">
    <br>
    <br>
    <div class="ui one column centered grid">
        <h1>Partner Kami</h1>

    </div>
    <div class="ui stackable centered grid">
        <div class="three wide column"><img src="img/logo/clapham-logo.png" alt="clapham"></div>
        <div class="three wide column"><img src="img/logo/the-101-logo.png" alt="the-101"></div>
        <div class="three wide column"><img src="img/logo/yafurni-logo.png" alt="yafurni"></div>
        <div class="three wide column"><img src="img/logo/spasi-logo.png" alt="spasi"></div>
    </div>
    <br>
    <br>
</section>

<section class="page-section" style="background-color: #212327;">
    <div class="ui one column centered grid">
        <h2 class="two wide column text-center text-light ui huge header"><span>Pilih
            </span><span style="color:#016936">Space</span><span> Terdekat</span></h2>

    </div>
    <div class="ui one column stackable centered grid">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/tes.jpg')}}" alt="Card image cap">
                <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-location-dot" aria-hidden="true"></i>
                        Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="fluid ui basic button">Lihat</a>
                </div>
            </div>
            <div class="one wide column"></div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/tes.jpg')}}" alt="Card image cap">
                <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-location-dot" aria-hidden="true"></i>
                        Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="fluid ui basic button">Lihat</a>
                </div>
            </div>
            <div class="one wide column"></div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('img/tes.jpg')}}" alt="Card image cap">
                <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-location-dot" aria-hidden="true"></i>
                        Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="fluid ui basic button">Lihat</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="ui one column centered grid">
        <div class="four wide column ui green button text-center">Jelajahi Semua Lokasi</div>
    </div>
    <br>
    <br>
</section>
@endsection
