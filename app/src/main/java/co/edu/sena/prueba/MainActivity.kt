package co.edu.sena.prueba

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.animation.animateColorAsState
import androidx.compose.animation.animateContentSize
import androidx.compose.foundation.Image
import androidx.compose.foundation.border
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.lazy.LazyColumn
import androidx.compose.foundation.lazy.items
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.material3.surfaceColorAtElevation
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Modifier
import androidx.compose.ui.draw.clip
import androidx.compose.ui.modifier.modifierLocalConsumer
import androidx.compose.ui.res.painterResource
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import co.edu.sena.prueba.ui.theme.PruebaTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            PruebaTheme{
                Surface(modifier = Modifier.fillMaxSize()){
                   Conversation(SampleData.conversationSample)
                }
            }

        }
    }

}

data class Message(val author: String, val body: String) {

}

// Muestra la vista en el dispositivo
@Composable
fun MessageCard(msg: Message) {
    Row (modifier = Modifier.padding(all =8.dp)){
        Image(
            painter = painterResource(R.drawable.fotor_ai_202308018446 ) ,
            contentDescription = "Contact profile picture",
            modifier = Modifier
                //Para modficar el tamaño de la imagen
                .size(40.dp)
                // Para convertir la imagen en circulo
                .clip(CircleShape)
                .border(1.5.dp, MaterialTheme.colorScheme.primary, CircleShape)
        )
        //Para separar la imagen del texto
        Spacer(modifier = Modifier.width(8.dp))

        var isExpanded by remember { mutableStateOf(false) }

        val surfaceColor by animateColorAsState(
            if (isExpanded) MaterialTheme.colorScheme.primary else MaterialTheme.colorScheme.surface,
        )

        Column (modifier = Modifier.clickable { isExpanded = !isExpanded }) {
            Text(
                text = msg.author,
                color = MaterialTheme.colorScheme.primary,
                style = MaterialTheme.typography.titleSmall
            )



            Spacer(modifier = Modifier.height(4.dp))

            Surface(
                shape = MaterialTheme.shapes.medium,
                shadowElevation = 1.dp,
                color = MaterialTheme.colorScheme.tertiary,
                modifier = Modifier.animateContentSize().padding(1.dp)
            ) {
                Text(
                    text = msg.body,
                    modifier = Modifier.padding(all = 4.dp),
                    maxLines = if (isExpanded) Int.MAX_VALUE else 1,
                    style = MaterialTheme.typography.bodySmall
                )
            }
        }
    }

}

//Muestra la vista previa
@Preview(showBackground = true)
@Composable
fun MessageCardPreview(){
    PruebaTheme{
        Surface{
            MessageCard(
                msg = Message("Alejandra","Hello, I introduce myself, i am a programming stugent, next we will see the nationalities of different people"))
        }
    }

}



@Composable
fun Conversation(messages: List<Message>) {
    LazyColumn{
        items(messages) { messages ->
            MessageCard(messages)

        }
    }
}

@Preview
@Composable
fun PreviewConversation() {
    PruebaTheme() {
        Conversation(SampleData.conversationSample)
    }
}
