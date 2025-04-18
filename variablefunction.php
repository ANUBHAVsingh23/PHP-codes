<?php
function greet(){
    echo "Hello, World!";
}
$fun = "greet";
$fun(); 
?>
<?php
function add($a, $b){
    return $a + $b;
}
$operation = "add";
echo $operation(5, 10);
?> 