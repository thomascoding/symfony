var interval = 0;
var resultat = 'z_result';
var wait = 'z_result_ok';
var imgwait = 'pics/wait.gif';

function LoadGames(wx, hx, rrr)
{
	document.getElementById('loadgames').innerHTML=interval+'%';
	document.getElementById('loadgames_gif').style.width=interval+'%';
	interval++;
	if (interval == rrr) { document.getElementById('clickyes').innerHTML = '<font onClick="gogame(' + wx + ', ' + hx + ');" style="font-size: 8pt; cursor: pointer; text-decoration: underline; color: #094da1;">Игра загружена. Кликните здесь, чтобы начать игру</font>'; }
	if (interval > 100) { gogame(wx, hx); };
	return;
}


function gogame(wx, hx)
{
	clearInterval(time);
	if ($('#rgg').css('display') != 'none')
	{
		$('#rgg').css('display', 'none');
		$('#rrr_div').css('position', '');
		$('#rrr_div').css('top', '');
		if (document.getElementById('rrrx') != null)
		{
			$('#rrr_div').css('position', '');
			$('#rrr_div').css('top', '');
		}
	}
}
							
function pic(nam, but, pred)
{
	if(but)
	{
		pred1 = Math.floor(pred);
		pred2 = (pred - pred1) * 10;
		for (var i = 1; i <= pred1; i++)
		{
			document.images['b' + i].src = '/pics/sb1.gif';
		}
		pred3 = pred1;
		if (pred2 > 3 && pred2 < 9) { pred3++; document.images['b' + pred3].src = '/pics/sb2.gif'; }
		if (pred2 == 9) { pred3++; document.images['b' + pred3].src = '/pics/sb2.gif'; }
		
		for (var i = (pred3+1); i <= 5; i++)
		{
			document.images['b' + i].src = '/pics/sb3.gif';
		}
	}
	else
	{
		eee = parseInt(nam.substr(1,1));
		for (var i = 1; i <= 5; i++)
		{
			if (eee >= i) { document.images['b' + i].src = '/pics/sb1.gif'; } else { document.images['b' + i].src = '/pics/sb3.gif'; }
		}
	} 
}