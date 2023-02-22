var dd = document.querySelectorAll(".dropdown-container");
dd.forEach(list => {
    for (var i=0; i<list.querySelectorAll(".dropdown .cont .option").length; i++) {
        if (list.querySelector(".dropdown .upper").getAttribute("chosenOption")==i) {
            list.querySelector(".dropdown .upper").setAttribute("chosenOption",i);
            list.querySelector(".dropdown .upper p").innerHTML=list.querySelectorAll(".dropdown .cont .option")[i].innerText;
            list.querySelector(".dropdown .upper #ico-lang").style=`background-image: url('${list.querySelectorAll('.dropdown .cont .option img')[i].getAttribute('src')}');`;
        }
    }
});
window.addEventListener("click",(ev)=>{
    var dd = document.querySelectorAll(".dropdown-container");
    dd.forEach(list => {
        if (ev.target!==list.querySelector(".dropdown .upper")&&ev.target!==list.querySelector(".dropdown .upper p")) {
            list.querySelector(".dropdown .cont").classList.add("hidden");
            if (list.querySelector('.arrow-down') != null) {
                list.querySelector('.dropdown .upper .arrow-down').style= 'transform: scaleY(1);'
            }
            list.querySelectorAll(".dropdown .cont .option").forEach(element => {
                if (ev.target==element) {
                    list.querySelector(".dropdown .upper").setAttribute("chosenOption",element.getAttribute("id"));
                    list.querySelector(".dropdown .upper p").innerHTML=element.innerText;
                    list.querySelector(".dropdown .upper #ico-lang").style=`background-image: url('${element.querySelector('img').getAttribute('src')}');`
                }
            });
        }else{
            list.querySelector(".dropdown .cont").classList.remove("hidden");
            if (list.querySelector('.arrow-down') != null) {
                list.querySelector('.dropdown .upper .arrow-down').style= 'transform: scaleY(-1);'
            }
        }
    });
});