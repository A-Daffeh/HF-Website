@extends('main')

@section('content')
<section class = "hf-sections">

    <h1> Thank you for taking the time to contact us! We will get back to you as soon as possible <h1> 
    <div class="cont-suc-img">
        <img src="{{ asset('img/projectlogo.jpg') }}" alt="HF Logo" >
    </div>
    
    <div class="contact-suc-btn">
        <a href="{{ route('hfhome') }}">Back to Home</a>
    </div>
</section>
@endsection