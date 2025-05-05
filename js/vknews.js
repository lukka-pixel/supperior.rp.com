

$(document).ready(function(){
	function GetPostWall(counts, $offset) {
		var message = [];
		var pinned = false;
		var i = 1;
		var req = "https://api.vk.com/method/wall.get?domain=newton_roleplay&offset=" + $offset + "&count=" + (counts+1); // GET запрос по протоколу HTTPS;
		$.ajax({
			url: req,
			type: "GET",
			dataType: "jsonp",
			success: function (msg) {
				items = msg.response;
				while (i <= counts) {
					if (items[i] != undefined){
						if (items[i].text.length > 50){
							
							var background = 'img/bgg.jpg';
							if(items[i]['attachment']){
								if(items[i]['attachment']['type'] == 'photo'){
									if(items[i]['attachment']['photo']['src_xxbig']){
										background = items[i]['attachment']['photo']['src_xxbig'];
									}
								}
							}
							message += '<div class="block fadeInLeft wow fadeInLeft"><div class="pic" style="background: url('+background+') no-repeat center center;background-size:cover;"><div style="padding-top:131px;  margin-right: 10px;"><h4 style="font-size:11px;background:#99172c;color:#fff;padding:5px 5px 5px 5px;float:right;">'+timeConverter(items[i]['date'])+'</h1></div></div><div class="text" style="clear:both;"><font size="2" color="#444">'+items[i].text +'</font></div></div>';
							$("#wallget").append(message).show('slow');
							message = "";
							
						};
					}
					i++;
				};
			}
		});
	}
	
	function timeConverter(UNIX_timestamp){
		var a = new Date(UNIX_timestamp * 1000);
		var months = ['январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
		var year = a.getFullYear();
		var month = months[a.getMonth()];
		var date = a.getDate();
		var hour = a.getHours();
		var min = a.getMinutes();
		var sec = a.getSeconds();
		if(months<10) months = '0'+months;
		if(date<10) date = '0'+date;
		if(hour<10) hour = '0'+hour;
		if(min<10) min = '0'+min;
		if(sec<10) sec = '0'+sec;
		//var time = date + ' ' + month + ' ' + year + ' г. в ' + hour + ':' + min + ':' + sec ;
		var time = date + ' ' + month + ' ' + year + ' г.';
		return time;
	}
	GetPostWall(10, 0);
	$posts = 10;
	$offsets = 10;
});