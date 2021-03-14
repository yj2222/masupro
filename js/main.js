jQuery(function(){
    // bxslider option
    jQuery('.bxslider').bxSlider({
        pager: false,
        infiniteLoop: false,
        touchEnabled: false,
    });
    // help menu modal open
    jQuery('.helpMenuBtn').on('click', function(){
        jQuery('.helpMenu').fadeIn(300, function(){
            let postID;
            let lists = jQuery('.bxslider > li');
            jQuery.each(lists, function (i, list) { 
                 if(jQuery(list).attr('aria-hidden') === 'false'){
                    postID = jQuery(list).attr('data-target') + '-help';
                    jQuery(postID).addClass('active');
                    return false;
                 }
            });
        });
    });
    // help menu modal close
    jQuery('.helpClose').on('click', function(){
        jQuery('.helpMenu').fadeOut(300, function(){
            console.log(jQuery('.helpMenu__wrap'));
            jQuery('.helpMenu__wrap').removeClass('active');
            console.log(jQuery('.helpMenu__wrap'));
        });
    });
    // help menu modal accordion
    jQuery('.helpMenu dt').on('click', function(){
        jQuery(this).next().slideToggle();
    });
    // current page text
    jQuery('.bx-controls-direction').on('click touchend', function(){
        let page_index = 0;
        let current_page_preview = jQuery('.helpMenuPager p span');
        let lists = jQuery('.bxslider > li');
        jQuery.each(lists, function (i, list) { 
            if(jQuery(list).attr('aria-hidden') === 'false'){
                let post_data_page = jQuery(this).attr('data-page');
                current_page_preview.text(post_data_page);
                return false;
            }
        });
    }); 
});