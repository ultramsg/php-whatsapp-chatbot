# [Ultramsg.com](https://ultramsg.com/?utm_source=github&utm_medium=php&utm_campaign=chatbot) WhatsApp Bot using WhatsApp API and ultramsg
Demo WhatsApp API ChatBot using [Ultramsg API](https://ultramsg.com/?utm_source=github&utm_medium=php&utm_campaign=chatbot) with php.

# Chatbot tasks:
- The output of the command list .
- The output of the server time of the bot running on .
- Sending image to phone number or group .
- Sending audio file .
- Sending ppt audio recording .
- Sending Video File.
- Sending contact .
- Sending Random Sentence .
- Sending Random Joke .
- Sending Random Image .

# Getting Started
- Ultramsg account is required to run examples. Log in or Create Account if you don't have one [ultramsg.com](https://ultramsg.com/?utm_source=github&utm_medium=php&utm_campaign=chatbot).
- go to your instance or Create one if you haven't already.
- Scan Qr and make sure that instance Auth Status : authenticated .

&nbsp;
# webhook json format 
To see how the received JSON will look this [video](https://www.youtube.com/watch?v=kipBHDOsFKI) .

&nbsp;
# Run a chatbot

## step1
put your instance ID and Token in example.php 
```php
new ultraMsgChatBot("token", "instance_id");
```

## step2
activate the "Webhook on Received" option and Set URL Webhook in Instance settings in ultramsg 
for example :
https://yourwebsite.com/chatbot/example.php

## step3
Upload the project/folder to your server or website .


** Congratulations.. you can now talk to your chatbot **

&nbsp;
# Functions

## sendChatMessage
Used to send WhatsApp text messages
```php
$this->client->sendChatMessage($to, date('d.m.Y H:i:s'));
```
- $to – ID of the chat where the message should be sent for him, e.g 14155552671@c.us . 


## sendImageMessage
Send a image to phone number or group
```php
$this->client->sendImageMessage($to, "image Caption", "https://file-example.s3-accelerate.amazonaws.com/images/test.jpg");

```
- $to – ID of the chat where the message should be sent for him, e.g 14155552671@c.us . 

## sendDocumentMessage
Send a document to phone number or group
```php
$this->client->sendDocumentMessage($to, "cv.pdf", "https://file-example.s3-accelerate.amazonaws.com/documents/cv.pdf");
```

## sendVideoMessage
Send a Video to phone number or group
```php
$this->client->sendVideoMessage($to, "https://file-example.s3-accelerate.amazonaws.com/video/test.mp4");

```

## sendAudioMessage
Send a audio file to phone number or group
```php
$this->client->sendAudioMessage($to, "https://file-example.s3-accelerate.amazonaws.com/audio/2.mp3");
```


## sendVoiceMessage
Send a ppt audio recording to phone number or group
```php
$this->client->sendVoiceMessage($to, "https://file-example.s3-accelerate.amazonaws.com/voice/oog_example.ogg");

```

## sendContactMessage
Sending one contact or contact list to phone number or group
```php
$this->client->sendContactMessage($to, "14000000001@c.us");
```


&nbsp;
# WhatsApp API PHP SDK
You can see Lightweight PHP library for WhatsApp API to send the whatsappp messages in PHP provided by Ultramsg.com
[WhatsApp API PHP SDK](https://github.com/ultramsg/whatsapp-php-sdk)

&nbsp;
# Youtube | WhatsApp api using PHP SDK
[![Send Message by WhatsApp api using PHP SDK | Ultramsg PHP SDK
](https://img.youtube.com/vi/OqDOKyMIp20/0.jpg)](https://www.youtube.com/watch?v=OqDOKyMIp20)

