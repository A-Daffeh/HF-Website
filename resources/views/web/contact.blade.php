@extends('main')

@section('content')
<section class = "hf-sections">
    <div class = "hf-contactMain">
        <h2 class="hf-he hf-contact-header">Interested in Contacting us? </h2>
        <p class = "hf-he hf-contact-para">For any questions regarding our adult family home LLC, please complete this form </p>

        <form class = "hf-form">
            <div class = "hf-name">
                <label class = "hf-labels" for="fullname">Name</label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your name" id = "fullname" pattern="[a-zA-Z]{1,15}" title="(required)" name="fullName" required>
            </div>

            <div class = "hf-number">
                <label class = "hf-Labels" for="phonenumber"> Phone Number</label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your phone number" id = "phonenumber" pattern="^\d{3}-\d{3}-\d{4}$" name="phoneNumber" title="(123-456-7890)" required>
            </div>

            <div class = "hf-email">
                <label class = "hf-Labels" for="email">Email </label>
                <br>
                <input class = "hf-box" type="text" placeholder = "Enter your email" id = "email" pattern="[a-zA-Z]{1,15}" title="(required)" name="email" required >
            </div>

            <div class = "hf-comments"> 
                <label class  = " hf-labels" for="comments">Reason for contact</label>
                <br>
                <textarea class="comment-box"></textarea>
            </div>
            

             <div class = "hf-submit">
                <input class = "hf-submitbtn" type="submit">
             </div>

        </form>
    </div>
</section>
@endsection