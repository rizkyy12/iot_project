#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <Servo.h>

#define Echo 5
#define trig 4
#define servo_pin 12 //GPIO 2 D4
Servo myservo;

//const char* ssid = "bing";
//const char* password = "bismillah";
const char* ssid = "Galaxy-A10s";
const char* password = "salman01";
int distance;
long duration;

void setup() {
  Serial.begin(9600);
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
  pinMode(trig, OUTPUT);
  pinMode(Echo, INPUT);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  Serial.println();
  myservo.attach(12);
  delay(10);
}

void loop() {
  digitalWrite(trig, LOW);
  delayMicroseconds(2);
  digitalWrite(trig, HIGH);
  delayMicroseconds(10);
  digitalWrite(trig, LOW);
  duration = pulseIn(Echo, HIGH);
  distance = duration * 0.034 / 2;
  Serial.println(distance);
  
  String address;
  //equate with your computer's IP address and your directory application
  address = "http://192.168.55.136/amk2/iot_project/page/create.php?nilai=";
  address += String(distance);
  HTTPClient http;
  WiFiClient client;
  http.begin(client, address); //Specify request destination
  int httpCode = http.GET();//Send the request
  String payload;
  if (httpCode > 0) { //Check the returning code
    payload = http.getString(); //Get the request response payload
    payload.trim();
    if ( payload.length() > 0 ) {
      Serial.println(payload + "\n");
    }
  }
  http.end(); //Close connection
  delay(10);
}
