@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br><br>

                    <form action="{{ route("send-mail") }}" method="POST">

                      @csrf
                      @method('POST')

                      <label for="mailText">Scrivi un testo</label>
                      <input type="text" name="mailText" value="">

                      <br><br>

                      <input type="submit" value="Invia">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
