@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <passaport-clients></passaport-clients>
            <passaport-authorized-clients></passaport-authorized-clients>
            <passaport-personal-access-token></passaport-personal-access-token>

        </div>
    </div>
</div>
@endsection
