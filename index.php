<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiadomosci</title>
    <link rel="stylesheet" href="include/style.css">
</head>
<body>
    
    <div class="topStuff">
        <div class="nav">
            <div class="navPart newMessage">Nowa Wiadomosc</div>
            <div class="navPart" onClick="window.location.reload()">Wiadomosci</div>
        </div>
        <div class="ImportantMessagesDiv scroll">
            <div class="ImportantMessages">Najważniejsze informację na górze w widocznym miejscu, coś tam coś tam.</div>
            <div class="ImportantMessages">Jedną z ważniejszych informacji na dziś jest to, że należy pamiętać
                o tym aby patrzeć na te wiadomości. Oprócz tego należy sprawdzić mniej ważne wiadomości znajdujące
                się na dole strony.
            </div>
            
            <?php 
            for($i=0;$i<15; $i++)
            {?> 
                <div class="ImportantMessages">Bardzo bardzo bardzo bardzo bardzo bardzo bardzo wiadomość</div>
            <?php }?>
        </div>
    </div>
    <div class="content scroll">
        

    <?php 
    for($i=0;$i<25; $i++)
    {?> 

        <div class="messages">
            <div class="category">Ogólne</div>
            <div class="MessagText">mniej ważne wiadomości
            mniej ważne wiadomościmniej ważne wiadomościmniej ważne wiadomości mniej ważne wiadomościmniej ważne wiadomości
            mniej ważne wiadomościmniej ważne wiadomościmniej ważne wiadomościmniej ważne wiadomościmniej ważne wiadomościmniej 
            ważne wiadomości
            </div>
            <div class="delete">Usuń</div>
            <div class="MessageId">32</div>
        </div>     

     <?php }?>
        
    </div>

    <div class="modalWindow hide">
        <div class="window">
            <div class="top">
                <p>Dodaj Nową Wiadomość</p>
            </div>
            <div class="input">
                <form action="" method="post">
                    <label for="message">Wiadomość</label>
                    <textarea class="scroll" name="message"></textarea>

                    <label for="category">Kategoria</label>
                    <select id="selectCategory">
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