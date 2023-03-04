(async function () {

    const cocinaOptimaGrid = $('.cocina-optima .co-list')
    const programasEducativosGrid = $('.programas-educativos .co-list')

    await window.documentReady;
    window.addMediaMobileHandler(() => {
      cocinaOptimaGrid.slick({
        dots: true,
        arrows: false
      })
      programasEducativosGrid.slick({
        dots: true,
        arrows: false
      })

    })
    window.addMediaTabletHandler(() => {
      try {
        cocinaOptimaGrid.slick('unslick')
        programasEducativosGrid.slick('unslick')
      } catch (e) {}
    })
    window.addMediaDesktopHandler(() => {
      try {
        cocinaOptimaGrid.slick('unslick')
        programasEducativosGrid.slick('unslick')
      } catch (e) {}
    })

    window.triggerArtificialMediaChange()

  })()