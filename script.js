function sendMail(){
  let parms = {
    name : document.getElementById("name").value,
    email : document.getElementById("email").value,
    message : document.getElementById("message").value,
  }

  emailjs.send("service_l9q3vhf","template_ukf6vcb",parms).then(alert("Email has been sent"))
}
