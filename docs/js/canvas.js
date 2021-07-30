function drawBalloon(x, y) {
	var canvas = document.getElementById('canvas-balloon');
	var ctx = canvas.getContext('2d');
	ctx.save();
	ctx.clearRect(0, 0, 90, 400);

	var png = new Image();
	png.src = './assets/Globo.png';
	ctx.drawImage(png, x, y, 50, 75);
	ctx.restore();
	y -= 2;

	var loopTimer = setTimeout('drawBalloon(' + x + ',' + y + ')', 30); // ejecuta la animación en un timpo determinado

	if (y === 20) {
		stop();
		setTimeout(() => {
			setTimeout('drawBalloon(' + x + ',' + 20 + ')', 20);
		}, 3000);
	}

	if (y === -74) {
		stop();
		drawBalloon(20, 300);
		// return stop();
	}

	function stop() {
		if (loopTimer) {
			clearTimeout(loopTimer);
		}
	}
}

window.onload = function () {
	setTimeout(() => {
		drawBalloon(20, 300);
	}, 3000);
};
