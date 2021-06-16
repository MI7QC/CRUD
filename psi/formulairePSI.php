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
</header>
<a href="mainPagePSI.php">Menu PSI</a>
<body>
	<form class=""; action="createUpdateDeleteUser.php" method="post">
	
			<h1>Évaluation pour plan de sécruté incendie</h1>

			<input type="hidden" name="id" value="<?php if(isset($user['id'])) {echo $user['id']; } ?>" />
			<input type="hidden" name="action" value="<?php echo $action;  ?>" /> 
		<div class="containerCent">

			<div class="cinquante">
				<p class="title">Nom & Adresse Du Bâtiment:</p>
				<textarea style="resize: none;" type="text" id="nomADB" name="nomADB" value="<?php if(isset($user['nomADB'])) { echo $user['nomADB'];} ?>"></textarea>
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
				<textarea style="resize: none;" type="text" id="nomADP" name="nomADP" value="<?php if(isset($user['nomADP'])) { echo $user['nomADP'];} ?>"></textarea>
				<span class="error"> <?php if(isset($erreurs->nomADPErr)){ echo $erreurs->nomADPErr; }  ?></span>
			
				<div class="input">
					<label for="responsable">Responsable :</label>
					<input type="text" id="responsable" name="responsable" value="<?php if(isset($user['responsable'])) { echo $user['responsable'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->responsableErr)){ echo $erreurs->responsableErr; }  ?></span>
				</div>

				<div class="input">
					<label for="Tél">Téléphone :</label>
					<input type="text" id="Tél" name="Tél" value="<?php if(isset($user['Tél'])) { echo $user['Tél'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->TélErr)){ echo $erreurs->TélErr; }  ?></span>
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
						<input type="checkbox" id="rappelAutomatique" name="rappelAutomatique" <?php if  (isset($user['rappelAutomatique'] )) { echo "checked";} ?>>

						<label class="rappelM" for="rappelManuel">Rappel Manuel </label>
						<input type="checkbox" id="rappelManuel" name="rappelManuel" <?php if  (isset($user['rappelManuel'] )) { echo "checked";} ?>>

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
					<input type="checkbox" id="sai" name="sai" <?php if  (isset($user['sai'] )) { echo "checked";} ?>>
					<label for="sai">Système d'alarme incendie. Marque:</label>
					<input type="text" id="saiMarque" name="saiMarque" value="<?php if(isset($user['saiMarque'])) { echo $user['saiMarque'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->saiMarqueErr)){ echo $erreurs->saiMarqueErr; }  ?></span>
				</div> 

				<div style="margin-top: 10px; margin-left: 10px; display: flex; justify-content: space-evenly;" >
					<label for="adressable">Adressable</label>
					<input type="checkbox" id="adressable" name="adressable" <?php if  (isset($user['adressable'] )) { echo "checked";} ?>>
					<label for="zone">Zoné</label>
					<input type="checkbox" id="zone" name="zone" <?php if  (isset($user['zone'] )) { echo "checked";} ?>>
					<label for="unEtape">Un Étape</label>
					<input type="checkbox" id="unEtape" name="unEtape" <?php if  (isset($user['unEtape'] )) { echo "checked";} ?>>
					<label for="deuxetape">Deux Étapes</label>
					<input type="checkbox" id="deuxetape" name="deuxetape" <?php if  (isset($user['deuxetape'] )) { echo "checked";} ?>>	
				</div>

				
				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="sideuxetape">Si Deux Étapes :</label>
					<label for="etp">En Tout Temps </label>
					<input type="checkbox" id="etp" name="etp" <?php if  (isset($user['etp'] )) { echo "checked";} ?>>

					<label for="periode">Période (hres) :</label>
					<input type="checkbox" id="periode" name="periode" <?php if  (isset($user['periode'] )) { echo "checked";} ?>>
					<input style="width: 20%" type="text" id="pheure" name="pheure" value="<?php if(isset($user['pheure'])) { echo $user['pheure'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pheureErr)){ echo $erreurs->pheureErr; }  ?></span>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; ">
					<label for="panneauS">Panneau Sitié</label>
					<input style="width: 20%" type="text" id="panneauS" name="panneauS" value="<?php if(isset($user['panneauS'])) { echo $user['panneauS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->panneauSErr)){ echo $erreurs->panneauSErr; }  ?></span>	

					<label for="annonciateur">Annonciateur Situé :</label>
					<input type="checkbox" id="annonciateur" name="annonciateur" <?php if  (isset($user['annonciateur'] )) { echo "checked";} ?>>
					<input style="width: 20%" type="text" id="pheure" name="pheure" value="<?php if(isset($user['pheure'])) { echo $user['pheure'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->pheureErr)){ echo $erreurs->pheureErr; }  ?></span>
				</div>

				<div style="margin-top: 10px;">
					<input type="checkbox" id="rac" name="rac" <?php if  (isset($user['rac'] )) { echo "checked";} ?>>
					<label for="rac">Relié à Centrale (nom & tél) :</label>
					<input type="text" id="racNomTel" name="racNomTel" value="<?php if(isset($user['racNomTel'])) { echo $user['racNomTel'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->racNomTelErr)){ echo $erreurs->racNomTelErr; }  ?></span>
				</div> 


				<div style="margin-top: 10px;">
					<input type="checkbox" id="scu" name="scu" <?php if  (isset($user['scu'] )) { echo "checked";} ?>>
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
				<div style="margin-top: 10px; margin-left: 10px; display: flex; justify-content: space-evenly;" >
					<label for="rda">Rappel Des Ascenceurs</label>
					<input type="checkbox" id="rda" name="rda" <?php if  (isset($user['rda'] )) { echo "checked";} ?>>
					<label for="adv">Arrêt de Ventilation</label>
					<input type="checkbox" id="adv" name="adv" <?php if  (isset($user['adv'] )) { echo "checked";} ?>>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="pressE">Pressurisation Escalier</label>
					<input type="checkbox" id="pressE" name="pressE" <?php if  (isset($user['pressE'] )) { echo "checked";} ?>>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; display: flex; justify-content: space-evenly;" >
					<label for="dea">Déverrouillage électro-aimant</label>
					<input type="checkbox" id="dea" name="dea" <?php if  (isset($user['dea'] )) { echo "checked";} ?>>
					<label for="rdrm">Relâche des Retenus Magnétiques</label>
					<input type="checkbox" id="rdrm" name="rdrm" <?php if  (isset($user['rdrm'] )) { echo "checked";} ?>>
				</div>

				<div style="margin-top: 10px; margin-left: 10px; display: flex; justify-content: space-evenly;" >
					<label for="tac">Transmission à Centrale</label>
					<input type="checkbox" id="tac" name="tac" <?php if  (isset($user['tac'] )) { echo "checked";} ?>>
					<label for="aaag">Arrêt alimentation au gaz (friteuses)</label>
					<input type="checkbox" id="aaag" name="aaag" <?php if  (isset($user['aaag'] )) { echo "checked";} ?>>
				</div>

				
				<div style="margin-top: 10px; margin-left: 10px; " >
					<label for="autreS">G) Autre : Spécifiez</label>
					<input style="width: 70%" type="text" id="autreS" name="autreS" value="<?php if(isset($user['autreS'])) { echo $user['autreS'];  }?>" >
					<span class="error"> <?php if(isset($erreurs->autreSErr)){ echo $erreurs->autreSErr; }  ?></span>
				</div>	
			</div>
		</div>




























			<!-- <div>
			<label for="name">Nom :</label>
			<input type="text" id="nom" name="nom" value="<?php if(isset($user['nom'])) { echo $user['nom'];} ?>">
			<span class="error"> <?php if(isset($erreurs->nomErr)){ echo $erreurs->nomErr; }  ?></span>

		</div>
		<div>
			<label for="prenom">Prenom</label>
			<input type="text" id="prenom" name="prenom" value="<?php if(isset($user['prenom'])) { echo $user['prenom'];  }?>" >
			<span class="error"> <?php if(isset($erreurs->prenomErr)){ echo $erreurs->prenomErr; }  ?></span>
			
		</div>
		<div>
			<label for="age">Age:</label>
			<input type="text" id="age" name="age" value="<?php if(isset($user['age'])) { echo $user['age']; } ?>">
			<span class="error"> <?php if(isset($erreurs->ageErr)){ echo $erreurs->ageErr; }  ?></span>
		</div>
		<div>
			<label for="adresse">adresse :</label>
			<input id="adresse" name="adresse" value="<?php if(isset($user['adresse'])) { echo $user['adresse']; } ?>" ></input>
			<span class="error"> <?php if(isset($erreurs->adresseErr)){ echo $erreurs->adresseErr; }  ?></span>
		</div>
		<div>
			<label for="cinema">cinema :</label>
			<input type="checkbox" id="cinema" name="cinema" <?php if  (isset($user['cinema'] )) { echo "checked";} ?>>
		</div> --> 


		<!-- <div class="button">
			<button type="submit" name="envoi"><?php echo $libelle;  ?></button>
		</div> -->
	
	</form>

	<br>

	<?php if ($action != "CREATE") { ?>
		<form action="createUpdateDeleteUser.php" method="post">
			<input type="hidden" name="action" value="DELETE" />
			<input type="hidden" name="id" value="<?php echo $user['id'];  ?>" />
			<p>
			<div class="button">
				<button type="submit">Supprimer</button>
			</div>
			</p>
		</form>
	<?php } ?>

</body>

</html>