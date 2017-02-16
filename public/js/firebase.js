
// Initialize Firebase
var config = {
    apiKey: "AIzaSyCrOK3ui0VPUYqq-Iq_Gj9QAd4eC9XT3z0",
    authDomain: "globalcenter-1e91d.firebaseapp.com",
    databaseURL: "https://globalcenter-1e91d.firebaseio.com",
    storageBucket: "globalcenter-1e91d.appspot.com",
    messagingSenderId: "327963761240"
};
firebase.initializeApp(config);

const object = document.getElementById('bigOne');
const dbref = firebase.database().ref().child('object');

dbref.on('value', snap => console.log((snap.val()));