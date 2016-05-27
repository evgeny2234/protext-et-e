var head = document.getElementsByTagName("head")[0];

	window.onload = function(){

	var hmenuBig = document.getElementById('h-menu-under');
	hmenuBig.style.display = "none";

	var imgs = document.getElementsByTagName('table');
	  	var  L = imgs.length;
	  	var  i, tmp;
	for (i = 0; i < L; i++) {
	    tmp = document.createElement('div');
	    tmp.className = "tableStyles";
	    imgs[i].parentNode.insertBefore(tmp, imgs[i]);
	    tmp.appendChild(imgs[i]);
	}
	var stokiBlock = document.getElementsByClassName("stoki-block")[0];
	if(stokiBlock!=null) {
		stokiBlock.innerHTML += '<img src=\"images/link-button_q.jpg\" width=\"100%\">';
		var productsCategoryBlock = document.querySelector('.products-category-block > h3')
		productsCategoryBlock.innerHTML = '';
		productsCategoryBlock.innerHTML += '<img src=\"images/allotted.png\" width=\"100%\">';
	}
}

/*
function cartHolder() {
var div = document.body.children[0];

  div.style.cssText="color: red !important; \
    background-color: yellow; \
    width: 100px; \
    text-align: center; \
    blabla: 5; \
  ";
*/
/*
var check1 = true;
var check2 = true;

function cartHolder() {
    var vartholder = document.getElementById('cart-holder');
    if(check1)
    {
		vartholder.style.opacity = "1";
		vartholder.style.visibility = "visible";
		check1=false;
		return;
	}
	if(!check1)
	{
		vartholder.style.opacity = "0";
		vartholder.style.visibility = "hidden";
		check1=true;
		return;
	}
    
}
function compareHolder() {

	var compholder = document.getElementById('compare-holder');
	if(check2)
    {
    	compholder.style.opacity = "1";
		compholder.style.visibility = "visible";
		check2=false;
		return;
    }

    if(!check2)
    {
    	compholder.style.opacity = "0";
		compholder.style.visibility = "hidden";
		check2=true;
		return;
    }
}
*/
var check3 = true;

function bigmenu() {

	var hmenu = document.getElementById('h-menu-under');
	if(check3)
    {
    	hmenu.style.display = "block";
		check3=false;
		return;
    }

    if(!check3)
    {
    	hmenu.style.display = "none";
		check3=true;
		return;
    }
}

/*
var click1 = document.getElementsByClassName('button-click')[0].onclick = function() {
     alert('Клик')
}
var click2 = document.getElementsByClassName('button-click')[1].onclick = function() {
     alert('Клик')
}*/


