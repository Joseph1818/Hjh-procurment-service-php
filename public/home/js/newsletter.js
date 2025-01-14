function submitForm(event) {
    event.preventDefault(); 
    var emailInput = document.getElementById("email").value;
  
    if (emailInput) {
      sendMail(emailInput);
    } else {
      alert("Please enter a valid email address."); 
    }
  }
  
  function sendMail(email) {
    var params = {
      email: email,  
    };
  
    const serviceID = "service_rpaoc1j"; 
    const templateID = "template_re2pieg"; 
  
    emailjs.send(serviceID, templateID, params)
      .then(res => {
        document.getElementById("subscribe-form").reset(); 
  
     
        document.getElementById("confirmation-message").style.display = "block";
        document.getElementById("error-message").style.display = "none";
      })
      .catch(err => {
        // Show error message
        document.getElementById("confirmation-message").style.display = "none";
        document.getElementById("error-message").style.display = "block";
      });
  }
  