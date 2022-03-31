<?php

include __DIR__ .'/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajax Dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>

    <div id="app">

          <header>
            <figure class="logo">
              <img src="https://raw.githubusercontent.com/matteopelusi7/vue-dischi/a16e585ab6e8f27f7b22c6e28dae7706384e4136/src/assets/img/logo.svg" alt="">
            </figure>
          </header>

          <main>

            <div class="container">
        
              <ul class="card-wrapper">

                <?php

                foreach ($database as $dischi) :

                    ?>
                    <li class="card-item">
    
                        <div class="img-container">
                          <figure class="img-wrapper">
                    <?php          
                            echo "<img src='". $dischi['poster']. "'>"; 
                    ?>
                          </figure>
                        </div>
                    
                        <div class="card-info">
                    <?php
                            echo "<h3 class='title-card'>". $dischi['title']."</h3>";
                            echo "<p class='subtitle-card'>". $dischi['author']."</p>"; 
                            echo "<p class='subtitle-card'>". $dischi['year']."</p>"; 
                    ?>
                        </div>
                    
                    </li>
                    <?php

                endforeach
        
                ?>

              </ul>
        
            </div>
        
          </main>

    </div>

    <script src="app.js"></script>
    
</body>
</html>