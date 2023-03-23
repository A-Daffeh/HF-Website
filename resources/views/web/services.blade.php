@extends('main')

@section('content')
<section class="hf-sections">
    <div class="hf-services-hist">
        <h2>Our Services</h2>
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
        <h2>Checkout Our Place</h2>
    </div>

    <div class="gallery">
        <img src="{{ asset('img/gallery-1.jpeg') }}" alt="Gallery Img-1">
        <img src="{{ asset('img/gallery-2.jpeg') }}" alt="Gallery Img-2">
        <img src="{{ asset('img/gallery-4.jpeg') }}" alt="Gallery Img-4">
        <img src="{{ asset('img/gallery-5.jpeg') }}" alt="Gallery Img-5">
        <img src="{{ asset('img/gallery-6.jpeg') }}" alt="Gallery Img-6">
        <img src="{{ asset('img/gallery-7.jpeg') }}" alt="Gallery Img-7">
        <img src="{{ asset('img/gallery-8.jpeg') }}" alt="Gallery Img-8">
        <img src="{{ asset('img/gallery-9.jpeg') }}" alt="Gallery Img-9">
    </div>
    
</section>
@endsection