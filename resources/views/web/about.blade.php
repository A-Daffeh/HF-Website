@extends('main')

@section('content')
<section class="hf-sections">

    <div class="hf-about-cont">
        <div class="hf-about-item">
            <h2 class="h-blue">Our Mission</h2>
            <p>
                Our mission at Hawa and Fanta's Adult Family Home is to provide for the unmet needs of people in our 
                communities and honor our employees who serve them.
            </p>
            <img src="{{ asset('img/home-1.jfif') }}" alt="About Img-1">
        </div>

        <div class="hf-about-item">
            <h2 class="h-blue">Genuine Care</h2>
            <p>
                We offer genuine compassion, care, recovery and hope. We truly believe that everyone deserves to live a full life,
                and it is our goal to ensure that it can happen.
            </p>
            <img class ="gallery-img" src="{{ asset('img/gallery-7.jfif') }}" alt="About Img-2">
        </div>
    </div>

    <!-- <div class="hf-quote">
        <h2>Testimonials</h2>
        <p>"Flour and butter, cream and sugar, words and images, all the ingredients for a rich, tasty story."</p>

        <p>-Rona Simmons</p>
    </div> -->
</section>
@endsection