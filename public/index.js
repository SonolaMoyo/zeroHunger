let productContainer = document.querySelector('.product-container');
const detail = document.createElement('div');
detail.classList.add('col');
detail.innerHTML= `
<div class="card h-100" style="width: 15rem;">
    <img src="img/Gino-Tomato-Paste-800g-Tin.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Tomato Paste</h5>
        <p class="card-text">Quality Gino Tomato Paste</p>
        <p class="card-text">Price: N400</p>
        <button type="button" class="btn btn-outline-secondary">Buy Now</button>
    </div>
    <div class="card-footer">
        <small class="text-muted">Expires in 6 months</small>
    </div>
</div>
`;
document.addEventListener('DOMContentLoaded',(e)=>{
    let productContainer = document.querySelector('.product-container');

    for (let i=0; i<6; i++){
        console.log(i);
        productContainer.append(detail);
    };
})