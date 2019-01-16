@extends('layouts.layout')

@section('content')
    <!-- INNER -->
    <div class="inner">
        <ul class="circle-center d-flex-center"> 
            <li class="loginsgroup-logo show"><img src="{{ asset('img/logo.png') }}" alt="" /></li> 
            <li class="tdlogins-logo"><img src="{{ asset('img/logo_tdlogins.png') }}" alt="" /></li> 
            <li class="loginssmak-logo"><img src="{{ asset('img/logo_loginssmak.png') }}" alt="" /></li> 
            <li class="shops-logo"><img src="{{ asset('img/logo_lukasik.png') }}" alt="" /></li> 
            <li class="lukasik-logo"><img src="{{ asset('img/logo_brandstore.png') }}" alt="" /></li> 
        </ul>
        <!-- / circle-center -->
           
        <div class="container inner-content">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="tdlogins firm-wrapper">
                        <img src="{{ asset('img/tdlogins-small.jpg') }}" alt="">
                        <div class="line-link">
                            <a href="" class="btn-link left"> Перейти </a>
                        </div>
                        <!-- / firm-description -->
                        <div class="circle"></div>       
                    </div>  
                    <!-- / firm-wrapper -->
                </div>
                <!-- / col -->
                <div class="col-lg-6 col-md-12">
                    <div class="loginssmak firm-wrapper">
                        <img src="{{ asset('img/loginssmak-small.jpg') }}" alt="">
                        <!-- / firm-description -->
                        <div class="line-link">
                            <a href="" class="btn-link right"> Перейти </a>
                        </div>
                        <div class="circle"></div>       
                    </div>  
                    <!-- / firm-wrapper -->
                </div>
                <!-- / col -->
            </div>
            <!-- / row -->
      
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="lukasik firm-wrapper">
                        <img src="{{ asset('img/brandstore-small.jpg') }}" alt="">
                        <div class="line-link">
                            <a href="" class="btn-link left"> Перейти </a>
                        </div>
                        <!-- / firm-description -->
                        <div class="circle"></div>       
                    </div>  
                    <!-- / firm-wrapper -->
                </div>
                <!-- / col -->
                <div class="col-lg-6 col-md-12">
                    <div class="stores firm-wrapper">
                        <img src="{{ asset('img/lukasik-small.jpg') }}" alt="">
                        <div class="line-link">
                            <a href="" class="btn-link right"> Перейти </a>
                        </div>
                        <!-- / firm-description -->
                        <div class="circle"></div>       
                    </div>  
                    <!-- / firm-wrapper -->
                </div>
                <!-- / col -->
            </div>
            <!-- / row -->    
        </div>
        <!-- / inner-content -->

        <!-- scrollto -->
        <div class="arrow-down text-center">
            <a href="#about-us" id="arrow-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
        <!-- / scrollto -->
    </div>
    <!-- / INNER --> 
      
    <!-- ABOUT-US -->
    <div class="about-us standart-section" id="about-us">
        <div class="container">
            <div class="title text-center">
                <span>ИНФОРМАЦИЯ О КОМНАНИИ</span>
            </div>
            <p class="default-text italic">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam magni non, id quidem neque asperiores quos possimus reprehenderit vel nesciunt cupiditate illo deleniti doloribus facere vero hic quam commodi mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates provident quia dolor quidem, consequuntur atque officiis fuga accusamus non autem nisi unde quaerat, eveniet ipsa eaque alias. Possimus, officiis natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur asperiores, debitis voluptas quod tenetur eum accusantium id pariatur distinctio numquam ipsa reiciendis modi sed dignissimos dicta quis laborum obcaecati!
            </p>        
        </div>
        <!-- / container  -->
       
        <div class="container-fluid">
            <div class="abouts-us-img">
                <img src="{{ asset('img/sweets_block.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <p class="default-text italic"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam magni non, id quidem neque asperiores quos possimus reprehenderit vel nesciunt cupiditate illo deleniti doloribus facere vero hic quam commodi mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates provident quia dolor quidem, consequuntur atque officiis fuga accusamus non autem nisi unde quaerat, eveniet ipsa eaque alias. Possimus, officiis natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequuntur asperiores, debitis voluptas quod tenetur eum accusantium id pariatur distinctio numquam ipsa reiciendis modi sed dignissimos dicta quis laborum obcaecati! </p>
        </div>  
        <!-- / container  -->
    </div>
    <!-- / ABOUT-US -->
      
    <!-- LAST-NEWS -->
    <div class="last-news standart-section">
        <div class="container">
            <div class="title text-center">
                <span>новости, акции</span>
            </div>
            <div class="news">
                <div class="row">

                    @foreach ($news as $oneNews)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="news-item">
                                <div class="title small">
                                    <span>{{ $oneNews->title }}</span>
                                </div>
                                <div class="news-img">
                                <a href="/news/{{ $oneNews->alias }}"><img src="{{ '/storage/' . $oneNews->image }}" alt=""></a>
                                </div>
                                <p class="default-text small"> {{ $oneNews->preview }} </p>
                                <div class="more text-right">
                                    <a href="/news/{{ $oneNews->alias }}">Подробнее <i class="fa fa-angle-right" aria-hidden="true"></i></a>  
                                </div>
                            </div>
                            <!-- news-item -->
                        </div>
                        <!-- / col -->
                    @endforeach
                    
                </div>
                <!-- / row -->
            </div>
            <!-- / news -->
        </div>
        <!-- / container -->
    </div>
    <!-- / LAST-NEWS -->
@endsection
