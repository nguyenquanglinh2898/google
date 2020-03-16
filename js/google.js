function sublist(){
    var x = document.getElementsByClassName('hidden-bg')[0];
    if( x.style.display == 'none' || x.style.display == '' )
        document.getElementsByClassName('hidden-bg')[0].style.display = 'block';
    else
        document.getElementsByClassName('hidden-bg')[0].style.display = 'none';
}   

