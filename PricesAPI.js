//Bitcoin price api url--------------------------------

fetch("https://api.coinbase.com/v2/prices/BTC-CAD/buy").then((response)=>{
return response.json();

}).then((data) =>{
  

var p1 = data.data.amount;
   document.getElementById("p1").innerText = p1;
})


//ETH price api url--------------------------------

fetch("https://api.coinbase.com/v2/prices/ETH-CAD/buy").then((response)=>{
return response.json();

}).then((data) =>{
console.log(data)
var p2 = data.data.amount;
   document.getElementById("p2").innerText = p2;
})



//Tether (USDT) price api url--------------------------------
fetch("https://api.coinbase.com/v2/prices/USDT-CAD/buy").then((response)=>{
return response.json();

}).then((data) =>{
console.log(data)
var p3 = data.data.amount;
   document.getElementById("p3").innerText = p3;
})




//USD Coin (USDC) api url--------------------------------
fetch("https://api.coinbase.com/v2/prices/USDC-CAD/buy").then((response)=>{
return response.json();

}).then((data) =>{
console.log(data)
var p4 = data.data.amount;
   document.getElementById("p4").innerText = p4;
})







//Binance USD (BUSD Coin price api url--------------------------------
fetch("https://api.coinbase.com/v2/prices/BUSD-CAD/buy").then((response)=>{
return response.json();

}).then((data) =>{
console.log(data)
var p5 = data.data.amount;
 document.getElementById("p5").innerText = p5;
})


