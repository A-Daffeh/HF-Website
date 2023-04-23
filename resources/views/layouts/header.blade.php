
<header class="header">

  <span><img src="{{ asset('img/HF-Logo.jpg') }}" alt="HF Logo"><strong>Hawa & Fanta's Adult Family Home LLC</strong></span>
  
  <button class="nav-toggle" aria-label="toggle navigation">
    <span class="nav-toggle-icon"></span>
  </button>
  
  <ul class="nav main-nav">
    <li class="nav-item"><a href="{{ route('hfhome') }}" class="{{ request()->is('/') ? 'active' : '' }}" data-content="Home">Home</a></li>
    <li class="nav-item"><a href="{{ route('services') }}" class="{{ request()->is('services') ? 'active' : '' }}" data-content="Services">Services</a></li>
    <li class="nav-item"><a href="{{ route('about-us') }}" class="{{ request()->is('about-us') ? 'active' : '' }}" data-content="About Us">About Us</a></li>
    <li class="nav-item"><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}" data-content="Contact">Contact</a></li>
    <li class="nav-item"><a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}" data-content="Log in">Log In</a></li>
  </ul>
</header>

<script>
      const navToggle = document.querySelector('.nav-toggle');
      const navMenu = document.querySelector('.nav');
      
      navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
      });
    </script>

    </body>
