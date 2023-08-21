const form_email = document.getElementById('form-email');
const res_email = document.getElementById('res-email');

form_email.addEventListener('submit', (e) => {
    e.preventDefault();
    const formData = new FormData(form_email);

    const nombre = formData.get('nombre');
    const correo = formData.get('correo');
    const mensaje = formData.get('mensaje');
    const data = {
        nombre,
        correo,
        mensaje
    };

    fetch('components/enviar_correo.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data),        
    })
    .then(res => res.json())
    .then(res => {
        if(res){
            alert('Mensaje enviado correctamente')
            form_email.reset();
            console.log(res)
        }else{
            alert('Error al enviar el mensaje')
    }
    })
    .catch(err => console.log(err))

}
);

