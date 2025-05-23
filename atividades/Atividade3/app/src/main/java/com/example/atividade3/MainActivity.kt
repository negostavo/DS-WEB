package com.example.atividade3

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
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp

import com.example.atividade3.ui.theme.Atividade3Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade3Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp(){
    var moneyCounter by remember { mutableStateOf(0) }
    var ponto by remember { mutableStateOf(0) }

    Surface(
        modifier = Modifier.fillMaxSize(),
        color = Color(0xFF546E7A)
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        ){
            // Time A
            Text(text = "time A\n" +
                    "\npontuação: $moneyCounter",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(20.dp))
            Card(
                modifier = Modifier
                    .padding(3.dp)
                    .size(150.dp)
                    .clickable {
                        moneyCounter += 1
                        Log.d("Contador", "Time A: $moneyCounter")
                    },
                shape = CircleShape
            ) {
                Box (modifier = Modifier.fillMaxSize(),
                    contentAlignment = Alignment.Center)
                {
                    Text(text = "Tap", style = TextStyle(fontSize = 24.sp))
                }
            }

            Spacer(modifier = Modifier.height(50.dp))

            // Time B
            Text(text = "time B\n" +
                    "\npontuação: $ponto",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(20.dp))
            Card(
                modifier = Modifier
                    .padding(3.dp)
                    .size(150.dp)
                    .clickable {
                        ponto += 1
                        Log.d("Contador", "Time B: $ponto")
                    },
                shape = CircleShape
            ) {
                Box (modifier = Modifier.fillMaxSize(),
                    contentAlignment = Alignment.Center)
                {
                    Text(text = "Ponto", style = TextStyle(fontSize = 24.sp))
                }
            }
        }
    }
}


@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Atividade3Theme {
        MyApp()
    }
}