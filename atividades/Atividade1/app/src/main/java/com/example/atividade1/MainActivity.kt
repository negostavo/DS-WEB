package com.example.atividade1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade1.ui.theme.Atividade1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade1Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp(){
    androidx.compose.material3.Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF546E7A)
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Text(text = "cards da atividade",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(32.dp))
            Card(
                modifier = Modifier
                    .padding(16.dp)
                    .size(200.dp),
                shape = RoundedCornerShape(10.dp)
            ) {
                Box (
                    modifier = Modifier.fillMaxSize(),
                    contentAlignment = Alignment.Center
                ) {
                    Text(text = "[ Nome: João Silva ]\n" +
                            "[ Tel: (11) 99999-9999 ]\n" +
                            "[ Email: joao@email.com ]",
                        style = TextStyle(fontSize = 16.sp)
                    )
                }
            }
            Spacer(modifier = Modifier.height(32.dp))
            Card(
                modifier = Modifier
                    .padding(16.dp)
                    .size(200.dp),
                shape = RoundedCornerShape(10.dp)
            ) {
                Box (
                    modifier = Modifier.fillMaxSize(),
                    contentAlignment = Alignment.Center
                ) {
                    Text(text = "[ Nome: Maria Souza ]\n" +
                            "[ Tel: (21) 98888-8888 ]\n" +
                            "[ Email: maria@email.com ]",
                        style = TextStyle(fontSize = 16.sp)
                    )
                }
            }

        }
    }
}


@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Atividade1Theme {
       MyApp()
    }
}