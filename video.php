<html>

<head>
    <title> OpenTok Getting Started </title>
    <style>
        body,
        html {
            background-color: gray;
            height: 100%;
        }

        #videos {
            position: relative;
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        #subscriber {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
        }

        #publisher {
            position: absolute;
            width: 360px;
            height: 240px;
            bottom: 10px;
            left: 10px;
            z-index: 100;
            border: 3px solid white;
            border-radius: 3px;
        }
    </style>
    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
</head>

<body>

    <div id="videos">
        <div id="subscriber"></div>
        <div id="publisher"></div>
    </div>

    <script>
        // replace these values with those generated in your Video API account
        var apiKey = "YOUR_API_KEY";
        var sessionId = "YOUR_SESSION_ID";
        var token = "YOUR_TOKEN";

        // Handling all of our errors here by alerting them
        function handleError(error) {
            if (error) {
                alert(error.message);
            }
        }

        // (optional) add server code here
        initializeSession();

        function initializeSession() {
            var session = OT.initSession(apiKey, sessionId);

            // Subscribe to a newly created stream
            session.on('streamCreated', function(event) {
                session.subscribe(event.stream, 'subscriber', {
                    insertMode: 'append',
                    width: '100%',
                    height: '100%'
                }, handleError);
            });

            // Create a publisher
            var publisher = OT.initPublisher('publisher', {
                insertMode: 'append',
                width: '100%',
                height: '100%'
            }, handleError);

            // Connect to the session
            session.connect(token, function(error) {
                // If the connection is successful, initialize a publisher and publish to the session
                if (error) {
                    handleError(error);
                } else {
                    session.publish(publisher, handleError);
                }
            });
        }
    </script>
</body>

</html>