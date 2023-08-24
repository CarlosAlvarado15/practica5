
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body >
    <div class="px-8 h-[15vh] w-full flex justify-between items-center"> <p class="text-[#5d6266] font-semibold text-xl"> Agregar Usuario</p>
    <a href="#">
        <div class="bg-[#004c6c] py-2 px-3 rounded-md text-white flex gap-2" type='button'> Volver al Listado</div>
    
    
    </a></div>
    <div class="h-[85vh] w-full flex justify-center items-center">
        <form action="api/registrar" method="POST" class="w-22 h-2/4 flex flex-col justify-between">
            <div class="space-y-2 mb-5">
                @csrf
                <div class="flex space-x-6">
                    <div class="flex flex-col space-y-1">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required class="px-3 py-2 border rounded">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required class="px-3 py-2 border rounded">
                    </div>
                </div>
            </div>
            <div class="flex flex-col space-y-1 gap-7">
                <label for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required class="px-3 py-2 border rounded mb-8">
                <label for="contra">Contraseña</label>
                <input type="password" id="contra" name="contra" placeholder="Contraseña" required class="px-3 py-2 border rounded mb-8">
                <button type="submit" class="w-full py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Guardar</button>
            </div>
        </form>
    </div>
    
    </body>
    </html>
   
    
    
    
    
    
    

</body>
</html>





