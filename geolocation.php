<!DOCTYPE html>
<html>

<body>

    <h2>JavaScript Gelocation</h2>

    <p>Click the button to get your coordinates.</p>

    <button onclick="getLocation()">Try It</button>

    <p id="demo"></p>

    <script>
        const x = document.getElementById("demo");

        if ('geolocation' in navigator) {
            /* geolocation is available */
            console.log('true');
            navigator.geolocation.getCurrentPosition(position => {
                console.log(position.coords.latidtude,position.coords.longitude);
            });
        } else {
            /* geolocation IS NOT available */
            console.log('false');
        }
    </script>

</body>

</html>