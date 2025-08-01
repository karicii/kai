document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('dot-grid-container');

    if (!container) {
        return;
    }

    const dotSize = 2;
    const dotSpacing = 24;

    container.innerHTML = '';

    const containerRect = container.getBoundingClientRect();
    const cols = Math.floor(containerRect.width / dotSpacing);
    const rows = Math.floor(containerRect.height / dotSpacing);

    container.style.setProperty('--cols', cols);
    container.style.setProperty('--rows', rows);

    for (let i = 0; i < rows; i++) {
        for (let j = 0; j < cols; j++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            const delay = (i * 0.1) + (j * 0.05);
            dot.style.animationDelay = `${delay}s`;
            container.appendChild(dot);
        }
    }
});