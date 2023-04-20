@extends('main')

@section('content')
<section class = "hf-sections">
    <div class = "hf-contactMain">
        <h1 class="h-first hf-he hf-contact-header hf-center">Interested in Contacting us? </h1>
        <p class = "hf-he hf-contact-para">For any questions regarding our adult family home LLC,<br> please complete this form </p>

        <form class = "hf-form" action={{ route('contact.create') }} method="POST">
            @csrf

            <div class = "hf-name">
                <label class = "hf-labels" for="fullname">Name</label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your name" id = "fullname" name="full_name" title="(required)" required>
            </div>

            <div class = "hf-number">
                <label class = "hf-Labels" for="phonenumber"> Phone Number</label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your phone number" id = "phonenumber" name="phone" title="(123-456-7890)" required>
            </div>

            <div class = "hf-email">
                <label class = "hf-Labels" for="email">Email </label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your email" id = "email" title="(required)" name="email" required >
            </div>

            <div class = "hf-comments"> 
                <label class  = " hf-Labels" for="comments">Reason for contact</label>
                <br>
                <textarea class="comment-box" rows=500 name="reason"> </textarea>
            </div>
            

             <div class = "hf-submit">
                 <input class = "hf-submitbtn" type="submit">
             </div>

        </form>
    </div>
</section>
@endsection