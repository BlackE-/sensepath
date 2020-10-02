//form footer
	const form1 = document.getElementById("form-footer"); 
    const response = document.getElementById('response');
    const name = form1.elements['name'];
    const phone = form1.elements['phone'];
    const email = form1.elements['email'];
    const mensaje = form1.elements['mensaje'];

    const itl = intlTelInput(phone, {
      formatOnDisplay: false,
      placeholderNumberType: "MOBILE",
      initialCountry: "us",
      utilsScript: "script/intl-tel-input/js/utils.js",
    });


    form1.addEventListener("submit", function(event){
        event.preventDefault();
        if (!name.checkValidity()) {response.innerHTML = name.validationMessage;}
        if (!email.checkValidity()) {response.innerHTML = email.validationMessage;}
        if (!phone.checkValidity()) {response.innerHTML = phone.validationMessage;}

        var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                 const res = JSON.parse(this.responseText);
                response.innerHTML = `Thank you ${res.message}`;
                // dataLayer.push({'event': 'EnviarFormularioModal-QuieroMiDescuento-Desktop','landingPage':{'btn_activador':btn_activador}});
                setTimeout(function(){response.innerHTML = '';},3000);
             }
             else{
                 const errorMessage = JSON.parse(this.responseText);
                 response.innerHTML = errorMessage.message;
             }
         };
         xhttp.open("POST", "script/sendFooterForm.php", true);
         xhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');
         xhttp.send("name="+name.value+"&phone="+itl.getNumber()+"&email="+email.value+"&mensaje="+mensaje.value);
         
    });