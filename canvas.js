const canvas = document.getElementById('electricCarCanvas');
const ctx = canvas.getContext('2d');

// Body
ctx.fillStyle = '#4CAF50';
ctx.fillRect(50, 50, 300, 100);

// Roof
ctx.fillStyle = '#333';
ctx.fillRect(100, 30, 200, 40);

// Windows
ctx.fillStyle = '#ADD8E6';
ctx.fillRect(110, 40, 80, 30);
ctx.fillRect(210, 40, 80, 30);

// Wheels
ctx.beginPath();
ctx.arc(100, 150, 20, 0, Math.PI * 2, true);
ctx.fillStyle = '#333';
ctx.fill();

ctx.beginPath();
ctx.arc(300, 150, 20, 0, Math.PI * 2, true);
ctx.fillStyle = '#333';
ctx.fill();
