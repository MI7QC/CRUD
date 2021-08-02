<?php
include 'mesFunctionsSQL.php';
include 'afficherPsi.php';
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
	$_POST['rappelAutomatique'] = isset($_POST['rappelAutomatique']) ? 1 : 0;
	$_POST['rappelManuel'] = isset($_POST['rappelManuel']) ? 1 : 0;
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

	$_POST['sai'] = isset($_POST['sai']) ? 1 : 0;
	$saiMarque = $_POST["saiMarque"];
	$_POST['adressable'] = isset($_POST['adressable']) ? 1 : 0;
	$_POST['zoneX'] = isset($_POST['zoneX']) ? 1 : 0;
	$_POST['unEtape'] = isset($_POST['unEtape']) ? 1 : 0;
	$_POST['deuxetape'] = isset($_POST['deuxetape']) ? 1 : 0;
	$_POST['etp'] = isset($_POST['etp']) ? 1 : 0;
	$_POST['periode'] = isset($_POST['periode']) ? 1 : 0;
	$pheure = $_POST["pheure"];
	$panneauS = $_POST["panneauS"];
	$_POST['annonciateur'] = isset($_POST['annonciateur']) ? 1 : 0;
	$textannonciateur = $_POST["textannonciateur"];
	$_POST['rac'] = isset($_POST['rac']) ? 1 : 0;
	$racNomTel = $_POST["racNomTel"];
	$_POST['scu'] = isset($_POST['scu']) ? 1 : 0;
	$scuMarque = $_POST["scuMarque"];


	$_POST['rda'] = isset($_POST['rda']) ? 1 : 0;
	$_POST['adv'] = isset($_POST['adv']) ? 1 : 0;
	$_POST['pressE'] = isset($_POST['pressE']) ? 1 : 0;
	$_POST['dea'] = isset($_POST['dea']) ? 1 : 0;
	$_POST['rdrm'] = isset($_POST['rdrm']) ? 1 : 0;
	$_POST['tac'] = isset($_POST['tac']) ? 1 : 0;
	$_POST['aaag'] = isset($_POST['aaag']) ? 1 : 0;
	$_POST['cinema'] = isset($_POST['cinema']) ? 1 : 0;
	$autreS = $_POST["autreS"];


	$_POST['sdga'] = isset($_POST['sdga']) ? 1 : 0;
	$_POST['eau'] = isset($_POST['eau']) ? 1 : 0;
	$_POST['air'] = isset($_POST['air']) ? 1 : 0;
	$_POST['dssogs'] = isset($_POST['dssogs']) ? 1 : 0;
	$_POST['dtlb'] = isset($_POST['dtlb']) ? 1 : 0;
	$_POST['pompeAfeu'] = isset($_POST['pompeAfeu']) ? 1 : 0;
	$pafeu = $_POST["pafeu"];
	$_POST['ralg'] = isset($_POST['ralg']) ? 1 : 0;
	$_POST['vds'] = isset($_POST['vds']) ? 1 : 0;
	$_POST['cageE'] = isset($_POST['cageE']) ? 1 : 0;
	$_POST['autreShuitdeux'] = isset($_POST['autreShuitdeux']) ? 1 : 0;
	$autreShuit = $_POST["autreShuit"];
	$_POST['bid'] = isset($_POST['bid']) ? 1 : 0;
	$_POST['raccordP'] = isset($_POST['raccordP']) ? 1 : 0;
	$raccord = $_POST["raccord"];
	$_POST['extincteursp'] = isset($_POST['extincteursp']) ? 1 : 0;
	$typeE = $_POST["typeE"];
	$_POST['sep'] = isset($_POST['sep']) ? 1 : 0;
	$_POST['efixe'] = isset($_POST['efixe']) ? 1 : 0;
	$efixetext = $_POST["efixetext"];
	$_POST['relieUn'] = isset($_POST['relieUn']) ? 1 : 0;
	$_POST['eGaz'] = isset($_POST['eGaz']) ? 1 : 0;
	$eGazText = $_POST["eGazText"];
	$_POST['reliedeux'] = isset($_POST['reliedeux']) ? 1 : 0;
	$_POST['preaction'] = isset($_POST['preaction']) ? 1 : 0;
	$_POST['delugue'] = isset($_POST['delugue']) ? 1 : 0;
	$delugueText = $_POST["delugueText"];
	$_POST['relietrois'] = isset($_POST['relietrois']) ? 1 : 0;
	$_POST['autresectionhuit'] = isset($_POST['autresectionhuit']) ? 1 : 0;
	$autersHuitText = $_POST["autersHuitText"];
	$_POST['reliequatre'] = isset($_POST['reliequatre']) ? 1 : 0;


	$_POST['vpea'] = isset($_POST['vpea']) ? 1 : 0;
	$_POST['panneauA'] = isset($_POST['panneauA']) ? 1 : 0;
	$_POST['StationM'] = isset($_POST['StationM']) ? 1 : 0;
	$_POST['detecteurD'] = isset($_POST['detecteurD']) ? 1 : 0;
	$_POST['barreP'] = isset($_POST['barreP']) ? 1 : 0;
	$_POST['BoutonP'] = isset($_POST['BoutonP']) ? 1 : 0;
	$_POST['cle'] = isset($_POST['cle']) ? 1 : 0;
	$_POST['autresneuf'] = isset($_POST['autresneuf']) ? 1 : 0;
	$autreneufText = $_POST["autreneufText"];
	$_POST['retenueM'] = isset($_POST['retenueM']) ? 1 : 0;
	$_POST['rideau'] = isset($_POST['rideau']) ? 1 : 0;
	$_POST['Systemed'] = isset($_POST['Systemed']) ? 1 : 0;
	$_POST['parPA'] = isset($_POST['parPA']) ? 1 : 0;
	$_POST['controle'] = isset($_POST['controle']) ? 1 : 0;
	$controlText = $_POST["controlText"];
	$_POST['spe'] = isset($_POST['spe']) ? 1 : 0;
	$_POST['sss'] = isset($_POST['sss']) ? 1 : 0;
	$_POST['toutb'] = isset($_POST['toutb']) ? 1 : 0;
	$_POST['sdcc'] = isset($_POST['sdcc']) ? 1 : 0;
	$sdccText = $_POST["sdccText"];
	$_POST['sas'] = isset($_POST['sas']) ? 1 : 0;
	$sasText = $_POST["sasText"];


	$_POST['uea'] = isset($_POST['uea']) ? 1 : 0;
	$_POST['udl'] = isset($_POST['udl']) ? 1 : 0;
	$_POST['generatrice'] = isset($_POST['generatrice']) ? 1 : 0;
	$modele = $_POST["modele"];
	$amp = $_POST["amp"];
	$_POST['exteroeir'] = isset($_POST['exteroeir']) ? 1 : 0;
	$_POST['surtoit'] = isset($_POST['surtoit']) ? 1 : 0;
	$_POST['interieur'] = isset($_POST['interieur']) ? 1 : 0;
	$interieurText = $_POST["interieurText"];
	$_POST['diesel'] = isset($_POST['diesel']) ? 1 : 0;
	$_POST['gazn'] = isset($_POST['gazn']) ? 1 : 0;
	$_POST['essence'] = isset($_POST['essence']) ? 1 : 0;
	$_POST['Propane'] = isset($_POST['Propane']) ? 1 : 0;


	$_POST['gaznaturel'] = isset($_POST['gaznaturel']) ? 1 : 0;
	$_POST['gazp'] = isset($_POST['gazp']) ? 1 : 0;
	$_POST['autrereservoir'] = isset($_POST['autrereservoir']) ? 1 : 0;
	$autrereservoirtext = $_POST["autrereservoirtext"];
	$_POST['planetage'] = isset($_POST['planetage']) ? 1 : 0;


	$autreinfo = $_POST["autreinfo"];

	$_POST['paneauAlarmeP'] = isset($_POST['paneauAlarmeP']) ? 1 : 0;
	$_POST['ExterieurP'] = isset($_POST['ExterieurP']) ? 1 : 0;
	$_POST['interieurP'] = isset($_POST['interieurP']) ? 1 : 0;
	$_POST['boutonsilenceP'] = isset($_POST['boutonsilenceP']) ? 1 : 0;
	$_POST['remiseP'] = isset($_POST['remiseP']) ? 1 : 0;
	$_POST['accusedeP'] = isset($_POST['accusedeP']) ? 1 : 0;
	$_POST['PanneauP'] = isset($_POST['PanneauP']) ? 1 : 0;
	$_POST['microP'] = isset($_POST['microP']) ? 1 : 0;
	$_POST['teleP'] = isset($_POST['teleP']) ? 1 : 0;
	$_POST['zones'] = isset($_POST['zones']) ? 1 : 0;
	$_POST['systemeP'] = isset($_POST['systemeP']) ? 1 : 0;
	$_POST['vueP'] = isset($_POST['vueP']) ? 1 : 0;
	$_POST['chaqueP'] = isset($_POST['chaqueP']) ? 1 : 0;
	$_POST['vanneP'] = isset($_POST['vanneP']) ? 1 : 0;
	$_POST['vannedeP'] = isset($_POST['vannedeP']) ? 1 : 0;
	$_POST['interrupteurP'] = isset($_POST['interrupteurP']) ? 1 : 0;
	$_POST['vanneetP'] = isset($_POST['vanneetP']) ? 1 : 0;
	$_POST['pompeaP'] = isset($_POST['pompeaP']) ? 1 : 0;
	$_POST['vuedP'] = isset($_POST['vuedP']) ? 1 : 0;
	$_POST['panneaudecP'] = isset($_POST['panneaudecP']) ? 1 : 0;
	$_POST['boutonetP'] = isset($_POST['boutonetP']) ? 1 : 0;
	$_POST['systemesP'] = isset($_POST['systemesP']) ? 1 : 0;
	$_POST['bonbonneP'] = isset($_POST['bonbonneP']) ? 1 : 0;
	$_POST['declencheurP'] = isset($_POST['declencheurP']) ? 1 : 0;
	$_POST['preactionP'] = isset($_POST['preactionP']) ? 1 : 0;
	$_POST['exterieurPhoto'] = isset($_POST['exterieurPhoto']) ? 1 : 0;
	$_POST['interieurPhoto'] = isset($_POST['interieurPhoto']) ? 1 : 0;
	$_POST['generatriceP'] = isset($_POST['generatriceP']) ? 1 : 0;
	$_POST['vuePhoto'] = isset($_POST['vuePhoto']) ? 1 : 0;
	$_POST['panneaudeP'] = isset($_POST['panneaudeP']) ? 1 : 0;
	$_POST['boutonarretP'] = isset($_POST['boutonarretP']) ? 1 : 0;
	$_POST['ups'] = isset($_POST['ups']) ? 1 : 0;
	$_POST['ascenseursP'] = isset($_POST['ascenseursP']) ? 1 : 0;
	$_POST['panneaurappelP'] = isset($_POST['panneaurappelP']) ? 1 : 0;
	$_POST['boutonrappel'] = isset($_POST['boutonrappel']) ? 1 : 0;
	$_POST['panneauintP'] = isset($_POST['panneauintP']) ? 1 : 0;
	$_POST['systemeappelP'] = isset($_POST['systemeappelP']) ? 1 : 0;
	$_POST['desenfumageP'] = isset($_POST['desenfumageP']) ? 1 : 0;
	$_POST['PanneaucontroleP'] = isset($_POST['PanneaucontroleP']) ? 1 : 0;
}




//  Creation du ficher excel pour sauvegarde local.
if ($action == "copie") {
	require '../class/class.csv.php'; 
	CSV::export([
		'nomADB' => $_POST['nomADB'],
		'coordonnateur' => $_POST['coordonnateur'],
		'telJour' => $_POST['telJour'],
    	'telSoir' => $_POST['telSoir'],
		'nomADP' => $_POST['nomADP'],
		'responsable' => $_POST['responsable'],
		'tel' => $_POST['tel'],
		'courriel' => $_POST['courriel'],

		'principale' => $_POST['principale'],
		'autre' => $_POST['autre'],
		'nombreDeSousSol' => $_POST['nombreDeSousSol'],
		'NombreDetage' => $_POST['NombreDetage'],
		'nombreDappentis' => $_POST['nombreDappentis'],
		'nombreDeGrenier' => $_POST['nombreDeGrenier'],
		'ascenseurNombre' => $_POST['ascenseurNombre'],
		'monteChargeNombre' => $_POST['monteChargeNombre'],
		'communicationDansAscendeur' => $_POST['communicationDansAscendeur'],
		'rappelAutomatique' => $_POST['rappelAutomatique'],
		'rappelManuel' => $_POST['rappelManuel'],
		'ascenseurPompier' => $_POST['ascenseurPompier'],
		'nombreDeCageDescalierDeSecours' => $_POST['nombreDeCageDescalierDeSecours'],

		'nbreDappartements' => $_POST['nbreDappartements'],
		'pJour' => $_POST['pJour'],
		'pSoir' => $_POST['pSoir'],
		'pNuit' => $_POST['pNuit'],
		'pFDS' => $_POST['pFDS'],
		'oJour' => $_POST['oJour'],
		'oSoir' => $_POST['oSoir'],
		'oNuit' => $_POST['oNuit'],
		'oFDS' => $_POST['oFDS'],
		'rJour' => $_POST['rJour'],
		'rSoir' => $_POST['rSoir'],
		'rNuit' => $_POST['rNuit'],
		'rFDS' => $_POST['rFDS'],
		'paba' => $_POST['paba'],

		'cinema' => $_POST['cinema'],
		'bars' => $_POST['bars'],
		'ecole' => $_POST['ecole'],
		'expositions' => $_POST['expositions'],
		'restaurants' => $_POST['restaurants'],
		'prison' => $_POST['prison'],
		'hopital' => $_POST['hopital'],
		'clinique' => $_POST['clinique'],
		'chsld' => $_POST['chsld'],
		'appartements' => $_POST['appartements'],
		'hotel' => $_POST['hotel'],
		'accueil' => $_POST['accueil'],
		'hebergements' => $_POST['hebergements'],
		'bureaux' => $_POST['bureaux'],
		'cabinets' => $_POST['cabinets'],
		'magasins' => $_POST['magasins'],
		'detaillants' => $_POST['detaillants'],
		'commerce' => $_POST['commerce'],
		'ateliers' => $_POST['ateliers'],
		'entrepot' => $_POST['entrepot'],
		'usine' => $_POST['usine'],
		'stationnement' => $_POST['stationnement'],
		'specifiez' => $_POST['specifiez'],
		
		'sai' => $_POST['sai'],
		'saiMarque' => $_POST['saiMarque'],
		'adressable' => $_POST['adressable'],
		'zoneX' => $_POST['zoneX'],
		'unEtape' => $_POST['unEtape'],
		'deuxetape' => $_POST['deuxetape'],
		'etp' => $_POST['etp'],
		'periode' => $_POST['periode'],
		'pheure' => $_POST['pheure'],
		'panneauS' => $_POST['panneauS'],
		'annonciateur' => $_POST['annonciateur'],
		'textannonciateur' => $_POST['textannonciateur'],
		'rac' => $_POST['rac'],
		'racNomTel' => $_POST['racNomTel'],
		'scu' => $_POST['scu'],
		'scuMarque' => $_POST['scuMarque'],


		'rda' => $_POST['rda'],
		'adv' => $_POST['adv'],
		'pressE' => $_POST['pressE'],
		'dea' => $_POST['dea'],
		'rdrm' => $_POST['rdrm'],
		'tac' => $_POST['tac'],
		'aaag' => $_POST['aaag'],
		'autreS' => $_POST['autreS'],

		'sdga' => $_POST['sdga'],
		'eau' => $_POST['eau'],
		'air' => $_POST['air'],
		'dssogs' => $_POST['dssogs'],
		'dtlb' => $_POST['dtlb'],
		'pompeAfeu' => $_POST['pompeAfeu'],
		'pafeu' => $_POST['pafeu'],
		'ralg' => $_POST['ralg'],
		'vds' => $_POST['vds'],
		'cageE' => $_POST['cageE'],
		'autreShuitdeux' => $_POST['autreShuitdeux'],
		'autreShuit' => $_POST['autreShuit'],
		'bid' => $_POST['bid'],
		'raccordP' => $_POST['raccordP'],
		'raccord' => $_POST['raccord'],
		'extincteursp' => $_POST['extincteursp'],
		'typeE' => $_POST['typeE'],
		'sep' => $_POST['sep'],
		'efixe' => $_POST['efixe'],
		'efixetext' => $_POST['efixetext'],
		'relieUn' => $_POST['relieUn'],
		'eGaz' => $_POST['eGaz'],
		'eGazText' => $_POST['eGazText'],
		'reliedeux' => $_POST['reliedeux'],
		'preaction' => $_POST['preaction'],
		'delugue' => $_POST['delugue'],
		'delugueText' => $_POST['delugueText'],
		'relietrois' => $_POST['relietrois'],
		'autresectionhuit' => $_POST['autresectionhuit'],
		'autersHuitText' => $_POST['autersHuitText'],
		'reliequatre' => $_POST['reliequatre'],

		'vpea' => $_POST['vpea'],
		'panneauA' => $_POST['panneauA'],
		'StationM' => $_POST['StationM'],
		'detecteurD' => $_POST['detecteurD'],
		'barreP' => $_POST['barreP'],
		'BoutonP' => $_POST['BoutonP'],
		'cle' => $_POST['cle'],
		'autresneuf' => $_POST['autresneuf'],
		'autreneufText' => $_POST['autreneufText'],
		'retenueM' => $_POST['retenueM'],
		'rideau' => $_POST['rideau'],
		'Systemed' => $_POST['Systemed'],
		'parPA' => $_POST['parPA'],
		'controle' => $_POST['controle'],
		'controlText' => $_POST['controlText'],
		'spe' => $_POST['spe'],
		'sss' => $_POST['sss'],
		'toutb' => $_POST['toutb'],
		'sdcc' => $_POST['sdcc'],
		'sdccText' => $_POST['sdccText'],
		'sas' => $_POST['sas'],
		'sasText' => $_POST['sasText'],

		'uea' => $_POST['uea'],
		'udl' => $_POST['udl'],
		'generatrice' => $_POST['generatrice'],
		'modele' => $_POST['modele'],
		'amp' => $_POST['amp'],
		'exteroeir' => $_POST['exteroeir'],
		'surtoit' => $_POST['surtoit'],
		'interieur' => $_POST['interieur'],
		'interieurText' => $_POST['interieurText'],
		'diesel' => $_POST['diesel'],
		'gazn' => $_POST['gazn'],
		'essence' => $_POST['essence'],
		'Propane' => $_POST['Propane'],

		'gaznaturel' => $_POST['gaznaturel'],
		'gazp' => $_POST['gazp'],
		'autrereservoir' => $_POST['autrereservoir'],
		'autrereservoirtext' => $_POST['autrereservoirtext'],
		'planetage' => $_POST['planetage'],

		'autreinfo' => $_POST['autreinfo'],

		'paneauAlarmeP' => $_POST['paneauAlarmeP'],
		'ExterieurP' => $_POST['ExterieurP'],
		'interieurP' => $_POST['interieurP'],
		'boutonsilenceP' => $_POST['boutonsilenceP'],
		'remiseP' => $_POST['remiseP'],
		'accusedeP' => $_POST['accusedeP'],
		'PanneauP' => $_POST['PanneauP'],
		'microP' => $_POST['microP'],
		'teleP' => $_POST['teleP'],
		'zones' => $_POST['zones'],
		'systemeP' => $_POST['systemeP'],
		'vueP' => $_POST['vueP'],
		'chaqueP' => $_POST['chaqueP'],
		'vanneP' => $_POST['vanneP'],
		'vannedeP' => $_POST['vannedeP'],
		'interrupteurP' => $_POST['interrupteurP'],
		'vanneetP' => $_POST['vanneetP'],
		'pompeaP' => $_POST['pompeaP'],
		'vuedP' => $_POST['vuedP'],
		'panneaudecP' => $_POST['panneaudecP'],
		'boutonetP' => $_POST['boutonetP'],
		'systemesP' => $_POST['systemesP'],
		'bonbonneP' => $_POST['bonbonneP'],
		'declencheurP' => $_POST['declencheurP'],
		'preactionP' => $_POST['preactionP'],
		'exterieurPhoto' => $_POST['exterieurPhoto'],
		'interieurPhoto' => $_POST['interieurPhoto'],
		'generatriceP' => $_POST['generatriceP'],
		'vuePhoto' => $_POST['vuePhoto'],
		'panneaudeP' => $_POST['panneaudeP'],
		'boutonarretP' => $_POST['boutonarretP'],
		'ups' => $_POST['ups'],
		'ascenseursP' => $_POST['ascenseursP'],
		'panneaurappelP' => $_POST['panneaurappelP'],
		'boutonrappel' => $_POST['boutonrappel'],
		'panneauintP' => $_POST['panneauintP'],
		'systemeappelP' => $_POST['systemeappelP'],
		'desenfumageP' => $_POST['desenfumageP'],
		'PanneaucontroleP' => $_POST['PanneaucontroleP'],


	],'psiSolo');
	exit;
}

// //  Creation du ficher excel pour sauvegarde local.
// if ($action == "copie") {
// 	$datas = array($_POST);
// 	//Supprime lelement action dans le tab.
// 	unset($datas[0]["action"]);
// 	require '../class/class.csv.php'; 
// 	CSV::export($datas,'PSI');
// 	exit;
// }


if ($action == "CREATE") {
	validate_fields();

	createUser($nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
	$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre,
	$communicationDansAscendeur, $_POST["rappelAutomatique"], $_POST["rappelManuel"], $ascenseurPompier, $nombreDeCageDescalierDeSecours,
	$nbreDappartements, $pJour, $pSoir, $pNuit, $pFDS, $oJour,$oSoir, $oNuit, $oFDS, $rJour, $rSoir, $rNuit, $rFDS, $paba,
	$cinema, $bars, $ecole, $expositions, $restaurants, $prison, $hopital, $clinique, $chsld, $appartements, $hotel, $accueil, $hebergements, $bureaux, $cabinets, 
	$magasins, $detaillants, $commerce, $ateliers, $entrepot, $usine, $stationnement, $specifiez,
	$_POST["sai"], $saiMarque, $_POST["adressable"], $_POST["zoneX"], $_POST["unEtape"], $_POST["deuxetape"], $_POST["etp"], $_POST["periode"], $pheure, $panneauS, $_POST["annonciateur"], $textannonciateur, $_POST["rac"], $racNomTel, $_POST["scu"], $scuMarque,
	$_POST["rda"],$_POST["adv"],$_POST["pressE"],$_POST["dea"],$rdrm,$tac,$aaag,$autreS,
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
	 $communicationDansAscendeur, $_POST["rappelAutomatique"], $_POST["rappelManuel"], $ascenseurPompier, $nombreDeCageDescalierDeSecours,
	 $nbreDappartements, $pJour, $pSoir, $pNuit, $pFDS, $oJour,$oSoir, $oNuit, $oFDS, $rJour, $rSoir, $rNuit, $rFDS, $paba,
	 $cinema, $bars, $ecole, $expositions, $restaurants, $prison, $hopital, $clinique, $chsld, $appartements, $hotel, $accueil, $hebergements, $bureaux, $cabinets, 
	 $magasins, $detaillants, $commerce, $ateliers, $entrepot, $usine, $stationnement, $specifiez,
	 $_POST["sai"], $saiMarque, $_POST["adressable"], $_POST["zoneX"], $_POST["unEtape"], $_POST["deuxetape"], $_POST["etp"], $_POST["periode"], $pheure, $panneauS, $_POST["annonciateur"], $textannonciateur, $_POST["rac"], $racNomTel, $_POST["scu"], $scuMarque,
	 $_POST["rda"],$_POST["adv"],$_POST["pressE"],$_POST["dea"],$rdrm,$tac,$aaag,$autreS,
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

	// validation du champ nbreDappartements si conforme au preg_match
	if (!empty($_POST["nbreDappartements"]) && !preg_match('/^[a-z0-9 .\-]+$/i', $_POST['nbreDappartements'])) {
		$flag = true;
		$erreurs['nbreDappartementsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ pJour si conforme au preg_match
	if (!empty($_POST["pJour"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['pJour'])) {
		$flag = true;
		$erreurs['pJourErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ pSoir si conforme au preg_match
	if (!empty($_POST["pSoir"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['pSoir'])) {
		$flag = true;
		$erreurs['pSoirErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ pNuit si conforme au preg_match
	if (!empty($_POST["pNuit"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['pNuit'])) {
		$flag = true;
		$erreurs['pNuitErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ pFDS si conforme au preg_match
	if (!empty($_POST["pFDS"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['pFDS'])) {
		$flag = true;
		$erreurs['pFDSErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ oJour si conforme au preg_match
	if (!empty($_POST["oJour"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['oJour'])) {
		$flag = true;
		$erreurs['oJourErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ oSoir si conforme au preg_match
	if (!empty($_POST["oSoir"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['oSoir'])) {
		$flag = true;
		$erreurs['oSoirErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ oNuit si conforme au preg_match
	if (!empty($_POST["oNuit"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['oNuit'])) {
		$flag = true;
		$erreurs['oNuitErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ oFDS si conforme au preg_match
	if (!empty($_POST["oFDS"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['oFDS'])) {
		$flag = true;
		$erreurs['oFDSErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rJour si conforme au preg_match
	if (!empty($_POST["rJour"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['rJour'])) {
		$flag = true;
		$erreurs['rJourErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rSoir si conforme au preg_match
	if (!empty($_POST["rSoir"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['rSoir'])) {
		$flag = true;
		$erreurs['rSoirErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rNuit si conforme au preg_match
	if (!empty($_POST["rNuit"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['rNuit'])) {
		$flag = true;
		$erreurs['rNuitErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ rFDS si conforme au preg_match
	if (!empty($_POST["rFDS"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['rFDS'])) {
		$flag = true;
		$erreurs['rFDSErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ paba si conforme au preg_match
	if (!empty($_POST["paba"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['paba'])) {
		$flag = true;
		$erreurs['pabaErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ cinema si conforme au preg_match
	if (!empty($_POST["cinema"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['cinema'])) {
		$flag = true;
		$erreurs['cinemaErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ bars si conforme au preg_match
	if (!empty($_POST["bars"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['bars'])) {
		$flag = true;
		$erreurs['barsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ ecole si conforme au preg_match
	if (!empty($_POST["ecole"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['ecole'])) {
		$flag = true;
		$erreurs['ecoleErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ expositions si conforme au preg_match
	if (!empty($_POST["expositions"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['expositions'])) {
		$flag = true;
		$erreurs['expositionsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ restaurants si conforme au preg_match
	if (!empty($_POST["restaurants"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['restaurants'])) {
		$flag = true;
		$erreurs['restaurantsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ prison si conforme au preg_match
	if (!empty($_POST["prison"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['prison'])) {
		$flag = true;
		$erreurs['prisonErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ hopital si conforme au preg_match
	if (!empty($_POST["hopital"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['hopital'])) {
		$flag = true;
		$erreurs['hopitalErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ clinique si conforme au preg_match
	if (!empty($_POST["clinique"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['clinique'])) {
		$flag = true;
		$erreurs['cliniqueErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ chsld si conforme au preg_match
	if (!empty($_POST["chsld"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['chsld'])) {
		$flag = true;
		$erreurs['chsldErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ appartements si conforme au preg_match
	if (!empty($_POST["appartements"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['appartements'])) {
		$flag = true;
		$erreurs['appartementsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ hotel si conforme au preg_match
	if (!empty($_POST["hotel"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['hotel'])) {
		$flag = true;
		$erreurs['hotelErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ accueil si conforme au preg_match
	if (!empty($_POST["accueil"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['accueil'])) {
		$flag = true;
		$erreurs['accueilErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ hebergements si conforme au preg_match
	if (!empty($_POST["hebergements"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['hebergements'])) {
		$flag = true;
		$erreurs['hebergementsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ bureaux si conforme au preg_match
	if (!empty($_POST["bureaux"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['bureaux'])) {
		$flag = true;
		$erreurs['bureauxErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ cabinets si conforme au preg_match
	if (!empty($_POST["cabinets"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['cabinets'])) {
		$flag = true;
		$erreurs['cabinetsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ magasins si conforme au preg_match
	if (!empty($_POST["magasins"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['magasins'])) {
		$flag = true;
		$erreurs['magasinsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ detaillants si conforme au preg_match
	if (!empty($_POST["detaillants"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['detaillants'])) {
		$flag = true;
		$erreurs['detaillantsErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ commerce si conforme au preg_match
	if (!empty($_POST["commerce"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['commerce'])) {
		$flag = true;
		$erreurs['commerceErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ ateliers si conforme au preg_match
	if (!empty($_POST["ateliers"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['ateliers'])) {
		$flag = true;
		$erreurs['ateliersErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ entrepot si conforme au preg_match
	if (!empty($_POST["entrepot"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['entrepot'])) {
		$flag = true;
		$erreurs['entrepotErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ usine si conforme au preg_match
	if (!empty($_POST["usine"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['usine'])) {
		$flag = true;
		$erreurs['usineErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ stationnement si conforme au preg_match
	if (!empty($_POST["stationnement"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['stationnement'])) {
		$flag = true;
		$erreurs['stationnementErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ specifiez si conforme au preg_match
	if (!empty($_POST["specifiez"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['specifiez'])) {
		$flag = true;
		$erreurs['specifiezErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ saiMarque si conforme au preg_match
	if (!empty($_POST["saiMarque"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['saiMarque'])) {
		$flag = true;
		$erreurs['saiMarqueErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ pheure si conforme au preg_match
	if (!empty($_POST["pheure"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['pheure'])) {
		$flag = true;
		$erreurs['pheureErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ panneauS si conforme au preg_match
	if (!empty($_POST["panneauS"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['panneauS'])) {
		$flag = true;
		$erreurs['panneauSErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ textannonciateur si conforme au preg_match
	if (!empty($_POST["textannonciateur"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['textannonciateur'])) {
		$flag = true;
		$erreurs['textannonciateurErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ racNomTel si conforme au preg_match
	if (!empty($_POST["racNomTel"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['racNomTel'])) {
		$flag = true;
		$erreurs['racNomTelErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ scuMarque si conforme au preg_match
	if (!empty($_POST["scuMarque"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['scuMarque'])) {
		$flag = true;
		$erreurs['scuMarqueErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autreS si conforme au preg_match
	if (!empty($_POST["autreS"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['autreS'])) {
		$flag = true;
		$erreurs['autreSErr'] = "Only letters, Numbers and white space allowed";
	}


	// validation du champ pafeu si conforme au preg_match
	if (!empty($_POST["pafeu"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['pafeu'])) {
		$flag = true;
		$erreurs['pafeuErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autreShuit si conforme au preg_match
	if (!empty($_POST["autreShuit"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['autreShuit'])) {
		$flag = true;
		$erreurs['autreShuitErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ raccord si conforme au preg_match
	if (!empty($_POST["raccord"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['raccord'])) {
		$flag = true;
		$erreurs['raccordErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ typeE si conforme au preg_match
	if (!empty($_POST["typeE"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['typeE'])) {
		$flag = true;
		$erreurs['typeEErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ efixetext si conforme au preg_match
	if (!empty($_POST["efixetext"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['efixetext'])) {
		$flag = true;
		$erreurs['efixetextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ eGazText si conforme au preg_match
	if (!empty($_POST["eGazText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['eGazText'])) {
		$flag = true;
		$erreurs['eGazTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ delugueText si conforme au preg_match
	if (!empty($_POST["delugueText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['delugueText'])) {
		$flag = true;
		$erreurs['delugueTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autersHuitText si conforme au preg_match
	if (!empty($_POST["autersHuitText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['autersHuitText'])) {
		$flag = true;
		$erreurs['autersHuitTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autreneufText si conforme au preg_match
	if (!empty($_POST["autreneufText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['autreneufText'])) {
		$flag = true;
		$erreurs['autreneufTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ controlText si conforme au preg_match
	if (!empty($_POST["controlText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['controlText'])) {
		$flag = true;
		$erreurs['controlTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ sdccText si conforme au preg_match
	if (!empty($_POST["sdccText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['sdccText'])) {
		$flag = true;
		$erreurs['sdccTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ sasText si conforme au preg_match
	if (!empty($_POST["sasText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['sasText'])) {
		$flag = true;
		$erreurs['sasTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ modele si conforme au preg_match
	if (!empty($_POST["modele"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['modele'])) {
		$flag = true;
		$erreurs['modeleErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ amp si conforme au preg_match
	if (!empty($_POST["amp"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['amp'])) {
		$flag = true;
		$erreurs['ampErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ interieurText si conforme au preg_match
	if (!empty($_POST["interieurText"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['interieurText'])) {
		$flag = true;
		$erreurs['interieurTextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autrereservoirtext si conforme au preg_match
	if (!empty($_POST["autrereservoirtext"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['autrereservoirtext'])) {
		$flag = true;
		$erreurs['autrereservoirtextErr'] = "Only letters, Numbers and white space allowed";
	}

	// validation du champ autreinfo si conforme au preg_match
	if (!empty($_POST["autreinfo"]) && !preg_match('/^[a-z0-9 .:\-]+$/i', $_POST['autreinfo'])) {
		$flag = true;
		$erreurs['autreinfoErr'] = "Only letters, Numbers and white space allowed";
	}
	

	if ($flag == true) {

		header("location:formulairePsi.php?&id=$id&erreurs=" . json_encode($erreurs));
		exit;
	}
}
