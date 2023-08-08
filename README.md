# TallerJectpackCompose
El siguiente codigo esta conformado por una aplicacion Android que utiliza el framework de Compose para crear una interfazque muestra una conversación con mensajes.
El código comienza con importaciones de paquetes y clases necesarios para construir la aplicación de Compose en Android.
Define la clase : Esta clase hereda de , que es parte del framework de Android y se utiliza como punto de entrada para la aplicación. El método  se sobrescribe para configurar la interfaz de usuario utilizando Compose.MainActivityComponentActivityonCreate

La función se configura la vista de la aplicación utilizando Compose. Se establece el tema y se crea una superficie que ocupa todo el espacio disponible. Dentro de esta superficie, se llama a la función  pasándole una lista de mensajes

La clase define un modelo de datos para representar un mensaje en la conversación. Cada mensaje tiene un autor y un cuerpo.
La función composable, Toma un mensaje como entrada y crea una vista para mostrar ese mensaje. La vista consiste en una fila que contiene una imagen circular, el nombre del autor y el cuerpo del mensaje. Si se hace clic en la fila, el mensaje se expande o contrae, mostrando más o menos contenido.

Luego el (Previw) permite a la  vista previa ver cómo se verá un mensaje en la interfaz de usuario durante el desarrollo.

