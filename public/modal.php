<?php ?>
<div class="modalBackground" id="modal">
	<div class="modalContent rounded bg-white">
		<div class="px-3 pt-3 d-flex justify-content-between">
			<span>
				<strong id="modalContentTitle">EGESTAS TORTOR VULPUTATE</strong>
			</span>
			<span class="material-symbols-outlined" style="cursor:pointer;" onclick="hideModal();">
				close
			</span>
		</div>
		<hr>
		<div class="thumbnail text-center">
			<a href="">
				<img src="curso-img.jpg" alt="Lights" style="width:90%">
			</a>
			<div class="caption py-3 px-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a libero nec lectus posuere porta. Mauris molestie quam ut libero hendrerit imperdiet rutrum ut nisi</p>
			</div>
			<a href="" class="mb-3 px-3 btn btn-primary rounded-pill">INSCREVA-SE</a>
		</div>
	</div>
</div>

<style>
.modalBackground{
	width:100vw;
	height:100vh;
	background:rgba(0,0,0,0.5);
	position:fixed;
	top:0px;
	left:0px;
	z-index:2000;
	display:none;
	justify-content:center;
	align-items:center;
}

.modalContent{
	width:90%;
	max-width:800px;
}
</style>
<script>
function showModal(){
	document.getElementById("modal").style.display="flex";
}
function hideModal(){
	document.getElementById("modal").style.display="none";
}
	
</script>
<?php ?>