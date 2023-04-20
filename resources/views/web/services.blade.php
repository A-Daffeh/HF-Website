@extends('main')

@section('content')
<section class="hf-sections">
    <div class="hf-services-hist">
        <h1 class="h-first">Our Services</h1>
        <p>
            We serve those who are elderly, have developmental disabilities,  mentally or physical
            challenged. Our services include:
        </p>
    </div>
    

    <div class="hf-services-cont">
        <div class="hf-services-item">
            <p>Adult Family Home</p>
        </div>

        <div class="hf-services-item">
            <p>24 Hours Care</p>
        </div>

        <div class="hf-services-item">
            <p>Nurse Delegation</p>
        </div>

        <div class="hf-services-item">
            <p>Daily Living Activies Assistance</p>
        </div>

        <div class="hf-services-item">
            <p>Medication Assistance's</p>
        </div>

        <div class="hf-services-item">
            <p>Housing Keeping / Laundry</p>
        </div>
    </div>

    
    <div class="hf-services-hist">
        <h1 class="h-first">Checkout Our Place</h1>
    </div>

    <div class="gallery">
        <div class="gallery-div">
            <img class ="gallery-img" src="{{ asset('img/gallery-3.jpeg') }}" alt="Gallery Img-5">
        </div>
        <div class="gallery-div">
            <img class ="gallery-img" src="{{ asset('img/gallery-4.jpeg') }}" alt="Gallery Img-2">
        </div>
        <div class="gallery-div">
            <img class ="gallery-img" src="{{ asset('img/gallery-5.jpeg') }}" alt="Gallery Img-6">
        </div>
        <div class="gallery-div">
            <img class ="gallery-img" src="{{ asset('img/gallery-6.jpeg') }}" alt="Gallery Img-8">
        </div>
        <div class="gallery-div">
            <img class ="gallery-img" src="{{ asset('img/gallery-7.jpeg') }}" alt="Gallery Img-8">
        </div>
        <div class="gallery-div">
            <img class ="gallery-img" src="{{ asset('img/gallery-8.jpeg') }}" alt="Gallery Img-8">
        </div>
    </div>
    
    
</section>
@endsection