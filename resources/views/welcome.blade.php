@extends('layouts.landing')

@section('content')
    <div class="px-4 px-lg-5 py-5 text-white"
        style="background-image: url('{{ asset('hero.png') }}'); background-repeat: no-repeat; background-position: center; background-size: cover; background-color: grey; background-blend-mode: multiply;">
        <div class="row d-flex align-items-center g-5 py-5 px-lg-5">
            <div class="col-lg-7 py-5">
                <h1 class="display-5 fw-bold lh-3 mb-5">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start my-5">
                    <button type="button" class="btn btn-light btn-lg px-4 me-md-2">Contact</button>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5" style="background-color: rgb(51, 51, 51);">
        <div class="container px-lg-5">
            <div class="h1 text-white mb-5">Gallery</div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col">
                        <div class="card shadow-sm rounded-4 border-0">
                            <img src="{{ asset('static/gallery.webp') }}" alt=""
                                class="card-img-top rounded-4 border-0" style="filter: brightness(50%); cursor: pointer;">
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="album py-5 bg-dark text-white">
        <div class="container py-5 px-lg-5">
            <div class="py-5 px-lg-5 text-center">
                <div class="h5">
                    The Karang Taruna Mudika Watusigar in Semarang, JT has been an invaluable resource to me in managing
                    my
                    personal tasks and organization. The team are always friendly and eager to help, and their services
                    are
                    incredibly reliable. I highly recommend it for anyone who needs help with personal organization.
                </div>
                <div class="small fw-light">- Ketua Karang Taruna -</div>
            </div>
        </div>
    </div>
    <div class="album py-5" style="background-color: rgb(51, 51, 51);">
        <div class="container px-lg-5">
            <div class="h1 text-white mb-5 text-end">Blog</div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @for ($i = 0; $i < 3; $i++)
                    <div class="col mb-4 mb-lg-0">
                        <div class="card shadow-sm rounded-4 border-0 mb-3">
                            <img src="{{ asset('static/gallery.webp') }}" alt=""
                                class="card-img-top rounded-4 border-0" style="cursor: pointer;">
                        </div>
                        <div class="text-end text-white">
                            <div class="h3">Blog title</div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis id, maxime, atque ad odit
                                sunt
                                sed incidunt saepe adipisci corrupti aspernatur pariatur qui nobis.</p>
                            <button class="btn btn-sm btn-light">More Info</button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div style="overflow:hidden;resize:none;max-width:100%;width:100%;height:500px;">
        <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe
                style="height:100%;width:100%;border:0;" frameborder="0"
                src="https://www.google.com/maps/embed/v1/place?q=Balai+Dusun+Watusigar,+Watusigar,+Kabupaten+Gunung+Kidul,+Daerah+Istimewa+Yogyakarta,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
        </div>
    </div>
    <div class="album py-5 text-white" style="background-color: rgb(51, 51, 51);">
        <div class="container px-lg-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="h5">Karang Taruna Mudika Watusigar Contact Form</div>
                    <p>Contact Karang Taruna Mudika Watusigar for all your personal organizational needs. We can help
                        you get organized and make life easier.</p>
                </div>
                <div class="col-lg-6">
                    <form action="mailto:adityaric72@gmail.com" method="post">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Aditya"
                                        name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="aditya@gmail.com"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button class="btn btn-light">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-dark text-white">
        <div class="container px-lg-5">
            <div class="d-flex justify-content-end">
                <div class="col-lg-10">
                    <div class="text-end">
                        <div class="h1 text-white mb-5 text-end">About Us</div>
                        <p>Karang Taruna Mudika Watusigar is a Personal Organization business in Semarang, JT that
                            offers a variety of services to help people get organized and stay organized. We provide a
                            range of organizing solutions, from home and office organization to time management and
                            productivity planning. We understand that everyone has different needs and goals, and we
                            strive to customize our services accordingly.</p>
                        <p>Our team of experienced professionals is dedicated to helping you achieve your organization
                            goals. We offer personalized support and guidance to help you declutter and reorganize your
                            space and maximize efficiency. We also provide one-on-one sessions to educate you on
                            organizing techniques and systems that work best for you. Whether you’re a busy
                            professional, a student, or a stay-at-home mom, we’re here to help make your life easier and
                            more organized. Contact us today for more information about how we can help you get and stay
                            organized.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="album py-5" style="background-color: rgb(168, 200, 127); color: rgb(17, 24, 39);">
        <div class="container px-lg-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="h2">Karang Taruna Mudika Watusigar</div>
                </div>
                <div class="col-lg-6">
                    <div class="row justify-content-lg-end">
                        <div class="col-auto my-3 my-lg-0">
                            <a href="" style="color: rgb(17, 24, 39);" class="text-decoration-none"><i
                                    class="fab fa-facebook fa-2x"></i></a>
                        </div>
                        <div class="col-auto my-3 my-lg-0">
                            <a href="" style="color: rgb(17, 24, 39);" class="text-decoration-none"><i
                                    class="fab fa-instagram fa-2x"></i></a>
                        </div>
                        <div class="col-auto my-3 my-lg-0">
                            <a href="" style="color: rgb(17, 24, 39);" class="text-decoration-none"><i
                                    class="fab fa-twitter fa-2x"></i></a>
                        </div>
                        <div class="col-12 text-lg-end mt-3">
                            <div class="small">
                                <i class="far fa-copyright"></i> Copyright {{ date('Y') }}
                                {{ config('app.name') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
