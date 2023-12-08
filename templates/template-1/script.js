let formName = document.getElementById('formName');
let resumeName = document.querySelector('#name h1');

formName.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{
        resumeName.innerText = formName.value;
    }
});





let formRole = document.getElementById('formRole');
let resumeRole = document.querySelector('#name h3');

formRole.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeRole.innerText = formRole.value;
    }
});





let formAbout = document.getElementById('formAbout');
let resumeAbout = document.querySelector('#about p');

formAbout.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeAbout.innerText = formAbout.value;
    }
});










let formC = document.getElementById('formC');
let C = document.getElementById('c');
formC.addEventListener('change', ()=>{
    if (formC.checked == true){
        C.style.display = 'block';
    }
    else{
        C.style.display = 'none';
    }
});



let formPython = document.getElementById('formPython');
let Python = document.getElementById('python');
formPython.addEventListener('change', ()=>{
    if (formPython.checked == true){
        Python.style.display = 'block';
    }
    else{
        Python.style.display = 'none';
    }
});



let formCpp = document.getElementById('formCpp');
let Cpp = document.getElementById('cpp');
formCpp.addEventListener('change', ()=>{
    if (formCpp.checked == true){
        Cpp.style.display = 'block';
    }
    else{
        Cpp.style.display = 'none';
    }
});



let formJava = document.getElementById('formJava');
let Java = document.getElementById('java');
formJava.addEventListener('change', ()=>{
    if (formJava.checked == true){
        Java.style.display = 'block';
    }
    else{
        Java.style.display = 'none';
    }
});










let formCollege = document.getElementById('formCollege');
let resumeCollege = document.querySelector('#college h1');

formCollege.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeCollege.innerText = formCollege.value;
    }
});



let formDegree = document.getElementById('formDegree');
let resumeDegree = document.querySelector('#college h2');

formDegree.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeDegree.innerText = formDegree.value;
    }
});



let formDegreeCGPA = document.getElementById('formCollegeCGPA');
let resumeDegreeCGPA = document.querySelector('#college h3');

formDegreeCGPA.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeDegreeCGPA.innerText = formDegreeCGPA.value;
    }
});



let formHighSchool = document.getElementById('formHighSchool');
let resumeHighSchool = document.querySelector('#highSchool h1');

formHighSchool.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeHighSchool.innerText = formHighSchool.value;
    }
});



let formHighSchoolCGPA = document.getElementById('formHighSchoolCGPA');
let resumeHighSchoolCGPA = document.querySelector('#highSchool h3');

formHighSchoolCGPA.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeHighSchoolCGPA.innerText = formHighSchoolCGPA.value;
    }
});



let formPhno = document.getElementById('formPhno');
let resumePhno = document.querySelector('#phno');

formPhno.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumePhno.innerText = formPhno.value;
    }
});



let formEmail = document.getElementById('formEmail');
let resumeEmail = document.querySelector('#email');

formEmail.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeEmail.innerText = formEmail.value;
    }
});



let formStateAndCountry = document.getElementById('formStateAndCountry');
let resumeStateAndCountry = document.querySelector('#StateAndCountry');

formStateAndCountry.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeStateAndCountry.innerText = formStateAndCountry.value;
    }
});



let formCompanyName = document.querySelector('#formCompanyName');
let resumeCompanyName = document.querySelector('#workExp h2');

formCompanyName.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeCompanyName.innerText = formCompanyName.value;
    }
});



let formCompanyDescription = document.querySelector('#formCompanyDescription');
let resumeCompanyDescription = document.querySelector('#workExp>p');

formCompanyDescription.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeCompanyDescription.innerText = formCompanyDescription.value;
    }
});


let formProjectName = document.querySelector('#formProjectName');
let resumeProjectName = document.querySelector('#projects h2');

formProjectName.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{   
        resumeProjectName.innerText = formProjectName.value;
    }
});



let formProjectDescription = document.querySelector('#formProjectDescription');
let resumeProjectDescription = document.querySelector('#projects p');

formProjectDescription.addEventListener('keyup', (e)=>{
    if (e.code == 'Tab'){}
    else{
        resumeProjectDescription.innerText = formProjectDescription.value;
    }
});





function generatePDF() {
    const element = document.querySelector("#body");
    html2pdf().from(element).save('download.pdf'); 
}

function setColor(color){
    document.getElementById('left').style.backgroundColor = color;
}

document.getElementById('gray').onmouseover = ()=>{setColor("rgb(61, 59, 59)")}
document.getElementById('red').onmouseover = ()=>{setColor("red")}
document.getElementById('yellow').onmouseover = ()=>{setColor("yellow")}
document.getElementById('lime').onmouseover = ()=>{setColor("lime")}
document.getElementById('blue').onmouseover = ()=>{setColor("blue")}