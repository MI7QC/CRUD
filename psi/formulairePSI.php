<?php
include 'mesFunctionsSQL.php';
include 'afficherUser.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id==0) {
	$user = getNewUser();
	$action = "CREATE";
	$libelle = "Creer";
} else {
	$user = readUser($id);
	$action = "UPDATE";
	$libelle = "Mettre a jour";
}

if (isset($_GET['erreurs']) ){
$erreurs=json_decode($_GET['erreurs']);
}
?>

<html>
<header>
	<link rel="stylesheet" href="../styles/psi.css">
	<style>.error{color: red;}</style>
</header>
<a href="mainPagePSI.php">Menu PSI</a>
<body>
	<form class=""; action="createUpdateDeletePsi.php" method="post">
	
			<h1>Évaluation pour plan de sécurité incendie</h1>

			<input type="hidden" name="id" value="<?php if(isset($user['idPsi'])) {echo $user['idPsi']; } ?>" />
			<input type="hidden" name="action" value="<?php echo $action;  ?>" /> 
		<div class="containerCent">

			<div class="cinquante">
				<p class="title">Nom & Adresse Du Bâtiment:</p>
				<textarea style="resize: none;" type="text" id="nomADB" name="nomADB" >  <?php if(isset($user['nomADB'])) { echo $user['nomADB'];}  ?></textarea>
				<span class="error"> <?php if(isset($erreurs->nomADBErr)){ echo $erreurs->nomADBErr; }  ?></span>
			
				<div class="input">
					<label for="coordonnateur">Coordonnateur :</label>
					<input type="text" id="coordonnateur" name="coordonnateur" value="<?php if(isset($user['coordonnateur'])) { echo $user['coordonnateur'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->coordonnateurErr)){ echo $erreurs->coordonnateurErr; }  ?></span>
				</div>

				<div class="input">
					<label for="telJour">Téléphone Jour :</label>
					<input type="text" id="telJour" name="telJour" value="<?php if(isset($user['telJour'])) { echo $user['telJour'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->telJourErr)){ echo $erreurs->telJourErr; }  ?></span>
				</div>
				<div class="input">
					<label for="telSoir">Téléphone Soir :</label>
					<input type="text" id="telSoir" name="telSoir" value="<?php if(isset($user['telSoir'])) { echo $user['telSoir'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->telSoirErr)){ echo $erreurs->telSoirErr; }  ?></span>
				</div>
			</div>
		

			<div class="cinquante">
				<p class="title">Nom & Adresse Du Propriétaire</p>
				<textarea style="resize: none;" type="text" id="nomADP" name="nomADP" > <?php if(isset($user['nomADP'])) { echo $user['nomADP'];} ?></textarea>
				<span class="error"> <?php if(isset($erreurs->nomADPErr)){ echo $erreurs->nomADPErr; }  ?></span>
			
				<div class="input">
					<label for="responsable">Responsable :</label>
					<input type="text" id="responsable" name="responsable" value="<?php if(isset($user['responsable'])) { echo $user['responsable'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->responsableErr)){ echo $erreurs->responsableErr; }  ?></span>
				</div>

				<div class="input">
					<label for="Tel">Téléphone :</label>
					<input type="text" id="tel" name="tel" value="<?php if(isset($user['tel'])) { echo $user['tel'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->telErr)){ echo $erreurs->telErr; }  ?></span>
				</div>

				<div class="input">
					<label for="courriel">Courriel :</label>
					<input type="text" id="courriel" name="courriel" value="<?php if(isset($user['courriel'])) { echo $user['courriel'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->courrielErr)){ echo $erreurs->courrielErr; }  ?></span>
				</div>
			</div>
			
		</div>

		<h2>Information Générale Sur L'immeuble</h2>

		<div class="containerCent">
		
			<div class="trentepourcent">
				<p >1 Entré(s) situés au :</p>
				<p >2 Caractéristiques de construction :</p>
				<p >3 Communication verticale :</p>
			</div>

			<div class="soixantedixpourcent">
				<div class="inputsoixantedixpourcent">
					<label for="principale">Principale :</label>
					<input type="text" id="principale" name="principale" value="<?php if(isset($user['principale'])) { echo $user['principale'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->principaleErr)){ echo $erreurs->principaleErr; }  ?></span>

					<label for="autre">Autre :</label>
					<input type="text" id="autre" name="autre" value="<?php if(isset($user['autre'])) { echo $user['autre'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->autreErr)){ echo $erreurs->autreErr; }  ?></span>
				</div>
				<div class="espacement">
					<div class="inputsoixantedixpourcent inputSoixanteDixPourCentLargeurInput">
						<label for="nombreDeSousSol">Nombre de sous-sol(s) :</label>
						<input type="text" id="nombreDeSousSol" name="nombreDeSousSol" value="<?php if(isset($user['nombreDeSousSol'])) { echo $user['nombreDeSousSol'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->nombreDeSousSolErr)){ echo $erreurs->nombreDeSousSolErr; }  ?></span>

						<label for="NombreDetage">Nombre d'étage(s) :</label>
						<input type="text" id="NombreDetage" name="NombreDetage" value="<?php if(isset($user['NombreDetage'])) { echo $user['NombreDetage'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->NombreDetageErr)){ echo $erreurs->NombreDetageErr; }  ?></span>
					</div>

					<div class="inputsoixantedixpourcent inputSoixanteDixPourCentLargeurInput">
						<label for="nombreDappentis">Nombre d'appentis:</label>
						<input type="text" id="nombreDappentis" name="nombreDappentis" value="<?php if(isset($user['nombreDappentis'])) { echo $user['nombreDappentis'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->nombreDappentisErr)){ echo $erreurs->nombreDappentisErr; }  ?></span>

						<label for="nombreDeGrenier">Nombre De Grenier(s):</label>
						<input type="text" id="nombreDeGrenier" name="nombreDeGrenier" value="<?php if(isset($user['nombreDeGrenier'])) { echo $user['nombreDeGrenier'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->nombreDeGrenierErr)){ echo $erreurs->nombreDeGrenierErr; }  ?></span>
					</div>
				</div>

				<div class="inputsoixantedixpourcent inputSoixanteDixPourCentLargeurInput">
					<label for="ascenseurNombre">Ascenseur(s) Qty :</label>
					<input type="text" id="ascenseurNombre" name="ascenseurNombre" value="<?php if(isset($user['ascenseurNombre'])) { echo $user['ascenseurNombre'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->ascenseurNombreErr)){ echo $erreurs->ascenseurNombreErr; }  ?></span>

					<label for="monteChargeNombre">Monte-charge(s) Qty :</label>
					<input type="text" id="monteChargeNombre" name="monteChargeNombre" value="<?php if(isset($user['monteChargeNombre'])) { echo $user['monteChargeNombre'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->monteChargeNombreErr)){ echo $erreurs->monteChargeNombreErr; }  ?></span>
				</div>

				<div class="inputsoixantedixpourcent cda">
					<label for="communicationDansAscendeur">Communication Dans Ascendeur</label>
					<input type="text" id="communicationDansAscendeur" name="communicationDansAscendeur" value="<?php if(isset($user['communicationDansAscendeur'])) { echo $user['communicationDansAscendeur'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->communicationDansAscendeurErr)){ echo $erreurs->communicationDansAscendeurErr; }  ?></span>
				</div>


				<div class="inputsoixantedixpourcent ">
					<div >
						<label for="rappelAutomatique">Rappel Automatique </label>
						<input type="checkbox" id="rappelAutomatique" name="rappelAutomatique" <?php if ($user['rappelAutomatique'] == 1) $user['rappelAutomatique'] = "checked"; echo $user['rappelAutomatique'] ?>>

						<label class="rappelM" for="rappelManuel">Rappel Manuel </label>
						<input type="checkbox" id="rappelManuel" name="rappelManuel" <?php if ($user['rappelManuel'] == 1) $user['rappelManuel'] = "checked"; echo $user['rappelManuel'] ?>>

					</div> 
				</div>
				
				<div class="inputsoixantedixpourcent">	
					<label for="ascenseurPompier">Ascenseur Pompier # :</label>
					<input type="text" id="ascenseurPompier" name="ascenseurPompier" value="<?php if(isset($user['ascenseurPompier'])) { echo $user['ascenseurPompier'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->ascenseurPompierErr)){ echo $erreurs->ascenseurPompierErr; }  ?></span>
				</div>

				<div class="inputsoixantedixpourcent ">	
					<label for="nombreDeCageDescalierDeSecours" >Nombre De Cage D'escalier De Secours :</label>
					<input type="text" id="nombreDeCageDescalierDeSecours" name="nombreDeCageDescalierDeSecours" value="<?php if(isset($user['nombreDeCageDescalierDeSecours'])) { echo $user['nombreDeCageDescalierDeSecours'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->nombreDeCageDescalierDeSecoursErr)){ echo $erreurs->nombreDeCageDescalierDeSecoursErr; }  ?></span>
				</div>
			</div>
		</div>


		 <div class="containerCent">
		
			<div class="trentepourcentPartTwo trentepourcent">
				<p >4 Occupation du bâtiment (nombre de personnes)</p>
				<label for="nbreDappartements" style="font-weight: bold; margin-left: 10px" >Nbre Dappartements :</label>
				<input type="text" id="nbreDappartements" name="nbreDappartements" value="<?php if(isset($user['nbreDappartements'])) { echo $user['nbreDappartements'];  }?>" >
				<span class="error"> <?php if(isset($erreurs->nbreDappartementsErr)){ echo $erreurs->nbreDappartementsErr; }  ?></span>
			</div>

			<div class="soixantedixpourcent">
				<div class="inputsoixantedixpourcent personnel">
					<label for="pJour">Personnel: Jour :</label>
					<input type="text" id="pJour" name="pJour" value="<?php if(isset($user['pJour'])) { echo $user['pJour'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pJourErr)){ echo $erreurs->pJourErr; }  ?></span>

					<label for="pSoir">Soir :</label>
					<input type="text" id="pSoir" name="pSoir" value="<?php if(isset($user['pSoir'])) { echo $user['pSoir'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pSoirErr)){ echo $erreurs->pSoirErr; }  ?></span>

					<label for="pNuit">Nuit :</label>
					<input type="text" id="pNuit" name="pNuit" value="<?php if(isset($user['pNuit'])) { echo $user['pNuit'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pNuitErr)){ echo $erreurs->pNuitErr; }  ?></span>

					<label for="pFDS">FDS :</label>
					<input type="text" id="pFDS" name="pFDS" value="<?php if(isset($user['pFDS'])) { echo $user['pFDS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pFDSErr)){ echo $erreurs->pFDSErr; }  ?></span>
				</div>


				<div class="inputsoixantedixpourcent personnel">
					<label for="oJour">Occupants: Jour :</label>
					<input type="text" id="oJour" name="oJour" value="<?php if(isset($user['oJour'])) { echo $user['oJour'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->oJourErr)){ echo $erreurs->oJourErr; }  ?></span>

					<label for="oSoir">Soir :</label>
					<input type="text" id="oSoir" name="oSoir" value="<?php if(isset($user['oSoir'])) { echo $user['oSoir'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->oSoirErr)){ echo $erreurs->oSoirErr; }  ?></span>

					<label for="oNuit">Nuit :</label>
					<input type="text" id="oNuit" name="oNuit" value="<?php if(isset($user['oNuit'])) { echo $user['oNuit'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->oNuitErr)){ echo $erreurs->oNuitErr; }  ?></span>

					<label for="oFDS">FDS :</label>
					<input type="text" id="oFDS" name="oFDS" value="<?php if(isset($user['oFDS'])) { echo $user['oFDS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->oFDSErr)){ echo $erreurs->oFDSErr; }  ?></span>
				</div>

				<div class="inputsoixantedixpourcent personnel">
					<label for="rJour">Résidents: Jour :</label>
					<input type="text" id="rJour" name="rJour" value="<?php if(isset($user['rJour'])) { echo $user['rJour'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->rJourErr)){ echo $erreurs->rJourErr; }  ?></span>

					<label for="rSoir">Soir :</label>
					<input type="text" id="rSoir" name="rSoir" value="<?php if(isset($user['rSoir'])) { echo $user['rSoir'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->rSoirErr)){ echo $erreurs->rSoirErr; }  ?></span>

					<label for="rNuit">Nuit :</label>
					<input type="text" id="rNuit" name="rNuit" value="<?php if(isset($user['rNuit'])) { echo $user['rNuit'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->rNuitErr)){ echo $erreurs->rNuitErr; }  ?></span>

					<label for="rFDS">FDS :</label>
					<input type="text" id="rFDS" name="rFDS" value="<?php if(isset($user['rFDS'])) { echo $user['rFDS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->rFDSErr)){ echo $erreurs->rFDSErr; }  ?></span>
				</div>


				<div class="inputsoixantedixpourcent paba">	
					<label for="paba" >Personnes ayant besoin d'assistance : Non : Oui : Nombre : </label>
					<input type="text" id="paba" name="paba" value="<?php if(isset($user['paba'])) { echo $user['paba'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pabaErr)){ echo $erreurs->pabaErr; }  ?></span>
				</div>
			</div>
		</div>

		 <div class="containerCent">
				
			<div class="trentepourcentPartTwo  trentepourcent">
				<p>5 Types D'occupation</p>
			</div>
			
			<div class="soixantedixpourcent trentepourcent " >	
			<p style="font-weight: bold; text-align: center;" >Établissement / étages</p>
			</div>
		</div>


		<div class="containerCent"> 
			<div class="quatrevingtdixpourcent">
				
				<div class="inputsoixantedixpourcent ">
			
					<label for="cinema">A) Réunion : Cinéma</label>
					<input type="text" id="cinema" name="cinema" value="<?php if(isset($user['cinema'])) { echo $user['cinema'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->cinemaErr)){ echo $erreurs->cinemaErr; }  ?></span>

					<label for="bars">Bars</label>
					<input type="text" id="bars" name="bars" value="<?php if(isset($user['bars'])) { echo $user['bars'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->barsErr)){ echo $erreurs->barsErr; }  ?></span>

					<label for="ecole">Écoles</label>
					<input type="text" id="ecole" name="ecole" value="<?php if(isset($user['ecole'])) { echo $user['ecole'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->ecoleErr)){ echo $erreurs->ecoleErr; }  ?></span>

					<label for="expositions">Expositions</label>
					<input type="text" id="expositions" name="expositions" value="<?php if(isset($user['expositions'])) { echo $user['expositions'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->expositionsErr)){ echo $erreurs->expositionsErr; }  ?></span>

					<label for="restaurants">Restaurants</label>
					<input type="text" id="restaurants" name="restaurants" value="<?php if(isset($user['restaurants'])) { echo $user['restaurants'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->restaurantsErr)){ echo $erreurs->restaurantsErr; }  ?></span>	
				</div>	



				<div class="inputsoixantedixpourcent ">
			
					<label for="prison">B) Soins-Détention : Prison</label>
					<input type="text" id="prison" name="prison" value="<?php if(isset($user['prison'])) { echo $user['prison'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->prisonErr)){ echo $erreurs->prisonErr; }  ?></span>

					<label for="hopital">Hôpital</label>
					<input type="text" id="hopital" name="hopital" value="<?php if(isset($user['hopital'])) { echo $user['hopital'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->hopitalErr)){ echo $erreurs->hopitalErr; }  ?></span>

					<label for="clinique">Clinique</label>
					<input type="text" id="clinique" name="clinique" value="<?php if(isset($user['clinique'])) { echo $user['clinique'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->cliniqueErr)){ echo $erreurs->cliniqueErr; }  ?></span>

					<label for="chsld">CHSLD</label>
					<input type="text" id="chsld" name="chsld" value="<?php if(isset($user['chsld'])) { echo $user['chsld'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->chsldErr)){ echo $erreurs->chsldErr; }  ?></span>
				</div>	

				<div class="inputsoixantedixpourcent ">
			
					<label for="appartements">C) Habitations : Appartements</label>
					<input type="text" id="appartements" name="appartements" value="<?php if(isset($user['appartements'])) { echo $user['appartements'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->appartementsErr)){ echo $erreurs->appartementsErr; }  ?></span>

					<label for="hotel">Hôtel</label>
					<input type="text" id="hotel" name="hotel" value="<?php if(isset($user['hotel'])) { echo $user['hotel'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->hotelErr)){ echo $erreurs->hotelErr; }  ?></span>

					<label for="accueil">C-Accueil</label>
					<input type="text" id="accueil" name="accueil" value="<?php if(isset($user['accueil'])) { echo $user['accueil'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->accueilErr)){ echo $erreurs->accueilErr; }  ?></span>

					<label for="hebergements">Hébergements</label>
					<input type="text" id="hebergements" name="hebergements" value="<?php if(isset($user['hebergements'])) { echo $user['hebergements'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->hebergementsErr)){ echo $erreurs->hebergementsErr; }  ?></span>
				</div>	

				<div class="inputsoixantedixpourcent ">
			
					<label for="bureaux">D) Affaire : Bureaux</label>
					<input style="width: 28%"type="text" id="bureaux" name="bureaux" value="<?php if(isset($user['bureaux'])) { echo $user['bureaux'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->bureauxErr)){ echo $erreurs->bureauxErr; }  ?></span>

					<label for="cabinets">Cabinets</label>
					<input style="width: 28%" type="text" id="cabinets" name="cabinets" value="<?php if(isset($user['cabinets'])) { echo $user['cabinets'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->cabinetsErr)){ echo $erreurs->cabinetsErr; }  ?></span>

	
				</div>	

				<div class="inputsoixantedixpourcent ">
			
					<label for="magasins">E) Commerciaux : Magasins</label>
					<input type="text" id="magasins" name="magasins" value="<?php if(isset($user['magasins'])) { echo $user['magasins'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->magasinsErr)){ echo $erreurs->magasinsErr; }  ?></span>

					<label for="detaillants">Détaillants</label>
					<input type="text" id="detaillants" name="detaillants" value="<?php if(isset($user['detaillants'])) { echo $user['detaillants'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->detaillantsErr)){ echo $erreurs->detaillantsErr; }  ?></span>

					<label for="commerce">Commerce</label>
					<input type="text" id="commerce" name="commerce" value="<?php if(isset($user['commerce'])) { echo $user['commerce'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->commerceErr)){ echo $erreurs->commerceErr; }  ?></span>
				</div>	


				<div class="inputsoixantedixpourcent ">
			
					<label for="ateliers">F) Industriels : Ateliers</label>
					<input type="text" id="ateliers" name="ateliers" value="<?php if(isset($user['ateliers'])) { echo $user['ateliers'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->ateliersErr)){ echo $erreurs->ateliersErr; }  ?></span>

					<label for="entrepot">Entrepôt</label>
					<input type="text" id="entrepot" name="entrepot" value="<?php if(isset($user['entrepot'])) { echo $user['entrepot'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->entrepotErr)){ echo $erreurs->entrepotErr; }  ?></span>

					<label for="usine">Usine</label>
					<input type="text" id="usine" name="usine" value="<?php if(isset($user['usine'])) { echo $user['usine'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->usineErr)){ echo $erreurs->usineErr; }  ?></span>

					<label for="stationnement">Stationnement</label>
					<input type="text" id="stationnement" name="stationnement" value="<?php if(isset($user['stationnement'])) { echo $user['stationnement'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->stationnementErr)){ echo $erreurs->stationnementErr; }  ?></span>
				</div>	

				<div class="inputsoixantedixpourcent ">
					<label for="specifiez">G) Autre : Spécifiez</label>
					<input style="width: 70%" type="text" id="specifiez" name="specifiez" value="<?php if(isset($user['specifiez'])) { echo $user['specifiez'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->specifiezErr)){ echo $erreurs->specifiezErr; }  ?></span>
				</div>	
			</div>
		</div>

		
		<div class="containerCent">
			<div class="trentepourcent ">
				<p >6 Équipements de protection</p>
			</div>

			<div class="soixantedixpourcent  " >	
				<div style="margin-top: 20px;">
					<input type="checkbox" id="sai" name="sai" <?php if ($user['sai'] == 1) $user['sai'] = "checked"; echo $user['sai'] ?>>
					<label for="sai">Système d'alarme incendie. Marque:</label>
					<input type="text" id="saiMarque" name="saiMarque" value="<?php if(isset($user['saiMarque'])) { echo $user['saiMarque'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->saiMarqueErr)){ echo $erreurs->saiMarqueErr; }  ?></span>
				</div> 

				<div style="margin-top: 10px; margin-left: 10px; " >
					<input type="checkbox" id="adressable" name="adressable" <?php if ($user['adressable'] == 1) $user['adressable'] = "checked"; echo $user['adressable'] ?>>
					<label for="adressable">Adressable</label>
					<input type="checkbox" id="zoneX" name="zoneX" <?php if ($user['zoneX'] == 1) $user['zoneX'] = "checked"; echo $user['zoneX'] ?>>
					<label for="zoneX">Zoné</label>
					<input type="checkbox" id="unEtape" name="unEtape" <?php if ($user['unEtape'] == 1) $user['unEtape'] = "checked"; echo $user['unEtape'] ?>>
					<label for="unEtape">Un Étape</label>
					<input type="checkbox" id="deuxetape" name="deuxetape" <?php if ($user['deuxetape'] == 1) $user['deuxetape'] = "checked"; echo $user['deuxetape'] ?>>	
					<label for="deuxetape">Deux Étapes</label>
				</div>

				
				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="sideuxetape">Si Deux Étapes :</label>
					<label for="etp">En Tout Temps </label>
					<input type="checkbox" id="etp" name="etp" <?php if ($user['etp'] == 1) $user['etp'] = "checked"; echo $user['etp'] ?>>

					<label for="periode">Période (hres) :</label>
					<input type="checkbox" id="periode" name="periode" <?php if ($user['periode'] == 1) $user['periode'] = "checked"; echo $user['periode'] ?>>
					<input style="width: 20%" type="text" id="pheure" name="pheure" value="<?php if(isset($user['pheure'])) { echo $user['pheure'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pheureErr)){ echo $erreurs->pheureErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; ">
					<label for="panneauS">Panneau Sitié</label>
					<input style="width: 20%" type="text" id="panneauS" name="panneauS" value="<?php if(isset($user['panneauS'])) { echo $user['panneauS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->panneauSErr)){ echo $erreurs->panneauSErr; }  ?></span>	

					<label for="annonciateur">Annonciateur Situé :</label>
					<input type="checkbox" id="annonciateur" name="annonciateur" <?php if ($user['annonciateur'] == 1) $user['annonciateur'] = "checked"; echo $user['annonciateur'] ?>>
					<input style="width: 20%" type="text" id="textannonciateur" name="textannonciateur" value="<?php if(isset($user['textannonciateur'])) { echo $user['textannonciateur'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->textannonciateurErr)){ echo $erreurs->textannonciateurErr; }  ?></span>
				</div>

				<div style="margin-top: 10px;">
					<input type="checkbox" id="rac" name="rac" <?php if ($user['rac'] == 1) $user['rac'] = "checked"; echo $user['rac'] ?>>
					<label for="rac">Relié à Centrale (nom & tél) :</label>
					<input type="text" id="racNomTel" name="racNomTel" value="<?php if(isset($user['racNomTel'])) { echo $user['racNomTel'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->racNomTelErr)){ echo $erreurs->racNomTelErr; }  ?></span>
				</div> 


				<div style="margin-top: 10px;">
					<input type="checkbox" id="scu" name="scu" <?php if ($user['scu'] == 1) $user['scu'] = "checked"; echo $user['scu'] ?>>
					<label for="scu">Système Communication Urgence. Marque:</label>
					<input type="text" id="scuMarque" name="scuMarque" value="<?php if(isset($user['scuMarque'])) { echo $user['scuMarque'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->scuMarqueErr)){ echo $erreurs->scuMarqueErr; }  ?></span>
				</div> 		 
			</div>
		</div>

		
		<div class="containerCent">
			<div class="trentepourcent ">
				<p >7 Fonctions Auxiliaires</p>
			</div>

			<div class="soixantedixpourcent">  
				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="rda">Rappel Des Ascenceurs</label>
					<input type="checkbox" id="rda" name="rda" <?php if ($user['rda'] == 1) $user['rda'] = "checked"; echo $user['rda'] ?>>
					<label for="adv">Arrêt de Ventilation</label>
					<input type="checkbox" id="adv" name="adv" <?php if ($user['adv'] == 1) $user['adv'] = "checked"; echo $user['adv'] ?>>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="pressE">Pressurisation Escalier</label>
					<input type="checkbox" id="pressE" name="pressE" <?php if ($user['pressE'] == 1) $user['pressE'] = "checked"; echo $user['pressE'] ?>>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="dea">Déverrouillage électro-aimant</label>
					<input type="checkbox" id="dea" name="dea" <?php if ($user['dea'] == 1) $user['dea'] = "checked"; echo $user['dea'] ?>>
					<label for="rdrm">Relâche des Retenus Magnétiques</label>
					<input type="checkbox" id="rdrm" name="rdrm" <?php if ($user['rdrm'] == 1) $user['rdrm'] = "checked"; echo $user['rdrm'] ?>>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="tac">Transmission à Centrale</label>
					<input type="checkbox" id="tac" name="tac" <?php if ($user['tac'] == 1) $user['tac'] = "checked"; echo $user['tac'] ?>>
					<label for="aaag">Arrêt alimentation au gaz (friteuses)</label>
					<input type="checkbox" id="aaag" name="aaag" <?php if ($user['aaag'] == 1) $user['aaag'] = "checked"; echo $user['aaag'] ?>>
				</div>

				
				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="autreS">G) Autre : Spécifiez</label>
					<input style="width: 70%" type="text" id="autreS" name="autreS" value="<?php if(isset($user['autreS'])) { echo $user['autreS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->autreSErr)){ echo $erreurs->autreSErr; }  ?></span>
				</div>	
			</div>
		</div>



		<div class="containerCent">
				
			<div class="trentepourcentPartTwo  trentepourcent">
				<p>8 Systèmes d'extinction</p>
			</div>
			
			<div class="soixantedixpourcent  " >	
				
				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="sdga" name="sdga" <?php if ($user['sdga'] == 1) $user['sdga'] = "checked"; echo $user['sdga'] ?>>
					<label for="sdga">Système de gicleurs automatique</label>
					<input type="checkbox" id="eau" name="eau" <?php if ($user['eau'] == 1) $user['eau'] = "checked"; echo $user['eau'] ?>>
					<label for="eau">Eau</label>
					<input type="checkbox" id="air" name="air" <?php if ($user['air'] == 1) $user['air'] = "checked"; echo $user['air'] ?>>
					<label for="air">Air</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="dssogs" name="dssogs" <?php if ($user['dssogs'] == 1) $user['dssogs'] = "checked"; echo $user['dssogs'] ?>>
					<label for="dssogs">Dans sous-sol ou garage seulement</label>
					<input type="checkbox" id="dtlb" name="dtlb" <?php if ($user['dtlb'] == 1) $user['dtlb'] = "checked"; echo $user['dtlb'] ?>>
					<label for="dtlb">Dans tout le bâtiment</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="pompeAfeu" name="pompeAfeu" <?php if ($user['pompeAfeu'] == 1) $user['pompeAfeu'] = "checked"; echo $user['pompeAfeu'] ?>>
					<label for="pompeAfeu">Pompe à feu:</label>
					
					<input style="width: 20%" type="text" id="pafeu" name="pafeu" value="<?php if(isset($user['pafeu'])) { echo $user['pafeu'];  }?>" >
					<label for="pafeu">GPM</label>
					<span class="error"> <?php if(isset($erreurs->pafeuErr)){ echo $erreurs->pafeuErr; }  ?></span>
					
					<input type="checkbox" id="ralg" name="ralg" <?php if ($user['ralg'] == 1) $user['ralg'] = "checked"; echo $user['ralg'] ?>>
					<label for="ralg">Relié à la génératrice</label>
				</div>

		
				<div style="margin-top: 10px; margin-left: 10px; " >
					<input type="checkbox" id="vds" name="vds" <?php if ($user['vds'] == 1) $user['vds'] = "checked"; echo $user['vds'] ?>>
					<label for="vds">Vannes de section</label>

					<input type="checkbox" id="cageE" name="cageE" <?php if ($user['cageE'] == 1) $user['cageE'] = "checked"; echo $user['cageE'] ?>>
					<label for="cageE">Cage escaliers</label>

					<input type="checkbox" id="autreShuitdeux" name="autreShuitdeux" <?php if ($user['autreShuitdeux'] == 1) $user['autreShuitdeux'] = "checked"; echo $user['autreShuitdeux'] ?>>
					<label for="autreShuitdeux">Autre :</label>
					<input type="text" id="autreShuit" name="autreShuit" value="<?php if(isset($user['autreShuit'])) { echo $user['autreShuit'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->autreShuitErr)){ echo $erreurs->autreShuitErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="bid" name="bid" <?php if ($user['bid'] == 1) $user['bid'] = "checked"; echo $user['bid'] ?>>
					<label for="bid">Boyaux incendies de 1½</label>
					
					<input type="checkbox" id="raccordP" name="raccordP" <?php if ($user['raccordP'] == 1) $user['raccordP'] = "checked"; echo $user['raccordP'] ?>>
					<label for="raccordP">Raccord pompier 2½</label>
					<input style="width: 25%"type="text" id="raccord" name="raccord" value="<?php if(isset($user['raccord'])) { echo $user['raccord'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->raccordErr)){ echo $erreurs->raccordErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="extincteursp" name="extincteursp" <?php if ($user['extincteursp'] == 1) $user['extincteursp'] = "checked"; echo $user['extincteursp'] ?>>
					<label for="extincteursp">Extincteurs Portatif.</label>
				
					<label for="typeE">Type :</label>
					<input style="width: 50%" type="text" id="typeE" name="typeE" value="<?php if(isset($user['typeE'])) { echo $user['typeE'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->typeEErr)){ echo $erreurs->typeEErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="sep" name="sep" <?php if ($user['sep'] == 1) $user['sep'] = "checked"; echo $user['sep'] ?>>
					<label for="sep">Système d'extinctions spéciaux</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="efixe" name="efixe" <?php if ($user['efixe'] == 1) $user['efixe'] = "checked"; echo $user['efixe'] ?>>
					<label for="efixe">Extinction fixe (hotte de cuisine)</label>
					<input style="width: 25%"type="text" id="efixetext" name="efixetext" value="<?php if(isset($user['efixetext'])) { echo $user['efixetext'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->efixetextErr)){ echo $erreurs->efixetextErr; }  ?></span>

					<input type="checkbox" id="relieUn" name="relieUn" <?php if ($user['relieUn'] == 1) $user['relieUn'] = "checked"; echo $user['relieUn'] ?>>
					<label for="relieUn">Relié au P/A</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="eGaz" name="eGaz" <?php if ($user['eGaz'] == 1) $user['eGaz'] = "checked"; echo $user['eGaz'] ?>>
					<label for="eGaz">Extinction au gaz(type)</label>
					<input style="width: 37%"type="text" id="eGazText" name="eGazText" value="<?php if(isset($user['eGazText'])) { echo $user['eGazText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->eGazTextErr)){ echo $erreurs->eGazTextErr; }  ?></span>

					<input type="checkbox" id="reliedeux" name="reliedeux" <?php if ($user['reliedeux'] == 1) $user['reliedeux'] = "checked"; echo $user['reliedeux'] ?>>
					<label for="reliedeux">Relié au P/A</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="preaction" name="preaction" <?php if ($user['preaction'] == 1) $user['preaction'] = "checked"; echo $user['preaction'] ?>>
					<label for="preaction">Préaction</label>
					
					<input type="checkbox" id="delugue" name="delugue" <?php if ($user['delugue'] == 1) $user['delugue'] = "checked"; echo $user['delugue'] ?>>
					<label for="delugue">Délugue</label>
					<input style="width: 39%"type="text" id="delugueText" name="delugueText" value="<?php if(isset($user['delugueText'])) { echo $user['delugueText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->delugueTextErr)){ echo $erreurs->delugueTextErr; }  ?></span>

					<input type="checkbox" id="relietrois" name="relietrois" <?php if ($user['relietrois'] == 1) $user['relietrois'] = "checked"; echo $user['relietrois'] ?>>
					<label for="relietrois">Relié au P/A</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="autresectionhuit" name="autresectionhuit" <?php if ($user['autresectionhuit'] == 1) $user['autresectionhuit'] = "checked"; echo $user['autresectionhuit'] ?>>
					<label for="autresectionhuit">Autre (spécifiez)</label>
					<input style="width: 47%"type="text" id="autersHuitText" name="autersHuitText" value="<?php if(isset($user['autersHuitText'])) { echo $user['autersHuitText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->autersHuitTextErr)){ echo $erreurs->autersHuitTextErr; }  ?></span>

					<input type="checkbox" id="reliequatre" name="reliequatre" <?php if ($user['reliequatre'] == 1) $user['reliequatre'] = "checked"; echo $user['reliequatre'] ?>>
					<label for="reliequatre">Relié au P/A</label>
				</div>
			</div>
		</div>


		<div class="containerCent">
				
			<div class="trentepourcentPartTwo  trentepourcent">
				<p>9 Systèmes de contrôle</p>
			</div>

			<div class="soixantedixpourcent" >	

				<div style="margin-top: 10px; margin-left: 10px; ">
					<input type="checkbox" id="vpea" name="vpea" <?php if ($user['vpea'] == 1) $user['vpea'] = "checked"; echo $user['vpea'] ?>>
					<label for="vpea">Verrouillage par électro-aimant</label>
				</div>

				<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="panneauA" name="panneauA" <?php if ($user['panneauA'] == 1) $user['panneauA'] = "checked"; echo $user['panneauA'] ?>>
					<label for="panneauA">panneau d'alarme</label>

					<input type="checkbox" id="StationM" name="StationM" <?php if ($user['StationM'] == 1) $user['StationM'] = "checked"; echo $user['StationM'] ?>>
					<label for="StationM">Station Manuelle Bleue</label>

					<input type="checkbox" id="detecteurD" name="detecteurD" <?php if ($user['detecteurD'] == 1) $user['detecteurD'] = "checked"; echo $user['detecteurD'] ?>>
					<label for="detecteurD">Détecteur de mouvement</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<input type="checkbox" id="barreP" name="barreP" <?php if ($user['barreP'] == 1) $user['barreP'] = "checked"; echo $user['barreP'] ?>>
					<label for="barreP">Barre Panique</label>

					<input type="checkbox" id="BoutonP" name="BoutonP" <?php if ($user['BoutonP'] == 1) $user['BoutonP'] = "checked"; echo $user['BoutonP'] ?>>
					<label for="BoutonP">Bouton-Poussoir</label>

					<input type="checkbox" id="cle" name="cle" <?php if ($user['cle'] == 1) $user['cle'] = "checked"; echo $user['cle'] ?>>
					<label for="cle">Clé</label>

					<input type="checkbox" id="autresneuf" name="autresneuf" <?php if ($user['autresneuf'] == 1) $user['autresneuf'] = "checked"; echo $user['autresneuf'] ?>>
					<label for="autresneuf">Autre :</label>
					<input style="width:20%;"type="text" id="autreneufText" name="autreneufText" value="<?php if(isset($user['autreneufText'])) { echo $user['autreneufText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->autreneufTextErr)){ echo $erreurs->autreneufTextErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<input type="checkbox" id="retenueM" name="retenueM" <?php if ($user['retenueM'] == 1) $user['retenueM'] = "checked"; echo $user['retenueM'] ?>>
					<label for="retenueM">Retenue magnétique (porte coupe-feu)</label>

					<input type="checkbox" id="rideau" name="rideau" <?php if ($user['rideau'] == 1) $user['rideau'] = "checked"; echo $user['rideau'] ?>>
					<label for="rideau">Rideau coupe-feu</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<input type="checkbox" id="Systemed" name="Systemed" <?php if ($user['Systemed'] == 1) $user['Systemed'] = "checked"; echo $user['Systemed'] ?>>
					<label for="Systemed">Système de désenfumage</label>

					<input type="checkbox" id="parPA" name="parPA" <?php if ($user['parPA'] == 1) $user['parPA'] = "checked"; echo $user['parPA'] ?>>
					<label for="parPA">Par P/A</label>

					<input type="checkbox" id="controle" name="controle" <?php if ($user['controle'] == 1) $user['controle'] = "checked"; echo $user['controle'] ?>>
					<label for="controle">Contrôle</label>
					<input style="width:20%;"type="text" id="controlText" name="controlText" value="<?php if(isset($user['controlText'])) { echo $user['controlText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->controlTextErr)){ echo $erreurs->controlTextErr; }  ?></span>
				</div>

				<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="spe" name="spe" <?php if ($user['spe'] == 1) $user['spe'] = "checked"; echo $user['spe'] ?>>
					<label for="spe">Système pressurisation escalier</label>

					<input type="checkbox" id="sss" name="sss" <?php if ($user['sss'] == 1) $user['sss'] = "checked"; echo $user['sss'] ?>>
					<label for="sss">Sous-sol seulement</label>

					<input type="checkbox" id="toutb" name="toutb" <?php if ($user['toutb'] == 1) $user['toutb'] = "checked"; echo $user['toutb'] ?>>
					<label for="toutb">Tout le Bâtiment</label>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="sdcc" name="sdcc" <?php if ($user['sdcc'] == 1) $user['sdcc'] = "checked"; echo $user['sdcc'] ?>>
					<label for="sdcc">Système de caméra-Couverture</label>
					<input style="width:50%;"type="text" id="sdccText" name="sdccText" value="<?php if(isset($user['sdccText'])) { echo $user['sdccText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->sdccTextErr)){ echo $erreurs->sdccTextErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px;">
					<input type="checkbox" id="sas" name="sas" <?php if ($user['sas'] == 1) $user['sas'] = "checked"; echo $user['sas'] ?>>
					<label for="sas">Si autres (spécifiez)</label>
					<input style="width:55%;"type="text" id="sasText" name="sasText" value="<?php if(isset($user['sasText'])) { echo $user['sasText'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->sasTextErr)){ echo $erreurs->sasTextErr; }  ?></span>
				</div>
			</div>
		</div>


		<div class="containerCent">
				
				<div class="trentepourcentPartTwo  trentepourcent">
					<p>10 Systèmes d'éclairage de secours</p>
				</div>
				
				<div class="soixantedixpourcent" >	
					<div style="margin-top: 10px; margin-left: 10px; ">
						<input type="checkbox" id="uea" name="uea" <?php if ($user['uea'] == 1) $user['uea'] = "checked"; echo $user['uea'] ?>>
						<label for="uea">Unités d'éclairage autonomes</label>

						<input type="checkbox" id="udl" name="udl" <?php if ($user['udl'] == 1) $user['udl'] = "checked"; echo $user['udl'] ?>>
						<label for="udl">Unité dans local si génératrice</label>
					</div>

					<div style="margin-top: 10px; margin-left: 10px;" >
						<input type="checkbox" id="generatrice" name="generatrice" <?php if ($user['generatrice'] == 1) $user['generatrice'] = "checked"; echo $user['generatrice'] ?>>
						<label for="generatrice">Génératrice</label>
					
						<label for="modele">Modèle :</label>
						<input style="width: 20%" type="text" id="modele" name="modele" value="<?php if(isset($user['modele'])) { echo $user['modele'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->modeleErr)){ echo $erreurs->modeleErr; }  ?></span>

						<label for="amp">AMP/VOLT</label>
						<input style="width: 20%" type="text" id="amp" name="amp" value="<?php if(isset($user['amp'])) { echo $user['amp'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->ampErr)){ echo $erreurs->ampErr; }  ?></span>
					</div>

					<div style="margin-top: 10px; margin-left: 25px;" >
						<label for="">Localisation : </label>
						<input type="checkbox" id="exteroeir" name="exteroeir" <?php if ($user['exteroeir'] == 1) $user['exteroeir'] = "checked"; echo $user['exteroeir'] ?>>
						<label for="exteroeir">Extérieur</label>

						<input type="checkbox" id="surtoit" name="surtoit" <?php if ($user['surtoit'] == 1) $user['surtoit'] = "checked"; echo $user['surtoit'] ?>>
						<label for="surtoit">Sur Toit</label>

						<input type="checkbox" id="interieur" name="interieur" <?php if ($user['interieur'] == 1) $user['interieur'] = "checked"; echo $user['interieur'] ?>>
						<label for="interieur">Intérieur</label>
						<input style="width: 20%" type="text" id="interieurText" name="interieurText" value="<?php if(isset($user['interieurText'])) { echo $user['interieurText'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->interieurTextErr)){ echo $erreurs->interieurTextErr; }  ?></span>
					</div>

					<div style="margin-top: 10px; margin-left: 25px;" >
						<label for="">Alimentation : </label>
						<input type="checkbox" id="diesel" name="diesel" <?php if ($user['diesel'] == 1) $user['diesel'] = "checked"; echo $user['diesel'] ?>>
						<label for="diesel">Diesel</label>

						<input type="checkbox" id="gazn" name="gazn" <?php if ($user['gazn'] == 1) $user['gazn'] = "checked"; echo $user['gazn'] ?>>
						<label for="gazn">Gaz natuel</label>

						<input type="checkbox" id="essence" name="essence" <?php if ($user['essence'] == 1) $user['essence'] = "checked"; echo $user['essence'] ?>>
						<label for="essence">Essence</label>

						<input type="checkbox" id="Propane" name="Propane" <?php if ($user['Propane'] == 1) $user['Propane'] = "checked"; echo $user['Propane'] ?>>
						<label for="Propane">Propane</label>
					</div>
				</div>
		</div>

		<div class="containerCent">
				<div class="trentepourcentPartTwo  trentepourcent">
					<p>11  Autres informations</p>
				</div>
				
				<div class="soixantedixpourcent" >	
					<div style="margin-top: 10px; margin-left: 10px;">
						<input type="checkbox" id="gaznaturel" name="gaznaturel" <?php if ($user['gaznaturel'] == 1) $user['gaznaturel'] = "checked"; echo $user['gaznaturel'] ?>>
						<label for="gaznaturel">Gaz Naturel</label>

						<input type="checkbox" id="gazp" name="gazp" <?php if ($user['gazp'] == 1) $user['gazp'] = "checked"; echo $user['gazp'] ?>>
						<label for="gazp">Gaz Propane</label>

						<input type="checkbox" id="autrereservoir" name="autrereservoir" <?php if ($user['autrereservoir'] == 1) $user['autrereservoir'] = "checked"; echo $user['autrereservoir'] ?>>
						<label for="autrereservoir">Autre réservoirs :</label>
						<input style="width:20%;"type="text" id="autrereservoirtext" name="autrereservoirtext" value="<?php if(isset($user['autrereservoirtext'])) { echo $user['autrereservoirtext'];  }?>" >
						<span class="error"> <?php if(isset($erreurs->autrereservoirtextErr)){ echo $erreurs->autrereservoirtextErr; }  ?></span>
					</div>

					<div style="margin-top: 10px; margin-left: 10px;">
						<input type="checkbox" id="planetage" name="planetage" <?php if ($user['planetage'] == 1) $user['planetage'] = "checked"; echo $user['planetage'] ?>>
						<label for="planetage">Plans d'étage (affichage dans corridor)</label>
					</div>
				</div>
		</div>


		<div class="containerCent">
			<h3 class="title">Autre Informations Pertinentes</h3>		
		</div>
		<div class="containerCent">
			<textarea  style="resize: none; width:100%; height:80px" maxlength='500' type="text" id="autreinfo" name="autreinfo" ><?php if(isset($user['autreinfo'])) { echo $user['autreinfo'];} ?></textarea>
			<span class="error"> <?php if(isset($erreurs->autreinfoErr)){ echo $erreurs->autreinfoErr; }  ?></span>
		</div>

		<div class="containerCent">
			<h3 class="title">Rappel des photos à prendre</h3>	
		</div>
		
		
		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px; ">
				<input type="checkbox" id="paneauAlarmeP" name="paneauAlarmeP" <?php if ($user['paneauAlarmeP'] == 1) $user['paneauAlarmeP'] = "checked"; echo $user['paneauAlarmeP'] ?>>
				<label for="paneauAlarmeP">Panneau d'alarme</label>

				<input type="checkbox" id="ExterieurP" name="ExterieurP" <?php if ($user['ExterieurP'] == 1) $user['ExterieurP'] = "checked"; echo $user['ExterieurP'] ?>>
				<label for="ExterieurP">Exterieur</label>

				<input type="checkbox" id="interieurP" name="interieurP" <?php if ($user['interieurP'] == 1) $user['interieurP'] = "checked"; echo $user['interieurP'] ?>>
				<label for="interieurP">Intérieur</label>

				<input type="checkbox" id="boutonsilenceP" name="boutonsilenceP" <?php if ($user['boutonsilenceP'] == 1) $user['boutonsilenceP'] = "checked"; echo $user['boutonsilenceP'] ?>>
				<label for="boutonsilenceP">Bouton silence signaux</label>

				<input type="checkbox" id="remiseP" name="remiseP" <?php if ($user['remiseP'] == 1) $user['remiseP'] = "checked"; echo $user['remiseP'] ?>>
				<label for="remiseP">Remise</label>

				<input type="checkbox" id="accusedeP" name="accusedeP" <?php if ($user['accusedeP'] == 1) $user['accusedeP'] = "checked"; echo $user['accusedeP'] ?>>
				<label for="accusedeP">Accusé de réception</label>
			</div>
		</div>

		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px; ">
				<input type="checkbox" id="PanneauP" name="PanneauP" <?php if ($user['PanneauP'] == 1) $user['PanneauP'] = "checked"; echo $user['PanneauP'] ?>>
				<label for="PanneauP">Panneau de communication d'urgence</label>

				<input type="checkbox" id="microP" name="microP" <?php if ($user['microP'] == 1) $user['microP'] = "checked"; echo $user['microP'] ?>>
				<label for="microP">Micro & contrôle</label>

				<input type="checkbox" id="teleP" name="teleP" <?php if ($user['teleP'] == 1) $user['teleP'] = "checked"; echo $user['teleP'] ?>>
				<label for="teleP">Téléphone & contrôle</label>

				<input type="checkbox" id="zones" name="zones" <?php if ($user['zones'] == 1) $user['zones'] = "checked"; echo $user['zones'] ?>>
				<label for="zones">Zones</label>
			</div>
		</div>

		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="systemeP" name="systemeP" <?php if ($user['systemeP'] == 1) $user['systemeP'] = "checked"; echo $user['systemeP'] ?>>
				<label for="systemeP">Système de gicleurs automatiques</label>

				<input type="checkbox" id="vueP" name="vueP" <?php if ($user['vueP'] == 1) $user['vueP'] = "checked"; echo $user['vueP'] ?>>
				<label for="vueP">Vue d'ensemble</label>

				<input type="checkbox" id="chaqueP" name="chaqueP" <?php if ($user['chaqueP'] == 1) $user['chaqueP'] = "checked"; echo $user['chaqueP'] ?>>
				<label for="chaqueP">Chaque système</label>

				<input type="checkbox" id="vanneP" name="vanneP" <?php if ($user['vanneP'] == 1) $user['vanneP'] = "checked"; echo $user['vanneP'] ?>>
				<label for="vanneP">Vannes de fermeture</label>
			</div>
		</div>

		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="vannedeP" name="vannedeP" <?php if ($user['vannedeP'] == 1) $user['vannedeP'] = "checked"; echo $user['vannedeP'] ?>>
				<label for="vannedeP">Vanne de drainage</label>

				<input type="checkbox" id="interrupteurP" name="interrupteurP" <?php if ($user['interrupteurP'] == 1) $user['interrupteurP'] = "checked"; echo $user['interrupteurP'] ?>>
				<label for="interrupteurP">Interrupteur de pompe de surpression</label>

				<input type="checkbox" id="vanneetP" name="vanneetP" <?php if ($user['vanneetP'] == 1) $user['vanneetP'] = "checked"; echo $user['vanneetP'] ?>>
				<label for="vanneetP">Vanne & drain d'étage</label>
			</div>
		</div>


		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="pompeaP" name="pompeaP" <?php if ($user['pompeaP'] == 1) $user['pompeaP'] = "checked"; echo $user['pompeaP'] ?>>
				<label for="pompeaP">Pompe à feu</label>

				<input type="checkbox" id="vuedP" name="vuedP" <?php if ($user['vuedP'] == 1) $user['vuedP'] = "checked"; echo $user['vuedP'] ?>>
				<label for="vuedP">Vue d'ensemble</label>

				<input type="checkbox" id="panneaudecP" name="panneaudecP" <?php if ($user['panneaudecP'] == 1) $user['panneaudecP'] = "checked"; echo $user['panneaudecP'] ?>>
				<label for="panneaudecP">Panneau de contrôle et de secours</label>

				<input type="checkbox" id="boutonetP" name="boutonetP" <?php if ($user['boutonetP'] == 1) $user['boutonetP'] = "checked"; echo $user['boutonetP'] ?>>
				<label for="boutonetP">Bouton/manette d'arrêt</label>
			</div>
		</div>

		
		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="systemesP" name="systemesP" <?php if ($user['systemesP'] == 1) $user['systemesP'] = "checked"; echo $user['systemesP'] ?>>
				<label for="systemesP">Système spéciaux</label>

				<input type="checkbox" id="bonbonneP" name="bonbonneP" <?php if ($user['bonbonneP'] == 1) $user['bonbonneP'] = "checked"; echo $user['bonbonneP'] ?>>
				<label for="bonbonneP">Bonbonne</label>

				<input type="checkbox" id="declencheurP" name="declencheurP" <?php if ($user['declencheurP'] == 1) $user['declencheurP'] = "checked"; echo $user['declencheurP'] ?>>
				<label for="declencheurP">Déclencheur</label>

				<input type="checkbox" id="preactionP" name="preactionP" <?php if ($user['preactionP'] == 1) $user['preactionP'] = "checked"; echo $user['preactionP'] ?>>
				<label for="preactionP">Préaction</label>

				<input type="checkbox" id="exterieurPhoto" name="exterieurPhoto" <?php if ($user['exterieurPhoto'] == 1) $user['exterieurPhoto'] = "checked"; echo $user['exterieurPhoto'] ?>>
				<label for="exterieurPhoto">Extérieur</label>

				<input type="checkbox" id="interieurPhoto" name="interieurPhoto" <?php if ($user['interieurPhoto'] == 1) $user['interieurPhoto'] = "checked"; echo $user['interieurPhoto'] ?>>
				<label for="interieurPhoto">Interieur</label>
			</div>
		</div>

		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="generatriceP" name="generatriceP" <?php if ($user['generatriceP'] == 1) $user['generatriceP'] = "checked"; echo $user['generatriceP'] ?>>
				<label for="generatriceP">Génératrice</label>

				<input type="checkbox" id="vuePhoto" name="vuePhoto" <?php if ($user['vuePhoto'] == 1) $user['vuePhoto'] = "checked"; echo $user['vuePhoto'] ?>>
				<label for="vuePhoto">Vue d'ensemble</label>

				<input type="checkbox" id="panneaudeP" name="panneaudeP" <?php if ($user['panneaudeP'] == 1) $user['panneaudeP'] = "checked"; echo $user['panneaudeP'] ?>>
				<label for="panneaudeP">Panneau de contrôle</label>

				<input type="checkbox" id="boutonarretP" name="boutonarretP" <?php if ($user['boutonarretP'] == 1) $user['boutonarretP'] = "checked"; echo $user['boutonarretP'] ?>>
				<label for="boutonarretP">Bouton arrêt/départ</label>

				<input type="checkbox" id="ups" name="ups" <?php if ($user['ups'] == 1) $user['ups'] = "checked"; echo $user['ups'] ?>>
				<label for="ups">UPS</label>
			</div>
		</div>

		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="ascenseursP" name="ascenseursP" <?php if ($user['ascenseursP'] == 1) $user['ascenseursP'] = "checked"; echo $user['ascenseursP'] ?>>
				<label for="ascenseursP">Ascenseurs</label>

				<input type="checkbox" id="panneaurappelP" name="panneaurappelP" <?php if ($user['panneaurappelP'] == 1) $user['panneaurappelP'] = "checked"; echo $user['panneaurappelP'] ?>>
				<label for="panneaurappelP">Panneau de rappel</label>

				<input type="checkbox" id="boutonrappel" name="boutonrappel" <?php if ($user['boutonrappel'] == 1) $user['boutonrappel'] = "checked"; echo $user['boutonrappel'] ?>>
				<label for="boutonrappel">Bouton de rappel</label>

				<input type="checkbox" id="panneauintP" name="panneauintP" <?php if ($user['panneauintP'] == 1) $user['panneauintP'] = "checked"; echo $user['panneauintP'] ?>>
				<label for="panneauintP">Panneau intérieur</label>

				<input type="checkbox" id="systemeappelP" name="systemeappelP" <?php if ($user['systemeappelP'] == 1) $user['systemeappelP'] = "checked"; echo $user['systemeappelP'] ?>>
				<label for="systemeappelP">Système d'appel d'aide</label>
			</div>
		</div>

		<div class="containerCent">	
			<div style="font-size: 15px; margin-top: 10px; margin-left: 10px;">
				<input type="checkbox" id="desenfumageP" name="desenfumageP" <?php if ($user['desenfumageP'] == 1) $user['desenfumageP'] = "checked"; echo $user['desenfumageP'] ?>>
				<label for="desenfumageP">Désenfumage</label>

				<input type="checkbox" id="PanneaucontroleP" name="PanneaucontroleP" <?php if ($user['PanneaucontroleP'] == 1) $user['PanneaucontroleP'] = "checked"; echo $user['PanneaucontroleP'] ?>>
				<label for="PanneaucontroleP">Panneau de contrôle</label>
			</div>
		</div>  


		<div class="button containerCent" style="margin-top: 20px; " >
			<button  type="submit" name="envoi"><?php echo $libelle;  ?></button>
		</div> 
	</form>

	<br>

	<?php if ($action != "CREATE") { ?>
		<form action="createUpdateDeletePsi.php" method="post">
			<input type="hidden" name="action" value="DELETE" />
			<input type="hidden" name="id" value="<?php echo $user['idPsi'];  ?>" />
			<p>
			<div class="button containerCent">
				<button type="submit">Supprimer</button>
			</div>
			</p>
		</form>
	<?php } ?>


</body>

</html>