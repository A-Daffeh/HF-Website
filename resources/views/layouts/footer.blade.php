<footer id="footer">   
   <div class="hf-footer">
        <div class="hf-flinks">
            <h3>Sites</h3>
            <ul>
                <li><a href="{{ route('hfhome') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="hf-fcontact">
            <h3>Contact</h3>
            <ul>
                <li><img src="{{ asset('img/clock-icon.png') }}" alt="Clock Icon"> Open 24/7 Monday - Sunday</li>
                <li><img src="{{ asset('img/location-icon.png') }}" alt="Location Icon"> 18804 43rd Avenue W, Lynnwood WA 98036</li>
                <li><img src="{{ asset('img/phone-icon.png') }}" alt="Phone Icon"> 425-224-2808</li>
            </ul>
        </div>

        <div class="hf-fsocial">
            <h3>Social Media</h3>
            <ul>
                <li><a href=""><img src="{{ asset('img/instagram-icon.png') }}" alt="Instagram Icon"></a></li> 
                <li><a href=""><img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook Icon"></a></li>
                <li><a href=""><img src="{{ asset('img/linkedin-icon.png') }}" alt="LinkedIn Icon"></a></li>
                <li><a href=""><img src="{{ asset('img/twitter-icon.png') }}" alt="Twitter Icon"></a></li>
            </ul>
        </div>
    </div>
</footer>