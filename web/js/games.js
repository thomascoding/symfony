var interval = 0;
var no_rrr = 0;

function add_favorite(a) {
  title = document.title;
  url = document.location;
  try {
    // Internet Explorer
    window.external.AddFavorite(url, title);
  } catch (e) {
    try {
      // Mozilla
      window.sidebar.addPanel(title, url, "");
    } catch (e) {
      // Opera
      if (typeof (opera) == "object") {
        a.rel = "sidebar";
        a.title = title;
        a.url = url;
        return true;
      } else {
        // Unknown
        alert('Press Ctrl+D to add bookmark');
      }
    }
  }
  return false;
}




$(document).ready(function () {

  $('#main-carcas').css('height','auto');
  return true;
  /*$('.pages a, .order a').live('click', function () {
    if (this.href.indexOf('search', 0) > 0) {
      return true;
    }
    try {
      History.pushState({
        type: 'ajax_pagination'
      }, document.title, this.href);
      return false;
    } catch (e) {}
    return true;
  })*/
  /*$(".sinp").autocomplete({
    source: function (request, response) {
      $.getJSON("/ajax/searchgames/", {
        q: (request.term)
      }, response);
    },
    delay: 200,
    minLength: 2,
    select: function (event, ui) {
      window.location = '/' + ui.item.id + '/';

    }
  }).data("autocomplete")._renderItem = function (ul, item) {
    return $("<li></li>").data("item.autocomplete", item).append('<a href="/' + item.id + '/"><img style="float:left; width:32px" height="32" src="/gamesimg/' + item.id + '.jpg"><div style="float:left; width:165px; font-size:12px; line-height:1em; margin-left:5px">' + item.name + '</div><br style="clear:both"</a>').appendTo(ul);
  };;*/
});

$(document).ready(function (){
  $(".sinp").focus(function () {
    jQuery.getScript('http://yandex.st/jquery-ui/1.9.2/jquery-ui.min.js',function(){
      $('head').append('<link rel="stylesheet" href="/ui/css/search.css" type="text/css" />');

      $(".sinp").autocomplete({
      source: function (request, response) {
        $.getJSON("/ajax/searchgames/", {
          q: (request.term)
        }, response);
      },
      delay: 200,
      minLength: 2,
      select: function (event, ui) {
        window.location = '/' + ui.item.id + '/';

      }
      }).data("autocomplete")._renderItem = function (ul, item) {
        return $("<li></li>").data("item.autocomplete", item).append('<a href="/' + item.id + '/" style="width: 220px;"><img style="float:left; width:32px; margin-right:5px;" height="32" src="http://www.game-game.com.ua/gamesimg/' + item.id + '.jpg"><div style="font-size:12px; line-height:1em; float: none!important;overflow: hidden;">' + item.name + '</div><div style="clear:both"></div></a>').appendTo(ul);
      };
    });
  });
});


function ajax_pagination(url) {
  $("body").css("cursor", "progress");
  url = url.replace(/http:\/\/([^\/]+)\//, '/ajax/');
  var langaj = url.match(/\/([a-z][a-z])\//);
  url = url.replace(/\/([a-z][a-z])\//, '/');
  $.ajax({
    url: url,
    success: function (data) {

      $("body").css("cursor", "auto");
      if (langaj) data = data.replace(/href="\//g, 'href="'+langaj[0]);
      $('.dynamic').html(data);
      $('html, body').animate({
        scrollTop: 130
      }, 500);
      showVisible();
      yaCounter10425919.hit(url, 'AJAX PAGER', document.referrer);
      _gaq.push(['_trackPageview', url]);
      updateLiveInternetCounter(url);
      //alert('Load was performed.');
    }
  });
}

function updateLiveInternetCounter(url) {
  var liCounter = new Image(1, 1);
  liCounter.src = '//counter.yadro.ru/hit?r=' + ((typeof (screen) == 'undefined') ? '' : ';s' + screen.width + '*' + screen.height + '*' + (screen.colorDepth ? screen.colorDepth : screen.pixelDepth)) + ';u' + escape(url) + ';h' + escape(document.title.substring(0, 80)) + ';' + Math.random();
}(function (window, undefined) {
  // Prepare
  return;
  var History = window.History;
  if (!History.enabled) {
    return false;
  }
  History.Adapter.bind(window, 'statechange', function () {
    var State = History.getState();
    //History.log(State.data, State.title, State.url);
    if (State.data.type == undefined) {
      ajax_pagination(State.url);
    } else if (State.data.type == 'ajax_pagination') {
      ajax_pagination(State.url);
    }
  });
})(window);

function LoadGames(rrr) {
  document.getElementById('loadgames').innerHTML = interval + '%';
  document.getElementById('loadgames_gif').style.width = interval + '%';
  interval++; /*	if (interval > rrr && no_rrr == 0) { document.getElementById('clickyes').innerHTML = '<font onClick="OpenGames();" style="font-size: 8pt; cursor: pointer; text-decoration: underline; color: #094da1;">Èãðà çàãðóæåíà. Êëèêíèòå çäåñü, ÷òîáû íà÷àòü èãðó</font>'; no_rrr = 1; }*/
  /*if (interval > 100) {
    OpenGames();
  };*/
  OpenGames();
  return;
}

function OpenGames() {
  wx = 728;
  hx = 560;
  $('#game_reclama').css('display', 'none');
  $('#game_reclama_upload').css('display', 'none');
  $('#swfgame_o').attr('width', wx);
  $('#swfgame_o').attr('height', hx);
  $('#swfgame_e').attr('width', wx);
  $('#swfgame_e').attr('height', hx);
}
$(document).ready(function () {
  //OpenGames();
}) /* Ïðîâåðêà êàï÷è */

function CapchaVerify() {
  var code_capcha = $('input[name=code_download]').val();
  if (code_capcha == undefined || code_capcha == '') {
    alert('Ââåäèòå êîä ñ êàðòèíêè!');
    return;
  }
  $.post('modules/verifyC.php', {
    zapros: code_capcha
  }, function (data) {
    if (data) {
      DownloadLink();
    } else {
      alert('Íå âåðíûé êîä!');
      return;
    }
  });
} /* Ñ÷åò÷èê ïåðåä ññûëêîé äëÿ çàêà÷êè èãðû */

function DownloadLink() {
  clearInterval(time);
  code_capcha = $('input[name=code_download]').val();
  $('#game_reclama').css('display', 'block');
  $('#game_reclama_upload').css('display', 'none');
  $('#form_down_code').css('display', 'none');
  $('#swfgame_o').attr('width', 2);
  $('#swfgame_o').attr('height', 2);
  $('#swfgame_e').attr('width', 2);
  $('#swfgame_e').attr('height', 2);
  $('#game_upload_counter').css('display', 'block');
  DLtime = 15;
  $('#game_counter_time').text(DLtime);
  var count = setInterval(

  function () {
    DLtime--;
    $('#game_counter_time').text(DLtime);
    if (DLtime < 1) {
      clearInterval(count);
      DownloadOpenLink();
    }
  }, 1000);
} /* Îòêðûòèå ññûëîê çàêà÷êè */

function DownloadOpenLink() {
  $('#form_down_code').css('display', 'none');
  $('#game_reclama').css('display', 'none');
  $('#game_reclama_upload').css('display', 'none');
  $('#game_upload_counter').css('display', 'none');
  $('#game_upload_link').css('display', 'block');
} /* Âîçâðàùåíèå ê èãðå */

function ReturnGame() {
  $('#form_down_code').css('display', 'none');
  $('#game_reclama').css('display', 'none');
  $('#game_reclama_upload').css('display', 'none');
  $('#game_upload_counter').css('display', 'none');
  $('#game_upload_link').css('display', 'none');
  $('#swfgame_o').attr('width', wx);
  $('#swfgame_o').attr('height', hx);
  $('#swfgame_e').attr('width', wx);
  $('#swfgame_e').attr('height', hx);
}

function pic(nam, but, pred) {
  if (but) {
    pred1 = Math.floor(pred);
    pred2 = (pred - pred1) * 10;
    for (var i = 1; i <= pred1; i++) {
      document.images['b' + i].src = 'http://cdn.game-game.com.ua/ui/css/images/stars/sb1.gif';
    }
    pred3 = pred1;
    if (pred2 > 3 && pred2 < 9) {
      pred3++;
      document.images['b' + pred3].src = 'http://cdn.game-game.com.ua/ui/css/images/stars/sb2.gif';
    }
    if (pred2 == 9) {
      pred3++;
      document.images['b' + pred3].src = 'http://cdn.game-game.com.ua/ui/css/images/stars/sb2.gif';
    }
    for (var i = (pred3 + 1); i <= 5; i++) {
      document.images['b' + i].src = 'http://cdn.game-game.com.ua/ui/css/images/stars/sb3.gif';
    }
  } else {
    eee = parseInt(nam.substr(1, 1));
    for (var i = 1; i <= 5; i++) {
      if (eee >= i) {
        document.images['b' + i].src = 'http://cdn.game-game.com.ua/ui/css/images/stars/sb1.gif';
      } else {
        document.images['b' + i].src = 'http://cdn.game-game.com.ua/ui/css/images/stars/sb3.gif';
      }
    }
  }
} /* Çâåçäî÷êè - çàïðîñ íà äîáàâëåíèå */

function AddStars(id, bal) {
  $.post('/ajax/vote/game/', {
    game: id,
    estimation: bal
  }, function (data) {
    if (data) {
      //$('.rating').css({"background": " ", "height": "1px"});
      $('.ratings').html('<font style="font-size: 14pt; color:#2262ac; height: 22px; display: block;">Thank you! &nbsp;</font>');
      return;
    } else {
      return;
    }
  });
} /** Îáðàòíàÿ ñâÿçü **/
sndm = {
  verify: function () {
    if (this.name() && this.email() && this.text() && this.codef()) {
      var qrec = {
        zapros: this.code
      };
      capcha.query('verifyC', qrec, this.result);
    }
  },
  name: function () {
    var name = $('input[name=send_name]').val();
    if (name !== undefined && name == '') {
      alert('Ââåäèòå ñâîå èìÿ!');
      return false;
    }
    return true;
  },
  email: function () {
    var email = $('input[name=send_email]').val();
    if (email !== undefined && email == '') {
      alert('Ââåäèòå ñâîé e-mail!');
      return false;
    }
    if (!email.match(/^[A-Za-z0-9\.\_]{1,32}\@[A-Za-z0-9\.\_]{1,32}\.[a-zA-Z]{2,6}$/)) {
      alert('Íåâåðíûé e-mail!');
      return false;
    }
    return true;
  },
  text: function () {
    var text = $('textarea[name=send_text]').val();
    if (text !== undefined && text == '') {
      alert('Ââåäèòå òåêñò ïèñüìà!');
      return false;
    }
    return true;
  },
  codef: function () {
    this.code = $('input[name=send_code]').val();
    if (this.code !== undefined && this.code == '') {
      alert('Ââåäèòå êîä ñ êàðòèíêè!');
      return false;
    }
    return true;
  },
  result: function (data) {
    if (data) document.forms.formsend.submit();
    else alert('Íåâåðíûé çàùèòíûé êîä!');
  }
}
capcha = {
  query: function (uri, req, func_ret) {
    $.post('modules/' + uri + '.php', req, function (data) {
      if (data) func_ret(data);
      else func_ret(false);
    })
  }
}

function perecl(id) {
  if (id == 1) {
    $('#podobn_l').attr('class', 'pod_posl_nl');
    $('#posl_sgam_l').attr('class', 'pod_posl_l');
    $('#podobn').css('display', 'block');
    $('#posl_sgam').css('display', 'none');
  } else {
    $('#podobn_l').attr('class', 'pod_posl_l');
    $('#posl_sgam_l').attr('class', 'pod_posl_nl');
    $('#podobn').css('display', 'none');
    $('#posl_sgam').css('display', 'block');
  }
}

function bookmarksite(title, url) {
  if (navigator.appName === "Microsoft Internet Explorer") window.external.AddFavorite(url, title);
  else if (window.opera && window.print) {
    // Opera Browser
    var elem = document.createElement('a');
    elem.setAttribute('href', url);
    elem.setAttribute('title', title);
    elem.setAttribute('rel', 'sidebar');
    elem.click();
  } else { // Other Browsers
    window.sidebar.addPanel(title, url, "");
  }
}

function preload(images) {
  if (typeof document.body == "undefined") return;
  try {
    var div = document.createElement("div");
    var s = div.style;
    s.position = "absolute";
    s.top = s.left = 0;
    s.visibility = "hidden";
    document.body.appendChild(div);
    div.innerHTML = "<img src=\"" + images.join("\" /><img src=\"") + "\" />";
    var lastImg = div.lastChild;
    lastImg.onload = function () {
      document.body.removeChild(document.body.lastChild);
    };
  } catch (e) {}
}

function top_view_img(id, title, divid) {
  document.getElementById(divid).src = 'http://www.game-game.com.ua/gamesimg/' + id + '.jpg';
  document.getElementById(divid).title = 'Èãðà ' + title;
  document.getElementById(divid + '_link').href = id + '/';
}

function iban(ident, id) {
  $.post('statistics.php', {
    'ident': ident,
    'idbanner': id
  })
}

function dwg(id) {
  $.post('downgame.php', {
    'id': id
  })
}

function Adv(id, limit) {
  this.block = '#gameguru' + id + ' ';
  this.limit = limit;
  this.timer = null;
  this.id = id
  this.time = 5; //ñêîëüêî âðåìåíè ïðîâåðÿòü çàãðóçêó áàíåðà
  this.searchcount = 0; // ñêîëüêî ðàç ïûòàëîñü íàéòè
  var self;
  this.init = function () {
    //console.log(this.block);
    self = this;
    this.timer = setInterval(search, 1000);
  };
  this.click = function () {
    var id = self.getLinkId(this);
    $.cookie('gg' + id, '1', {
      expires: 1
    });
    return true;
  };
  this.getLinkId = function (link) {
    var reg = /id=([0-9]+)/
    var res = reg.exec(link);
    return res[1];
  }
  this.rotate = function () {
    jQuery(this.block + '  a').live('click', self.click);
    var adv_num = 0;
    jQuery(self.block + ' .header_gameguru a').each(function () {
      var link = $(this).attr('href');
      var id = self.getLinkId(link);
      var hide = false;
      if ($.cookie('gg' + id)) {
        hide = true;
      } else {
        adv_num++;
      }
      if (adv_num > self.limit || hide) {
        //console.log('hide in block:'+self.id+' adv id:'+id)
        $(this).parents('.gameblock_gameguru').hide();
      }
    });
    //;
  }

  function search() {
    self.searchcount++;
    if (self.searchcount > self.time) {
      clearInterval(self.timer);
      //console.log('stop');
      return;
    }
    //console.log(self.block+'.header_gameguru a')
    if (jQuery(self.block + '.gameblock_gameguru a').get(0)) {
      clearInterval(self.timer);
      //console.log('Found'+self.id);
      self.rotate();
    } else {
      //console.log('searching ...');
      return false;
    }
  }
}
new Adv(3, 5).init();
new Adv(1, 15).init();
jQuery.cookie = function (key, value, options) {
  // key and at least value given, set cookie...
  if (arguments.length > 1 && String(value) !== "[object Object]") {
    options = jQuery.extend({}, options);
    if (value === null || value === undefined) {
      options.expires = -1;
    }
    if (typeof options.expires === 'number') {
      var days = options.expires,
        t = options.expires = new Date();
      t.setDate(t.getDate() + days);
    }
    value = String(value);
    return (document.cookie = [
    encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value), options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
    options.path ? '; path=' + options.path : '', options.domain ? '; domain=' + options.domain : '', options.secure ? '; secure' : ''].join(''));
  }
  // key and possibly options given, get cookie...
  options = value || {};
  var result, decode = options.raw ?
  function (s) {
    return s;
  } : decodeURIComponent;
  return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};

function getCoords(elem) {
    var box = elem.getBoundingClientRect();

    var body = document.body;
    var docElem = document.documentElement;

    var scrollTop = window.pageYOffset || docElem.scrollTop || body.scrollTop;
    var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;

    var clientTop = docElem.clientTop || body.clientTop || 0;
    var clientLeft = docElem.clientLeft || body.clientLeft || 0;

    var top  = box.top +  scrollTop - clientTop;
    var left = box.left + scrollLeft - clientLeft;

    return { top: Math.round(top), left: Math.round(left) };
}

function isVisible(elem) {

  var coords = getCoords(elem);
  var windowTop = window.pageYOffset || document.documentElement.scrollTop;
  var windowBottom = windowTop + document.documentElement.clientHeight;
  //windowTop -= 200;
  coords.bottom = coords.top + elem.offsetHeight;

  var topVisible = coords.top > windowTop && coords.top < windowBottom;
  var bottomVisible = coords.bottom < windowBottom && coords.bottom > windowTop;

  return topVisible || bottomVisible;
}

function showVisible() {
  var imgs = document.getElementsByTagName('img');
  for(var i=0; i<imgs.length; i++) {
    var img = imgs[i];
    var name = img.getAttribute('name');
    if (!name) continue;

    if (isVisible(img) && !img.getAttribute('src')) {
      img.setAttribute('src', name);
      img.src = name;
      img.setAttribute('name', '');
      img.removeAttribute('name');
    }
  }

}


//$(document).ready(function ($){
  jQuery.fn.fullhtml = function ()
  {
    var tagName = this[0].tagName.toLowerCase()

    var attribs = this[0].attributes

    var outCode = "<" + tagName;

    for ( var i = 0; i < attribs.length; i++ )
    {
      var attrName = attribs[i].nodeName;
      outCode += " " + attrName + "='" + $( this ).attr( attrName ) + "'"
    }

    outCode += ">" + $( this ).html() + "</" + tagName + ">"

    return outCode
  }

  var obj = $( this );
  var blurid = '#blur', maximizeid= '#maximize', resetid= '#reset', buttonsid= '#buttons';

  var objid = "#swfgame_o";

  var startembedsettings = { src: obj.find( 'embed' ).attr( "src" ) };
  var startbuttonssettings = { left: $( buttonsid ).css( "left" ), top: $( buttonsid ).css( "top" ) };
  var startsettings = { isblur: false, ismaximized: false, isreset: false };
  var html = '';

  function Blur()
  {
    if ( $( '.loadingPanelControl' ).size() == 0 )
    {
      $( '<div class="loadingPanelControl"></div>' ).appendTo( "body" );

      $( '.loadingPanelControl' ).css( { "position": "fixed", "width": "100%",
        "height": "100%", "top": "0px", "left": "0px", "backgroundColor": "#000", opacity: 0.8
      } );
    }

    if ( !startsettings.isblur )
    {
      $( '.loadingPanelControl' ).show();
      $( blurid ).removeClass( 'moon' );
      $( blurid ).addClass( 'sun' );
      $(".controls li a").css({"color": "#FFFFFF"});
    }
    else
    {
      $( '.loadingPanelControl' ).hide();
      $( blurid ).removeClass( 'sun' );
      $( blurid ).addClass( 'moon' );
      $(".controls li a").css({"color": "#3662AC"});
    }
    startsettings.isblur = !startsettings.isblur;
  }

  var game_size = function () {
    var max = $(".game-window");
    var w = $(window).width();
    var h = $(window).height();
    var padding = 50;
    if ((w - 2 * padding) / (h - 2 * padding) > 4 / 3) {
        var fh = h - (2 * padding);
        var fw = Math.round(fh / 3 * 4);

        max.css({
            height: fh,
            width: fw,
            left: Math.round((w - fw) / 2),
            top: padding
        });
    } else {
        var fw = w - (2 * padding);
        var fh = Math.round(fw / 4 * 3);

        max.css({
            height: fh,
            width: fw,
            left: padding,
            top: Math.round((h - fh) / 2)
        });
    }
  };

  function zoom_max(){

    if(startsettings.isblur){
      $( '.loadingPanelControl' ).hide();
      $(blurid).removeClass('active');
      //$(blurid).addClass('moon');
      startsettings.isblur = !startsettings.isblur;
    }

    $("body").addClass("body_over");
    $(".game_max_map").show();
    $(".game-window").css("position", "fixed");
    $(".game-window").css("z-index", "101");


    game_size();
  }    

  var style = '';

  $(".close_max, .game_max_map").click(function(){
    $("body").removeClass("body_over");
    $(".game_max_map").hide();

    if(self.newheight_admin){
      style = 'height:'+newheight_admin;
    }

    if(self.width_iframe){
      style += ';width:'+width_iframe;
    }

    $(".game-window").attr("style", style);
    $('#range_size').val(984);
  });

  $(window).resize(function () {
    if ($(".game_max_map:visible").length > 0) {
      game_size();
    }
  });

  var src_if = $('.game-src').attr('src');

  function Off()
  {
    $('<div class="gamereseter"><a>Play</a></div>').appendTo( $('.game-src').parent());

    $( ".gamereseter" ).css( { "backgroundColor": "#2262ac" } );

    $( ".gamereseter a" ).click( function ()
    {
      Play();
    } );
    //html = $( objid ).fullhtml();
    //$( objid ).remove();
    //$('.game-src').remove();
    if(src_if){
      $('.game-src').attr('src', '');
    }
    $('.game-src').css({ "display": "none" } );
    startsettings.isreset = true;
  }
  function Play()
  {

    //$( html ).appendTo( $( ".gamereseter" ).parent() );
    $( ".gamereseter" ).remove();
    if(src_if){
      $('.game-src').attr('src', src_if);
    }
    $('.game-src').css({ "display": "block" });
    $('.game-src').css( "z-index", 9 );
    //$( $( objid ) ).css( { "z-index": 9 } );
    //$( objid ).find( 'embed' ).attr( "src", startembedsettings.src );

    startsettings.isreset = false;
  }

  $( blurid ).click( function (){ Blur();});

  /*$( maximizeid ).click( function ()
  {

    if ( !startsettings.ismaximized )
    {
      if ( startsettings.isreset )
      {
        return;
      }
      $( maximizeid ).removeClass( 'max' );
      $( maximizeid ).addClass( 'min' );
      Maximize();
    }
    else
    {
      $( maximizeid ).removeClass( 'min' );
      $( maximizeid ).addClass( 'max' );
      Minimize();
    }
    startsettings.ismaximized = !startsettings.ismaximized;
  } );*/

  $( resetid ).click( function ()
  {
    Off();
  } );

//} );

$(document).ready(function () {
  $('.lang-select').one('click', function(){
    $('head').append('<link rel="STYLESHEET" type="text/css" media="all" href="http://game-game.com/ui/css/flags.css?v3.9.1">');
  });

  //var descr_h = $('.descr').height();
  //descr_h = descr_h+30;
  //$('.content').css('margin-bottom', descr_h+"px");

  $(".ip-icon-fav").click(function(){
    $(".controls .add_to_fav").hide();
    $(".controls .remove_to_fav").show();
  });

  $(".ip-icon-fav-active").click(function(){
    $(".controls .add_to_fav").show();
    $(".controls .remove_to_fav").hide();
  });

  var def_width = $(".rating span").width();
  $(".rating").mousemove(function(e){
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    $(".rating span").width(relativeX+"px");
  });

  $(".rating").mouseleave(function(){
    $(".rating span").width(def_width);
  });

  $(".rating").click(function(e){
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var rating = 0;
    var game_id = $(".rating").attr('data');

    //console.log(relativeX);

    if(relativeX<=17) rating = 1;
    if(relativeX>17 && relativeX<=37) rating = 2;
    if(relativeX>37 && relativeX<=57) rating = 3;
    if(relativeX>57 && relativeX<=76) rating = 4;
    if(relativeX>76) rating = 5;

    //alert(relativeX);
    //alert(rating);
    //alert(game_id);
    AddStars(game_id, rating);
  });

  showVisible();

});   

$( window ).scroll(showVisible)
//window.onscroll = 

