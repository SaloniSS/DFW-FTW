function logout() {
	var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut();
    window.location = '/exit';
}

function onLoad() {
	gapi.load('auth2', function() {
		gapi.auth2.init().then(logout);
	});
}