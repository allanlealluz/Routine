function CreateTask(){
    main = document.getElementById('main')
    input = document.createElement('input')
    form = document.createElement('form')
    date = document.createElement('input')
    button = document.createElement('input')
    form.setAttribute('method','POST')
    form.setAttribute('id','form')
    date.setAttribute('type','date')
    date.setAttribute('id','date')
    input.setAttribute('id','input')
    input.setAttribute('type','text')
    button.setAttribute('type','submit')
    button.setAttribute('value','sdsdds')
    form.appendChild(input)
    form.appendChild(date)
    form.appendChild(button)
    main.appendChild(form)
}
function AddZero(num) {
    return (num >= 0 && num < 10) ? "0" + num : num + "";
}
button = document.getElementById('main')
button.addEventListener('submit',function(e){
    e.preventDefault();
    var date = document.getElementById('date').value
    dates = date.split('-').reverse().join('/')   
    var now = new Date()
    var diff = moment(dates,"DD/MM/YYYY HH:mm:ss").diff(moment(now,"DD/MM/YYYY HH:mm:ss"));
    var dias = moment.duration(diff).asDays();
    console.log(Math.round(dias))
    fetch('nhe.php?value='+input.value+'&date='+date)
    input = document.getElementById('input')   
    main = document.getElementById('tasks')
    div = document.createElement('div')
    h2 = document.createElement('h2')
    h3 = document.createElement('h3')
    h2.innerHTML = input.value
    h3.innerHTML = date
    input.value = ''
    div.appendChild(h2)
    div.appendChild(h3)
    main.appendChild(div)
})
function Deletar(id){
    fetch('excluir.php?id='+id)
    var el = document.getElementById(id);
    el.parentNode.removeChild( el );
}