function CreateTask(){
    main = document.getElementById('main')
    input = document.createElement('input')
    form = document.createElement('form')
    date = document.createElement('input')
    button = document.createElement('input')
    form.setAttribute('method','POST')
    form.setAttribute('id','form')
    date.setAttribute('type','date')
    input.setAttribute('id','input')
    input.setAttribute('type','text')
    button.setAttribute('type','submit')
    button.setAttribute('value','sdsdds')
    form.appendChild(input)
    form.appendChild(date)
    form.appendChild(button)
    main.appendChild(form)
}
button = document.getElementById('main')
button.addEventListener('submit',function(e){
    e.preventDefault();
    fetch('nhe.php?value='+input.value+'&date='+date.value)
    input = document.getElementById('input')   
    main = document.getElementById('tasks')
    div = document.createElement('div')
    h2 = document.createElement('h2')
    h2.innerHTML = input.value
    input.value = ''
    div.appendChild(h2)
    main.appendChild(div)
})

