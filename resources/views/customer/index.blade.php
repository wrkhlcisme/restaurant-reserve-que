@extends('layout.main')

@section('title','Owner Control Page')
@section('content')

<body style="background: url({{asset('images/background-customer.jpg')}}); height:100%; min-width:100%;background-repeat:no-repeat;background-size:100%;">
    <div class="container center">
        <div class="row" style="padding: 10% 0;">
            <h2 style="color: white;">How many people in your party?</h2>
        </div>
        <div class="row">
            <form method="post" action="/customer/placement">
                @csrf
                <input id="first_name2" name="paxNumber" type="number" class="validate" min="1" max="{{$maximumPax}}">
                <button class="btn waves-effect waves-light" type="submit" name="action">Place My Place
                        <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
        
    </div>
    
@endsection