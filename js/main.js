import Split from 'split.js'
function onaclickfs(){
    var front = document.querySelector('.collapsible-block-folded1')
    var backed = document.querySelector('.collapsible-block-unfolded1')
    front.style.display = front.style.display === 'none' ? 'block' : 'none'
    backed.style.display = backed.style.display === 'none' ? 'block' : 'none'
}

function onaclickss(){
    var front = document.querySelector('.collapsible-block-folded2')
    var backed = document.querySelector('.collapsible-block-unfolded2')
    front.style.display = front.style.display === 'none' ? 'block' : 'none'
    backed.style.display = backed.style.display === 'none' ? 'block' : 'none'
}
