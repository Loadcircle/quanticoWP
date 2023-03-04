(async function () {

    const galeriaGrid = $('.grid-images .grid')
    const triggerDropdown = $('button.trigger-dropdown')

    await window.documentReady;
    window.addMediaMobileHandler(() => {
        galeriaGrid.slick({
            dots: true,
            arrows: false
        })

    })
    window.addMediaTabletHandler(() => {
        try {
            galeriaGrid.slick('unslick')
        } catch (e) { }
    })
    window.addMediaDesktopHandler(() => {
        try {
            galeriaGrid.slick('unslick')
        } catch (e) { }
    })

    window.triggerArtificialMediaChange()

    triggerDropdown.click(function () {
        $(this).next().slideToggle()
    })

})()