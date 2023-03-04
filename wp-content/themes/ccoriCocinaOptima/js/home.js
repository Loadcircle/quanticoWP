new Glide('.recetas__list', {
    type: 'carousel',
    perView: 4,
    swipeThreshold: false,
    dragThreshold: false,
    breakpoints: {
        1024: {
            swipeThreshold: true,
            dragThreshold: true,
            perView: 1
        }
    }
}).mount()