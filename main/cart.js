let __totalprice_elem= document.querySelector(".summary .summary-elem .se-price-wrap .total-price #--price-num");
let __cart= [
    {
        price: 430000,
        count: 1
    },
    {
        price: 430000,
        count: 1
    }
];
for (var __i= 0; __i<__cart.length; __i++) {
    let __cart_elem= __cart[__i];
    let __data= `
    
                        <div class="box-card" id="${__i}">
                            <div class="card-img">
                                <img draggable="false" src="image/server.png" alt>
                                <div class="card-text">
                                    <h3>DELL R630 8SFF</h3>
                                    <span>
                CPU: 1x Intel Xeon E5-2643v3 (6C 20M Cache 3.40GHz)</span><br>
                <span>RAM: 8Гб 1x 8GB DDR4 UDIMM 2400MHz (Поддержка до 64Гб максимально, 4 UDIMM портов)</span><br>
                <span>RAID: Dell H730 (1GB+BBU)</span><br>
                <span>БП: 2x Dell 750W</span><br>
                <span>Network: integrated Network Interface controller Dell 4 port 1Gb</span>
                                    
                                </div>
                            </div>
                            <div class="card-fns">
                                <h3>${__cart_elem.price} ₽</h3>
                                <div class="cart-act">
                                    <div class="ca-elem --oper-remove" style="justify-content: left;"></div>
                                    <div class="ca-elem --oper-count" style="justify-content: center;">
                                        <input type="number" class="prod-count" value="${__cart_elem.count}" min="0" max="100">
                                    </div>
                                    <div class="ca-elem --oper-add" style="justify-content: right;"></div>
                                </div>
                            </div>
                        </div>
                    
    `
    document.querySelector(".novinki .box-cards").insertAdjacentHTML('beforeend',__data);
}
document.querySelectorAll(".novinki .box-cards .card-fns .cart-act .--oper-add").forEach(__operadd => {
    __operadd.addEventListener('click',(ev)=>{
        let __parentelem= ev.target.parentElement.parentElement.parentElement;
        let __prodcountelem= __parentelem.querySelector(".card-fns .prod-count");
        if (__prodcountelem.value < 100) {
            __prodcountelem.value++;
        }
        __cart[parseInt(__parentelem.getAttribute("id"))].count= __prodcountelem.value;
        update_cart();
    });
});
document.querySelectorAll(".novinki .box-cards .card-fns .cart-act .--oper-remove").forEach(__operremove => {
    __operremove.addEventListener('click',(ev)=>{
        let __parentelem= ev.target.parentElement.parentElement.parentElement;
        let __prodcountelem= __parentelem.querySelector(".card-fns .prod-count");
        if (__prodcountelem.value > 0) {
            __prodcountelem.value--;
        }
        __cart[parseInt(__parentelem.getAttribute("id"))].count= __prodcountelem.value;
        update_cart();
    });
});
let __prodcount= document.querySelectorAll('.novinki .box-cards .box-card .card-fns .prod-count').forEach(___prodcountelem => {
    ___prodcountelem.addEventListener('change',(ev)=>{
        let __parentelem= ev.target.parentElement.parentElement.parentElement.parentElement;
        if (ev.target.value == "" || ev.target.value < 0) {
            ev.target.value= 1;
        }
        if (ev.target.value > 100) {
            ev.target.value= 100;
        }
        __cart[parseInt(__parentelem.getAttribute("id"))].count= ev.target.value;
        update_cart();
    });
});
update_cart();
function update_cart() {
    let __totalprice= 0;
    for (var __i= 0; __i<__cart.length; __i++) {
        __totalprice+= __cart[__i].price*__cart[__i].count;
    }
    __totalprice_elem.innerHTML= __totalprice;
}