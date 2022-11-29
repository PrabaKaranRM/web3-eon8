function sendEmail() {
    
        const expectation = $("#expectation").val();
        const about = $("#about").val();
        const email = $("#email").val();
        const number = $("#number").val();
        
    
        if (expectation == '') { $("#expectationErr").show(); valid = false; } else { $("#expectationErr").hide(); }
        if (about == '') { $("#aboutErr").show(); valid = false; } else $("#aboutErr").hide();
        if (email == '') { $("#emailErr").show(); valid = false; } else $("#emailErr").hide();
        if (number == '' || number.length !== 10) { $("#numberErr").show(); valid = false; } else $("#numberErr").hide();
        
    
        // ajax url posting & getting form datas and captcha condions
         {
            $.ajax({
                type: "POST",
                url: 'ajax/pop_up.php',
                crossOrigin: null,
                data: { expectation: expectation, about: about, email: email, number: number },
                success: function ($result) {
                   {
                        alert('Your application was submitted');
                        window.location.reload();
                        return true;
                    }
                }
            });
        }
        
    


};

