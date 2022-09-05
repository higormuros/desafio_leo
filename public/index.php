<!doctype html>
<html lang="pt-br">
	<head>
        <?php include "head-links.php"; ?>
    </head>

	<body style="font-family: 'Roboto', sans-serif;">
        <?php include "top.php"; ?>
        <?php include "slide.php"; ?>
        <div class="bg-light">
            <div class="container py-5">
                <strong class="text-secondary">MEUS CURSOS</strong><hr>
                <div class="py-2">
                    <?php include "carregar-cursos.php"; ?>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>
        <?php include "modal.php"; ?>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
		crossorigin="anonymous"></script>
	</body>
</html>