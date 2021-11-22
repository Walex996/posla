// created by Olawale
// https://github.com/Walex996/

import $ from 'jquery';


export const customizeSVG = (props) => {
    
    $(function(){

        $("svg.customizeSVG").each(function(){
            
            // for dashboard icons & co
            const next_path = $(this).children("path");
            if (typeof next_path.attr("fill") !== 'undefined' && next_path.attr("fill") !== false) {
                next_path.attr("fill","currentColor");
            }
            if (typeof next_path.attr("stroke") !== 'undefined' && next_path.attr("stroke") !== false) {
                next_path.attr("stroke","currentColor");
            }

            //for pagination
            $(this).find("[fill]").each(function(){
                if (typeof $(this).attr("fill") !== 'undefined' && $(this).attr("fill") !== false) {
                    $(this).attr("fill","currentColor");
                }
                if (typeof $(this).attr("stroke") !== 'undefined' && $(this).attr("stroke") !== false) {
                    $(this).attr("stroke","currentColor");
                }
            });

        });

    });

    return null;

};
