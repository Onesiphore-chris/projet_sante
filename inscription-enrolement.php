<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style-2.css">
</head>
<body>
    <form action="inscription-traitement.php" method="POST">
      <h1> Table Des Employés</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
          <div class="left">
             <div class="group">
                  <label>Nom</label>
                  <input type="text">
                  <i class="fa-solid fa-user"></i>
             </div>
             <div class="group">
                  <label>Prénom</label>
                  <input type="text">
                  <i class="fa-solid fa-user"></i>
             </div>
             <div class="group">
                  <label>Salaire</label>
                  <input type="text">
                  <i class="fa-solid fa-money-check-dollar-pen"></i>
             </div>
             <div class="group">
                  <label> Votre Adresse Email</label>
                  <input type="text">
                  <i class="fa-solid fa-envelope"></i>
             </div> 
          </div>
        </div>
            <div class="right">
               <div class="group">
                   <label> Message</label>
                   <textarea></textarea>
               </div>
            </div>
        <div class="footer-formulaire">
            <button>s'incrire</button>
        </div>
    </form>

</body>
</html>