let obj1 = new Array("Matt Johnson", "Bart Paden", "Ryan Doss", "Jared Malcolm")
let obj2 = new Array("Matt Johnson", "Bart Paden", "Jordan Heigle", "Tyler Viles")
let resultObj = Array.from(new Set(obj1.concat(obj2)))

let trigger = document.getElementById("trigger-link")
let ul = document.getElementById("puzzle")
console.log(ul)
let clicked = false;
trigger.addEventListener("click", () => {
    console.log("event list fired")
    let li = ""
    if(!clicked){
        resultObj.forEach(element => {
            li = document.createElement("li")
            li.appendChild(document.createTextNode(element))
            ul.appendChild(li)
        });
        clicked = true;
    }
    else if(clicked){
        alert("The action was already done")
    }
})