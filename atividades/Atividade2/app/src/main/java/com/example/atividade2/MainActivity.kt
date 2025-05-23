package com.example.atividade2

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade2.ui.theme.Atividade2Theme
import androidx.compose.material3.CardDefaults // Importe CardDefaults

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade2Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp(){
    val backgroundColor = Color(0xFFBBDEFB)

    androidx.compose.material3.Surface(
        modifier = Modifier.fillMaxSize(),
        color = backgroundColor
    ){
        Column(
            modifier = Modifier.fillMaxSize(),
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Card(
                modifier = Modifier
                    .padding(16.dp)
                    .fillMaxWidth(0.8f),
                shape = RoundedCornerShape(12.dp)
            ) {
                Column(
                    modifier = Modifier
                        .padding(24.dp)
                        .fillMaxWidth(),
                    horizontalAlignment = Alignment.CenterHorizontally,
                    verticalArrangement = Arrangement.spacedBy(8.dp)
                ) {
                    Text(
                        text = "Fone Bluetooth XYZ",
                        style = TextStyle(
                            color = Color.Black,
                            fontSize = 24.sp
                        )
                    )
                    Text(
                        text = "R$ 149,90",
                        style = TextStyle(
                            color = Color.Black,
                            fontSize = 20.sp
                        )
                    )
                    Spacer(modifier = Modifier.height(16.dp))

                    Card(
                        modifier = Modifier
                            .size(72.dp)
                            .clickable {
                                Log.d("Debug", "funfou bruno!")
                            },
                        shape = CircleShape,
                        colors = CardDefaults.cardColors(containerColor = Color.Gray) // AQUI ESTÁ A MUDANÇA
                    ) {
                        Box(
                            modifier = Modifier.fillMaxSize(),
                            contentAlignment = Alignment.Center
                        ) {
                            Text(
                                text = "Comprar",
                                style = TextStyle(
                                    color = Color.White, // Mudei a cor do texto para branco para contraste
                                    fontSize = 16.sp
                                )
                            )
                        }
                    }
                }
            }
        }
    }
}
@Preview(showBackground = true, widthDp = 320)
@Composable
fun DefaultPreview() {
    Atividade2Theme {
        MyApp()
    }
}