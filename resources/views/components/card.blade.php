@extends('layouts.master')
@section('card')
        @foreach ($images as $item)
        <div class="col-12 col-sm-6 col-md-4 mb-5">
            <div class="post-entry">
                <a href="#" class="post-thumbnail"><img src="{{$item['image']}}" alt="Image" class="img-fluid"></a>
                <div class="post-content-entry pt-3">
                    <h3>
                        <a href="">{{$item['title']}}</a>
                    </h3>
                    <div class="meta">
                        <span>by <a href="">{{$item['name']}}</a></span>
                        <span>on <a href="">{{$item['date']}}</a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


