@extends ('layout')
@section('content')
    <div class="container-jumbo">
 
        <img class="resize-jumbo" src="{{asset('img/jumbotron.jpg')}}" alt="">
    </div>
    <div>
        <div>current series</div>
        <div>
           @foreach ($comics as $comic)
            <div>
                <div>
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                {{$comic['title']}}
            </div>


           @endforeach
        </div>

    </div>
    <div class="prefoter">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
        <img class="prefoter-resize" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
    </div>
@endsection