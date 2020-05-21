const btn_j = document.querySelector(".button_j");
const btn_c = document.querySelector(".button_c");
const main = document.querySelector(".main");
const header = document.querySelector(".header");
const sidebar = document.querySelector(".sidebar");
const footer = document.querySelector(".footer");
const buttons = document.querySelector(".buttons")
console.dir(btn_j );
console.dir(btn_c );
btn_j.addEventListener("click", function(){
main.style.background ="#ffa07a";
header.style.background ="#add8e6";
sidebar.style.background ="#90ee90";
footer.style.background ="#ffdead";
buttons.style.background="#add8e6";
buttons.style.color="#000000";
header.style.color="#000000";
sidebar.style.color="#000000";
});
btn_c.addEventListener("click", function(){
    main.style.background ="#9c4320";
    header.style.background ="darkblue";
    sidebar.style.background ="rgb(21, 53, 21)";
    footer.style.background ="#31302f";
    buttons.style.background="darkblue";
    buttons.style.color="#ffffff";
    header.style.color="#ffffff";
    sidebar.style.color="#ffffff";
    });