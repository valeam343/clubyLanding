@component('emails.message')
# E-mail de bienvenida
Hola {{$data->nombre}}, bienvenido a **CLUBY** !  
Su correo es {{$data->recibe}}  
Esto es solo de prueba {{$texto}}

@component('mail::button', [ 'url' => 'https://www.santi.mx/demo2/app/' ])
    Clic para confirmar tu email
@endcomponent

De esta forma podremos estar en contacto.

Y si llegas a olvidar tu contraseña, la podrás recuperar a través de este correo.

Saludos, y que estés bien !
@endcomponent