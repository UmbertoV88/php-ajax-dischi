<?php include "dischi.php";?>
<!DOCTYPE html>
 <html lang="it" dir="ltr">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="style.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
         <script src="main.js" charset="utf-8"></script>
     <title></title>
     </head>
     <body>
         <header></header>
         <main>

             <select class="genere">
                 <option value= " " selected> Scegli il genere  </option>
                 <option value="rock"> Rock </option>
                 <option value="pop"> Pop </option>
                 <option value="jazz"> Jazz </option>
                 <option value="metal"> Metal </option>
             </select>
             <div class="container">
                 <?php foreach ($dischi as $key => $value) { ?>
                 <div class="scheda-album" data-genere = <?php echo $value ['genre'];?>>
                     <img src=<?php echo $value ['poster'];?> alt="Copertina Album <?php echo $value ['title'];?>">
                     <p> <?php echo $value ['title'];?></p>
                     <small> <?php echo $value ['author'];?></small>
                     <small> <?php echo $value ['year'];?> </small>

                 </div>
                 <?php } ?>
             </div>

         </main>

     </body>
 </html>
