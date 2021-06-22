<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';
$action = $_POST["action"];


if ($action == "DELETE") {
	$id = $_POST["id"];
} else {
	$id = $_POST["id"];
	$nomADB = $_POST["nomADB"];
	$coordonnateur = $_POST["coordonnateur"];
	$telJour = $_POST["telJour"];
	$telSoir = $_POST["telSoir"];
	$nomADP = $_POST["nomADP"];
	$responsable = $_POST["responsable"];
	$tel = $_POST["tel"];
	$courriel = $_POST["courriel"];

	$principale = $_POST["principale"];
	$autre = $_POST["autre"];
	$nombreDeSousSol = $_POST["nombreDeSousSol"];
	$NombreDetage = $_POST["NombreDetage"];
	$nombreDappentis = $_POST["nombreDappentis"];
	$nombreDeGrenier = $_POST["nombreDeGrenier"];
	$ascenseurNombre = $_POST["ascenseurNombre"];
	$monteChargeNombre = $_POST["monteChargeNombre"];
	$communicationDansAscendeur = $_POST["communicationDansAscendeur"];
	if (isset($_POST["rappelAutomatique"]) == NULL) { $rappelAutomatique = 0; } else { $rappelAutomatique = 1;};
	if (isset($_POST["rappelManuel"]) == NULL) { $rappelManuel = 0; } else { $rappelManuel = 1;};
	$ascenseurPompier = $_POST["ascenseurPompier"];
	$nombreDeCageDescalierDeSecours = $_POST["nombreDeCageDescalierDeSecours"];

	$nbreDappartements = $_POST["nbreDappartements"];
	$pJour = $_POST["pJour"];
	$pSoir = $_POST["pSoir"];
	$pNuit = $_POST["pNuit"];
	$pFDS = $_POST["pFDS"];
	$oJour = $_POST["oJour"];
	$oSoir = $_POST["oSoir"];
	$oNuit = $_POST["oNuit"];
	$oFDS = $_POST["oFDS"];
	$rJour = $_POST["rJour"];
	$rSoir = $_POST["rSoir"];
	$rNuit = $_POST["rNuit"];
	$rFDS = $_POST["rFDS"];
	$paba = $_POST["paba"];

	$cinema = $_POST["cinema"];
	$bars = $_POST["bars"];
	$ecole = $_POST["ecole"];
	$expositions = $_POST["expositions"];
	$restaurants = $_POST["restaurants"];
	$prison = $_POST["prison"];
	$hopital = $_POST["hopital"];
	$clinique = $_POST["clinique"];
	$chsld = $_POST["chsld"];
	$appartements = $_POST["appartements"];
	$hotel = $_POST["hotel"];
	$accueil = $_POST["accueil"];
	$hebergements = $_POST["hebergements"];
	$bureaux = $_POST["bureaux"];
	$cabinets = $_POST["cabinets"];
	$magasins = $_POST["magasins"];
	$detaillants = $_POST["detaillants"];
	$commerce = $_POST["commerce"];
	$ateliers = $_POST["ateliers"];
	$entrepot = $_POST["entrepot"];
	$usine = $_POST["usine"];
	$stationnement = $_POST["stationnement"];
	$specifiez = $_POST["specifiez"];


	if (isset($_POST["sai"]) == NULL) { $sai = 0; } else { $sai = 1;};
	$saiMarque = $_POST["saiMarque"];
	if (isset($_POST["adressable"]) == NULL) { $adressable = 0; } else { $adressable = 1;};
	if (isset($_POST["zoneX"]) == NULL) { $zoneX = 0; } else { $zoneX = 1;};
	if (isset($_POST["unEtape"]) == NULL) { $unEtape = 0; } else { $unEtape = 1;};
	if (isset($_POST["deuxetape"]) == NULL) { $deuxetape = 0; } else { $deuxetape = 1;};
	if (isset($_POST["etp"]) == NULL) { $etp = 0; } else { $etp = 1;};
	if (isset($_POST["periode"]) == NULL) { $periode = 0; } else { $periode = 1;};
	$pheure = $_POST["pheure"];
	$panneauS = $_POST["panneauS"];
	if (isset($_POST["annonciateur"]) == NULL) { $annonciateur = 0; } else { $annonciateur = 1;};
	$textannonciateur = $_POST["textannonciateur"];
	if (isset($_POST["rac"]) == NULL) { $rac = 0; } else { $rac = 1;};
	$racNomTel = $_POST["racNomTel"];
	if (isset($_POST["scu"]) == NULL) { $scu = 0; } else { $scu = 1;};
	$scuMarque = $_POST["scuMarque"];

	if (isset($_POST["rda"]) == NULL) { $rda = 0; } else { $rda = 1;};
	if (isset($_POST["adv"]) == NULL) { $adv = 0; } else { $adv = 1;};
	if (isset($_POST["pressE"]) == NULL) { $pressE = 0; } else { $pressE = 1;};
	if (isset($_POST["dea"]) == NULL) { $dea = 0; } else { $dea = 1;};
	if (isset($_POST["rdrm"]) == NULL) { $rdrm = 0; } else { $rdrm = 1;};
	if (isset($_POST["tac"]) == NULL) { $tac = 0; } else { $tac = 1;};
	if (isset($_POST["aaag"]) == NULL) { $aaag = 0; } else { $aaag = 1;};
	$autreS = $_POST["autreS"];

	if (isset($_POST["sdga"]) == NULL) { $sdga = 0; } else { $sdga = 1;};
	if (isset($_POST["eau"]) == NULL) { $eau = 0; } else { $eau = 1;};
	if (isset($_POST["air"]) == NULL) { $air = 0; } else { $air = 1;};
	if (isset($_POST["dssogs"]) == NULL) { $dssogs = 0; } else { $dssogs = 1;};
	if (isset($_POST["dtlb"]) == NULL) { $dtlb = 0; } else { $dtlb = 1;};
	if (isset($_POST["pompeAfeu"]) == NULL) { $pompeAfeu = 0; } else { $pompeAfeu = 1;};
	$pafeu = $_POST["pafeu"];
	if (isset($_POST["ralg"]) == NULL) { $ralg = 0; } else { $ralg = 1;};
	if (isset($_POST["vds"]) == NULL) { $vds = 0; } else { $vds = 1;};
	if (isset($_POST["cageE"]) == NULL) { $cageE = 0; } else { $cageE = 1;};
	if (isset($_POST["autreShuitdeux"]) == NULL) { $autreShuitdeux = 0; } else { $autreShuitdeux = 1;};
	$autreShuit = $_POST["autreShuit"];
	if (isset($_POST["bid"]) == NULL) { $bid = 0; } else { $bid = 1;};
	if (isset($_POST["raccordP"]) == NULL) { $raccordP = 0; } else { $raccordP = 1;};
	$raccord = $_POST["raccord"];
	if (isset($_POST["extincteursp"]) == NULL) { $extincteursp = 0; } else { $extincteursp = 1;};
	$typeE = $_POST["typeE"];
	if (isset($_POST["sep"]) == NULL) { $sep = 0; } else { $sep = 1;};
	if (isset($_POST["efixe"]) == NULL) { $efixe = 0; } else { $efixe = 1;};
	$efixetext = $_POST["efixetext"];
	if (isset($_POST["relieUn"]) == NULL) { $relieUn = 0; } else { $relieUn = 1;};
	if (isset($_POST["eGaz"]) == NULL) { $eGaz = 0; } else { $eGaz = 1;};
	$eGazText = $_POST["eGazText"];
	if (isset($_POST["reliedeux"]) == NULL) { $reliedeux = 0; } else { $reliedeux = 1;};
	if (isset($_POST["preaction"]) == NULL) { $preaction = 0; } else { $preaction = 1;};
	if (isset($_POST["delugue"]) == NULL) { $delugue = 0; } else { $delugue = 1;};
	$delugueText = $_POST["delugueText"];
	if (isset($_POST["relietrois"]) == NULL) { $relietrois = 0; } else { $relietrois = 1;};
	if (isset($_POST["autresectionhuit"]) == NULL) { $autresectionhuit = 0; } else { $autresectionhuit = 1;};
	$autersHuitText = $_POST["autersHuitText"];
	if (isset($_POST["reliequatre"]) == NULL) { $reliequatre = 0; } else { $reliequatre = 1;};

	if (isset($_POST["vpea"]) == NULL) { $vpea = 0; } else { $vpea = 1;};
	if (isset($_POST["panneauA"]) == NULL) { $panneauA = 0; } else { $panneauA = 1;};
	if (isset($_POST["StationM"]) == NULL) { $StationM = 0; } else { $StationM = 1;};
	if (isset($_POST["detecteurD"]) == NULL) { $detecteurD = 0; } else { $detecteurD = 1;};
	if (isset($_POST["barreP"]) == NULL) { $barreP = 0; } else { $barreP = 1;};
	if (isset($_POST["BoutonP"]) == NULL) { $BoutonP = 0; } else { $BoutonP = 1;};
	if (isset($_POST["cle"]) == NULL) { $cle = 0; } else { $cle = 1;};
	if (isset($_POST["autresneuf"]) == NULL) { $autresneuf = 0; } else { $autresneuf = 1;};
	$autreneufText = $_POST["autreneufText"];
	if (isset($_POST["retenueM"]) == NULL) { $retenueM = 0; } else { $retenueM = 1;};
	if (isset($_POST["rideau"]) == NULL) { $rideau = 0; } else { $rideau = 1;};
	if (isset($_POST["Systemed"]) == NULL) { $Systemed = 0; } else { $Systemed = 1;};
	if (isset($_POST["parPA"]) == NULL) { $parPA = 0; } else { $parPA = 1;};
	if (isset($_POST["controle"]) == NULL) { $controle = 0; } else { $controle = 1;};
	$controlText = $_POST["controlText"];
	if (isset($_POST["spe"]) == NULL) { $spe = 0; } else { $spe = 1;};
	if (isset($_POST["sss"]) == NULL) { $sss = 0; } else { $sss = 1;};
	if (isset($_POST["toutb"]) == NULL) { $toutb = 0; } else { $toutb = 1;};
	if (isset($_POST["sdcc"]) == NULL) { $sdcc = 0; } else { $sdcc = 1;};
	$sdccText = $_POST["sdccText"];
	if (isset($_POST["sas"]) == NULL) { $sas = 0; } else { $sas = 1;};
	$sasText = $_POST["sasText"];


	if (isset($_POST["uea"]) == NULL) { $uea = 0; } else { $uea = 1;};
	if (isset($_POST["udl"]) == NULL) { $udl = 0; } else { $udl = 1;};
	if (isset($_POST["generatrice"]) == NULL) { $generatrice = 0; } else { $generatrice = 1;};
	$modele = $_POST["modele"];
	$amp = $_POST["amp"];
	if (isset($_POST["exteroeir"]) == NULL) { $exteroeir = 0; } else { $exteroeir = 1;};
	if (isset($_POST["surtoit"]) == NULL) { $surtoit = 0; } else { $surtoit = 1;};
	if (isset($_POST["interieur"]) == NULL) { $interieur = 0; } else { $interieur = 1;};
	$interieurText = $_POST["interieurText"];
	if (isset($_POST["diesel"]) == NULL) { $diesel = 0; } else { $diesel = 1;};
	if (isset($_POST["gazn"]) == NULL) { $gazn = 0; } else { $gazn = 1;};
	if (isset($_POST["essence"]) == NULL) { $essence = 0; } else { $essence = 1;};
	if (isset($_POST["Propane"]) == NULL) { $Propane = 0; } else { $Propane = 1;};


	if (isset($_POST["gaznaturel"]) == NULL) { $gaznaturel = 0; } else { $gaznaturel = 1;};
	if (isset($_POST["gazp"]) == NULL) { $gazp = 0; } else { $gazp = 1;};
	if (isset($_POST["autrereservoir"]) == NULL) { $autrereservoir = 0; } else { $autrereservoir = 1;};
	$autrereservoirtext = $_POST["autrereservoirtext"];
	if (isset($_POST["planetage"]) == NULL) { $planetage = 0; } else { $planetage = 1;};

	$autreinfo = $_POST["autreinfo"];

	if (isset($_POST["paneauAlarmeP"]) == NULL) { $paneauAlarmeP = 0; } else { $paneauAlarmeP = 1;};
	if (isset($_POST["ExterieurP"]) == NULL) { $ExterieurP = 0; } else { $ExterieurP = 1;};
	if (isset($_POST["interieurP"]) == NULL) { $interieurP = 0; } else { $interieurP = 1;};
	if (isset($_POST["boutonsilenceP"]) == NULL) { $boutonsilenceP = 0; } else { $boutonsilenceP = 1;};
	if (isset($_POST["remiseP"]) == NULL) { $remiseP = 0; } else { $remiseP = 1;};
	if (isset($_POST["accusedeP"]) == NULL) { $accusedeP = 0; } else { $accusedeP = 1;};
	if (isset($_POST["PanneauP"]) == NULL) { $PanneauP = 0; } else { $PanneauP = 1;};
	if (isset($_POST["microP"]) == NULL) { $microP = 0; } else { $microP = 1;};
	if (isset($_POST["teleP"]) == NULL) { $teleP = 0; } else { $teleP = 1;};
	if (isset($_POST["zones"]) == NULL) { $zones = 0; } else { $zones = 1;};
	if (isset($_POST["systemeP"]) == NULL) { $systemeP = 0; } else { $systemeP = 1;};
	if (isset($_POST["vueP"]) == NULL) { $vueP = 0; } else { $vueP = 1;};
	if (isset($_POST["chaqueP"]) == NULL) { $chaqueP = 0; } else { $chaqueP = 1;};
	if (isset($_POST["vanneP"]) == NULL) { $vanneP = 0; } else { $vanneP = 1;};
	if (isset($_POST["vannedeP"]) == NULL) { $vannedeP = 0; } else { $vannedeP = 1;};
	if (isset($_POST["interrupteurP"]) == NULL) { $interrupteurP = 0; } else { $interrupteurP = 1;};
	if (isset($_POST["vanneetP"]) == NULL) { $vanneetP = 0; } else { $vanneetP = 1;};
	if (isset($_POST["pompeaP"]) == NULL) { $pompeaP = 0; } else { $pompeaP = 1;};
	if (isset($_POST["vuedP"]) == NULL) { $vuedP = 0; } else { $vuedP = 1;};
	if (isset($_POST["panneaudecP"]) == NULL) { $panneaudecP = 0; } else { $panneaudecP = 1;};
	if (isset($_POST["boutonetP"]) == NULL) { $boutonetP = 0; } else { $boutonetP = 1;};
	if (isset($_POST["systemesP"]) == NULL) { $systemesP = 0; } else { $systemesP = 1;};
	if (isset($_POST["bonbonneP"]) == NULL) { $bonbonneP = 0; } else { $bonbonneP = 1;};
	if (isset($_POST["declencheurP"]) == NULL) { $declencheurP = 0; } else { $declencheurP = 1;};
	if (isset($_POST["preactionP"]) == NULL) { $preactionP = 0; } else { $preactionP = 1;};
	if (isset($_POST["exterieurPhoto"]) == NULL) { $exterieurPhoto = 0; } else { $exterieurPhoto = 1;};
	if (isset($_POST["interieurPhoto"]) == NULL) { $interieurPhoto = 0; } else { $interieurPhoto = 1;};
	if (isset($_POST["generatriceP"]) == NULL) { $generatriceP = 0; } else { $generatriceP = 1;};
	if (isset($_POST["vuePhoto"]) == NULL) { $vuePhoto = 0; } else { $vuePhoto = 1;};
	if (isset($_POST["panneaudeP"]) == NULL) { $panneaudeP = 0; } else { $panneaudeP = 1;};
	if (isset($_POST["boutonarretP"]) == NULL) { $boutonarretP = 0; } else { $boutonarretP = 1;};
	if (isset($_POST["ups"]) == NULL) { $ups = 0; } else { $ups = 1;};
	if (isset($_POST["ascenseursP"]) == NULL) { $ascenseursP = 0; } else { $ascenseursP = 1;};
	if (isset($_POST["panneaurappelP"]) == NULL) { $panneaurappelP = 0; } else { $panneaurappelP = 1;};
	if (isset($_POST["boutonrappel"]) == NULL) { $boutonrappel = 0; } else { $boutonrappel = 1;};
	if (isset($_POST["panneauintP"]) == NULL) { $panneauintP = 0; } else { $panneauintP = 1;};
	if (isset($_POST["systemeappelP"]) == NULL) { $systemeappelP = 0; } else { $systemeappelP = 1;};
	if (isset($_POST["desenfumageP"]) == NULL) { $desenfumageP = 0; } else { $desenfumageP = 1;};
	if (isset($_POST["PanneaucontroleP"]) == NULL) { $PanneaucontroleP = 0; } else { $PanneaucontroleP = 1;};
}



if ($action == "CREATE") {
	// validate_fields();

	createUser($nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
	$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre,
	$communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours,
	$nbreDappartements, $pJour, $pSoir, $pNuit, $pFDS, $oJour,$oSoir, $oNuit, $oFDS, $rJour, $rSoir, $rNuit, $rFDS, $paba,
	$cinema, $bars, $ecole, $expositions, $restaurants, $prison, $hopital, $clinique, $chsld, $appartements, $hotel, $accueil, $hebergements, $bureaux, $cabinets, 
	$magasins, $detaillants, $commerce, $ateliers, $entrepot, $usine, $stationnement, $specifiez,
	$sai, $saiMarque, $adressable, $zoneX, $unEtape, $deuxetape, $etp, $periode, $pheure, $panneauS, $annonciateur, $textannonciateur, $rac, $racNomTel, $scu, $scuMarque,
	$rda,$adv,$pressE,$dea,$rdrm,$tac,$aaag,$autreS,
	$sdga,$eau,$air,$dssogs,$dtlb,$pompeAfeu,$pafeu,$ralg,$vds,$cageE,$autreShuitdeux,$autreShuit,$bid,$raccordP,$raccord,$extincteursp,$typeE,$sep,$efixe,$efixetext,$relieUn,
	$eGaz,$eGazText,$reliedeux,$preaction,$delugue,$delugueText,$relietrois,$autresectionhuit,$autersHuitText,$reliequatre,
	$vpea,$panneauA,$StationM,$detecteurD,$barreP,$BoutonP,$cle,$autresneuf,$autreneufText,$retenueM,$rideau,$Systemed,$parPA,$controle,$controlText,$spe,$sss,$toutb,$sdcc,$sdccText,$sas,$sasText,
	$uea,$udl,$generatrice,$modele,$amp,$exteroeir,$surtoit,$interieur,$interieurText,$diesel,$gazn,$essence,$Propane,
	$gaznaturel,$gazp,$autrereservoir,$autrereservoirtext,$planetage,$autreinfo,
    $paneauAlarmeP,$ExterieurP,$interieurP,$boutonsilenceP,$remiseP,$accusedeP,$PanneauP,$microP,$teleP,$zones,$systemeP,$vueP,$chaqueP,$vanneP,$vannedeP,$interrupteurP,$vanneetP,$pompeaP,$vuedP,
	$panneaudecP,$boutonetP,$systemesP,$bonbonneP,$declencheurP,$preactionP,$exterieurPhoto,$interieurPhoto,$generatriceP,$vuePhoto,$panneaudeP,$boutonarretP,$ups,$ascenseursP,$panneaurappelP,
	$boutonrappel,$panneauintP,$systemeappelP,$desenfumageP,$PanneaucontroleP);
	header("location:listPSI.php?message=User Created Successfully...!");
	exit;
}

if ($action == "UPDATE") {
	validate_fields();

	updateUser($id, $nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
 	 $principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre, 
	 $communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours,
	 $nbreDappartements, $pJour, $pSoir, $pNuit, $pFDS, $oJour,$oSoir, $oNuit, $oFDS, $rJour, $rSoir, $rNuit, $rFDS, $paba,
	 $cinema, $bars, $ecole, $expositions, $restaurants, $prison, $hopital, $clinique, $chsld, $appartements, $hotel, $accueil, $hebergements, $bureaux, $cabinets, 
	 $magasins, $detaillants, $commerce, $ateliers, $entrepot, $usine, $stationnement, $specifiez,
	 $sai, $saiMarque, $adressable, $zoneX, $unEtape, $deuxetape, $etp, $periode, $pheure, $panneauS, $annonciateur, $textannonciateur, $rac, $racNomTel, $scu, $scuMarque,
	 $rda,$adv,$pressE,$dea,$rdrm,$tac,$aaag,$autreS,
	 $sdga,$eau,$air,$dssogs,$dtlb,$pompeAfeu,$pafeu,$ralg,$vds,$cageE,$autreShuitdeux,$autreShuit,$bid,$raccordP,$raccord,$extincteursp,$typeE,$sep,$efixe,$efixetext,$relieUn,
	 $eGaz,$eGazText,$reliedeux,$preaction,$delugue,$delugueText,$relietrois,$autresectionhuit,$autersHuitText,$reliequatre,
	 $vpea,$panneauA,$StationM,$detecteurD,$barreP,$BoutonP,$cle,$autresneuf,$autreneufText,$retenueM,$rideau,$Systemed,$parPA,$controle,$controlText,$spe,$sss,$toutb,$sdcc,$sdccText,$sas,$sasText,
	 $uea,$udl,$generatrice,$modele,$amp,$exteroeir,$surtoit,$interieur,$interieurText,$diesel,$gazn,$essence,$Propane,
	 $gaznaturel,$gazp,$autrereservoir,$autrereservoirtext,$planetage,$autreinfo,
	 $paneauAlarmeP,$ExterieurP,$interieurP,$boutonsilenceP,$remiseP,$accusedeP,$PanneauP,$microP,$teleP,$zones,$systemeP,$vueP,$chaqueP,$vanneP,$vannedeP,$interrupteurP,$vanneetP,$pompeaP,$vuedP,
     $panneaudecP,$boutonetP,$systemesP,$bonbonneP,$declencheurP,$preactionP,$exterieurPhoto,$interieurPhoto,$generatriceP,$vuePhoto,$panneaudeP,$boutonarretP,$ups,$ascenseursP,$panneaurappelP,
	 $boutonrappel,$panneauintP,$systemeappelP,$desenfumageP,$PanneaucontroleP);
	header("location:listPSI.php?message=User Updated Successfully...!");
	exit;
}
if ($action == "DELETE") {
	deleteUser($id);
	header("location:listPSI.php?message=User Deleted Successfully...!");
}


//Validation des champs du formulaire de la page formulaireUser.php
function validate_fields()
{

	$erreurs = array();
	$flag = false;
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	} else {
		$id = 0;
	}
	// // validation du champ nomADB si il est vide
	// if (empty($_POST["nomADB"])) {
	// 	$flag = true;
	// 	$erreurs['nomADBErr'] = "Please enter a valid Nom & Adresse Du Bâtiment";
	// }
	// validation du champ nomADB si conforme au preg_match
	if (!empty($_POST["nomADB"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nomADB'])) {
		$flag = true;
		$erreurs['nomADBErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ coordonnateur si conforme au preg_match
	if (!empty($_POST["coordonnateur"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['coordonnateur'])) {
		$flag = true;
		$erreurs['coordonnateurErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ telJour si conforme au preg_match
	if (!empty($_POST["telJour"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['telJour'])) {
		$flag = true;
		$erreurs['telJourErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ telJour si conforme au preg_match
	if (!empty($_POST["telSoir"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['telSoir'])) {
		$flag = true;
		$erreurs['telSoirErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ nomADP si conforme au preg_match
	if (!empty($_POST["nomADP"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nomADP'])) {
		$flag = true;
		$erreurs['nomADPErr'] = "Only letters, Numbers and white space allowed";
	}

	
	// validation du champ responsable si conforme au preg_match
	if (!empty($_POST["responsable"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['responsable'])) {
		$flag = true;
		$erreurs['responsableErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ tel si conforme au preg_match
	if (!empty($_POST["tel"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['tel'])) {
		$flag = true;
		$erreurs['telErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ courriel si conforme au preg_match
	if (!empty($_POST["courriel"]) && !preg_match('/\S+@\S+\.\S+/', $_POST['courriel'])) {
		$flag = true;
		$erreurs['courrielErr'] = "enter a valid email";
	}


	// validation du champ principale si conforme au preg_match
	if (!empty($_POST["principale"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['principale'])) {
		$flag = true;
		$erreurs['principaleErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autre si conforme au preg_match
	if (!empty($_POST["autre"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['autre'])) {
		$flag = true;
		$erreurs['autreErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDeSousSol si conforme au preg_match
	if (!empty($_POST["nombreDeSousSol"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDeSousSol'])) {
		$flag = true;
		$erreurs['nombreDeSousSolErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ NombreDetage si conforme au preg_match
	if (!empty($_POST["NombreDetage"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['NombreDetage'])) {
		$flag = true;
		$erreurs['NombreDetageErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDappentis si conforme au preg_match
	if (!empty($_POST["nombreDappentis"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDappentis'])) {
		$flag = true;
		$erreurs['nombreDappentisErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDeGrenier si conforme au preg_match
	if (!empty($_POST["nombreDeGrenier"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDeGrenier'])) {
		$flag = true;
		$erreurs['nombreDeGrenierErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ ascenseurNombre si conforme au preg_match
	if (!empty($_POST["ascenseurNombre"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['ascenseurNombre'])) {
		$flag = true;
		$erreurs['ascenseurNombreErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ monteChargeNombre si conforme au preg_match
	if (!empty($_POST["monteChargeNombre"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['monteChargeNombre'])) {
		$flag = true;
		$erreurs['monteChargeNombreErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ communicationDansAscendeur si conforme au preg_match
	if (!empty($_POST["communicationDansAscendeur"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['communicationDansAscendeur'])) {
		$flag = true;
		$erreurs['communicationDansAscendeurErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rappelAutomatique si conforme au preg_match
	if (!empty($_POST["rappelAutomatique"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['rappelAutomatique'])) {
		$flag = true;
		$erreurs['rappelAutomatiqueErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rappelManuel si conforme au preg_match
	if (!empty($_POST["rappelManuel"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['rappelManuel'])) {
		$flag = true;
		$erreurs['rappelManuelErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ ascenseurPompier si conforme au preg_match
	if (!empty($_POST["ascenseurPompier"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['ascenseurPompier'])) {
		$flag = true;
		$erreurs['ascenseurPompierErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ nombreDeCageDescalierDeSecours si conforme au preg_match
	if (!empty($_POST["nombreDeCageDescalierDeSecours"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nombreDeCageDescalierDeSecours'])) {
		$flag = true;
		$erreurs['nombreDeCageDescalierDeSecoursErr'] = "Only letters, Numbers and white space allowed";
	}


	if ($flag == true) {

		header("location:formulairePsi.php?&id=$id&erreurs=" . json_encode($erreurs));
		exit;
	}
}
