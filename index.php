<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Chats</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="output.php">
        <div class="form-group">
    <label for="sentMessage">Old Message:</label><br>
    <textarea class="form-control" id="messages" name="messages" rows="10" cols="150">[ 
        ['s','Hi sweetheart!'], 
        ['s','baby kuch to bolo!'], 
        ['r','baby kya bolo batao!'], 
        ['s','nhi kuch!'],
        ['r','achha ek sawal puchu?!'],
        ['s','sawal achha 1sec!']
]</textarea>
    <br>
    <label for="receivedMessage">Lyrics:</label><br>
    <textarea class="form-control" id="textInput" name="textInput" rows="30" cols="150">
    [01:03.83]Ye dil jo ro raha hai to
    </textarea>
    <br>
    <input type="submit" value="Set Lyrics">
        </div>
</form>
        </div>
    </div>
    </div>
</body>
</html>