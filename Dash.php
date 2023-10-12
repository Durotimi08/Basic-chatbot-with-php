<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Page.css">
<title>Home</title>
</head>
<body>
<div class="overall">
<footer>
<marquee behavior="" direction="right">
<a class="footer">copyright buildx corporation 2023</a>
</marquee>
</footer>
<header>
<div id="header">
<div class="logo">
<img src="logo-ct.png" alt="" class="img">
</div>
</div>
</header>
<main class="main ">
<div class="open">
<div class="open2"></div>
</div>
<section class="section1">
<div class="ai">
<div class="cruise">
<div class="close">
<div class="stroke3"></div>
<div class="stroke4"></div>
<div class="stroke3"></div>
</div>
</div>
<div class="list-items">
<li id="home"><a href="#">Home</a></li>
<li id="settings" onclick="opensettings()"><a href="#">Settings</a></li>
<li id="history" onclick="openhistory()"><a href="#">History</a></li>
<li id="commands" onclick="opencommands()"><a href="#">Commands</a></li>
<li id="info" onclick="openinfo()"><a href="#">Info</a></li>
<li id="help" onclick="openhelp()"><a href="#">Help</a></li>
</div>
<div class="historyi">
<div class="backhead">
<div class="back"  onclick="removehistory()">
<div class="stroke3"></div>
<div class="stroke4"></div>
<div class="stroke3"></div>
</div>
<div class="delete" onclick="deleter()"><img src="delete.png" alt=""></div>
</div>
<div class="chat-container"></div>
</div>
<div class="settingsi"></div>
<div class="commandsi"></div>
<div class="infoi"></div>
<div class="helpi"></div>
</div>
<div class="whole">
<ul class="notifications"></ul>
</div>
</section>
<section class="section2">
<div class="tool">
</div>
<div class="div-input">
<form action="#" method="post" class="form" autocomplete="off">
<input type="text" name="input" placeholder="Type your message here" class="input">
</form>
</div>
<div class="row">
<button class="stroke2"></button>
<input type="file" class="file-input" accept="image/*" hidden>
<img src="upload.png" class="choose-img">
<img src="save.png" class="save-img">
</div>
</section>
</main>
<div class="protocol">
<a class="pro">Ready........</a>
</div>

</div>
<script>
var mytime = setTimeout(function() {
const toast = document.createElement("li");
toast.className = `toast error`;
toast.innerHTML = `<div class="fa" onclick="removeToast(this.parentElement)"><img src="close.png"></div>
<div class="column">
<span>Welcome, i am buildx ai</span>
</div>`;
notifications.appendChild(toast);
toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
}, 100);
const info = document.querySelector(".info"),
settingsi = document.querySelector(".setttingsi"),
historyi = document.querySelector(".historyi"),
commandsi = document.querySelector(".commandsi"),
infoi = document.querySelector(".infoi"),
helpi = document.querySelector(".helpi"),
settings = document.querySelector(".setttings"),
history = document.querySelector(".history"),
commands = document.querySelector(".commands"),
help = document.querySelector(".help"),
liat = document.querySelector(".list-items"),
cruise = document.querySelector(".cruise");
const openhistory = () => {
cruise.style.display = "none";
liat.style.display = "none";
historyi.style.display = "block";
}
const opensettings = () => {
cruise.style.display = "none";
liat.style.display = "none";
settingsi.style.display = "block";
}
const openinfo = () => {
cruise.style.display = "none";
liat.style.display = "none";
infoi.style.display = "block";
}
const opencommands = () => {
cruise.style.display = "none";
liat.style.display = "none";
commandsi.style.display = "block";
}
const openhelp = () => {
cruise.style.display = "none";
liat.style.display = "none";
helpi.style.display = "block";
}
const removehistory = () => {
cruise.style.display = "flex";
liat.style.display = "block";
historyi.style.display = "none";
}
const wraper = document.querySelector(".open");
ai = document.querySelector(".ai"),
closer = document.querySelector(".close"),
wrapper = document.querySelector(".open2");
function onDrag({movementX, movementY}){
let geStyle = window.getComputedStyle(wraper);
let letVal = parseInt(geStyle.left);
let toVal = parseInt(geStyle.top);
wraper.style.left = `${letVal + movementX }px`;
wraper.style.top = `${toVal + movementY }px`;
}
wrapper.addEventListener('click', ()=>{
wrapper.style.display = 'none';
wraper.style.display = 'none';
ai.style.display = 'block';
});
closer.addEventListener('click', ()=>{
wrapper.style.display = 'inline';
wraper.style.display = 'inline';
ai.style.display = 'none';
});
wrapper.addEventListener("mousedown", ()=>{
wrapper.classList.add("active");
wrapper.addEventListener("mousemove", onDrag);
});
document.addEventListener("mouseup", ()=>{
wrapper.classList.remove("active");
wrapper.removeEventListener("mousemove", onDrag);
});
const notifications = document.querySelector(".notifications");
const whole = document.querySelector(".whole");
const chatInput = document.querySelector(".input");
const form = document.querySelector(".form");
const removeToast = (toast) => {
toast.classList.add("hide");
if(toast.timeoutId) clearTimeout(toast.timeoutId);
setTimeout(() => toast.remove(), 500);
}
const toastDetails = {
timer: 5000,
}
const crimage = document.createElement("div");
chatInput.addEventListener("keydown", (e) => {
if (e.key === "Enter" && !e.shiftKey && window.innerWidth > 800) {
e.preventDefault();
handleOutgoingChat();
if(!userText) return;
// createToast(chatInput.value);
let xhr = new XMLHttpRequest();
xhr.open("POST", "php/access.php", true);
xhr.onload = ()=>{
if(xhr.readyState === XMLHttpRequest.DONE){
if(xhr.status === 200){
chatInput.value = "";
let data = xhr.response;
if(data === "edit"){
crimage.innerHTML = `<div class="container disable">
<h2></h2>
<div class="wrapper">
<div class="editor-panel">
<div class="filter">
<label class="title">Filters</label>
<div class="options">
<button id="brightness" class="active">Brightness</button>
<button id="saturation">Saturation</button>
<button id="inversion">Inversion</button>
<button id="grayscale">Grayscale</button>
</div>
<div class="slider">
<div class="filter-info">
<p class="name">Brighteness</p>
<p class="value">100%</p>
</div>
<input type="range" value="100" min="0" max="200">
</div>
</div>
<div class="rotate">
<label class="title">Rotate & Flip</label>
<div class="options">
<button id="left"><i class="fa-solid fa-rotate-left"></i></button>
<button id="right"><i class="fa-solid fa-rotate-right"></i></button>
<button id="horizontal"><i class='bx bx-reflect-vertical'></i></button>
<button id="vertical"><i class='bx bx-reflect-horizontal' ></i></button>
</div>
</div>
</div>
<div class="preview-img">
<img src="image-placeholder.svg" alt="preview-img">
</div>
</div>
<div class="controls">
<button class="reset-filter">Reset Filters</button>
</div>
</div>
`;
whole.appendChild(crimage);
const fileInput = document.querySelector(".file-input"),
filterOptions = document.querySelectorAll(".filter button"),
filterName = document.querySelector(".filter-info .name"),
filterValue = document.querySelector(".filter-info .value"),
filterSlider = document.querySelector(".slider input"),
rotateOptions = document.querySelectorAll(".rotate button"),
previewImg = document.querySelector(".preview-img img"),
resetFilterBtn = document.querySelector(".reset-filter"),
chooseImgBtn = document.querySelector(".choose-img"),
saveImgBtn = document.querySelector(".save-img");
let brightness = "100", saturation = "100", inversion = "0", grayscale = "0";
let rotate = 0, flipHorizontal = 1, flipVertical = 1;
const loadImage = () => {
let file = fileInput.files[0];
if(!file) return;
previewImg.src = URL.createObjectURL(file);
previewImg.addEventListener("load", () => {
resetFilterBtn.click();
document.querySelector(".container").classList.remove("disable");
});
}
const applyFilter = () => {
previewImg.style.transform = `rotate(${rotate}deg) scale(${flipHorizontal}, ${flipVertical})`;
previewImg.style.filter = `brightness(${brightness}%) saturate(${saturation}%) invert(${inversion}%) grayscale(${grayscale}%)`;
}
filterOptions.forEach(option => {
option.addEventListener("click", () => {
document.querySelector(".active").classList.remove("active");
option.classList.add("active");
filterName.innerText = option.innerText;
if(option.id === "brightness") {
filterSlider.max = "200";
filterSlider.value = brightness;
filterValue.innerText = `${brightness}%`;
} else if(option.id === "saturation") {
filterSlider.max = "200";
filterSlider.value = saturation;
filterValue.innerText = `${saturation}%`
} else if(option.id === "inversion") {
filterSlider.max = "100";
filterSlider.value = inversion;
filterValue.innerText = `${inversion}%`;
} else {
filterSlider.max = "100";
filterSlider.value = grayscale;
filterValue.innerText = `${grayscale}%`;
}
});
});
const updateFilter = () => {
filterValue.innerText = `${filterSlider.value}%`;
const selectedFilter = document.querySelector(".filter .active");

if(selectedFilter.id === "brightness") {
brightness = filterSlider.value;
} else if(selectedFilter.id === "saturation") {
saturation = filterSlider.value;
} else if(selectedFilter.id === "inversion") {
inversion = filterSlider.value;
} else {
grayscale = filterSlider.value;
}
applyFilter();
}
rotateOptions.forEach(option => {
option.addEventListener("click", () => {
if(option.id === "left") {
rotate -= 90;
} else if(option.id === "right") {
rotate += 90;
} else if(option.id === "horizontal") {
flipHorizontal = flipHorizontal === 1 ? -1 : 1;
} else {
flipVertical = flipVertical === 1 ? -1 : 1;
}
applyFilter();
});
});
const resetFilter = () => {
brightness = "100"; saturation = "100"; inversion = "0"; grayscale = "0";
rotate = 0; flipHorizontal = 1; flipVertical = 1;
filterOptions[0].click();
applyFilter();
}
const saveImage = () => {
const canvas = document.createElement("canvas");
const ctx = canvas.getContext("2d");
canvas.width = previewImg.naturalWidth;
canvas.height = previewImg.naturalHeight;

ctx.filter = `brightness(${brightness}%) saturate(${saturation}%) invert(${inversion}%) grayscale(${grayscale}%)`;
ctx.translate(canvas.width / 2, canvas.height / 2);
if(rotate !== 0) {
ctx.rotate(rotate * Math.PI / 180);
}
ctx.scale(flipHorizontal, flipVertical);
ctx.drawImage(previewImg, -canvas.width / 2, -canvas.height / 2, canvas.width, canvas.height);

const link = document.createElement("a");
link.download = "image.jpg";
link.href = canvas.toDataURL();
link.click();
}
filterSlider.addEventListener("input", updateFilter);
resetFilterBtn.addEventListener("click", resetFilter);
saveImgBtn.addEventListener("click", saveImage);
fileInput.addEventListener("change", loadImage);
chooseImgBtn.addEventListener("click", () => fileInput.click());
}else{
const toast = document.createElement("li");
toast.className = `toast error`;
toast.innerHTML = `<div class="fa" onclick="removeToast(this.parentElement)"><img src="close.png"></div>
<div class="column">
<span>${data}</span>
</div>`;
notifications.appendChild(toast);
toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer);
getChatResponse(data);
}
}
}
}
let formData = new FormData(form);
xhr.send(formData);
}
});
const chatContainer = document.querySelector(".chat-container");
const loadDataFromLocalstorage = () => {
const defaultText = `<div class="default-text">
<h1>Buildx Ai</h1>
<p>Start a conversation and explore the power of AI.</p>
</div>`

chatContainer.innerHTML = localStorage.getItem("all-chats") || defaultText;
chatContainer.scrollTo(0, chatContainer.scrollHeight);
}
const getChatResponse = (data) => {
if(data === "edit immage"){
return
}else{
const incomingChatDiv = document.createElement("div");
incomingChatDiv.className = "incoming";
chatContainer.appendChild(incomingChatDiv);
chatContainer.scrollTo(0, chatContainer.scrollHeight);
const pElement = document.createElement("a");
pElement.textContent = data;
incomingChatDiv.appendChild(pElement);
localStorage.setItem("all-chats", chatContainer.innerHTML);
chatContainer.scrollTo(0, chatContainer.scrollHeight);}
}
const createChatElement = (content, className) => {
const chatDiv = document.createElement("div");
chatDiv.classList.add("chat", className);
chatDiv.innerHTML = content;
return chatDiv;
}
const handleOutgoingChat = () => {
userText = chatInput.value.trim();
const html = `<a>${userText}</>`;
const outgoingChatDiv = createChatElement(html, "outgoing");
chatContainer.querySelector(".default-text")?.remove();
chatContainer.appendChild(outgoingChatDiv);
chatContainer.scrollTo(0, chatContainer.scrollHeight);
}
const deleter = () => {
if(confirm("Are you sure you want to delete all the chats?")) {
localStorage.removeItem("all-chats");
loadDataFromLocalstorage();
}
}
loadDataFromLocalstorage();
</script>
</body>
</html>
