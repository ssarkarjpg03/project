document.getElementById('sosForm').addEventListener('submit', function(event) {
    event.preventDefault();

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitude').value = position.coords.latitude;
            document.getElementById('longitude').value = position.coords.longitude;
            document.getElementById('sosForm').submit();
        }, function(error) {
            alert('Error retrieving your location. Please try again.');
            console.error(error);
        });
    } else {
        alert('Geolocation is not supported by your browser.');
    }
});