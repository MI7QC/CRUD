<?php

function getDatabaseConnexion()
{
	try {
		$user = "root";
		$pass = "";
		$pdo = new PDO('mysql:host=localhost;dbname=tuto_php', $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		return $pdo;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
}


// récupere tous les users
function getAllPSI($rechercher = "")
{
	$rechercher = "%" . $rechercher . "%";

	$con = getDatabaseConnexion();
	$requete = "SELECT * FROM psi WHERE coordonnateur LIKE '$rechercher' OR nomADB LIKE '$rechercher' OR courriel LIKE '$rechercher'";
	// print_r($requete);
	// die();
	$rows = $con->query($requete);
	return $rows;
}

// creer un user
function createUser($nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre,
$communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours,
$nbreDappartements, $pJour, $pSoir, $pNuit, $pFDS, $oJour,$oSoir, $oNuit, $oFDS, $rJour, $rSoir, $rNuit, $rFDS, $paba,
$cinema,$bars,$ecole,$expositions,$restaurants,$prison,$hopital,$clinique,$chsld,$appartements,$hotel,$accueil,$hebergements,$bureaux,$cabinets,$magasins,$detaillants,$commerce,$ateliers,$entrepot,$usine,$stationnement,$specifiez,
$sai, $saiMarque, $adressable, $zoneX, $unEtape, $deuxetape, $etp, $periode, $pheure, $panneauS, $annonciateur, $textannonciateur, $rac, $racNomTel, $scu, $scuMarque,
$rda,$adv,$pressE,$dea,$rdrm,$tac,$aaag,$autreS,
$sdga,$eau,$air,$dssogs,$dtlb,$pompeAfeu,$pafeu,$ralg,$vds,$cageE,$autreShuitdeux,$autreShuit,$bid,$raccordP,$raccord,$extincteursp,$typeE,$sep,$efixe,$efixetext,$relieUn,
$eGaz,$eGazText,$reliedeux,$preaction,$delugue,$delugueText,$relietrois,$autresectionhuit,$autersHuitText,$reliequatre,
$vpea,$panneauA,$StationM,$detecteurD,$barreP,$BoutonP,$cle,$autresneuf,$autreneufText,$retenueM,$rideau,$Systemed,$parPA,$controle,$controlText,$spe,$sss,$toutb,$sdcc,$sdccText,$sas,$sasText,
$uea,$udl,$generatrice,$modele,$amp,$exteroeir,$surtoit,$interieur,$interieurText,$diesel,$gazn,$essence,$Propane,
$gaznaturel,$gazp,$autrereservoir,$autrereservoirtext,$planetage,$autreinfo,
$paneauAlarmeP,$ExterieurP,$interieurP,$boutonsilenceP,$remiseP,$accusedeP,$PanneauP,$microP,$teleP,$zones,$systemeP,$vueP,$chaqueP,$vanneP,$vannedeP,$interrupteurP,$vanneetP,$pompeaP,$vuedP,
$panneaudecP,$boutonetP,$systemesP,$bonbonneP,$declencheurP,$preactionP,$exterieurPhoto,$interieurPhoto,$generatriceP,$vuePhoto,$panneaudeP,$boutonarretP,$ups,$ascenseursP,$panneaurappelP,
$boutonrappel,$panneauintP,$systemeappelP,$desenfumageP,$PanneaucontroleP)

{
	try {
		$con = getDatabaseConnexion();
		$sql = "INSERT INTO psi (nomADB, coordonnateur, telJour, telSoir, nomADP, responsable, tel, courriel,
		principale,autre,nombreDeSousSol,NombreDetage,nombreDappentis,nombreDeGrenier,ascenseurNombre,monteChargeNombre,communicationDansAscendeur,rappelAutomatique,rappelManuel,ascenseurPompier,nombreDeCageDescalierDeSecours,
		nbreDappartements,pJour,pSoir,pNuit,pFDS,oJour,oSoir,oNuit,oFDS,rJour,rSoir,rNuit,rFDS,paba,
		cinema,bars,ecole,expositions,restaurants,prison,hopital,clinique,chsld,appartements,hotel,accueil,hebergements,bureaux,cabinets,magasins,detaillants,commerce,ateliers,entrepot,usine,stationnement,specifiez,
		sai, saiMarque, adressable, zoneX, unEtape, deuxetape, etp, periode, pheure, panneauS, annonciateur, textannonciateur, rac, racNomTel, scu, scuMarque,
		rda,adv,pressE,dea,rdrm,tac,aaag,autreS,
		sdga,eau,air,dssogs,dtlb,pompeAfeu,pafeu,ralg,vds,cageE,autreShuitdeux,autreShuit,bid,raccordP,raccord,extincteursp,typeE,sep,efixe,efixetext,relieUn,
		eGaz,eGazText,reliedeux,preaction,delugue,delugueText,relietrois,autresectionhuit,autersHuitText,reliequatre,
		vpea,panneauA,StationM,detecteurD,barreP,BoutonP,cle,autresneuf,autreneufText,retenueM,rideau,Systemed,parPA,controle,controlText,spe,sss,toutb,sdcc,sdccText,sas,sasText,
		uea,udl,generatrice,modele,amp,exteroeir,surtoit,interieur,interieurText,diesel,gazn,essence,Propane,
		gaznaturel,gazp,autrereservoir,autrereservoirtext,planetage,autreinfo,
		paneauAlarmeP,ExterieurP,interieurP,boutonsilenceP,remiseP,accusedeP,PanneauP,microP,teleP,zones,systemeP,vueP,chaqueP,vanneP,vannedeP,interrupteurP,vanneetP,pompeaP,vuedP,
		panneaudecP,boutonetP,systemesP,bonbonneP,declencheurP,preactionP,exterieurPhoto,interieurPhoto,generatriceP,vuePhoto,panneaudeP,boutonarretP,ups,ascenseursP,panneaurappelP,
		boutonrappel,panneauintP,systemeappelP,desenfumageP,PanneaucontroleP)
					VALUES ('$nomADB', '$coordonnateur', '$telJour' ,'$telSoir','$nomADP','$responsable','$tel','$courriel',
					'$principale','$autre','$nombreDeSousSol','$NombreDetage','$nombreDappentis','$nombreDeGrenier','$ascenseurNombre','$monteChargeNombre','$communicationDansAscendeur','$rappelAutomatique','$rappelManuel','$ascenseurPompier','$nombreDeCageDescalierDeSecours',
					'$nbreDappartements', '$pJour', '$pSoir', '$pNuit', '$pFDS', '$oJour','$oSoir', '$oNuit', '$oFDS', '$rJour', '$rSoir', '$rNuit', '$rFDS', '$paba',
					'$cinema','$bars','$ecole','$expositions','$restaurants','$prison','$hopital','$clinique','$chsld','$appartements','$hotel','$accueil','$hebergements','$bureaux','$cabinets','$magasins','$detaillants','$commerce','$ateliers','$entrepot','$usine','$stationnement','$specifiez',
					'$sai','$saiMarque','$adressable','$zoneX','$unEtape','$deuxetape','$etp','$periode','$pheure','$panneauS','$annonciateur','$textannonciateur','$rac','$racNomTel','$scu','$scuMarque',
					'$rda','$adv','$pressE','$dea','$rdrm','$tac','$aaag','$autreS',
					'$sdga','$eau','$air','$dssogs','$dtlb','$pompeAfeu','$pafeu','$ralg','$vds','$cageE','$autreShuitdeux','$autreShuit','$bid','$raccordP','$raccord','$extincteursp','$typeE','$efixe','$sep','$efixetext','$relieUn',
					'$eGaz','$eGazText','$reliedeux','$preaction','$delugue','$delugueText','$relietrois','$autresectionhuit','$autersHuitText','$reliequatre',
					'$vpea','$panneauA','$StationM','$detecteurD','$barreP','$BoutonP','$cle','$autresneuf','$autreneufText','$retenueM','$rideau','$Systemed','$parPA','$controle','$controlText','$spe','$sss','$toutb','$sdcc','$sdccText','$sas','$sasText',
					'$uea','$udl','$generatrice','$modele','$amp','$exteroeir','$surtoit','$interieur','$interieurText','$diesel','$gazn','$essence','$Propane',
					'$gaznaturel','$gazp','$autrereservoir','$autrereservoirtext','$planetage','$autreinfo',
					'$paneauAlarmeP','$ExterieurP','$interieurP','$boutonsilenceP','$remiseP','$accusedeP','$PanneauP','$microP','$teleP','$zones','$systemeP','$vueP','$chaqueP','$vanneP','$vannedeP','$interrupteurP','$vanneetP','$pompeaP','$vuedP',
					'$panneaudecP','$boutonetP','$systemesP','$bonbonneP','$declencheurP','$preactionP','$exterieurPhoto','$interieurPhoto','$generatriceP','$vuePhoto','$panneaudeP','$boutonarretP','$ups','$ascenseursP','$panneaurappelP',
					'$boutonrappel','$panneauintP','$systemeappelP','$desenfumageP','$PanneaucontroleP')";
		$con->exec($sql);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

//recupere un user
function readUser($id)
{
	$con = getDatabaseConnexion();
	$requete = "SELECT * from psi where idPsi = '$id' ";
	$stmt = $con->query($requete);
	$row = $stmt->fetchAll();
	if (!empty($row)) {
		return $row[0];
	}
}

//met à jour le user
function updateUser($id, $nomADB, $coordonnateur, $telJour, $telSoir, $nomADP, $responsable, $tel, $courriel,
$principale, $autre, $nombreDeSousSol, $NombreDetage, $nombreDappentis, $nombreDeGrenier, $ascenseurNombre, $monteChargeNombre, $communicationDansAscendeur, $rappelAutomatique, $rappelManuel, $ascenseurPompier, $nombreDeCageDescalierDeSecours,
$nbreDappartements, $pJour, $pSoir, $pNuit, $pFDS, $oJour,$oSoir, $oNuit, $oFDS, $rJour, $rSoir, $rNuit, $rFDS, $paba,
$cinema,$bars,$ecole,$expositions,$restaurants,$prison,$hopital,$clinique,$chsld,$appartements,$hotel,$accueil,$hebergements,$bureaux,$cabinets,$magasins,$detaillants,$commerce,$ateliers,$entrepot,$usine,$stationnement,$specifiez,
$sai, $saiMarque, $adressable, $zoneX, $unEtape, $deuxetape, $etp, $periode, $pheure, $panneauS, $annonciateur, $textannonciateur, $rac, $racNomTel, $scu, $scuMarque,
$rda,$adv,$pressE,$dea,$rdrm,$tac,$aaag,$autreS,
$sdga,$eau,$air,$dssogs,$dtlb,$pompeAfeu,$pafeu,$ralg,$vds,$cageE,$autreShuitdeux,$autreShuit,$bid,$raccordP,$raccord,$extincteursp,$typeE,$sep,$efixe,$efixetext,$relieUn,
$eGaz,$eGazText,$reliedeux,$preaction,$delugue,$delugueText,$relietrois,$autresectionhuit,$autersHuitText,$reliequatre,
$vpea,$panneauA,$StationM,$detecteurD,$barreP,$BoutonP,$cle,$autresneuf,$autreneufText,$retenueM,$rideau,$Systemed,$parPA,$controle,$controlText,$spe,$sss,$toutb,$sdcc,$sdccText,$sas,$sasText,
$uea,$udl,$generatrice,$modele,$amp,$exteroeir,$surtoit,$interieur,$interieurText,$diesel,$gazn,$essence,$Propane,
$gaznaturel,$gazp,$autrereservoir,$autrereservoirtext,$planetage,$autreinfo,
$paneauAlarmeP,$ExterieurP,$interieurP,$boutonsilenceP,$remiseP,$accusedeP,$PanneauP,$microP,$teleP,$zones,$systemeP,$vueP,$chaqueP,$vanneP,$vannedeP,$interrupteurP,$vanneetP,$pompeaP,$vuedP,
$panneaudecP,$boutonetP,$systemesP,$bonbonneP,$declencheurP,$preactionP,$exterieurPhoto,$interieurPhoto,$generatriceP,$vuePhoto,$panneaudeP,$boutonarretP,$ups,$ascenseursP,$panneaurappelP,
$boutonrappel,$panneauintP,$systemeappelP,$desenfumageP,$PanneaucontroleP)
{
	try {
		$con = getDatabaseConnexion();
		$requete = "UPDATE psi set 
						nomADB = '$nomADB',
						coordonnateur = '$coordonnateur',
						telJour = '$telJour',
						telSoir = '$telSoir', 
						nomADP = '$nomADP', 
						responsable = '$responsable', 
						tel = '$tel', 
						courriel = '$courriel',
						principale = '$principale',
						autre = '$autre',
						nombreDeSousSol = '$nombreDeSousSol',
						NombreDetage = '$NombreDetage',
						nombreDappentis = '$nombreDappentis',
						nombreDeGrenier = '$nombreDeGrenier',
						ascenseurNombre = '$ascenseurNombre',
						monteChargeNombre = '$monteChargeNombre',
						communicationDansAscendeur = '$communicationDansAscendeur',
						rappelAutomatique = '$rappelAutomatique',
						rappelManuel = '$rappelManuel',
						ascenseurPompier = '$ascenseurPompier',
						nombreDeCageDescalierDeSecours = '$nombreDeCageDescalierDeSecours',
						nbreDappartements = '$nbreDappartements',
						pJour = '$pJour',
						pSoir = '$pSoir',
						pNuit = '$pNuit',
						pFDS = '$pFDS',
						oJour = '$oJour',
						oSoir = '$oSoir',
						oNuit = '$oNuit',
						oFDS = '$oFDS',
						rJour = '$rJour',
						rSoir = '$rSoir',
						rNuit = '$rNuit',
						rFDS = '$rFDS',
						paba = '$paba',
						cinema = '$cinema',
						bars = '$bars',
						ecole = '$ecole',
						expositions = '$expositions',
						restaurants = '$restaurants',
						prison = '$prison',
						hopital = '$hopital',
						clinique = '$clinique',
						chsld = '$chsld',
						appartements = '$appartements',
						hotel = '$hotel',
						accueil = '$accueil',
						hebergements = '$hebergements',
						bureaux = '$bureaux',
						cabinets = '$cabinets',
						magasins = '$magasins',
						detaillants = '$detaillants',
						commerce = '$commerce',
						ateliers = '$ateliers',
						entrepot = '$entrepot',
						usine = '$usine',
						stationnement = '$stationnement',
						specifiez = '$specifiez',
						sai = '$sai',
						saiMarque = '$saiMarque',
						adressable = '$adressable',
						zoneX = '$zoneX',
						unEtape = '$unEtape',
						deuxetape = '$deuxetape',
						etp = '$etp',
						periode = '$periode',
						pheure = '$pheure',
						panneauS = '$panneauS',
						annonciateur = '$annonciateur',
						textannonciateur = '$textannonciateur',
						rac = '$rac',
						racNomTel = '$racNomTel',
						scu = '$scu',
						scuMarque = '$scuMarque',
						rda = '$rda',
						adv = '$adv',
						pressE = '$pressE',
						dea = '$dea',
						rdrm = '$rdrm',
						tac = '$tac',
						aaag = '$aaag',
						autreS = '$autreS',
						sdga = '$sdga',
						eau = '$eau',
						air = '$air',
						dssogs = '$dssogs',
						dtlb = '$dtlb',
						pompeAfeu = '$pompeAfeu',
						pafeu = '$pafeu',
						ralg = '$ralg',
						vds = '$vds',
						cageE = '$cageE',
						autreShuitdeux = '$autreShuitdeux',
						autreShuit = '$autreShuit',
						bid = '$bid',
						raccordP = '$raccordP',
						raccord = '$raccord',
						extincteursp = '$extincteursp',
						typeE = '$typeE',
						sep = '$sep',
						efixe = '$efixe',
						efixetext = '$efixetext',
						relieUn = '$relieUn',
						eGaz = '$eGaz',
						eGazText = '$eGazText',
						reliedeux = '$reliedeux',
						preaction = '$preaction',
						delugue = '$delugue',
						delugueText = '$delugueText',
						relietrois = '$relietrois',
						autresectionhuit = '$autresectionhuit',
						autersHuitText = '$autersHuitText',
						reliequatre = '$reliequatre',
						vpea = '$vpea',
						panneauA = '$panneauA',
						StationM = '$StationM',
						detecteurD = '$detecteurD',
						barreP = '$barreP',
						BoutonP = '$BoutonP',
						cle = '$cle',
						autresneuf = '$autresneuf',
						autreneufText = '$autreneufText',
						retenueM = '$retenueM',
						rideau = '$rideau',
						Systemed = '$Systemed',
						parPA = '$parPA',
						controle = '$controle',
						controlText = '$controlText',
						spe = '$spe',
						sss = '$sss',
						toutb = '$toutb',
						sdcc = '$sdcc',
						sdccText = '$sdccText',
						sas = '$sas',
						sasText = '$sasText',
						uea = '$uea',
						udl = '$udl',
						generatrice = '$generatrice',
						modele = '$modele',
						amp = '$amp',
						exteroeir = '$exteroeir',
						surtoit = '$surtoit',
						interieur = '$interieur',
						interieurText = '$interieurText',
						diesel = '$diesel',
						gazn = '$gazn',
						essence = '$essence',
						Propane = '$Propane',
						gaznaturel = '$gaznaturel',
						gazp = '$gazp',
						autrereservoir = '$autrereservoir',
						autrereservoirtext = '$autrereservoirtext',
						planetage = '$planetage',
						autreinfo = '$autreinfo',
						paneauAlarmeP = '$paneauAlarmeP',
						ExterieurP = '$ExterieurP',
						interieurP = '$interieurP',
						boutonsilenceP = '$boutonsilenceP',
						remiseP = '$remiseP',
						accusedeP = '$accusedeP',
						PanneauP = '$PanneauP',
						microP = '$microP',
						teleP = '$teleP',
						zones = '$zones',
						systemeP = '$systemeP',
						vueP = '$vueP',
						chaqueP = '$chaqueP',
						vanneP = '$vanneP',
						vannedeP = '$vannedeP',
						interrupteurP = '$interrupteurP',
						vanneetP = '$vanneetP',
						pompeaP = '$pompeaP',
						vuedP = '$vuedP',
						panneaudecP = '$panneaudecP',
						boutonetP = '$boutonetP',
						systemesP = '$systemesP',
						bonbonneP = '$bonbonneP',
						declencheurP = '$declencheurP',
						preactionP = '$preactionP',
						exterieurPhoto = '$exterieurPhoto',
						interieurPhoto = '$interieurPhoto',
						generatriceP = '$generatriceP',
						vuePhoto = '$vuePhoto',
						panneaudeP = '$panneaudeP',
						boutonarretP = '$boutonarretP',
						ups = '$ups',
						ascenseursP = '$ascenseursP',
						panneaurappelP = '$panneaurappelP',
						boutonrappel = '$boutonrappel',
						panneauintP = '$panneauintP',
						systemeappelP = '$systemeappelP',
						desenfumageP = '$desenfumageP',
						PanneaucontroleP = '$PanneaucontroleP'
						where idPsi = '$id' ";
		$stmt = $con->query($requete);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

// suprime un user
function deleteUser($id)
{
	try {
		$con = getDatabaseConnexion();
		$requete = "DELETE from psi where idPsi = '$id' ";
		$stmt = $con->query($requete);
	} catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

function getNewUser()
{
	$psi["idPSI"] = "";
	$psi["nomADB"] = "";
	$psi["nomBatiment"] = "";
	$psi["coordonnateur"] = "";
	$psi["cellJour"] = "";
	$psi["cellSoir"] = "";
	$psi["nomADP"] = "";
	$psi["responsable"] = "";
	$psi["cellADP"] = "";
	$psi["courriel"] = "";
}
