function validarMsg(){
	colorOriginalMsg();
	
    var nombre = document.getElementById('nombre').value.trim();
    var mail = document.getElementById('mail').value.trim();
    
    var correcto = true;
    
    var regExNombre = /^[A-Za-z0-9áéíóúñ&$:,\s!]{3,}$/;
    var regExMail = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;
    
    if(!regExNombre.test(nombre)) {
        document.getElementById('nombre').style.backgroundColor = '#FFADAD';
        document.getElementById('nombre').style.borderColor = '#A10000';
        if(correcto) {
            document.getElementById('nombre').focus();
        }
        correcto = false;
    } else {
        document.getElementById('nombre').style.backgroundColor = '';
        document.getElementById('nombre').style.borderColor = '';
    }
    
    if(!regExMail.test(mail)) {
        document.getElementById('mail').style.backgroundColor = '#FFADAD';
        document.getElementById('mail').style.borderColor = '#A10000';
        if(correcto) {
            document.getElementById('mail').focus();
        }
        correcto = false;
    } else {
        document.getElementById('mail').style.backgroundColor = '';
        document.getElementById('mail').style.borderColor = '';
    }
    
    if(correcto){
        document.querySelector('.loading').style.display = 'block';
        document.querySelector('.container').style.opacity = '0.1';
        document.querySelector('.footer').style.opacity = '0.1';
        document.querySelector('body').style.overflow = 'hidden';
        setTimeout(function() {
            document.contactar.submit();
        }, 2000);
    }
}

function colorOriginalMsg() {
	document.getElementById('nombre').backgroundColor = '';
	document.getElementById('mail').backgroundColor = '';
	
	document.getElementById('nombre').borderColor = '';
	document.getElementById('mail').borderColor = '';
}