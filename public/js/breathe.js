document.querySelectorAll('.tabs button').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.tab-section').forEach(sec=>sec.classList.remove('active'));
    document.getElementById(btn.dataset.target).classList.add('active');
  });
});


const gifBox = document.getElementById('gifBox');
const gifClose = document.getElementById('gifClose');

let savedLeft = localStorage.getItem('gifLeft');
let savedTop = localStorage.getItem('gifTop');

if(savedLeft){ gifBox.style.left = savedLeft; }
if(savedTop){ gifBox.style.top = savedTop; }

let isDrag = false, offX=0, offY=0;

gifBox.addEventListener('mousedown', e=>{
  if(e.target.id === 'gifClose') return;
  isDrag = true;
  offX = e.clientX - gifBox.offsetLeft;
  offY = e.clientY - gifBox.offsetTop;
  gifBox.style.cursor='grabbing';
});

document.addEventListener('mousemove', e=>{
  if(!isDrag) return;
  gifBox.style.left = (e.clientX - offX) + "px";
  gifBox.style.top = (e.clientY - offY) + "px";
});

document.addEventListener('mouseup',()=>{
  if(isDrag){
    localStorage.setItem('gifLeft', gifBox.style.left);
    localStorage.setItem('gifTop', gifBox.style.top);
  }
  isDrag=false;
  gifBox.style.cursor='grab';
});

gifClose.onclick = ()=> gifBox.style.display='none';
