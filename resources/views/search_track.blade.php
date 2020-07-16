@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(!empty($tracks))
            @foreach($tracks as $track)
                <div class="col-md-4">
                    <div class="card-body mb-5" style="background: #fff;">
                        <p>
                            <strong>Track Name: </strong> {{ $track['track']['track_name']}}
                        </p>
                        <p>
                            <strong>Album Name: </strong> {{ $track['track']['album_name'] }}
                        </p>
                        <p>
                            <strong>Artist Name: </strong> {{ $track['track']['artist_name'] }} 
                        </p>
                        <div class="text-right">
                            <a class="btn btn-info" href="{{url('song/'.$track['track']['commontrack_id'])}}" style="color: #fff;" >View Song</a>
                        </div>

                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
