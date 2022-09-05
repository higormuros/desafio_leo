

<?php 
$cursos=array(
    "Excel",
    "VBA",
    "SQL",
    "PHP",
    "JS",
    "Bootstrap",
    "MariaDB"
); //buscar no banco

$numCurso=1;

foreach($cursos as $curso){ 
    if($numCurso==1){
        echo "<div class='row'>";
    } 
?>



<div class="col-md-3 mb-4 text-center">
    <div class="card" style="width: 98;">
        <img src="curso-img.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-grid">
                <a class="btn btn-success rounded-pill" onclick="showModal(1)" style="cursor:pointer;">VER CURSO</a>
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
        <div class="card bg-light py-5" style="width: 98%; height:100%">
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