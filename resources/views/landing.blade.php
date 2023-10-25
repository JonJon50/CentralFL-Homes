

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ICI Homes offers a range of real estate services, featuring profiles of our experienced employees and a collection of our high-quality homes available for sale.">
    <meta name="keywords" content="ICI Homes, Real Estate, Property, Quality Homes, Employee Profiles, Homes for Sale, Real Estate Services, Home Design">
    <title>ICI Homes Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ app()->isLocal() ? asset('css/app.css') : secure_asset('css/app.css') }}" />
  
</head>
<body>

 <section class="video-section">
        <video autoplay muted loop>
            <source src="video/ICI Homes.mp4" type="video/mp4"> <!-- Replace with your video source -->
        </video>
        <div class="text-overlay">
        <div id="text-fade" x-data="{ fadeIn: true, fontSize: '3vw' }" x-cloak x-init="setTimeout(() => { fadeIn = false }, 15000); fontSize = window.innerWidth > 768 ? '3vw' : '18px';">
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

                    <p>Samuel Morrisett<br>Div. President ICI Homes Process Improvement</p>
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


<div class="container mt-3">
        <h2 class="text-center">ICI Homes, Offices</h2>
        <ul id="officeList">
            <!-- Office information will be dynamically added here -->
        </ul>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <label for="officeSelect">Select an office:</label>
                <select class="form-control" id="officeSelect">
                    <option value="0">Location</option>
                    <option value="0">Daytona Beach Office</option>
                    <option value="1">Houston Office</option>
                    <!-- Add more options for additional offices as needed -->
                </select>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <label for="currentLocation">Current location:</label>
                <div class="input-group">
                    <input class="form-control" type="text" id="currentLocation" placeholder="e.g., Your Address">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-primary" onclick="calculateRouteAndStoreInput()">Get Directions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map" style="height: 400px;"></div>

    <div id="directionsPanel" class="container mt-3"></div>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content text-center">
                <a href="https://github.com/JonJon50" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="social-icon">
                    <i class="fab fa-github"></i>
                </a>
                <p>© 2023 John Hagens. All Rights Reserved.</p>
                <a href="https://www.linkedin.com/in/john-hagens-55b15212a/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </footer>

<script>
 // Define usaLatLng in the global scope
    const usaLatLng = { lat: 31.0000, lng: -87.5000 };
    let map;
    let infowindow;
    let directionsRenderer;

    // Function to calculate and display directions and store input value
    function calculateRouteAndStoreInput() {
        const directionsService = new google.maps.DirectionsService();

        // Clear previous directions from the directions panel
        document.getElementById("directionsPanel").innerHTML = '';

        directionsRenderer.setPanel(document.getElementById("directionsPanel"));

        const currentLocation = document.getElementById("currentLocation").value;

        // Use Geocoding to convert the user's input (current location) to coordinates
        const geocoder = new google.maps.Geocoder();
        geocoder.geocode({ address: currentLocation }, (results, status) => {
            if (status === "OK" && results[0]) {
                const startLocation = results[0].geometry.location;

                const iciHomesOffices = [
                    {
                        name: "Florida Office",
                        location: { lat: 28.5383, lng: -81.3792 }, // Example office location in Orlando, FL
                    },
                    {
                        name: "Texas Office",
                        location: { lat: 29.7604, lng: -95.3698 }, // Example office location in Houston, TX
                    },
                    // Add more office locations as needed
                ];

                const selectedOfficeIndex = document.getElementById("officeSelect").value;
                const selectedOffice = iciHomesOffices[selectedOfficeIndex];

                const request = {
                    origin: startLocation,
                    destination: selectedOffice.location,
                    travelMode: google.maps.TravelMode.DRIVING,
                };

                directionsService.route(request, (result, status) => {
                    if (status === "OK") {
                        directionsRenderer.setDirections(result);
                        displayOfficeInformation(selectedOffice); // Display the selected office information
                    } else {
                        console.error("Error calculating directions:", status);
                    }
                });

                // Store the input value in local storage
                localStorage.setItem("currentLocation", currentLocation);

                // Clear the input field
                document.getElementById("currentLocation").value = "";
            } else {
                console.error("Error geocoding user's location:", status);
            }
        });
    }

    function initMap() {
        // Initialize map
        map = new google.maps.Map(document.getElementById("map"), {
            center: usaLatLng,
            zoom: 5, // You can adjust the zoom level as needed
        });

        // Initialize infowindow
        infowindow = new google.maps.InfoWindow();

        // Initialize directions renderer
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

        // Define the ICI Homes office locations and info
        const iciHomesOffices = [
            {
                name: "ICI Homes Daytona Beach Office",
                location: { lat: 28.5383, lng: -81.3792 }, // Example office location in Orlando, FL
            },
            {
                name: "ICI Homes Houston Office",
                location: { lat: 29.7604, lng: -95.3698 }, // Example office location in Houston, TX
            },
            // Add more office locations as needed
        ];

        iciHomesOffices.forEach((office) => {
            const marker = new google.maps.Marker({
                position: office.location,
                map: map,
                title: office.name,
            });

            marker.addListener("click", () => {
                infowindow.setContent(office.name);
                infowindow.open(map, marker);
            });
        });
    }

    // Function to display office information
    function displayOfficeInformation(office) {
        const officeList = document.getElementById("officeList");
        const listItem = document.createElement("li");
        listItem.textContent = `Selected Office: ${office.name}`;
        officeList.innerHTML = ''; // Clear previous office information
        officeList.appendChild(listItem);
    }
</script>




<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.0/dist/cdn.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <script src="{{ app()->environment('local') ? asset('js/app.js') : secure_asset('js/app.js') }}"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- i will do a process.env api key Environment Variable  -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU6NBGVDW5MYmWfvmRkJEwIHUJBfo-qLc&libraries=places&callback=initMap" defer></script>
</body>
</html>
