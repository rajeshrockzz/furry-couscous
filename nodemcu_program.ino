#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
char ssid[]="qwe";  // replace with your ssid & pass
char pass[]="16716716";
#define pin1 16
#define pin2 5
#define pin3 4
#define pin4 0
#define pin5 2
#define pin6 14
#define pin7 12
#define pin8 13
#define pin9 15
#define pin10 3
#define pin11 1


void setup() {
  Serial.begin(9600);
  delay(500);
  Serial.print("Connecting to..");
  Serial.println(ssid);
  delay(500);
  WiFi.disconnect();
  WiFi.begin(ssid,pass);
while(WiFi.status() != WL_CONNECTED)
{
  delay(500);
  Serial.println(".");
}
pinMode(pin1,OUTPUT);
pinMode(pin2,OUTPUT);
pinMode(pin3,OUTPUT);
pinMode(pin4,OUTPUT);
pinMode(pin5,OUTPUT);
pinMode(pin6,OUTPUT);
pinMode(pin7,OUTPUT);
pinMode(pin8,OUTPUT);
pinMode(pin9,OUTPUT);
Serial.print("SSID...");
Serial.println (WiFi.SSID());
Serial.println("Successfully connected!!!");

Serial.print("IP Address allotted to NodeMcu ESP..");
Serial.println(WiFi.localIP());

Serial.print("MAC Address of ESP...");
Serial.println(WiFi.macAddress());
WiFi.printDiag(Serial);
}
void loop()
{
 if((WiFi.status() == WL_CONNECTED)) 
 {

        HTTPClient http;

        Serial.print("[HTTP] begin...\n");
        // configure traged server and url


        http.begin("http://rajeshwebproject2.000webhostapp.com/status.php");

        /*
          // or
          http.begin("http://192.168.1.12/test.html");
          http.setAuthorization("user", "password");

          // or
          http.begin("http://192.168.1.12/test.html");
          http.setAuthorization("dXNlcjpwYXN3b3Jk");
         */


        Serial.print("[HTTP] GET...\n");
        // start connection and send HTTP header
        int httpCode = http.GET();

        // httpCode will be negative on error
        if(httpCode > 0)  
  {
            // HTTP header has been send and Server response header has been handled
            Serial.printf("[HTTP] GET... code: %d\n", httpCode);

            // file found at server
            if(httpCode == HTTP_CODE_OK)
   {
                String payload = http.getString();
/*                Serial.println(payload);
int i;
for(i=300;i<1000;i++){
Serial.print(i);
Serial.print(':');
Serial.println(payload[i]);
}*/
v 

        
       //       Serial.println(payload[309]);
         //      Serial.println(payload[310]);
           //     Serial.println(payload[311]);
           
             if(payload[309] == 'o' and payload[310]=='f' and payload[311]=='f')
             {
              digitalWrite(pin1, HIGH);
              Serial.println("sucessfull led1 is off");
             }
             if(payload[309]=='o' and payload[310]=='n')
             {
             digitalWrite(pin1,LOW);
             Serial.println("sucessfull led1 is on");
             }
             if(payload[319] == 'o' and payload[320]=='f' and payload[321]=='f')
             {
              digitalWrite(pin2, HIGH);
              Serial.println("sucessfull led2 is off");
             }
             if(payload[319]=='o' and payload[320]=='n')
             {
             digitalWrite(pin2,LOW);
             Serial.println("sucessfull led2 is on");
             }
             if(payload[329] == 'o' and payload[330]=='f' and payload[331]=='f')
             {
              digitalWrite(pin3, HIGH);
              Serial.println("sucessfull led3 is off");
             }
             if(payload[329]=='o' and payload[330]=='n')
             {
             digitalWrite(pin3,LOW);
             Serial.println("sucessfull led3 is on");
             }
             if(payload[339] == 'o' and payload[340]=='f' and payload[341]=='f')
             {
              digitalWrite(pin4, HIGH);
              Serial.println("sucessfull led4 is off");
             }
             if(payload[339]=='o' and payload[340]=='n')
             {
             digitalWrite(pin4,LOW);
             Serial.println("sucessfull led4 is on");
             } 
             if(payload[349] == 'o' and payload[350]=='f' and payload[351]=='f')
             {
              digitalWrite(pin5, HIGH);
              Serial.println("sucessfull led5 is off");
             }
             if(payload[349]=='o' and payload[350]=='n')
             {
             digitalWrite(pin5,LOW);
             Serial.println("sucessfull led5 is on");
             }
             if(payload[359] == 'o' and payload[360]=='f' and payload[361]=='f')
             {
              digitalWrite(pin6, HIGH);
              Serial.println("sucessfull led6 is off");
             }
             if(payload[359]=='o' and payload[360]=='n')
             {
             digitalWrite(pin6,LOW);
             Serial.println("sucessfull led6 is on");
             }
             //second part-------------------------------------------------------------------------------
             if(payload[369] == 'o' and payload[370]=='f' and payload[371]=='f')
             {
              digitalWrite(pin7, HIGH);
              Serial.println("sucessfull led7 is off");
             }
             if(payload[369]=='o' and payload[370]=='n')
             {
             digitalWrite(pin7,LOW);
             Serial.println("sucessfull led7 is on");
             }
             if(payload[379] == 'o' and payload[380]=='f' and payload[381]=='f')
             {
              digitalWrite(pin8, HIGH);
              Serial.println("sucessfull led8 is off");
             }
             if(payload[379]=='o' and payload[380]=='n')
             {
             digitalWrite(pin8,LOW);
             Serial.println("sucessfull led8 is on");
             }
             if(payload[389] == 'o' and payload[390]=='f' and payload[391]=='f')
             {
              digitalWrite(pin9, HIGH);
              Serial.println("sucessfull led9 is off");
             }
             if(payload[389]=='o' and payload[390]=='n')
             {
             digitalWrite(pin9,LOW);
             Serial.println("sucessfull led9 is on");
             }
             if(payload[399] == 'o' and payload[400]=='f' and payload[401]=='f')
             {
              digitalWrite(pin10, HIGH);
              Serial.println("sucessfull led10 is off");
             }
             if(payload[399]=='o' and payload[400]=='n')
             {
             digitalWrite(pin10,LOW);
             Serial.println("sucessfull led10 is on");
             }
             if(payload[409] == 'o' and payload[410]=='f' and payload[411]=='f')
             {
              digitalWrite(pin11, HIGH);
              Serial.println("sucessfull led11 is off");
             }
             if(payload[409]=='o' and payload[410]=='n')
             {
             digitalWrite(pin11,LOW);
             Serial.println("sucessfull led11 is on");
             }
     /*        if(payload[419] == 'o' and payload[420]=='f' and payload[421]=='f')
             {
              digitalWrite(pin12, HIGH);
              Serial.println("sucessfull led12 is off");
             }
             if(payload[419]=='o' and payload[420]=='n')
             {
             digitalWrite(pin12,LOW);
             Serial.println("sucessfull led12 is on");
             }
*/
             
  } else{
            Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
        }
  }
        http.end();
  }

   }
