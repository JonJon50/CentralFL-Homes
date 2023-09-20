<!-- landing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICI Homes Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Include your CSS file -->
</head>
<body>
    <section class="video-section">
        <video autoplay muted loop>
            <source src="video/ICI Homes.mp4" type="video/mp4"> <!-- Replace with your video source -->
        </video>
        <div class="text-overlay">
            <div id="text-fade">
                <span>Welcome</span>
                <span>to</span>
                <span>ICI</span>
                <span>Homes</span>
                <span>where</span>
                <span>you</span>
                <span>get</span>
                <span>the</span>
                <span>best</span>
                <span>for</span>
                <span>Less!</span>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Add more sections for the middle and bottom content -->

</body>
</html>
