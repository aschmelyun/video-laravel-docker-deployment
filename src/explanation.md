Git doesn't include the src directory because it is empty. That's the main why I created this file.

The Laravel or php app is important to be stored inside this src folder. And that's because the nginx web server is configured to look for the index.php file inside this directory.

Since I created it I want to make sure to repeat one more time that the .env database parameters should match the ones specified inside the docker-compose.yml file.
