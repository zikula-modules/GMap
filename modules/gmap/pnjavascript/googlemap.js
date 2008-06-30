/* $Id:  $ */

Event.observe(window, 'load', function() {
        Event.observe($('gmap_icon'), 'change', function() {
            if($('icon_img')) {
                parts = $('icon_img').src.split('/');
                if(parts[parts.length-2] == 'specials') {
                    $('icon_img').src = 'modules/gmap/pnimages/specials/' + $F('gmap_icon');
                } else {
                    $('icon_img').src = 'modules/gmap/pnimages/' + $F('gmap_icon');
                }
            }
        });
    });
