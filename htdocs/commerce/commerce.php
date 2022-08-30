<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>
<body>
  <header class="body-font bg-zinc-800 text-white flex py-3 md:flex-row items-center">
      <a class="flex justify-between title-font font-medium items-center mb-4 md:mb-0 " href="/go.php">
        <img src="https://go.fvaj.ch/img/favicon-228x228.png" title="Logo http://go.fvja.ch" class="p-0.5 float-left" alt="Logo GO" width="35" height="35">
        <span class="text-xl">GO</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 flex flex-wrap items-center text-base justify-center">
        <div class="dropdown relative">
            <a class=" flex mr-5 hover:text-gray-300 text-gray-400" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <p>Utilisateur</p>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
              </svg> 
            </a>
          <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"aria-labelledby="dropdownMenuButton9">
            <li> <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Action</a></li>
            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Another action</a></li>
            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Something else here</a></li>
          </ul>
        </div>
        <div class="dropdown relative">
            <a class="flex mr-5 hover:text-gray-300 text-gray-400" href="#" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <p>Entrez</p>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
              </svg> 
            </a>
          <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"aria-labelledby="dropdownMenuButton9">
            <li> <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Action</a></li>
            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Another action</a></li>
            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Something else here</a></li>
          </ul>
        </div>
        <div class="dropdown relative">
            <a class="flex mr-2 hover:text-gray-300 text-gray-400" href="php/exit.php" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <p>Quitter<span class="sr-only">(current)</span></p>
              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
              </svg>
            </a>
          <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"aria-labelledby="dropdownMenuButton9">
            <li> <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Action</a></li>
            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Another action</a></li>
            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Something else here</a></li>
          </ul>
        </div>
        <div class="dropdown relative">
          <a class="hover:text-gray-900 text-2xl"href="u_update.php">go.fvja.ch</a>
        </div>
      </nav>
      <form class="flex ">
        <div class="inline-flex relative mr-8 md:w-full lg:w-full">
          <input type="text" class="form-control block w-full px-3 py-1.5 w-60 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search"/>
        </div>
        <button class="inline-flex hover:text-white text-green-600 mr-4 border border-green-600 bg-black-500  py-1 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Search</button>
      </form>
      
      <a class="title-font font-medium items-center inline-block" href="/go.php">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fswissserverhosting.com%2Fwp-content%2Fuploads%2F2018%2F03%2Fswissserverhosting-01-1.png&f=1&nofb=1" title="Swiss Switzerland Hosting" class="p-0.5 float-left" alt="Switzerland Swiss Hosting" width="35" height="35">
      </a>
  </header>

  <?php 
   if(file_exists('information.json'))
   {
      $filename = 'information.json';
      $data = file_get_contents($filename);
      $info = json_decode($data, true);
           
      echo '<pre>';
      print_r($info["information"]);
      echo  '</pre>';
   }
   else{
      echo "<h3 class='text-danger'>JSON file Not found</h3>";
   }

?>
  <main class="bg-[url('https://go.fvaj.ch/img/banner.jpg')] bg-cover border border-white">
    <div class="container pb-16">
      <div class="d-flex flex-column bd-highlight m-16 ">
          <div class="" style=" background-image: linear-gradient(rgba(0, 255, 0, 0.5), rgba(255, 255, 255, 0.5)); height:auto; min-height: 10em; padding:3px; margin:3px;">
            <h1 class="display-4 text-center font-normal text-5xl pb-5">F.A.Q. <a href="../go.php" class="text-gray-400 border-b-4 border-gray-400 -mb-6">&#x1F3E0;&#x2303;</a></h1>
              <a href="./fvaj/fvaj.php" class="w-full text-white bg-blue-500 rounded-t-lg flex p-2 title-font font-medium border border-black-100" aria-current="true"> Fondation FVAJ.CH</a>
              <a href="./pre_app/pre-app.php" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 flex p-2 title-font font-medium border border-black-100">Pré-Apprentissage</a>
              <a href="./commerce/commerce.php" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 flex p-2 title-font font-medium border border-black-100">Employé Commerce</a>
              <a href="./logistique/logistique.php" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 flex p-2 title-font font-medium border border-black-100">Logistique</a>
              <a href="./media/media.php" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 flex p-2 title-font font-medium border border-black-100">Médiamaticien</a>
              <a href="./informatique/informatique.php" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 flex p-2 title-font font-medium border border-black-100">Informatique</a>
              <a href="./go_job/go_job.php" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 flex p-2 title-font font-medium border border-black-100">Go-Job</a>
              <a href="#" class="w-full bg-white text-gray-800 hover:bg-slate-100 hover:text-gray-600 active:hover:text-gray-400 rounded-b-lg flex p-2 title-font font-medium disabled border border-black-100" tabindex="-1" aria-disabled="true">Job Jeunes</a>
        </div>
    </div>
  </main>
  <hr class="bg-white m-4">
  <footer class="body-font bg-zinc-800 text-white">
    <div class="container px-5 py-12 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">

      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium tracking-widest text-lg mb-8">NOM DE L'ENTREPRISE</h2>
          <nav class="list-none mb-10 -ml-10 text-center">
            <p>Fondation Valaisanne<br/>Action Jeunesse<br/>Rue des Tonneliers 5<br/>1950 Sion</p>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium tracking-widest text-lg mb-8">PRODUITS</h2>
          <nav class="list-none mb-10">
            <li>
              <div class="flex mb-3">
                <i class="fas fa-globe mr-3"></i>
                <a href="/index.php" class=" hover:text-gray-800">go.fvaj.ch</a>
              </div>
            </li>
            <li>
              <div class="flex mb-3">
                <i class="fas fa-globe mr-3"></i>
                <a href="/glpi/" class=" hover:text-gray-800">GLPI</a>
              </div>
            </li>
            <li>
              <div class="flex mb-3">
                <i class="fas fa-globe mr-3"></i>
                <a href="/faq/" class=" hover:text-gray-800">FAQ</a>
              </div>
            </li>
            <li>
             <div class="flex mb-3">
              <i class="far fa-file-pdf mr-3" aria-hidden="true"></i>
              Flyer 
              <a href="eaia_en.pdf" class=" hover:text-gray-800">[EN]</a> 
              <a href="eaia_fr.pdf" class=" hover:text-gray-800">[FR]</a> 
              <a href="eaia_it.pdf" class=" hover:text-gray-800">[IT]</a>
             </div>
            </li>
            <li>
              <div class="flex mb-3">
              <i class="fab fa-facebook-f mr-3"></i>
              <a href="https://www.facebook.com/pg/actionjeunesse">FaceBook</a>
              </div>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium tracking-widest text-lg mb-8">LIENS UTILES</h2>
          <nav class="list-none mb-10">
            <li class=" mb-3">
              <a href="/releasenotes.php" class=" hover:text-gray-800 py-4">Release Notes</a>
            </li>
            <li class=" mb-3">
              <a href="/faq" class=" hover:text-gray-800 mb-3">F.A.Q.</a>
            </li>
            <li class=" mb-3">
              <a href="/u_register.php" class=" hover:text-gray-800">Enregistrement</a>
            </li>
            <li class=" mb-3">
              <a href="/eaia_fr.php" class=" hover:text-gray-800">Utilisations</a>
            </li>
            <li class=" mb-3">
              <a href="/slide/" class=" hover:text-gray-800">Slide</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium  tracking-widest text-lg mb-8">CONTACTS</h2>
          <nav class="list-none mb-10">
            <li>
             <div class="flex  mb-3">
              <i class="fas fa-home mr-3"></i>             
              <a class=" hover:text-gray-800" href="https://goo.gl/maps/MiNPpYPHXyPzdUm56">5, Rue de Tonneliers, Sion CH</a>
             </div>
            </li>
            <li>
              <div class="flex mb-3">
                <i class="fas fa-envelope mr-3"></i>
                <a class=" hover:text-gray-800" href="mailto:info@fvaj.ch?subject=HelpDesk">FVAJ.CH</a>
              </div>
            </li>
            <li>
              <div class="flex mb-3">
                <i class="fas fa-phone mr-3"></i>              
                <a class="hover:text-gray-800" href="tel:+41273211111">+41 27 321 11 11</a>
              </div>
            </li>
            <li>
              <div class="flex mb-3">
                <i class="fab fa-skype mr-3"></i>
              <a class=" hover:text-gray-800" href="skype:xhtml2?call">FVAJ.CH</a>
              </div>
            </li>
            <li>
              <div class="flex mb-3">
                <i class="fab fa-whatsapp mr-3"></i>
              <a class=" hover:text-gray-800" href="https://api.whatsapp.com/send?phone=41273211111">fvaj.ch</a>
              </div>
            </li>
          </nav>
        </div>
      </div>
    </div>
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row border-t border-gray-600">
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
