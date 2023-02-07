@include('template.header')
@include('template.topbar')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            @include('template.breadcrumb')


            <div class="row">

                @foreach ($movie_db->results as $movie)
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="https://image.tmdb.org/t/p/w220_and_h330_face{{$movie->poster_path}}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Rating : {{$movie->vote_average.'%'}}</h4>
                                <h4 class="card-title">{{$movie->original_title}}</h4>
                                <p class="card-text">{{$movie->release_date}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    @include('template.footer')
