$('.share').on('click', e => {
    e.preventDefault()
    window.open(e.target.getAttribute('href'), 'width=600,height=400')
})