
<!-- MILESTONE 1 -->

<?php 

$textOne = 'lorem ipsum diet sok ipest ucisar lam fux lames nieap das die dum ';

// echo($textOne);

?>

<h1> TESTO NORMALE </h1>

<p>
    <?php echo($textOne); ?>
</p>
<span>
    La frase contiene <?php echo(strlen($textOne)); ?> caratteri
</span>

<!-- MILESTONE 2 -->

<?php 

//$textCensored = 

$bannedWord = $_GET['censored'];
// echo($textOne);

?>

<h1> TESTO CENSURATO </h1>

<p>
    <?php echo($bannedWord); ?>
</p>
<span>
    La frase contiene <?php echo(strlen($bannedWord)); ?> caratteri
</span>
