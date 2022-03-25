<?php include ("header.php"); 
// ON STOCKE LES CHAMPS DU FORMULAIRE DANS DES VARIABLES
$firstname = isset($_POST['firstname']);
$lastname = isset($_POST['lastname']);
$email = isset($_POST['email']);
$contact = isset($_POST['contact']);
$destination = isset($_POST['destination']);
$numberOfPersons = isset($_POST['numberPersons']);
$numberOfNight = isset($_POST['numberNight']);
$budget = isset($_POST['budget']);
$message = isset($_POST['message']);
// ON PREPARE LA VARIABLE QUI CONTIENDRA LES RESULTATS DU TRAITEMENT DU FORMULAIRE
$result = '';
// ON VERIFIE QUE LE FORMULAIRE EST ENVOYE EN METHOD POST !
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // ON VERIFIE SI LES CHAMPS DU FORMULAIRE ONT ETE SOUMIS
    if($firstname || $lastname || $email || $contact){
        // SI L'UN DES CHAMPS SOUMIS EST VIDE
        if($firstname === '' || $lastname === '' || $email === '' || $contact === ''){
            $result .= 'Veuillez compléter tous les champs obligatoires du formulaire';
        } else { 
            // ON VERIFIE SI LE PRENOM NE CONTIENT PAS DE CARACTERES INTERDITS
            if(!preg_match("/^[a-zA-Z-' ]*$/",$firstname)){
                $result .= "Votre prénom contient des caractères non autorisés";
            } 
                
            // ON VERFIE SI LE NOM DE FAMILLE NE CONTIENT PAS DE CARACTERES INTERDITS
            if(!preg_match("/^[a-zA-Z-' ]*$/",$lastname)){
                $result .= "Votre nom de famille contient des caractères non autorisés";
            }
            
            // SINON ON VERIFIE QUE LE FORMAT DE L'ADRESSE E-MAIL EST CORRECT
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $result .= 'Email renseigné non valide !';
            } 

            // PUIS ON VERIFIE QUE LE FORMAT DU NUMERO DE TELEPHONE EST AUSSI CORRECT
            //$regex = '/^(\+33\s[1-9]{8})|(0[1-9]\s{8})$/';
            //if(preg_match($regex, $contact)){ 
               // $result = 'Votre demande a bien été envoyée. Je vous répondrai dans les plus brefs délais.<br />A bientot !';
            //} else { 
               // $result = 'Veuillez saisir un numéro de téléphone au format correct.';
           // }
                
        }
    }
    if($result === ''){
        $result = 'Votre demande a bien été envoyée. Je vous répondrai dans les plus brefs délais.<br />A bientot !';
    }
}
?>
    <div id="form-result"><?= $result; ?></div> 
    <main id="content" class="content-form">   
        <section id="form">
            <h2><i class="fa-solid fa-file-contract"></i>Réservation</h2>
            <div class="layer-form">

              <form class="reservation" method="POST">
                <div class="nom">
                    <label for="lName">Nom</label><br>
                    <input type="text" id="lname" name="lastname" size="30">
                    <br></br>
                </div>
                <div class="prenom">
                    <label for="fname">Prénom</label><br>
                    <input type="text" id="fname" name="firstname" size="30">
                    <br></br>
                </div>
                <div class="email">
                    <label for="email">Adresse e-mail</label><br>
                    <input type="text" id="email" name="email" size="30">
                    <br></br>
                </div>
                <div class="contact">
                    <label for="contact">Numero De Telephone</label><br>
                    <input type="number" id="contact" name="contact" size="30">
                    <br></br>
                </div>
                <div class="destination">
                    <label for="destination">Destination:</label><br>
                    <select id="destination">
                        <option value="amazonie">Amazonie</option>
                        <option value="alaska">Alaska</option>
                        <option value="tanzanie">Tanzanie</option>
                        <option value="nepal">Nepal</option>
                        <option value="tasmanie">Tasmanie</option>
                        <option value="laponie">Laponie</option>
                    </select>
                    <br></br>
                </div>
                <div class="numberPersons">
                    <label for="numberPersons">Nombre de personnes</label><br>
                    <select id="numberPersons">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <br></br>
                </div>
        
                <div class="numberNight">
                    <label for="numberNight">Nombre De Nuits</label><br>
                    <select id="numberNight" >                        
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <br></br>
                </div>
                <div class="budget">
                    <label for="budget">Budget</label><br>
                    <input type="float" id="budget" name="Budget" size="30">
                    <br></br>
                </div>
        
                <div class="message">
                    <label for="message">Message</label><br>
                    <textarea id="message" name="message" cols="73" rows="10"></textarea>
                </div>
        
                <div class="submit"><br>
                    <input type="submit" value="ENVOYER MA DEMANDE">
                </div>
              </form>
            </div>
          </section>

          <section id="comments">
            <h2><i class="fa-solid fa-message"></i>Commentaires</h2>
            <div class="layer-form">
              <div class="comment"><strong><span>Tanzanie</span>
Evelyne - CHATENAY MALABRY</strong>
Voyage merveilleux de 10 jours en Tanzanie au plus près de nos souhaits et qui a été au delà de nos espérances. Nathan a su nous emmener voir des scènes époustouflantes, au plus près des animaux. Nous avons vécu des moments intenses qui resteront inoubliables. C'est le plus beau voyage qu'il m'ait été donné de faire ... Merci à Nathan.</div>
              <div class="comment"><strong><span>Népal</span>
Florence - Croix</strong>
Très beau voyage, riche en découvertes et rencontres.</div>
              <div class="comment"><strong><span>Laponie</span> 
Muriel - Joinville le Pont</strong>
La Laponie était notre premier voyage avec Nathan et ça a été magique. Très belle expérience. Nous recommandons ++</div>
              <div class="comment"></div>
              <div class="comment"></div>
            </div>        
          </section>
        </section>
          
    </main>
    
<?php include ("footer.php"); ?>