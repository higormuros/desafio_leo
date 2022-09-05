<?php 

include "../controladores/selecionar.php";
$cursos=$resultado;
$numCurso=1;

foreach($cursos as $curso){ 
    if($numCurso==1){
        echo "<div class='row'>";
    } 
?>



<div class="col-md-3 mb-4 text-center">
    <div class="card">
        <img src="<?php echo $curso["imagem"]?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $curso["titulo"]?></h5>
            <p class="card-text"><?php echo $curso["descricao"]?></p>
            <div class="d-grid">
                <a class="btn btn-success rounded-pill" href="<?php echo "https://".$curso["link"]?>" target="_blank">VER CURSO</a>
            </div>
        </div>
    </div>
</div>

<?php 
    if($numCurso==4){
        echo "</div>";
        $numCurso=1;
    } else{
        $numCurso++;
    }
    
} 

if($numCurso==1){
    echo "<div class='row'>";
} 
?>

    <div class="col-md-3 mb-4 text-center">
        <div class="card bg-light py-5" style="height:100%">
            <div class="card-body">
                <div>
                    <span class="material-symbols-outlined text-secondary" style="font-size:100px">
                        create_new_folder
                    </span>
                </div>
                <div class="d-grid">
                    <a href="#" class="btn btn-outline-secondary rounded-pill">ADICIONAR CURSO</a>
                </div>
            </div>
        </div>
    </div>

</div>