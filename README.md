# TallerJectpackCompose
El siguiente codigo esta conformado por una aplicacion Android que utiliza el framework de Compose para crear una interfazque muestra una conversación con mensajes.
Importaciones: El código comienza con una serie de importaciones de paquetes y clases necesarios para construir la aplicación de Compose en Android.

Definición de la clase : Esta clase hereda de , que es parte del framework de Android y se utiliza como punto de entrada para la aplicación. El método  se sobrescribe para configurar la interfaz de usuario utilizando Compose.MainActivityComponentActivityonCreate

Función : En este método, se configura la vista de la aplicación utilizando Compose. Se establece el tema () y se crea una superficie () que ocupa todo el espacio disponible. Dentro de esta superficie, se llama a la función  pasándole una lista de mensajes de ejemplo.onCreatePruebaThemeSurfaceConversation

Clase : Esta clase define un modelo de datos para representar un mensaje en la conversación. Cada mensaje tiene un autor y un cuerpo.Message

Función : Esta función es una composable, que es una unidad básica de la interfaz de usuario en Compose. Toma un mensaje como entrada y crea una vista para mostrar ese mensaje. La vista consiste en una fila () que contiene una imagen circular, el nombre del autor y el cuerpo del mensaje. Si se hace clic en la fila, el mensaje se expande o contrae, mostrando más o menos contenido.MessageCardRow

Función : Esta es una vista previa de la función . Permite ver cómo se verá un mensaje en la interfaz de usuario durante el desarrollo.MessageCardPreviewMessageCard

Función : Esta función también es una composable que toma una lista de mensajes y crea una vista de lista () que muestra cada mensaje utilizando la función .ConversationLazyColumnMessageCard

Función : Esta es una vista previa de la función . Proporciona una vista previa de cómo se verá la conversación completa en la interfaz de usuario durante el desarrollo.PreviewConversationConversation
