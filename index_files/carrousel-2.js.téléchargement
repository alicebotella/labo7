(function(){
    let carrousel = document.querySelectorAll('.carrousel-2')
    let ctrlCarrousel = document.querySelectorAll('.ctrl-carrousel')
    let noCtrlCarrousel = 0;
    for (const elmCarrou of carrousel) //elmCarrou devient tous les carrou
    {
        let bout = ctrlCarrousel[noCtrlCarrousel].querySelectorAll('input');
        noCtrlCarrousel = noCtrlCarrousel + 1
        console.log(bout.length)
        
        console.log(elmCarrou.tagName)
        let noBouton = 0;
        bout[0].checked = true;

        for (const bt of bout) {
            bt.value = noBouton++;
            console.log(bt.value)
            bt.addEventListener('mousedown', function(){
                elmCarrou.style.transform = "translateX(" + (-this.value*100) + "vw)"
                console.log(elmCarrou.style.transform)
            })
        }
    }
}()) 