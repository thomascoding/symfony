var  gameItem = '<div  onclick="showGame({id},this); return false" data-index={index} class="col-xs-4 col-md-3" id="game-{id}" >'+
'<a class="thumbnail" href="" title="">'+
'<img title="" alt="" src="{avatar}">'+
'<div class=supp>{name}</div>'+
'</a></div>';


var gamesData = [];

function render (tpl,data){
  for(var i in data){
    tpl = tpl.replace(new RegExp('{'+i+'}','gi'),data[i]);
  }
  return tpl;
}

function render_games(games, block_id){
  var res = '';
  var ids = {}
  for(var i = 0 ; i<games.length; i++){
    games[i]['index'] = i;
    res += render(gameItem,games[i]);
  }
  if(res.length>0){
    $(block_id).html('');
  }else{
    $(block_id+' div ').show();
  }
  $(block_id).prepend(res);
  return ids;
}

function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
    return array;
}

function showGame(id,elem){
  $(elem).addClass('game');
  selectNeighbor(elem);
}

var prevTop = 0;

function selectNeighbor(elem){
  var gamesElem = $('#games div');
  var cName = 'neighbor';
  var cTop=$(elem).position().top;
  if(cTop!=prevTop){
    gamesElem.removeClass(cName);
    console.log('prevTop', prevTop)
  }
  gamesElem.removeClass('active');
  $(elem).addClass('active');
  var top=$(elem).position().top;
  prevTop = top;
  gamesElem.filter(function(){return $(this).position().top == top})
  .addClass(cName);
  playGame(elem,top);
}


function playGame(elem,top){
  $('#game-window').css('top',top).show();
  console.log(top)
  //$("html, body").scrollTop(top-50);

  var gameData = gamesData[$(elem).attr('data-index')];

  console.log($(elem).attr('data-index'))
  var el = document.getElementById("game-swf");
  $('.game-info .panel-heading').html(gameData.name);
  $('.game-info .panel-body .description').html(gameData.text);
  swfobject.embedSWF(gameData.url, el, '100%', '100%', 10, null, null,{'allownetworking':'internal','allowScriptAccess':'sameDomain'}, null, function(){
    $('#game-swf').css('display','block');
    $("html, body").stop().animate({scrollTop:top-50}, '500');
  });

}

var Util = {};

Util.toggleFull = function()
{
    $(window).trigger( "Util.fullscreen", true);
    var iframe = document.getElementById('game-swf');
    if(iframe){
      var elem = iframe;
    }else{
      var elem = document.body; // Make the body go full screen.
    }
    var isInFullScreen = (elem.fullScreenElement && elem.fullScreenElement !== null) ||  (elem.mozFullScreen || elem.webkitIsFullScreen);

    if (isInFullScreen) {
        Util.cancelFullScreen(document);
    } else {
        Util.requestFullScreen(elem);
    }
    return false;
}

Util.cancelFullScreen = function(el)
{
    $(window).trigger( "Util.fullscreen", false);
    var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
    if (requestMethod) { // cancel full screen.
        requestMethod.call(el);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
}

Util.requestFullScreen = function (el)
{
    // Supports most browsers and their versions.
    var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullScreen;

    if (requestMethod) { // Native full screen.
        requestMethod.call(el);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
    return false
}




$(document).ready(function () {
		API('/index/main', null,function(games){
      gamesData = games;
      render_games(games,'#games');
    })
	}
);


function API(url,data,cb, type){
  type = type?type:'GET';
  $.ajax({
      type: type,
      data: data,
      url: 'http://online45.com/api'+url,
      dataType: 'json',
      xhrFields: {
          withCredentials: true
      },
      success: cb
  });
}