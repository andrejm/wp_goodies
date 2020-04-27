// Fakla replacer is script made for Jano Fakla to avoid certain short words in 
// Slovak language to be left alone at the end of line. 
// updated with english shorts as well 
// idea https://harrison314.github.io/SlovakWyamTypography.html
// script https://stackoverflow.com/questions/1144783/how-to-replace-all-occurrences-of-a-string-in-javascript
// tested with: https://regex101.com/

jQuery(document).ready(function($) {
    var pagecontent = $( 'p, li, h1, h2' );
    var result = '';
    var re = new RegExp('(\\s|^)(z|zo|bez|na|po|od|do|pri|pre|so|miesto|o|v|s|za|a|i|ani|aj|najprv|potom|ešte|ale|no|lež|jednako|alebo|buď|či|že|aby|čo|aký|ktorý|kde|keď|kým|kde|čo|akoby|lebo|pretože|predsa|the|of|on|at|in)(\\s+)([^\\p{Cc}\\p{Cf}\\p{Z}])', 'gi');

    function replaceAll(str, find, replace) {
        return str.replace(find, replace);
    }

    $.each( pagecontent, function(i, iitem){
        var $iitem = $(iitem);
        result = replaceAll($iitem.html(), re, '$1$2&nbsp;$4');
        $iitem.html(result);
    } );
});
