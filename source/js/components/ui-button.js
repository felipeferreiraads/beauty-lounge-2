$('.know-more').hover(function(){
    $(this).children('.text').delay(150).fadeIn(100)
    $(this).parent('.item').css({
        'boxShadow': '0 0 10px rgba(200,61,140,0.4)'
    })
}, function(){ 
    $(this).children('.text').hide()
    $(this).parent('.item').css({
        'border': '1px solid #e6e6e6',
        'boxShadow': 'none'
    })
})

$('.see-more').hover(function(){
    $(this).children('.text').delay(150).fadeIn(100)
    $(this).parent().find('figure').css({
        'border': '1px solid #0069f7'
    })
}, function(){ 
    $(this).children('.text').hide()
    $(this).parent().find('figure').css({
        'border': 'none'
    })
})