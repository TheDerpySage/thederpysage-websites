function setVolume()
    {
        mySound=document.getElementById("music");
        mySound.volume=0.1;
    }
    window.onload=setVolume;