function sendMail() {
    var params = {
      name: document.getElementById("name").value,
      phone_number: document.getElementById("phone_number").value,
      email: document.getElementById("email").value,
      message: document.getElementById("message").value,
    };
  
    const serviceID = "service_rpaoc1j";
    const templateID = "template_p5tfj8b";

    emailjs.send(serviceID, templateID, params)
    .then(res => {
      document.getElementById("contact-form").reset();

      // Show success message
      document.getElementById("confirmation-message").style.display = "block";
      document.getElementById("error-message").style.display = "none";
    })
    .catch(err => {
      // Show error message
      document.getElementById("confirmation-message").style.display = "none";
      document.getElementById("error-message").style.display = "block";
    });
  }
  