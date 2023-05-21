@extends('main')

@section('content')
<section class="hf-sections">
    <div class="hf-about-hist">
        <h1 class="h-first">Welcome To Hawa and Fanta Adult Family Home</h1>
    </div>

    <div class="hf-about-cont">
        <div class="hf-about-item responsive">
            <img src="{{ asset('img/homepic.jpg') }}" alt="About Img-1">
            <h2 class="h-blue">HF Adult Family Home</h2>
            <p class="para">Hawa and Fanta's Adult Family Home is a beautiful home located at 18804 43rd
            Avenue W, Lynwood WA 98036. It Is a home where love and laughter live. At Hawa and Fanta's Adult Family, our
            goal is to provide your loved ones a place to call home.  We work hard each day to exceed expectations of our residents and families.
            </p>
        </div>

        <div class="hf-about-item hf-about-item-second">
            <img id="b" src="{{ asset('img/richard.jpg') }}" alt="About Img-2">
            <h2 class="h-blue">Safe & Lovely Care</h2>
            <p class="para" id="a"> 
            The home is owned and managed by CNA with over 12 years of care-giving in different care settings.
            The home features large rooms that are full of natural sunlight and are very inviting. 
            We accept private and Medical clients. The home is close to Alderwood mall where residents and families can meet for lunch.
            Delivering quality service in a safe environment is our number one priority.
            </p>
        </div>
        <div class="hf-about-item">
            <img src="{{ asset('img/home-1.jpg') }}" alt="Home 1">
        </div>
        <div class="hf-about-item">
            <img src="{{ asset('img/home-2.jfif') }}" alt="Home 2">
        </div>
        <div class="hf-about-item">
            <img src="{{ asset('img/home-3.jfif') }}" alt="Home 3">
        </div>
        <div class="hf-about-item">
            <img src="{{ asset('img/home-4.jfif') }}" alt="Home 4">
        </div>
        <div class="hf-about-item">
            <img src="{{ asset('img/home-5.jfif') }}" alt="Home 5">
        </div>
        <div class="hf-about-item">
            <img src="{{ asset('img/home-6.jfif') }}" alt="Home 6">
        </div>
    </div>
</section>
@endsection