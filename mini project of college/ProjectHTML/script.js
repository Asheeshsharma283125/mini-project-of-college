let section = document.querySelector("section"),
icons = document.querySelector(".icons");
icons.onclick = ()=>{
    section.classList.toggle("dark")
}
setInterval(()=>{
    let date = new Date();
    hours = date.getHours();
    minute= date.getMinutes();
    seconds =date.getSeconds();
    let d;
    d = hours < 12 ? "AM" : "PM";
    hours = hours > 12 ? hours - 12 : hours;
    hours = hours == 0 ? hours = 12 : hours; 
    
    document.querySelector(".hour_num").innerText= hours;
    document.querySelector(".min_num").innerText= minute;
    document.querySelector(".sec_num").innerText= seconds;
    document.querySelector(".am_pm").innerText= d;  
    
},1000);