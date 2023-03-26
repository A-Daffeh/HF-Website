@extends('main')

@section('content')
<section class="hf-sections">
    <div class="hf-about-hist">
        <h2>Hawa And Fanta's Adult Family Home LLC</h2>
    </div>
    

    <div class="hf-about-cont">
        <div class="hf-about-item">
            <img src="{{ asset('img/homepic.jpg') }}" alt="About Img-1">
            <p class="left-para">Hawa and Fanta's Adult Family Home is a beautiful home located at 18804 43rd
            Avenue W, Lynwood WA 98036. It Is a home where love and laughter live. At Hawa and Fanta's Adult Family, our
            goal is to provide your loved ones a place to call home.</p>
        </div>

        <div class="hf-about-item">
            <p>
            We work hard each day to exceed expectations of our residents and families. The home is owned and managed by
            CNA with over 12 years of care-giving in different care settings. The home features large rooms that are
            full of natural sunlight and are very inviting. We accept private and Medical clients. The home is close to
            Alderwood mall where residents and families can meet for lunch.
            Delivering quality service in a safe environment is our number one priority.
            </p>
            <img src="{{ asset('img/homepic.jpg') }}" alt="About Img-2">
        </div>
    </div>
</section>
@endsection