AOS.init();

    function searchToggle(obj, evt){
        var container = $(obj).closest('.search-wrapper');
            if(!container.hasClass('active')){
                container.addClass('active');
                evt.preventDefault();
            }
            else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                container.removeClass('active');
                // clear input
                container.find('.search-input').val('');
            }
    }

$(window).scroll(function(){
    let windowPosition = $(window).scrollTop();
    let sectionPosition = $('.section-sell').position().top;
    if( windowPosition >= sectionPosition )
    {
        $('.section-sell').addClass('scrollEffect')
    }
    else{
        $('.section-sell').removeClass('scrollEffect')
    }
})

$(window).scroll(function(){ 
    let windowPosition = $(window).scrollTop();
    let sectionPosition = $('.section-market').position().top;
    if( windowPosition >= sectionPosition )
    {
        $('.section-market').addClass('scrollEffect1')
        $('.section-market').data('fade-up')
    }
    else{
        $('.section-market').removeClass('scrollEffect1')
    }
})


$(window).scroll(function(){
    let windowPosition = $(window).scrollTop();
    let sectionPosition = $('.section-market').position().top;
    if( windowPosition >= sectionPosition )
    {
        $('.section-Manage').addClass('scrollEffect2')
    }
    else{
        $('.section-Manage').removeClass('scrollEffect2')
    }
})