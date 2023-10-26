// resources/js/app.js file
 

// JavaScript file (e.g., resources/js/app.js)
document.addEventListener('DOMContentLoaded', function() {
    const textFade = document.getElementById('text-fade');
    const words = textFade.getElementsByTagName('span');

    let index = 0;

    function fadeInWord() {
        if (index < words.length) {
            words[index].style.opacity = 1;
            index++;
            setTimeout(fadeInWord, 500); // Adjust the delay as needed
        }
    }

    fadeInWord(); // Start the animation
});

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

