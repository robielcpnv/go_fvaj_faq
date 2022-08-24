<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <title>Job Jeunes</title>
</head>
<body>
   <?php 
   if(file_exists('information.json'))
   {
      $filename = 'information.json';
      $data = file_get_contents($filename);
      $info = json_decode($data, true);
           
      echo '<pre>';
      print_r($info["Job Jeunes"]);
      echo  '</pre>';
   }
   else{
      echo "<h3 class='text-danger'>JSON file Not found</h3>";
   }

   ?>
     <footer class=" body-font bg-neutral-900 text-white">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">

      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium tracking-widest text-sm mb-3">NOM DE L'ENTREPRISE</h2>
          <nav class="list-none mb-10">
            <p>Fondation Valaisanne<br/>Action Jeunesse<br/>Rue des Tonneliers 5<br/>1950 Sion</p>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium tracking-widest text-sm mb-3">PRODUITS</h2>
          <nav class="list-none mb-10">
            <li>
              <div class="flex">
                <i class="fas fa-globe mr-3"></i>
                <a href="/index.php" class=" hover:text-gray-800">go.fvaj.ch</a>
              </div>
            </li>
            <li>
              <div class="flex">
                <i class="fas fa-globe mr-3"></i>
                <a href="/glpi/" class=" hover:text-gray-800">GLPI</a>
              </div>
            </li>
            <li>
              <div class="flex">
                <i class="fas fa-globe mr-3"></i>
                <a href="/faq/" class=" hover:text-gray-800">FAQ</a>
              </div>
            </li>
            <li>
              <i class="far fa-file-pdf mr-3" aria-hidden="true"></i>
              Flyer 
              <a href="eaia_en.pdf" class=" hover:text-gray-800">[EN]</a> 
              <a href="eaia_fr.pdf" class=" hover:text-gray-800">[FR]</a> 
              <a href="eaia_it.pdf" class=" hover:text-gray-800">[IT]</a>
            </li>
            <li>
              <i class="fab fa-facebook-f mr-3"></i>
              <a href="https://www.facebook.com/pg/actionjeunesse">FaceBook</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium tracking-widest text-sm mb-3">LIENS UTILES</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="/releasenotes.php" class=" hover:text-gray-800">Release Notes</a>
            </li>
            <li>
              <a href="/faq" class=" hover:text-gray-800">F.A.Q.</a>
            </li>
            <li>
              <a href="/u_register.php" class=" hover:text-gray-800">Enregistrement</a>
            </li>
            <li>
              <a href="/eaia_fr.php" class=" hover:text-gray-800">Utilisations</a>
            </li>
            <li>
              <a href="/slide/" class=" hover:text-gray-800">Slide</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium  tracking-widest text-sm mb-3">CONTACTS</h2>
          <nav class="list-none mb-10">
            <li>
             <div class="flex">
              <i class="fas fa-home mr-3"></i>             
              <a class=" hover:text-gray-800" href="https://goo.gl/maps/MiNPpYPHXyPzdUm56">5, Rue de Tonneliers, Sion CH</a>
             </div>
            </li>
            <li>
              <div class="flex">
                <i class="fas fa-envelope mr-3"></i>
                <a class=" hover:text-gray-800" href="mailto:info@fvaj.ch?subject=HelpDesk">FVAJ.CH</a>
              </div>
            </li>
            <li>
              <div class="flex">
                <i class="fas fa-phone mr-3"></i>              
                <a class="hover:text-gray-800" href="tel:+41273211111">+41 27 321 11 11</a>
              </div>
            </li>
            <li>
              <div class="flex">
                <i class="fab fa-skype mr-3"></i>
              <a class=" hover:text-gray-800" href="skype:xhtml2?call">FVAJ.CH</a>
              </div>
            </li>
            <li>
              <div class="flex">
                <i class="fab fa-whatsapp mr-3"></i>
              <a class=" hover:text-gray-800" href="https://api.whatsapp.com/send?phone=41273211111">fvaj.ch</a>
              </div>
            </li>
          </nav>
        </div>
      </div>
    </div>
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-sm text-center sm:text-left">
          <span class="font-bold">© -1-Computer</span>
          <a href="https://1computer.info/" rel="noopener noreferrer" class=" ml-1" target="_blank">SaaS Web Consulting & Development Services 1985 - 2021 V21.0508</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://t.me/eaiaio">
            <i class="fab fa-telegram"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://www.facebook.com/1computer.info/">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://twitter.com/xhtml">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://www.pinterest.ch/1computer_info/">
            <i class="fab fa-pinterest"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://www.youtube.com/playlist?list=PLGk3gj6yMLvEdb-QhJ2zPt9BybUuL0jP3">
            <i class="fab fa-youtube"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://hangouts.google.com/group/5uuV3WZKipaG3d95A">
            <i class="fab fa-google"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://www.linkedin.com/in/1computer/">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://www.xing.com/profile/Raoul_Mengis">
            <i class="fab fa-xing"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://ch.viadeo.com/fr/profile/raoul.mengis">
            <i class="fab fa-viadeo"></i>
          </a>
          <a class="btn-floating btn-sm rgba-white-slight mr-3 ptb-3" href="https://fr.slideshare.net/xhtml">
            <i class="fab fa-slideshare"></i>
        </a>
        </span>
      </div>
  </footer>
</body>
</html>