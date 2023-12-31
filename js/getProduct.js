const title = document.querySelector('#title');
const namePlace = document.querySelector('#nameplace');
const offert = document.querySelector('#discount');
const titleProduct = document.querySelector('#nameProduct');
let comentarios = producto_comentario.split(';');
const reviews = document.querySelector('.reviewList');
const priceCurrent = document.querySelector('#priceCurrent');
const priceNormal = document.querySelector('#priceNormal');
const commentsCount = document.querySelector('#commentsCount');
const commentsCurrentBig = document.querySelector('#commentsCurrentBig');
const commentsSpan = document.querySelector('#commentsSpan');
const productosVendidos = document.querySelector('#productosVendidos');
const productosStock = document.querySelector('#productosStock');
const bigImage = document.querySelectorAll('.big_img');
const bigImageBack = document.querySelectorAll('.big_img_back');
const imageFull = document.querySelector('#image_full');
const imageFullBack = document.querySelector('#image_full_back');
const imageView = document.querySelectorAll('.image_img_full');
const itemProductCart = document.querySelector('#product-id');
const offertAvailable = document.querySelectorAll('.contentOffertAvailable');
console.log(itemProductCart);


itemProductCart.id = id_prod;

comentarios.forEach(c => {
    let comentario = c.split(',');

        let itemComment = document.createElement('li');
        itemComment.className += "item";
        let reviewForm = document.createElement('div');
        reviewForm.className += "review-form";
        let person = document.createElement('p');
        person.className += "person";
        person.innerHTML = 'Reseña por ' + comentario[1];

    let miniText = document.createElement('p');
    miniText.className += "mini-text";
    miniText.innerHTML = comentario[0];
    let reviewRatting = document.createElement('div');
    reviewRatting.className += 'review-rating rating';
    reviewRatting.innerHTML = '<div class="stars"></div>';
    let reviewTitle = document.createElement('div');
    reviewTitle.className += 'review-title';
    reviewTitle.innerHTML = '<p>'+ comentario[3] + '</p>';
    let reviewText = document.createElement('div');
    reviewText.innerHTML =  '<p>'+ comentario[4] + '</p>';
    reviewText.className += 'review-text';
    
    
    reviewForm.appendChild(person);
    reviewForm.appendChild(miniText);
    itemComment.appendChild(reviewForm);
    itemComment.appendChild(reviewRatting);
    itemComment.appendChild(reviewTitle);
    itemComment.appendChild(reviewText);
    reviews.appendChild(itemComment);
    
});

let precioDescuento = precio_producto -((oferta_producto * precio_producto) /100);

title.innerHTML = nombre_producto;
namePlace.innerHTML = nombre_producto;
titleProduct.innerHTML = nombre_producto;
priceCurrent.innerHTML =  USDollar.format(precioDescuento);
priceNormal.innerHTML = USDollar.format(precio_producto);
commentsCount.innerHTML = comentarios.length +' Comentarios';
commentsCurrentBig.innerHTML = comentarios.length;
offert.innerHTML? offert.innerHTML = oferta_producto + '%<br>OFF':'';
commentsSpan.innerHTML = comentarios.length + ' Comentarios';
productosVendidos.innerHTML = producto_vendido;
productosStock.innerHTML = producto_stock;
imageFull.href = decode_img(img_producto_frente).split("blob:")[1];
imageFullBack.href = decode_img(img_producto_reverso);
bigImage.forEach(b => {
    if(img_producto_frente === ""){
        b.src = "../img/frascoAn.png" ;
    } else{
        b.src = decode_img(img_producto_frente);
    }
});
bigImageBack.forEach(b => {
    if(img_producto_reverso === ""){
        b.src = "../img/frascoAn.png" ;
    } else{
        b.src = decode_img(img_producto_reverso);
    }
});

function validateOffert(){
    if(offertNow == 0){
        offertAvailable.forEach(os => {
            os.className += " offOfferts";
        })
        } else{
           
        } 
}
validateOffert();


