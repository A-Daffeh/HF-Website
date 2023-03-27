@extends('main')

@section('content')
<section class="hf-sections">
    <div class="hf-about-hist">
        <h2>Our History</h2>
    </div>
    

    <div class="hf-about-cont">
        <div class="hf-about-item">
            <p>
                Our mission at Hawa and Fanta's Adult Family Home is to provide for the unmet needs of people in our 
                communities and honor our employees who serve them.
            </p>
            <img src="{{ asset('img/about-img-1.jpeg') }}" alt="About Img-1">
        </div>

        <div class="hf-about-item">
            <p>
                We offer genuine compassion,care,recovery and hope. We truly believe that everyone deserves to live a full life,
                and it is our goal to ensure that it can happen.
            </p>
            <img src="{{ asset('img/about-img-2.jpeg') }}" alt="About Img-2">
        </div>
    </div>

    <div class="hf-quote">
        <h2>Testimonial</h2>
        <p>"Flour and butter, cream and sugar, words and images, all the ingredients for a rich, tasty story."</p>

        <p>-Rona Simmons</p>
    </div>
</section>
@endsection