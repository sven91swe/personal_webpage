<?php
include 'front/header.php';

?>

<?php
$var=$_GET["p"];

if($var=="edu"){
    include 'front/education.php';
}elseif($var=="work"){
    include 'front/work.php';
}elseif($var=="projects"){
    include 'front/activitiesAndProjects.php';
}elseif($var=='other'){
    include 'front/other.php';
}elseif($var=='carND'){
    include 'front/carND.php';
}else {
    include 'front/start.php';
}

?>




<?php
include 'front/ending.php';

?>