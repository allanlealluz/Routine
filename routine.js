function CreateRoutine(){
    main = document.getElementById('main')
    input = document.createElement('input')
    form = document.createElement('form')
    date = document.createElement('input')
    button = document.createElement('input')
    text = document.createElement('textarea')
    text.setAttribute('id','text')
    form.setAttribute('method','POST')
    form.setAttribute('id','form')
    date.setAttribute('type','time')
    date.setAttribute('id','date')
    input.setAttribute('id','input')
    input.setAttribute('type','text')
    button.setAttribute('type','submit')
    button.setAttribute('value','sdsdds')
    form.appendChild(input)
    form.appendChild(date)
    form.appendChild(text)
    form.appendChild(button)
    main.appendChild(form)
}
main = document.getElementById('main')
main.addEventListener('submit',function(e){
    e.preventDefault();
    fetch('nhe.php?value='+input.value+'&date='+date.value+'&text='+text.value+'&routine=2')
})
function timer(){
    var time = new Date()
    timemi = document.getElementById('timer')
    horas =time.getHours()
    minutos = time.getMinutes()
    secondos = time.getSeconds()
    timetot = horas + ':' + minutos + ':' + secondos
    timemi.innerHTML = timetot
    setTimeout('timer()',500)
    comparadorTempo(timetot)
}
function comparadorTempo(time){
    t = document.getElementsByTagName('h3')
    for(var i = 0; i < t.length; i++){
        if (t[i].innerHTML == time){
            console.log(t[i].innerHTML)
            console.log('xarai')
        }
    }
}