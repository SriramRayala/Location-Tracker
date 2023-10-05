# Location-Tracker


Step 1: Create the HTML File

Open a text editor or code editor on your local machine.
Create a new HTML file and save it as locate.html.
Step 2: Add the Meme(random pic link) and JavaScript Code

Inside locate.html, add an <iframe> tag to display the meme:
Now when a user opens the link he will see that pic

![image](https://github.com/SriramRayala/Location-Tracker/assets/78687650/0a790d10-fd08-42b1-b63d-8a8fe46dfc6f)


Add JavaScript code to collect user location, user agent, and IP address. This can be done using the navigator object and making a request to an external PHP file for data collection.

![image](https://github.com/SriramRayala/Location-Tracker/assets/78687650/fdae6485-a19d-4cd3-ac47-83052073d011)


Step 3: Create the PHP File

Create a new file named store.php in the same directory as locate.html.

In store.php, you can collect the data sent from the JavaScript and store it in a file or database. For example:

![image](https://github.com/SriramRayala/Location-Tracker/assets/78687650/63dc679d-30db-4382-a179-a4fae44c71c9)



Step 4: Host the Files on 000webhost.com

Sign in to your 000webhost.com account.

Upload both locate.html and store.php to your hosting account using FTP or the web-based file manager provided by your hosting service.

Once the files are uploaded, you can access locate.html through a web browser using the hosted URL (e.g., https://yourwebsite.000webhostapp.com/locate.html).

Step 5: Testing

Open locate.html in your browser both locally (from your laptop) and through the hosted URL.

You should see the meme displayed, and the JavaScript code will collect and send data to store.php for both versions.

Check the data.txt file (or your chosen storage method) on your hosting account to verify that the data is being stored correctly.
