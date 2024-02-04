<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Chats</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
<form method="post" action="output.php">
    <label for="sentMessage">Old Message:</label><br>
    <textarea id="messages" name="messages" rows="10" cols="150">[ 
        ['s','Hi sweetheart!'], 
        ['s','baby kuch to bolo!'], 
        ['r','baby kya bolo batao!'], 
        ['s','nhi kuch!'],
        ['r','achha ek sawal puchu?!'],
        ['s','sawal achha 1sec!']
]</textarea>
    <br>
    <label for="receivedMessage">Lyrics:</label><br>
    <textarea id="textInput" name="textInput" rows="30" cols="150">
    </textarea>
    <br>
    <input type="submit" value="Set Lyrics">
</form>
</body>
</html>