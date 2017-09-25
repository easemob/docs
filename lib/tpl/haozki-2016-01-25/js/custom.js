function makeScrollable(wrapper, scrollable){
    var $ = jQuery;
    // Get jQuery elements
    var wrapper = $(wrapper), scrollable = $(scrollable);

    // Remove scrollbars
    wrapper.css({overflow: 'hidden'});

    enable();

    function enable(){
        // height of area at the top at bottom, that don't respond to mousemove
        var inactiveMargin = 99;
        // Cache for performance
        var wrapperWidth = wrapper.width();
        var wrapperHeight = wrapper.height();
        // Using outer height to include padding too
        var scrollableHeight = scrollable.outerHeight() + 2*inactiveMargin;
        // Do not cache wrapperOffset, because it can change when user resizes window
        // We could use onresize event, but it's just not worth doing that
        // var wrapperOffset = wrapper.offset();

        // Remove default tooltip
        scrollable.find('a').removeAttr('title');

        //When user move mouse over menu
        wrapper.mousemove(function(e){

            var wrapperOffset = wrapper.offset();

            // Scroll menu
            var top = (e.pageY -  wrapperOffset.top) * (scrollableHeight - wrapperHeight) / wrapperHeight - inactiveMargin;
            if (top < 0){
                top = 0;
            }
            wrapper.scrollTop(top);
        });
    }
}
jQuery(function(jQuery){
    var $ = jQuery;
    $('#dokuwiki__aside .page-header').click(function(){
        $('#dokuwiki__aside .page-header').removeClass('current-title');
        $(this).addClass('current-title');
        $('#dokuwiki__aside .nav-stacked').slideUp(100).removeClass('current-list');
        $(this).next().next('.nav-stacked').slideDown(100).addClass('current-list');

        var self = jQuery(this);
        setTimeout(function(){
            console.info(self);
            jQuery('.dw-sidebar-content').scrollTo(self,200,{
                offset: -50
            });
        },100);
    });
    $('#dokuwiki__aside li').click(function(){
        $('#dokuwiki__aside li').removeClass('active');
        $(this).addClass('active');
    });
    $('#dokuwiki__aside li.active').parent().slideDown(100);
    $('#dokuwiki__aside li.active').parent().addClass('current-list').prev().prev().addClass('current-title');
});