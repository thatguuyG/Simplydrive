@extends('home_layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif {{ __('You are logged in!') }}
                </div>
            </div> --}}

            <div class="jumbotron jumbotron-fluid shadow" style="border-radius: 30px">
                <div class="container">
                    <h1 class="display-4">Welcome to Simplydrive</h1>
                    <p class="lead">Start earning money as a driver now!.</p>
                </div>
            </div>



            <div style="height: 20px"></div>
            <div class="carousel-wrapper">
                <div class="carousel" data-flickity>
                    <div class="carousel-cell">
                        <h3>Toyota Axio</h3>
                        <a class="more" href="">Explore more</a>
                        <img src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" />
                        <div class="price">
                            <span><button id="myBtn" class="btn btn-primary">View</button></span>
                        </div>

                    </div>
                    <div class="carousel-cell">
                        <h3>Toyota Axio</h3>
                        <a class="more" href="">Explore more</a>
                        <img src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" />
                        <div class="price">
                            <span><button id="myBtn1" class="btn btn-primary">View</button></span>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <h3>Toyota Axio</h3>
                        <a class="more" href="">Explore more</a>
                        <img src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" />
                        <div class="price">
                            <span><button id="myBtn2" class="btn btn-primary">View</button></span>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <h3>Toyota Axio</h3>
                        <a class="more" href="">Explore more</a>
                        <img src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" />
                        <div class="price">
                            <span><button id="myBtn3" class="btn btn-primary">View</button></span>
                        </div>
                    </div>
                </div>
            </div>



            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Axio</h5>
                            <p class="card-text">Ready for use at a location near you.</p>
                            <a href="#" class="btn btn-primary">Select this vehicle</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="myModal1" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Axio</h5>
                            <p class="card-text">Ready for use at a location near you.</p>
                            <a href="#" class="btn btn-primary">Select this vehicle</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="myModal2" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Axio</h5>
                            <p class="card-text">Ready for use at a location near you.</p>
                            <a href="#" class="btn btn-primary">Select this vehicle</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="myModal3" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="https://www.picknbuy24.com/photo/00/00/03/11/58/01_l3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Axio</h5>
                            <p class="card-text">Ready for use at a location near you.</p>
                            <a href="#" class="btn btn-primary">Select this vehicle</a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="height: 140px"></div>





        </div>
    </div>
</div>
@endsection