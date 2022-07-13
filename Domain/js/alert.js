let html = document.getElementById('html');
let logReg = document.getElementById('logReg');
let reg = document.getElementById('reg');
let pass = document.getElementById('pass');
let pass2 = document.getElementById('pass2');
let openEye = document.getElementById('openEye');
let closeEye = document.getElementById('closeEye');

function alertLog() {
	logReg.style.display = 'flex';
	logReg.style.justifyContent = 'center';
	logReg.style.alignItems = 'center';
	html.style.overflowY = 'hidden';
}

function exitLog() {
	logReg.style.display = 'none';
	html.style.overflowY = 'scroll';
}

function alertReg() {
	logReg.style.display = 'none';
	reg.style.display = 'flex';
	reg.style.justifyContent = 'center';
	reg.style.alignItems = 'center';
}

function exitReg() {
	reg.style.display = 'none';
	html.style.overflowY = 'scroll';
}

function onBackReg() {
	reg.style.display = 'none';
	logReg.style.display = 'flex';
}

function showPass() {
	pass.type = 'text';
	pass2.type = 'text';
	openEye.style.display = 'none';
	closeEye.style.display = 'inline';
	closeEye.style.marginLeft = '8px';
}

function hidePass() {
	pass.type = 'password';
	pass2.type = 'password';
	openEye.style.display = 'inline';
	closeEye.style.display = 'none';
}