function toggleRatingForm ()
{
	var formelement = document.getElementById('ratingform');
	var switchelement = document.getElementById('ratingswitch');
	if (formelement.style.visibility == 'collapse')
	{
		switchelement.style.visibility = 'collapse';
		switchelement.style.height = '0px';
		formelement.style.visibility = 'visible';
		formelement.style.height = '170px';
	}
	/* captcha image: replace path to empty captcha (set by default in html) with path to dynamically generated captcha - modify path here */
	document.getElementById('captcha_image').src = 'media/img/rand.php';
}