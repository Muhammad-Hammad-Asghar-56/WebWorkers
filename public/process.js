let btn1=doc.getElementById('#btn1')
btn1.addEventListner('click',()=>{
    const workObj=new Worker('worker.js');
    workObj.postMessage("Start Worker");
    workObj.onmessage=function(e)
    {
        document.querySelector('#Output').innerHTML=e.data;    
    }
})
let btn2=doc.getElementById('btn2')
btn2.addEventListener('click',()=>{
    document.querySelector('#Hello').innerHTML+='Hi !';
    
})

