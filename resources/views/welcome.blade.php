<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="//js.pusher.com/3.1/pusher.min.js"></script>
        <script>
            (function() {
                var pusher = new Pusher('7da587dde248e6fd1121');

                var channel = pusher.subscribe('test');

                channel.bind('App\\Events\\UserHasRegistered', function(data) {
                    console.log(data);
                });

            })();
        </script>
    
    </head>
    <body>
    <h1>Welcome</h1>
    
    </body>
</html>
