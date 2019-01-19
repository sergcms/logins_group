@extends('layouts.layout')

@section('content')
<div class="container news-content">
    <div class="row justify-content-center flex-column">
        <h1 class="text-center mb-5">{{ $news->title }}</h1>
        <div>{!! $news->text !!}</div>
        <span class="text-right mt-3">{{ date('d-m-Y', strtotime($news->date_publish)) }} r.</span>            

        <ul class="pager row justify-content-between mt-5">
            @if ($prev)
                <li class="previous text-danger"><a href="/news/{{ $prev->alias }}">Previous</a></li>  
            @endif
            
            @if ($next)
                <li class="previous text-danger ml-auto"><a href="/news/{{ $next->alias }}">Next</a></li>  
            @endif
        </ul>
    </div>
</div>
@endsection
