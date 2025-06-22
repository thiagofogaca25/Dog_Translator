document.querySelector('form').addEventListener('submit', function () {
    const sound = document.getElementById('barkSound');
    if (sound) sound.play();
});
