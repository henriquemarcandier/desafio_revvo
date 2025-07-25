<?php require_once('cabecalho.php');
$sql = "SELECT * FROM cursos";
$queryCursos = mysqli_query($con, $sql);
$rowsCursos = mysqli_num_rows($queryCursos);
$sql = "SELECT * FROM slideshow";
$querySlideshow = mysqli_query($con, $sql);
$rowsSlideshow = mysqli_num_rows($querySlideshow);
?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-6">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold"><?=$rowsCursos?></div>
                            </div>
                            <div class="text-sm font-medium text-gray-400">Cursos</div>
                        </div>
                    </div>
                    <a href="cursos.php" class="text-[#f84525] font-medium text-sm hover:text-red-800">Ver</a>
                </div>
                <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                    <div class="flex justify-between mb-4">
                        <div>
                            <div class="flex items-center mb-1">
                                <div class="text-2xl font-semibold"><?=$rowsSlideshow?></div>
                            </div>
                            <div class="text-sm font-medium text-gray-400">Slideshow</div>
                        </div>
                    </div>
                    <a href="slideshow.php" class="text-[#f84525] font-medium text-sm hover:text-red-800">Ver</a>
                </div>
            </div>
        </div>
        <?php require_once('rodape.php');?>