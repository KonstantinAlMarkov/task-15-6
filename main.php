<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body> 
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>   
    <div>
    <div class="flex-container">
        <div class="about_me">         
            <h1>  <?php  echo $p  ?> </h1>
           <div class="data">
               <div class="myImg">
                   <?php  echo '<img src="./img/imgPhot.png">'; ?>                    
               </div>

               <div class="fullname">
                   <p> Меня зовут 
                   <?php echo $name, ' ', $surname . '<br>'; 
                         echo 'город', ' ', $city; ?>                                      
                   </p> 
          
                   <p> Мне
                   <?php  echo $age;   ?>          
                   лет </p>
                   <p> Мы научились создавать переменные </p>
                   <p> Изучили простые операции с ними </p>
               </div>
           </div>
        </div>    
    <div class="flex-container"> 
            <section class="article">
                <h2>Что я изучил</h2>
                <div class="knowledge">
                                   
                                   <?php  include 'knowledge.inc.php'; ?>
                                   <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                                      
                                   <?php
                                       $a = 10;
                                       $b = 20;
                                       $c = $a + $b;
                                       echo $c;
                                   ?>   <br>                
                                    <?php
                                       echo $d;
                                   ?> 
               
                </div>
                <h2>Вывод чисел</h2>
                <div class = "intOutput">
                    <?php echo "Десятеричная система: ".$testInt ?></br>
                    <?php echo "Двоичная система: ".decbin ($testInt) ?></br>     
                    <?php echo "Восьмеричная система: ".decoct ($testInt) ?></br>    
                    <?php echo "Шестнадцатеричная система: ".dechex ($testInt) ?></br> 
                    <?php echo "Тип исходной переменной: ".gettype($testInt)  ?></br>  
                </div>    
                <h2>Работа со строками</h2>                       
                <div class = "stringOutput">
                    <?php $hereDOC = <<<EOD
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas. 
                        At negat Epicurus-hoc enim vestrum lumen estquemquam, qui honeste non vivat, iucunde posse vivere. 
                        EOD; 
                        $nowDOC = <<<'EOD'
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas. 
                        At negat Epicurus-hoc enim vestrum lumen estquemquam, qui honeste non vivat, iucunde posse vivere.                    
                        EOD;
                        $hereDOCwithParam = <<<EOD
                        $testString Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas. 
                        At negat Epicurus-hoc enim vestrum lumen estquemquam, qui honeste non vivat, iucunde posse vivere. 
                        EOD; 
                        $nowDOCwithParam = <<<'EOD'
                        $testString Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Atque hoc loco similitudines eas, quibus illi uti solent, dissimillimas proferebas. 
                        At negat Epicurus-hoc enim vestrum lumen estquemquam, qui honeste non vivat, iucunde posse vivere.                    
                        EOD; 
                    ?>
                    <?php echo 'Вывод параметра в одинарных кавычках \''.'$testString'.'\' - параметр вывелся значением' ?></br>   
                    <?php echo 'Вывод параметра в двайных кавычках "'."$testString".'"' ?></br>    
                    <?php echo 'Вывод heredoc: '."$hereDOC" ?></br> 
                    <?php echo 'Вывод nowdoc: '."$nowDOC" ?></br>
                    <?php echo 'Вывод heredoc cо вставленным параметром в начало: '."$hereDOCwithParam" ?></br>
                    <?php echo 'Вывод nowdoc со вставленным параметром в начало: '."$nowDOCwithParam" ?></br>
                    <?php echo 'Итого: в "" - возможен вывод параметра, heredoc = ""' ?>                                    
                </div>   
                <h2>Вызов GLOBALS</h2>  
                <div class = "globals">
                    <?php
                        function multiply(){
                            $start = microtime(true);
                            $GLOBALS['glRes']=$GLOBALS['glOne']*$GLOBALS['glTwo'];
                            echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec. <br>'; 
                        }
                        multiply();
                        echo "Результат 5x5=".$glRes;
                    ?>
                </div>     
                <h2>Волшебные константы</h2>  
                <div class = "globals">
                    <?php
                        echo "DIR: ".__DIR__;
                    ?>
                </div>                    
                <h2>Вывод flush c циклом и логическим оператором</h2>
                <div>
                <?php
                    $start = microtime(true);
                    for($i = 0; $i < 105; $i++)
                    {
                        echo $i;
                        if($i!==0 && $i%25===0){
                            echo '<br>';
                        }
                    }
                    flush();
                    sleep(1);
                    echo '<br>';
                    echo 'Время выполнения скрипта: ' . (microtime(true) - $start) . ' sec. <br>'; 
                ?>
                </div>
            </section>
        </div>
            <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
