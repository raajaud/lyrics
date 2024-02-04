<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Chats</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="icons/css/material-design-iconic-font.min.css">

    <style>
        ::-webkit-scrollbar {
            display: none;
        }
        *, *:before, *:after {
        box-sizing: inherit;
        }

        html {
        box-sizing: border-box;
        height: 100%;
        margin: 0;
        padding: 0;
        }

        body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-family: "Roboto", sans-serif;
        margin: 0;
        padding: 0;
        height: 400px !important;
        background:url(https://i.ibb.co/q9mygMq/background.jpg);
        background-repeat: repeat;
        background-size:cover;
        }

        .page {
        /* width: 400px; */
        height: 100%;
        /* display: flex; */
        align-items: center;
        justify-content: center;
        /* margin-left: 400px; */
        }

        .marvel-device .screen {
        text-align: left;
        }

        .screen-container {
        height: 100%;
        }

        /* Status Bar */

        .status-bar {
        height: 25px;
        background: #005e54;
        color: #fff;
        font-size: 14px;
        padding: 0 8px;
        }

        .status-bar:after {
        content: "";
        display: table;
        clear: both;
        }

        .status-bar div {
        float: right;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 0 0 8px;
        font-weight: 600;
        }

        /* Chat */

        .chat {
        height: calc(100% - 69px);
        
        }

        .chat-container {
        height: 100%;
        /* background-color: red !important; */
        }

        /* User Bar */

        .user-bar {
        height: 55px;
        background: #1F2C33;
        color: #fff;
        padding: 0 8px;
        font-size: 24px;
        position: relative;
        z-index: 1;
        }

        .user-bar:after {
        content: "";
        display: table;
        clear: both;
        }

        .user-bar div {
        float: left;
        transform: translateY(-50%);
        position: relative;
        top: 50%;
        }

        .user-bar .actions {
        float: right;
        margin: 5px 0 0 10px;
        font-size: 20px;
        }

        .user-bar .actions img {
        height:30px;
        }
        .user-bar .actions.more {
        margin: 5px 12px 0 20px;
        
        }

        .user-bar .actions.attachment {
        margin: 5px 0 0 20px;
        }

        .user-bar .actions.attachment i {
        display: block;
        /*   transform: rotate(-45deg); */
        }

        .user-bar .avatar {
        margin: 0 0 0 5px;
        width: 36px;
        height: 36px;
        }

        .user-bar .avatar img {
        border-radius: 50%;
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
        display: block;
        width: 100%;
        }

        .user-bar .name {
        font-size: 17px;
        font-weight: 600;
        text-overflow: ellipsis;
        letter-spacing: 0.3px;
        margin: 0 0 0 8px;
        overflow: hidden;
        white-space: nowrap;
        width: 110px;
        }

        .user-bar .status {
        display: block;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 0;
        }

        /* Conversation */

        .conversation {
        height: 550px;
        position: relative;
        background: url("bg.jpeg") repeat;
        z-index: 0;
        }

        .conversation ::-webkit-scrollbar {
        transition: all .5s;
        width: 5px;
        height: 1px;
        z-index: 10;
        }

        .conversation ::-webkit-scrollbar-track {
        background: transparent;
        }

        .conversation ::-webkit-scrollbar-thumb {
        background: #b3ada7;
        }

        .conversation .conversation-container {
        height: calc(68% - 68px);
        box-shadow: inset 0 10px 10px -10px #000000;
        overflow-x: hidden;
        padding: 0 16px;
        margin-bottom: 5px;
        }

        .conversation .conversation-container:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Messages */

        .message {
        color: #000;
        clear: both;
        line-height: 18px;
        font-size: 15px;
        padding: 8px;
        position: relative;
        margin: 3px 0;
        max-width: 85%;
        word-wrap: break-word;
        z-index: -1;
        /* animation: slideUp 0.167s cubic-bezier(.4,0,.2,1); */
        /* animation: slideUpAndRight 0.167s cubic-bezier(.4,0,.2,1); */
        }
        
        .message:after {
        position: absolute;
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        }

        
        .metadata {
        display: inline-block;
        float: right;
        padding: 0 0 0 7px;
        position: relative;
        bottom: -4px;
        }

        .metadata .time {
        color: #A5AAAD;
        font-size: 11px;
        display: inline-block;
        }

        .metadata .tick {
        display: inline-block;
        margin-left: 2px;
        position: relative;
        top: 4px;
        height: 16px;
        width: 16px;
        }

        .metadata .tick svg {
        position: absolute;
        transition: .5s ease-in-out;
        }

        .metadata .tick svg:first-child {
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-transform: perspective(800px) rotateY(180deg);
                transform: perspective(800px) rotateY(180deg);
        }

        .metadata .tick svg:last-child {
        -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
        -webkit-transform: perspective(800px) rotateY(0deg);
                transform: perspective(800px) rotateY(0deg);
        }

        .metadata .tick-animation svg:first-child {
        -webkit-transform: perspective(800px) rotateY(0);
                transform: perspective(800px) rotateY(0);
        }

        .metadata .tick-animation svg:last-child {
        -webkit-transform: perspective(800px) rotateY(-179.9deg);
                transform: perspective(800px) rotateY(-179.9deg);
        }

        .message:first-child {
        margin: 8px 0 8px;
        }

        .message.received {
        background: #1F2C33;
        border-radius: 0px 5px 5px 5px;
        float: left;
        color: #E9EDEF;
        }

        .message.received .metadata {
        padding: 0 0 0 16px;
        }

        .message.received:after {
        border-width: 0px 10px 10px 0;
        border-color: transparent #1F2C33 transparent transparent;
        top: 0;
        left: -10px;
        }

        .message.sent {
        background: #015C4B;
        border-radius: 5px 0px 5px 5px;
        float: right;
        color: #E9EDEF;
        /* opacity: 0.9; */
        }

        .message.sent:after {
        border-width: 0px 0 10px 10px;
        border-color: transparent transparent transparent #015C4B;
        top: 0;
        right: -10px;
        }

        /* Compose */

        .conversation-compose {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        overflow: hidden;
        height: 40px;
        width: 100%;
        z-index: 2;
        }

        .conversation-compose div,
        .conversation-compose input {
        background: #2A3942;
        height: 100%;
        }

        .conversation-compose .emoji {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #2A3942;
        border-radius: 50% 0 0 50%;
        flex: 0 0 auto;
        margin-left: 8px;
        width: 38px;
        height: 38px;
        }

        .conversation-compose .input-msg {
        border: 0;
        flex: 1 1 auto;
        font-size: 14px;
        margin: 0;
        outline: none;
        min-width: 50px;
        height: 38px;
        }

        .conversation-compose .photo {
        flex: 0 0 auto;
        border-radius: 0 30px 30px 0;
        text-align: center;
        width: auto;
        display: flex;
        padding-right: 6px;
        height: 38px;
        }

        .conversation-compose .photo img {
        display: block;
        color: #7d8488;
        font-size: 24px;
        transform: translate(-50%, -50%);
        position: relative;
        top: 50%;
        margin-left: 10px;
        }


        .conversation-compose .send {
        background: transparent;
        border: 0;
        cursor: pointer;
        flex: 0 0 auto;
        margin-right: 8px;
        padding: 0;
        position: relative;
        outline: none;
        margin-left: .5rem;
        }

        .conversation-compose .send .circle {
        background: #008a7c;
        border-radius: 50%;
        color: #fff;
        position: relative;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .conversation-compose .send .circle ion-icon {
        font-size: 18px;
        margin-left: 1px;
        }

        /* Small Screens */

        /* @media (max-width: 768px) {
        .marvel-device.nexus5 {
            border-radius: 0;
            flex: none;
            padding: 0;
            max-width: none;
            overflow: hidden;
            height: 100%;
            width: 100%;
        } */
/* 
        .marvel-device > .screen .chat {
            visibility: visible;
        }

        .marvel-device {
            visibility: hidden;
        }

        .marvel-device .status-bar {
            display: none;
        }

        .screen-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .conversation {
            height: calc(100vh - 55px);
        }
        .conversation .conversation-container {
            height: calc(100vh - 120px);
        }
        } */
        #fa div{
          z-index: 9999 !important;
        }
    </style>
</head>
<body style="">
  <div id='fa' style='width:100%;'></div>
  <div id="empty" style='z-index: 100000;'></div>
    <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 col-sm-12"></div>
      <div class="col-md-4 col-sm-12 page" id="chat">
        <div class="marvel-device nexus5">
          <div class="top-bar"></div>
          <div class="sleep"></div>
          <div class="volume"></div>
          <div class="camera"></div>
          <div class="screen">
            <div class="screen-container">
              <div class="status-bar">
                <div class="time"></div>
                <div class="battery">
                  <i class="zmdi zmdi-battery-flash"></i>
                </div>
                
                
                <div class="star" style="float: left;">
                  <i class="zmdi zmdi-email"></i>
                </div>
                <div class="network" style="float: left;">
                  <i class="zmdi zmdi-network"></i>
                </div>
                <div class="wifi" style="float: left;">
                  <i class="zmdi zmdi-wifi-alt-2"></i>
                </div>
              </div>
              <div class="chat">
                <div class="chat-container">
                  <div class="user-bar">
                    <div class="back">
                      <i class="zmdi zmdi-arrow-left"></i>
                    </div>
                    <div class="avatar">
                      <img src="girl.jpeg" alt="Avatar">
                    </div>
                    
                    
                    

                    <div class="name">
                      <span>Sweety ❤️</span>
                      <span class="status">online</span>
                    </div>
                    <div class="actions more">
                        <ion-icon name="ellipsis-vertical"></ion-icon>
                      <!-- <i class="zmdi zmdi-more-vert"></i> -->
                    </div>
                    <div class="actions attachment">
                      <!-- <i class="zmdi zmdi-phone"></i> -->
                      <ion-icon name="call"></ion-icon>
                    </div>
                    <div class="actions">
                        <ion-icon name="videocam"></ion-icon>
                      <!-- <img src="https://i.ibb.co/LdnbHSG/ic-action-videocall.png"/>              -->
                    </div>
                  </div>
                  <div class="conversation">
                    <div class="conversation-container">
                    <?php
                      // Check if the form is submitted
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          // Get the input messages from the form
                          $inputMessages = isset($_POST["messages"]) ? $_POST["messages"] : '';

                          // Replace single quotes with double quotes
                          $inputMessages = str_replace("'", "\"", $inputMessages);

                          // Attempt to decode the input string
                          $messages = json_decode($inputMessages, true);

                          // Check for JSON decoding errors
                          if (json_last_error() === JSON_ERROR_NONE) {
                              // Output messages
                              foreach ($messages as $message) {
                                  $sender = isset($message[0]) ? $message[0] : '';
                                  $content = isset($message[1]) ? $message[1] : '';

                                  if ($sender == 's') {
                                      // Sent message
                                      echo '<div class="message sent">';
                                  } elseif ($sender == 'r') {
                                      // Received message
                                      echo '<div class="message received">';
                                  }

                                  echo $content;

                                  // Close the message container
                                  // echo '<span class="metadata"><span class="time"></span></span></div>';
                                  if ($sender == 'r') {
                                      // Sent message
                                      echo '<span class="metadata"><span class="time"></span></span></div>';
                                  }elseif ($sender == 's') {
                                      echo '<span class="metadata">
                                      <span class="time"></span><span class="tick"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#34b7f1"/></svg></span>
                                  </span></div>';
                                  }
                              }
                          } else {
                              // Handle decoding error
                              echo '<p>Error decoding messages. JSON Error: ' . json_last_error_msg() . '</p>';
                          }
                      }
                      ?>

                    </div>
                    <form class="conversation-compose" id="formId">
                      <div class="emoji">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" id="smiley" x="3147" y="3209"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.153 11.603c.795 0 1.44-.88 1.44-1.962s-.645-1.96-1.44-1.96c-.795 0-1.44.88-1.44 1.96s.645 1.965 1.44 1.965zM5.95 12.965c-.027-.307-.132 5.218 6.062 5.55 6.066-.25 6.066-5.55 6.066-5.55-6.078 1.416-12.13 0-12.13 0zm11.362 1.108s-.67 1.96-5.05 1.96c-3.506 0-5.39-1.165-5.608-1.96 0 0 5.912 1.055 10.658 0zM11.804 1.01C5.61 1.01.978 6.034.978 12.23s4.826 10.76 11.02 10.76S23.02 18.424 23.02 12.23c0-6.197-5.02-11.22-11.216-11.22zM12 21.355c-5.273 0-9.38-3.886-9.38-9.16 0-5.272 3.94-9.547 9.214-9.547a9.548 9.548 0 0 1 9.548 9.548c0 5.272-4.11 9.16-9.382 9.16zm3.108-9.75c.795 0 1.44-.88 1.44-1.963s-.645-1.96-1.44-1.96c-.795 0-1.44.878-1.44 1.96s.645 1.963 1.44 1.963z" fill="#7d8489"/></svg>
                      </div>
                      <input class="input-msg" name="input" id="inputField" placeholder="@aashiquee24.1" autocomplete="off" autofocus>
                      <div class="photo">
                        <img src="https://i.ibb.co/zNL2yg0/ib-attach.png" alt="" width="25" height="25">
                        <img src="https://i.ibb.co/vHXYtHF/ib-camera.png" alt="" width="25" height="25">
                      </div>
                      <button class="send">
                          <div class="circle">
                            <!-- <i class="zmdi zmdi-mic"></i> -->
                            <ion-icon name="mic"></ion-icon>
                          </div>
                        </button>
                    </form>
                    <img src="key.jpg"  style="width: 100%; margin-top: 10px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12"></div>
    </div>
    </div>
    <!-- <div class="page" id="chat">
    
        
        
      </div> -->
      
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script>
<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the text input from the form
        $text = isset($_POST["textInput"]) ? $_POST["textInput"] : '';

        // Sanitize the input (you may want to use a more robust sanitization method)
        $sanitizedText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');

        // Split the input text into lines
        $lines = explode("\n", $sanitizedText);

        // Trim each line and remove empty lines
        $trimmedLines = array_filter(array_map('trim', $lines));

        // Output JavaScript variable with all lines as the new lyrics
        echo "const lyrics = " . json_encode($trimmedLines) . ";";
    } else {
        // Output JavaScript variable with the initial lyrics
        echo "const lyrics = [
            \"[00:02.06]Ok, mai suna ta hu wait..\",
            \"[00:04.19]Hoke Bhi Kuchh Laage\",
            \"[00:06.84]Tu Mera Koyi Na\",
            \"[00:09.23]Hoke Bhi Kuchh Laage\",
        ];";
    }
    ?>
    // const lyrics = [
    //         "[00:02.06]Ok, mai suna ta hu wait..",
    //         "[00:04.19]Hoke Bhi Kuchh Laage",
    //         "[00:06.84]Tu Mera Koyi Na",
    //         "[00:09.23]Hoke Bhi Kuchh Laage",
    // ];
    // console.log(lyrics);

    var memes = [
        'Desh mere.... suna do plz.',
    ];

    // var random = document.querySelector('#random');

    // random.innerHTML = memes[Math.floor(Math.random() * memes.length)];

    /* Time */

    var deviceTime = document.querySelector('.status-bar .time');
    var messageTime = document.querySelectorAll('.message .time');

    deviceTime.innerHTML = moment().format('h:mm A');

    setInterval(function() {
        deviceTime.innerHTML = moment().format('h:mm A');
    }, 1000);

    for (var i = 0; i < messageTime.length; i++) {
        messageTime[i].innerHTML = moment().format('h:mm A');
    }

    /* Message */

    var input = document.querySelector('#inputField');
    var conversation = document.querySelector('.conversation-container');


    // const lyrics = [
            // "[00:02.06]Ok, mai suna ta hu wait..",
            // "[00:04.19]Hoke Bhi Kuchh Laage",
            // "[00:06.84]Tu Mera Koyi Na",
            // "[00:09.23]Hoke Bhi Kuchh Laage",
    //   ];
    
    // Variables for timer
    let timerInterval;
    let elapsedTime = 0;

    // Function to parse lyrics line into timestamp and text
    function parseLyricsLine(line) {
        const regex = /\[(\d{2}:\d{2}.\d{2})\](?:\[(\d+)\])?(.*)/;
        const match = line.match(regex);

        if (match) {
            const timestamp = match[1];
            const middlePart = match[2] ? match[2] : "0";
            const lyrics = match[3].trim();

            return [timestamp, middlePart, lyrics];
        }

        return ["00:00.00", "", line.trim()];
    }

    // Function to convert timestamp to seconds
    function convertTimestampToSeconds(timestamp) {
        const [minutes, seconds] = timestamp.split(":").map(Number);
        return minutes * 60 + seconds;
    }

    // Function to format time in MM:SS format
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;

        const formattedMinutes = String(minutes).padStart(2, '0');
        const formattedSeconds = String(remainingSeconds).padStart(2, '0');

        return `${formattedMinutes}:${formattedSeconds}`;
    }

    displayLyrics();

    function displayLyrics() {
        // displayLyricsInput();
        conversation.scrollTop = conversation.scrollHeight;
        var preVious = 1;
        lyrics.forEach((line, index) => {
        const [timestamp, type, text] = parseLyricsLine(line);
            setTimeout(() => {
                if (text) {
                  if(type != 1){
                    var message = buildMessage(text);
                    conversation.appendChild(message);
                    animateMessage(message);
                    // goB();
                  }else{
                    var message = buildMessageRecieved(text);
                    conversation.appendChild(message);
                    // animateMessage(message);
                  }
                }
                

                // var randomT = Math.floor(Math.random() * 10) + 1;
                if(lyrics.length > index+1){
                  const [timestamp1, type, text1] = parseLyricsLine(lyrics[index+1]);
                  duration = (convertTimestampToSeconds(timestamp1) * 1000) - (convertTimestampToSeconds(timestamp) * 1000);
                  // preVious = (convertTimestampToSeconds(timestamp) * 1000);
                  rotateDiv(duration/1000);
                  // console.log(lyrics[index+1]);
                  console.log(duration/1000);
                }
                
                // input.value = '';
                conversation.scrollTop = conversation.scrollHeight;
            }, convertTimestampToSeconds(timestamp) * 1000);
        });

    }

    function buildMessage(text) {
        var element = document.createElement('div');

        element.classList.add('message', 'sent');

        element.innerHTML = text +
            '<span class="metadata">' +
                '<span class="time">' + moment().format('h:mm A') + '</span>' +
                '<span class="tick tick-animation">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck" x="2047" y="2061"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#92a58c"/></svg>' +
                    '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" id="msg-dblcheck-ack" x="2063" y="2076"><path d="M15.01 3.316l-.478-.372a.365.365 0 0 0-.51.063L8.666 9.88a.32.32 0 0 1-.484.032l-.358-.325a.32.32 0 0 0-.484.032l-.378.48a.418.418 0 0 0 .036.54l1.32 1.267a.32.32 0 0 0 .484-.034l6.272-8.048a.366.366 0 0 0-.064-.512zm-4.1 0l-.478-.372a.365.365 0 0 0-.51.063L4.566 9.88a.32.32 0 0 1-.484.032L1.892 7.77a.366.366 0 0 0-.516.005l-.423.433a.364.364 0 0 0 .006.514l3.255 3.185a.32.32 0 0 0 .484-.033l6.272-8.048a.365.365 0 0 0-.063-.51z" fill="#4fc3f7"/></svg>' +
                '</span>' +
            '</span>';

        return element;
    }

    function buildMessageRecieved(text) {
        var element = document.createElement('div');
        
        element.classList.add('message', 'received');

        element.innerHTML = text +
            '<span class="metadata">' +
                '<span class="time">' + moment().format('h:mm A') + '</span>' +
            '</span>';

        return element;
    }

    function animateMessage(message) {
        setTimeout(function() {
            var tick = message.querySelector('.tick');
            tick.classList.remove('tick-animation');
        }, 500);
    }
</script>
<style>
    #chat{
        transition: transform 7s ease-in-out;
    }
</style>

<script>
    // Function to rotate the div
    function rotateDiv(duration) {
      goB();
      const $myDiv = $('#chat');
    //   $('#chat').addClass('shake');
      const currentRotation = getRotationValue($myDiv);
      const currentTranslateX = getTranslateXValue($myDiv);
        $myDiv.animate({
            marginTop: '-=5px' // Move the element up by 50px
        }, 1, 'linear');
      // Calculate the new rotation based on the current direction
      const rotationDirection = currentRotation >= 0 ? -1 : 1;
      const newRotation = (5 * rotationDirection); 

      const TrXDirection = currentTranslateX >= 0 ? -1 : 1;
      var newTrX = (150 * TrXDirection); 
      if (newTrX >= 0) {
        newTrX = newTrX - 80;
      }
        
      const randomScale = 1.0 + Math.random() * 0.8; // 0.3 is the difference between 1.5 and 1.2
      const randomTranslateY = -100 + Math.random() * 101; // 0.3 is the difference between 1.5 and 1.2
    //   $('#chat').removeClass('shake');
    // Apply the random scale and rotation
    // console.log(randomScale);console.log(newTrX);console.log(randomTranslateY);console.log(newRotation);
        $myDiv.css('transform', `scale(${randomScale}) translateX(${newTrX}px) translateY(${randomTranslateY}px) rotate(${newRotation}deg)`);
        $myDiv.animate({
            marginTop: '5px' // Move the element up by 50px
        }, 500, 'linear');

        for (var i = duration; i > 0; i -= 4) {
            setTimeout(function () {
                if (duration > 4) {
                    rotateDivAgain(duration, $myDiv);
                }
            }, 4000);
        }
        
    }

    function rotateDivAgain(duration, $myDiv) {
      console.log("Function called");

      const currentRotation = getRotationValue($myDiv);
      const currentTranslateX = getTranslateXValue($myDiv);
        
      const rotationDirection = currentRotation >= 0 ? -1 : 1;
      const newRotation = (5 * rotationDirection); 

      const TrXDirection = currentTranslateX >= 0 ? -1 : 1;
      var newTrX = (150 * TrXDirection); 
      if (newTrX >= 0) {
        newTrX = newTrX - 80;
      }
        
      const randomScale = 1.0 + Math.random() * 0.8;
      const randomTranslateY = -100 + Math.random() * 101; 
    
      $myDiv.css('transform', `scale(${randomScale}) translateX(${newTrX}px) translateY(${randomTranslateY}px) rotate(${newRotation}deg)`);
      
    }
  
    // Function to get the current rotation value from the style
    function getRotationValue($element) {
        const transformValue = $element.css('transform');
        const matrix = new DOMMatrix(transformValue);
        return Math.round(Math.atan2(matrix.b, matrix.a) * (180 / Math.PI));
    }

    function getTranslateXValue($element) {
        const transformValue = $element.css('transform');
        const matrix = new DOMMatrix(transformValue);
        return matrix.m41; // m41 represents the translateX value
    }
  
  </script>
  <script>

var flyingMen = [];

// var text = document.getElementById("face");
var button = document.getElementById('empty');
// var fsize = document.getElementById("fsize");
// text.value = "Hello 🌍";
// fsize.value = "24";
//emoji object
  function emoji(face, startx, starty, flour, fs, flyUpMax) {
    this.isAlive = true;
    this.face = face;
    this.x = startx;
    this.y = starty;
    this.flourLevel = flour;
    this.increment = -Math.floor((Math.random()*flyUpMax)+10);
    this.xincrement = Math.floor((Math.random()*10)+1);
    this.xincrement *= Math.floor(Math.random()*2) == 1 ? 1 : -1;
    this.element = document.createElement('div');
    this.element.innerHTML = face;
    this.element.style.position = "absolute";
    this.element.style.fontSize = fs + "px";
    this.element.style.color = "white";
    document.getElementById("fa").appendChild(this.element);

    this.refresh = function(){
      if (this.isAlive) {
        //------Y axis-----
        
        
        
        
        this.y += this.increment;
        this.x += this.xincrement;
        this.increment += 0.25;
        
        if (this.y >= this.flourLevel) {
          if (this.increment <=5) {
            this.isAlive = false;
          }
         this.increment = -this.increment + 5;
        }
        
        this.element.style.transform = "translate(" + this.x + "px, " + this.y + "px)";
      } else {
        this.element.style.transform = "translate(px, px)";
      }
    }
    
  }



// button.addEventListener("click", goB);


function goB() {
  var fontsize = 20;
  var xv = ((button.getBoundingClientRect().left + button.clientWidth/2) - (fontsize/2)) - 120;
  var yv = ((button.getBoundingClientRect().top + button.clientHeight/2) - (fontsize/2)) + 750;
  var fl = button.getBoundingClientRect().top + 1000;
  // var face = "🌍";
  var face = "❤️";
  var randomT = Math.floor(Math.random() * 30) + 10;
  for (var i = 0; i < randomT; i++) {
    var coolGuy = new emoji(face, xv, yv, fl, fontsize, 12);
    flyingMen.push(coolGuy);
  }

}



//Rendering
function render() {
  for (var i = 0; i < flyingMen.length; i++) {
    if (flyingMen[i].isAlive == true) {
      flyingMen[i].refresh();
    } else {
      flyingMen[i].element.remove();
      flyingMen.splice(i, 1);
    }
  }
  requestAnimationFrame(render);
}

render();

  </script>
</html>