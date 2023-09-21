<!-- landing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICI Homes Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <section class="video-section">
        <video autoplay muted loop>
            <source src="video/ICI Homes.mp4" type="video/mp4"> <!-- Replace with your video source -->
        </video>
        <div class="text-overlay">
            <div id="text-fade" x-data="{ fadeIn: true }" x-init="setTimeout(() => { fadeIn = false }, 15000)" x-init="fontSize = window.innerWidth > 768 ? '24px' : '18px'"> <!-- Start with fadeIn true and then set it to false after 15000ms (15 seconds) -->
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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Add more sections for the middle and bottom content -->

</body>
</html>
