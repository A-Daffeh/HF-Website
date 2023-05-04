<footer id="footer">   
   <div class="hf-footer">
        <div class="hf-flinks">
            <ul>
                <li><a href="{{ route('hfhome') }}" class="{{ request()->is('/') ? 'active' : '' }}" data-content="Home">Home</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}" data-content="Services">Services</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : '' }}" data-content="About Us">About Us</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}" data-content="Contact">Contact</a></li>
                <li><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}" data-content="Log in">Admin</a></li>
            </ul>
        </div>

        <div class="hf-fcontact">
            <h3>Contact</h3>
            <ul>
                <li><img src="{{ asset('img/clock-icon.jfif') }}" alt="Clock Icon"> Open 24/7</li>
                <li><a href="https://goo.gl/maps/VqxU9XzGpHJX22jn7" target="_blank"><img class = "location" src="{{ asset('img/location-icon.jfif') }}" alt="Location Icon"> 18804 43rd Avenue W, Lynnwood WA 98036</a></li>
                <li><img class = "Phone" src="{{ asset('img/phone-icon.jfif') }}" alt="Phone Icon"> 425-835-0159</li>
            </ul>
        </div>

        <div class="hf-fsocial">
            <h3>Social Media</h3>
            <ul>
                <li><a href="https://www.facebook.com/100092269598066/posts/105995882486065/?d=w&substory_index=757886595887939&mibextid=jf9HGS" target="_blank"><img src="{{ asset('img/facebook-icon.png') }}" alt="Facebook Icon"></a></li>
            </ul>
        </div>
    </div>
</footer>