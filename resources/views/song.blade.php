@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <p> <strong>Track Name: </strong> {{ $result['track_name'] }}</p>
                <p>
                    <strong>Lyics: </strong>
                    {{ \App\Api::getTrackLyrics($result['track_id']) }}
                </p>
                <p>
                    <strong>Album Name: </strong> {{ $result['album_name'] }}
                </p>
                <p>
                    <strong>Artist Name: </strong> {{ $result['artist_name'] }} 
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
