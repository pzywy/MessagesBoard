<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/style.css">
</head>
<body>
    
    <div class="topStuff">
        <div class="nav">
            <div class="navPart newMessage">Nowa Wiadomosc</div>
            <div class="navPart">Wiadomosci</div>
        </div>
        <div class="ImportantMessagesDiv scroll">
            <div class="ImportantMessages">lollllllllllllllllllllllllllll </div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
            <div class="ImportantMessages">lollllllllllllllllllllllllllll</div>
        </div>
    </div>
    <div class="content scroll">
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>
        <div class="messages">text inside messages</div>

    </div>

    <div class="modalWindow">
        <div class="window">
            <div class="top">
                <p>Dodaj Nową Wiadomość</p>
            </div>
            <div class="input">
                <form action="" method="post">
                    <label for="message">Wiadomość</label>
                    <textarea class="scroll" name="message"></textarea>

                    <label for="category">Kategoria</label>
                    <select>
                        <option value="Ogolne">Ogólne</option>
                        <option value="Wazne">Ważne</option>
                        <option value="Recepcja">Recepcja</option>
                        <option value="Restauracja">Restauracja</option>
                        <option value="Procedura">Procedura</option>
                    </select>

                    <input type="checkbox" name="vimportant" id="vimportant" hidden>
                    <label class="vimportantClick" for="vimportant">Bardzo Ważne</label><br>
                    
                    <input type="submit" value="Dodaj">
                </form>
            </div>
            <div class="submit">
                
            </div>
        </div>
    </div>


    <script src="include/main.js"></script>
</body>
</html>