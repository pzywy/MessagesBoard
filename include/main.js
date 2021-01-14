modalScreen = document.querySelector('.modalWindow');

newMessage = document.querySelector('.newMessage');

vimportantClick = document.querySelector('.vimportantClick');

modalScreen.addEventListener ('click', HideModal);
newMessage.addEventListener ('click', ShowModal);
vimportantClick.addEventListener ('click', clickvimportant)

function HideModal(e)
{
    element = e.path[0];
    if(element===modalScreen)
        element.classList.add('hide');
}

function ShowModal(e)
{
    modalScreen.classList.remove('hide');
}

function clickvimportant()
{
    let select = document.getElementById('selectCategory');
    if(select.disabled)
        select.disabled=false;
    else{select.disabled=true;}
    let button=document.getElementById('vimportant');
    vimportantClick.classList.toggle('selectPaintingBgrd')
}


messages = document.querySelectorAll('.MessagText');
messages.forEach(message => { message.addEventListener('click', clickedMessage)
    
});

function clickedMessage(e)
{

        e.path[0].classList.toggle('clickedMessage');
}