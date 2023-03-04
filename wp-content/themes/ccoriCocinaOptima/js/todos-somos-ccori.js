
(async function() {

    const userGrid = $('.grid-images .grid')
    const triggerDropdown = $('button.trigger-dropdown')

    await window.documentReady;
    window.addMediaMobileHandler(() => {
        userGrid.slick({
            dots: true,
            arrows: false
        })

        triggerDropdown.each((ix, elem) => {
            elem = $(elem).next().get(0)
            elem.style.display = 'none';
        })
    })
    window.addMediaTabletHandler(() => {
        triggerDropdown.each((ix, elem) => {
            elem = $(elem).next().get(0)
            console.log(elem)
            if (elem.classList.contains('txt')) {
                elem.style.removeProperty('display')
            } else {
                elem.style.display = 'none';
            }
        })

        try {
            userGrid.slick('unslick')
        } catch (e) {}
    })
    window.addMediaDesktopHandler(() => {
        triggerDropdown.each((ix, elem) => {
            elem = $(elem).next().get(0)
            if (elem.classList.contains('txt')) {
                elem.style.removeProperty('display')
            } else {
                elem.style.display = 'none';
            }
        })

        try {
            userGrid.slick('unslick')
        } catch (e) {}
    })

    window.triggerArtificialMediaChange()

    triggerDropdown.click(function() {
        $(this).next().slideToggle()
    })
})()