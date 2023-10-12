
<!doctype html>
<html lang="en">

<head>
    <title>Solusi Sewa Kantor &amp; Coworking Space yang Fleksibel | Workfrom</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    {{-- <link rel="stylesheet" href="app.css"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Semantic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        #first-page-section{
            padding-top: 10vh;
        }
        section{
            padding-top: 5vh;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top container-fluid">

        <div class="navbar"><img src="{{asset('img/logo/Logo-WF.png')}}" alt="Logo WorkFrom"></div>
        <div class="nav justify-content-center" id="collapsibleNavId">

            <span>
                <ul class="navbar-nav mt-2 mt-lg-0 col-sm-12 offset-6">
                    <li class="nav-item active col col-sm-2 offset-2">
                        <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown col col-sm-2 offset-2">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Locations</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown col col-sm-2 offset-2">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Use Case</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown col col-sm-2 offset-2">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </li>
                </ul>
            </span><span>
                <div style="width: 50vw;"> </div>
            </span>
            <span>
                <div id="login-info" class="fixed">
                    <div class="row">
                        <a class="ui basic button right floated center" href="/login">
                            <i class="icon user"></i>
                            Login
                        </a>
                    </div>

                </div>
            </span>
        </div>
    </nav>

    @yield('content')

    {{-- footer --}}
    <section class="bg-light">
        <br>
        <br>
        <div class="ui stackable centered grid">
            <div class="one wide column text-left">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="four wide column"></div>
            <div class="ten wide column">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">
                            <a class=" text-left text-dark" data-toggle="collapse"
                            href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="fluid ui huge header"><b>Apa itu Workfrom?</b></div>
                        </a>

                        <div class="collapse" id="collapseExample">
                             <br>
                            <div>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident.
                            </div>

                        </div>
                    </li>
                    <li class="list-group-item bg-light">
                            <a class=" text-left text-dark" data-toggle="collapse"
                            href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            <div class="fluid ui huge header"><b>Fasilitas apa saja yang ditawarkan?</b></div>
                        </a>

                        <div class="collapse" id="collapseExample2">
                             <br>
                            <div>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident.
                            </div>

                        </div>
                    </li>
                    <li class="list-group-item bg-light">
                            <a class=" text-left text-dark" data-toggle="collapse"
                            href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                            <div class="fluid ui huge header"><b>Apakah buka di akhir pekan dan hari libur?</b></div>
                        </a>

                        <div class="collapse" id="collapseExample3">
                             <br>
                            <div>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                proident.
                            </div>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
        <br>
    </section>

    <section class="bg-light">
        <br>
        <br>
        <div class="ui stackable centered grid">
            <div class="five wide column text-left">
                <img src="{{asset('img/logo/Logo-WF.png')}}" alt="Logo WorkFrom" width="210" height="70">
                <p>Komp. Ruko Centre Point Medan Jalan Timor Blok G No. III/IV 2nd Floor, Gang Buntu, Medan Timur, Medan City, North Sumatra 20231</p>
                <br>
                <p>(+6261) 805 109 77</p>
            </div>
            <div class="four wide column"></div>
            <div class="two wide column">
                <div class="ui link list">
                    <div class="active item">Location</div>
                    <br>
                    <a class="item">Clapham</a>
                    <a class="item">The 101</a>
                    <a class="item">Yafurni</a>
                    <a class="item">Kalingga</a>
                    <a class="item">Spasi</a>
                  </div>
            </div>
            <div class="two wide column">
                <div class="ui link list">
                    <div class="active item">Use Case</div>
                    <br>
                    <a class="item">Event</a>
                    <a class="item">Meeting</a>
                    <a class="item">Photo Shoot</a>
                    <a class="item">Office</a>
                  </div>
            </div>
            <div class="two wide column">
                <div class="ui link list">
                    <div class="active item">Company</div>
                    <br>
                    <a class="item">Contact Us</a>
                    <a class="item">Blog</a>
                  </div>
            </div>
        </div>
        <br>
    </section>


    <script>

    </script>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
