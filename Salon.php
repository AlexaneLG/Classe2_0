<?php
include ("Top.php");
?>
<html ng-app="chatApp">
<head>
    <link rel="stylesheet" href="Chat.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
    <script>

        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyAJXJzktx-C3jjf-sG9b5CsDvWWl2dyns0",
            authDomain: "projet-transverse.firebaseapp.com",
            databaseURL: "https://projet-transverse.firebaseio.com",
            projectId: "projet-transverse",
            storageBucket: "projet-transverse.appspot.com",
            messagingSenderId: "602890944796"
        };
        firebase.initializeApp(config);
    </script>
    <script src="app.js"></script>
    <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
</head>
<body ng-controller="ChatController">
<script src="https://static.opentok.com/v2/js/opentok.js"></script>

<div class="container">
    <h3 id="titleTEST">Class 2.0 <span class="glyphicon glyphicon-triangle-right" style="font-size: 70%"></span> Salon de discussion:</h3>

    <div class="row">
        <div class="col-sm-8">
            <div id="subscriberContainer"></div>
        </div>
        <div class="col-sm-4">
            <div id="publisherContainer"></div>

            <div class="panel panel-primary" style="margin-top: 10%">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                </div>
                <div id="collapseChat">
                    <div class="panel-body" style="height: 250px; overflow-y: scroll">
                        <p ng-repeat="m in messages">{{m.message}} <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span> {{m.date | date:'d/M/yy HH:mm'}}</small>
                        </p>

                    </div>
                    <div class="panel-footer">
                        <form id="chatform">
                            <div class="input-group">
                                <input id="textChatInput" type="text" class="form-control" placeholder="Message here..." ng-model="messageText">
                                <span class="input-group-btn">
                                    <button id="submitChatBtn" type="submit" class="btn btn-default" ng-click="send()" onclick="submitForm()">Send</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include ("footer.php");
?>
<script>
    var apiKey = '45828062';
    var sessionId = '2_MX40NTgyODA2Mn5-MTQ5NDcxNjMxMDYyOX5BZ3FJYWxhaEdGWGxnR0xST0hEWmlVNVR-UH4';
    var token = 'T1==cGFydG5lcl9pZD00NTgyODA2MiZzaWc9OWZmZDcwOGY2NGRlMDZiNDhlMDc1ZDU5ODhjN2I1Y2I1NjNiYzQwZTpzZXNzaW9uX2lkPTJfTVg0ME5UZ3lPREEyTW41LU1UUTVORGN4TmpNeE1EWXlPWDVCWjNGSllXeGhhRWRHV0d4blIweFNUMGhFV21sVk5WUi1VSDQmY3JlYXRlX3RpbWU9MTQ5NDcxODE2NiZub25jZT0wLjQwNzA3MTg4MTE2MjcwMSZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNDk0ODA0NTY2';
    var session = OT.initSession(apiKey, sessionId)
    session.connect(token, function(error) {
        // create publisher
        var publisher = OT.initPublisher('publisherContainer',{width:150, height:100, insertMode:'append'});
        session.publish(publisher);
    })
    session.on('streamCreated', function(event) {
        session.subscribe(event.stream, 'subscriberContainer',{width:720, height:480, insertMode:'append'});
    });
</script>
</body>
</html>




