@extends('client.layouts.layout') 
@section('main-content')


{{$book->bookName}}
{{$book->author}}
{{$book->description}}
{{$book->filepath}}
{{$book->imagePath}}
@endsection