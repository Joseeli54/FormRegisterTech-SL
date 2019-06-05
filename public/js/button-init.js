function OpenorClose(){
	var intro = document.getElementById('intro');
	var spanPlus = document.getElementById('plus');
	var spanMinus = document.getElementById('minus');


	if(intro.style.display == 'none'){
		intro.style.display = 'block';
		spanPlus.style.display = 'none';
		spanMinus.style.display = 'inline-block';
	}
	else{
        intro.style.display = 'none';
        spanPlus.style.display = 'inline-block';
		spanMinus.style.display = 'none';
	}
}