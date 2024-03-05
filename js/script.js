const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', ()=>{
    container.classList.add("active");
    localStorage.setItem('container', container.classList);
});

loginBtn.addEventListener('click', ()=>{
    container.classList.remove("active");
    localStorage.setItem('container', container.classList);
});

function check(){
    const login = document.getElementById('login');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    
}

container.className = localStorage.getItem("container");


function addTask() {
    let taskInput = document.getElementById('taskInput');
    let taskList = document.getElementById('taskList');
    if (taskInput.value.trim() !== '') {
        let taskText = taskInput.value;
        let taskElement = document.createElement('li');
        taskElement.innerText = taskText;
        taskList.appendChild(taskElement);
        taskInput.value = '';
        saveTask(taskText);
    } else {
        alert('Please enter a task!');
    }
}

function saveTask(task) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "ajax.php?task=" + task, true);
    xhr.send();
}

