<html>
    <head>
        <script>
            function getCurrentTime(){
                fetch('ajax_endpoint.php').then(
                    response => (
                        response.text()
                    )
                ).then(
                    data => (
                        document.getElementById('dateTimeSection').innerHTML = data
                    )
                );
            }
        </script>
    </head>
    <body>
        <input type='button' value='What time is it?' onclick='getCurrentTime()'/>


        <p id='dateTimeSection' style="color: purple">The original inner html</p>
    </body>
</html>