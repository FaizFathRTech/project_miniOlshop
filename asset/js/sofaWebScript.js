const cardCarousel = document.querySelectorAll('.section-3 .container-fluid .card');
const cardBodyCarousel = document.querySelectorAll('.section-3 .container-fluid .card .card-body .row:nth-child(1)')
for(let i=0;i<cardCarousel.length;i++){
    cardCarousel[i].addEventListener("mouseover", ()=>{
        cardCarousel[i].classList.toggle('shadow');
        cardBodyCarousel[i].classList.toggle('invisible');
    });
    cardCarousel[i].addEventListener("mouseout", ()=>{
        cardCarousel[i].classList.toggle('shadow');
        cardBodyCarousel[i].classList.toggle('invisible');
    });
}

//new script
const cardTemplate = document.getElementById('myTemplate').content;
const copyCardTemplate = document.importNode(cardTemplate, true);
for(let data of dataList){
    copyCardTemplate.getElementById('hotDisc').textContent = `${data.hotDisc}`;
    copyCardTemplate.getElementById('Name').textContent =  `${data.name}`;
    copyCardTemplate.getElementById('img-card').src = `${data.image}`;
};
document.getElementById('card').appendChild(copyCardTemplate);
for(let data of dataList){
    copyCardTemplate.getElementById('hotDisc').textContent = `${data.hotDisc}`;
    copyCardTemplate.getElementById('Name').textContent =  `${data.name}`;
    copyCardTemplate.getElementById('img-card').src = `${data.image}`;
};
document.getElementById('card').appendChild(copyCardTemplate);

