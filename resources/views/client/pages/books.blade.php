@extends('client.layouts.layout') @section('main-content')
<div class="row">
    @foreach($books as $book)
    <a href="/book/{{$book->id}}">
    <div class="card m-2">
        <div class="card-body card-clearer2 ">
            <div class="row">
                <div class="col-12 card-clearer">
                    <div class="card-img">
                        <img class="m-card-img" src="../assets/img/card/img-1.jpg" alt="">
                    </div>
                    <div>
                        <p class="text-muted">{{$book->bookName}}</p>
                        <h6 class="text-gray">Author:{{$book->author}}</h6>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </a>
    
    @endforeach
    
</div>
{{$books->links()}}

@endsection