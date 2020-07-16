@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p>
                        {{ __('Search for top 10 songs in Nigeria') }}
                    </p>

                    <hr class="my-4" />
                    <form method="GET" action="{{ url('track') }}" autocomplete="off">
                        
                        <h2 class="heading-small text-muted text-md-center mb-4">{{ __('Search for a song') }}</h2>
        
                        <div class="pl-lg-4">
                            <div class="form-group row col-md-12">
                                <div class="col-md-8 offset-md-2 required">
                                    <label class="form-control-label" for="track_name">{{ __('Track Name') }}</label>
                                    <input type="text" name="track_name" id="track_name" class="form-control form-control-alternative{{ $errors->has('track_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Track Name') }}" required>
        
                                    @if ($errors->has('track_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('track_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-md-2">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Search for Song') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
