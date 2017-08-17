@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }}s Videos</div>
                        <div class="row">
                            @foreach($videos as $video)
                                <div class="col-xs-18 col-sm-6 col-md-3">
                                    <div class="thumbnail">
                                        <img src="http://placehold.it/500x250/EEE">
                                        <div class="caption">
                                            <h4>{{ $video->name }}</h4>
                                            <p>{{ $video->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--/row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
