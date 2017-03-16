   var zdjecia = Array(
    Array('images/phoca_thumb_l_dsc_0499.jpg', 'thumbs/phoca_thumb_l_dsc_0499.jpg', '', ''),
	Array('images/phoca_thumb_l_dsc_0734.jpg', 'thumbs/phoca_thumb_l_dsc_0734.jpg', '', ''),
	Array('images/phoca_thumb_l_dsc_5278.jpg', 'thumbs/phoca_thumb_l_dsc_5278.jpg', '', ''),
	Array('images/phoca_thumb_l_dsc_7957.jpg', 'thumbs/phoca_thumb_l_dsc_7957.jpg', '', ''),
	Array('images/phoca_thumb_l_dsc_0837.jpg', 'thumbs/phoca_thumb_l_dsc_0837.jpg', '', ''),
	Array('images/phoca_thumb_l_obraz 709.jpg', 'thumbs/phoca_thumb_l_obraz 709.jpg', '', '')
);
var max_width = 520;
function laduj() {
    for(var i = 0; i < zdjecia.length; i++)
        document.getElementById('miniaturki').innerHTML += '<img src="' + zdjecia[i][1] + '" onclick="zmien(' + i + ')" />';
    zmien(0);
}
function zmien(id) {
    document.getElementById('zdjecie').innerHTML += '<div id="ladowanie"></div>'; 
    var custom = '';
    var preload = new Image(); 
    preload.onload = function() {
        if(preload.width > max_width) 
            custom = ' style="height: '+(Math.floor(max_width / (preload.width / preload.height)))+'px;width:'+max_width+'px;"';
 
        document.getElementById('informacje').innerHTML = '<b>'+zdjecia[id][2]+'</b><br /><i>'+zdjecia[id][3]+'</i>';
        document.getElementById('zdjecie').innerHTML = '<img src="'+zdjecia[id][0]+'"'+custom+' />'; 
    }
    preload.src = zdjecia[id][0]; 
}
window.onload = laduj;