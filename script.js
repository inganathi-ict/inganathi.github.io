document.getElementById("contact-form").addEventListener("submit", function(event){

event.preventDefault();

emailjs.sendForm(
"service_l9q3vhf",
"template_ukf6vcb",
this
).then(function(){

alert("Message sent successfully!");

}, function(error){

alert("Failed to send message");

});

});
