<!-- landing.blade.php John Hagens-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ICI Homes offers a range of real estate services, featuring profiles of our experienced employees and a collection of our high-quality homes available for sale.">
    <meta name="keywords" content="ICI Homes, Real Estate, Property, Quality Homes, Employee Profiles, Homes for Sale, Real Estate Services, Home Design">
    <title>ICI Homes Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <link rel="stylesheet" href="{{ asset('build/assets/app-5a423f31.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <section class="video-section">
        <video autoplay muted loop>
            <source src="video/ICI Homes.mp4" type="video/mp4"> <!-- Replace with your video source -->
        </video>
        <div class="text-overlay">
          <div id="text-fade" x-data="{ fadeIn: true, fontSize: '18px' }" x-cloak x-init="setTimeout(() => { fadeIn = false }, 15000); fontSize = window.innerWidth > 768 ? '24px' : '18px';"> <!-- Start with fadeIn true and then set it to false after 15000ms (15 seconds) -->
                <span>Welcome to</span>
                <span>ICI</span>
                <span>Homes <i class="fas fa-home"></i></span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;">Forget about the rest!</span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;">And come to the best,</span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;">where you get</span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;"></span>
                <span x-show="fadeIn" style="opacity: 0;"> ~ The Best for Less! ~ </span>
                
            </div>
        </div>
    </section>

 <!-- Employee Section -->
<section id="employees" class="employee-section">
    <div class="container">
        <!-- Top Row Jon-->
        <div class="employee-row">
            <div class="employee">
                <a href="https://www.linkedin.com/in/rosymessina/" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/employees/rm.jpeg') }}" alt="Rosy Messina">
                    <p>Rosy Messina<br>VP Sales and Marketing, ICI Homes</p>
                </a>
            </div>
            <div class="employee">
                <a href="https://www.linkedin.com/in/scott-maclure-b179129/" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/employees/vpdb.jpeg') }}" alt="Scott MacLure">
                    <p>Scott MacLure<br>ICI Homes- Daytona Beach</p>
                </a>
            </div>
            <div class="employee">
                <a href="https://www.linkedin.com/in/kim-newkirk-5372a634/" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/employees/kvp.jpeg') }}" alt="Kim Newkirk">
                    <p>Kim Newkirk<br>Vice President at ICI Homes</p>
                </a>
            </div>
        </div>
        <!-- Bottom Row -->
        <div class="employee-row">
            <div class="employee">
                <a href="https://www.linkedin.com/in/samuel-morrisett-88059a24/" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('images/employees/dp.jpeg') }}" alt="Samuel Morrisett" loading="lazy">

                    <p>Samuel Morrisett<br>Division President ICI Homes | Process Improvement, CRM</p>
                </a>
            </div>
            <div class="contact-us">
        <a href="https://icihomes.com/contact" target="_blank">Contact Us</a>
            </div>
            <div class="employee">
                <a href="https://www.linkedin.com/in/mojibabazadeh/" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/employees/vp.jpeg') }}" alt="Moji Babazadeh">
                    <p>Moji Babazadeh<br>Executive Vice President at ICI Homes</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Carousel Section -->
<section id="carousel-section" class="carousel-section">
    <div class="container">
        <h2 class="text-center">ICI Custom Homes</h2>
        <div id="houseCarousel" class="carousel slide carousel-border" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/houses/ici1.jpeg') }}" class="d-block w-100" alt="House 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/houses/ici2.jpeg') }}" class="d-block w-100" alt="House 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/houses/ici3.jpeg') }}" class="d-block w-100" alt="House 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/houses/ici4.jpeg') }}" class="d-block w-100" alt="House 4">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/houses/ici5.jpeg') }}" class="d-block w-100" alt="House 5">
                </div>
            </div>
            <a class="carousel-control-prev" href="#houseCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#houseCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <p class="text-center mt-3 visit-us">
            <a href="https://icihomes.com" target="_blank">Visit us HERE</a>
        </p>
    </div>
</section>

<footer class="site-footer">
  <div class="container">
    <div class="footer-content">
      <a href="https://github.com/your-username" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="social-icon">
        <i class="fab fa-github"></i>
      </a>
      <p>© 2023 John Hagens. All Rights Reserved.</p>
      <a href="https://linkedin.com/in/your-username" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
  </div>
</footer>


        <script src="{{ asset('js/app.js') }}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js"></script>

        <script src="{{ asset('build/assets/app-4cfc8f67.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
