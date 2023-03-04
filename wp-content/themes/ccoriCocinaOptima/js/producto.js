(async function () {
    await window.documentReady;
    let previewImage = document.querySelector('.product-detail .preview > .img img');
    const previewImageList = document.querySelectorAll('.product-detail .preview ul li');

    let currentPreview = null

    previewImageList.forEach(node => {
        node.onmouseenter = function () {
            this.classList.add('active')
            if (currentPreview !== null && currentPreview !== this) {
                currentPreview.classList.remove('active')
            }

            currentPreview = this

            previewImage.src = this.dataset.image
        }
    })

    if (previewImageList.length === 1) {
        previewImageList[0].parentNode.classList.add('hidden')
    }

    previewImageList[0].dispatchEvent(new MouseEvent('mouseenter', { 'bubbles': true }))

    const amountSelect = document.getElementById('amount');
    const stockAmount = document.getElementById('stockAmount');

    [...Array(Number(stockAmount.textContent))].forEach((e, ix) => {
        var opt = document.createElement('option');
        opt.value = ix + 1;
        opt.innerHTML = ix + 1;
        amountSelect.appendChild(opt);
    });

	const wsNumber = document.getElementById('buy');
    document.getElementById('buy').onclick = function () {
        let message = '¡Hola! He visto el producto [PRODUCT_NAME], y me gustaria comprar [AMOUNT] [UNITY] -> [URL]'
            .replaceAll('[PRODUCT_NAME]', 'Polo Ccori - blanco')
            .replaceAll('[AMOUNT]', amountSelect.value)
            .replaceAll('[UNITY]', 'unidad' + (amountSelect.value > 1 ? 'es' : ''))
            .replaceAll('[URL]', window.location);


        const talla = document.querySelector('button.talla.active');

        if (talla !== null) {
            message += ` en talla ${talla.innerText}`
        }

        window.open(`https://wa.me/${wsNumber.dataset.ws}?text=${message}`)
    }


    const btnTallas = [...document.querySelectorAll('.talla')];

    let current = null

    btnTallas.forEach(btn => {
        btn.onclick = function () {
            if (current !== null) {
                current.classList.remove('active')
            }

            this.classList.add('active')

            current = this
        }
    })
})()