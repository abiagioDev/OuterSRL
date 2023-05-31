<div class="popupsiae">
<div class="popup" id="popup">
    <img src="../images/siae.jpg" />
    <button type="button" onclick="closePopup()">OK</button>  
</div>
</div>
<script>
let popup = document.getElementById("popup");

setTimeout(() => openPopup(), 500);

function openPopup(){
popup.classList.add("open-popup");
}
function closePopup(){
popup.classList.remove("open-popup");
}
</script>