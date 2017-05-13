/**
 * Created by Olivi on 13/05/2017.
 */

var app = angular.module('chatApp', ['firebase']);

app.controller('ChatController', function ($scope, $firebaseArray) {
    var BDDref = firebase.database().ref()
    BDDref.child('messages');
    $scope.messages = $firebaseArray(BDDref);

    $scope.send = function(){
        $scope.messages.$add({
             message: $scope.messageText,
             date: Date.now(),
            auteur: $scope.messageText
        })
    }
})


function submitForm(){
    var form = document.getElementById("chatform");
    form.reset();
}

