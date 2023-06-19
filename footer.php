        <footer id="me">
            <div class="me-text">kazimir.p@leafindustry.space</div>
            <div class="up" id="up">
                <a href="#nav"><i class="fa-solid fa-arrow-up-long"></i></a>
            </div> 
        </footer>
        <script>
document.getElementById('mmenu').addEventListener('click', checkNav);
window.addEventListener("keyup", function(e) {
if (e.keyCode == 27) closeNav();
}, false);
function checkNav() {
if (document.body.classList.contains('mmenu-active')) {
closeNav();
} else {
openNav();
}
}
function closeNav() {
document.body.classList.remove('mmenu-active');
}
function openNav() {
document.body.classList.add('mmenu-active');
}
</script>
        </body>
</html>