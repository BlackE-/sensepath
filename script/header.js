//form footer
	const form1 = document.getElementById("form-footer"); 
    const response = document.getElementById('response');
    const name = form1.elements['name'];
    const phone = form1.elements['phone'];
    const email = form1.elements['email'];
    const mensaje = form1.elements['mensaje'];

    phone.addEventListener("keyup",event =>{
        // console.log(event);
        let format = formatPhoneFunction(phone.value);
        phone.value = format;
    })
    function formatPhoneFunction(obj){
        if(obj.length > 14){
            console.log(obj.length);
            return obj.substring(0, 14);
        }
        var numbers = obj.replace(/\D/g, ''),char = {0:'(',2:') ',6:'-'};
        obj = '';
        for (var i = 0; i < numbers.length; i++) {obj += (char[i]||'') + numbers[i];}
        return obj;
    }



    form1.addEventListener("submit", function(event){
        event.preventDefault();
        if (!name.checkValidity()) {response.innerHTML = name.validationMessage;}
        if (!email.checkValidity()) {response.innerHTML = email.validationMessage;}
        if (!phone.checkValidity()) {response.innerHTML = phone.validationMessage;}

        var xhttp = new XMLHttpRequest();
         xhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                 const res = JSON.parse(this.responseText);
                response.innerHTML = `GRACIAS ${res.message}`;
                // dataLayer.push({'event': 'EnviarFormularioModal-QuieroMiDescuento-Desktop','landingPage':{'btn_activador':btn_activador}});
                setTimeout(function(){response.innerHTML = '';},3000);
             }
             else{
                 const errorMessage = JSON.parse(this.responseText);
                 response.innerHTML = errorMessage.message;
             }
         };
         xhttp.open("POST", "script/enviarFormularioFooter.php", true);
         xhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');
         xhttp.send("name="+name.value+"&phone="+phone.value+"&email="+email.value+"&mensaje="+mensaje.value);
         
    });