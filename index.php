<?php
require('api.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de Moeda</title>
</head>

<body>
    <div id='container'>
        <h1>Conversor de Moeda</h1>

       <form action="#" method="post">
       <select name="fromCurrency">
            <?php $var = new Currency();
            $array = $var->getCurrencyId();

            foreach ($array as $currency) :
            ?>

                <option value="<?php echo $currency ?>"><?php echo $currency ?></option>


            <?php endforeach; ?>


        </select>
        
        <input type="number" name="amount" placeholder="Valor a conveter">

        <select name="toCurrency" id="">
            <?php $var = new Currency();
            $array = $var->getCurrencyId();

            foreach ($array as $currency) :
            ?>

                <option value="<?php echo $currency ?>"><?php echo $currency ?></option>


            <?php endforeach; ?>


        </select>
        <br>
        <button type="submit">Enviar</button>
       </form>

       <h4>Resultado:</h4>

       <?php 

        $amount = $_POST['amount'];
        $fromCurrency = $_POST['fromCurrency'];
        $toCurrency = $_POST['toCurrency'];
       
        $obj = new Currency();
        $resultConvert = $obj->convertCurrency($amount, $fromCurrency, $toCurrency);     

       ?>

        <p>
            <?php $resultConvert ?>
        </p>


    </div>
    </div>

</body>

</html>