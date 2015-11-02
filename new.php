<!doctype html>
<html>
<head>
	<title>Add Conflict</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/semantic.css" />
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<header>
		<a href="index.php" class="back-icon">
			<i class="icon arrow left"></i> Back
		</a>
		<h1>Social/Non-Technical Unit</h1>
		<a href="plot.php" class="tech-icon">
			Technical Unit <i class="icon arrow right"></i>
		</a>
	</header>
	
	<section class="container wrapper">
		<form class="ui form">
			<h4 class="ui dividing header">Land Conflict Register</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Name of Conflict</label>
					<input type="text" />
				</div>
				<div class="eight wide field">
					<label>Short Description</label>
					<input type="text" />
				</div>
			</div>
			<h4 class="ui dividing header">Principal Actors</h4>
			<div class="fields">
				<div class="seven wide field">
					<label>Name (Plaintiff)</label>
					<input type="text" />
				</div>
				<div class="three wide field">
					<label>Age (Plaintiff)</label>
					<input type="text" />
				</div>
				<div class="six wide field">
					<label>Level of Education (Plaintiff)</label>
					<input type="text" />
				</div>
			</div>
			<div class="fields">
				<div class="seven wide field">
					<label>Name (Defendant)</label>
					<input type="text" />
				</div>
				<div class="three wide field">
					<label>Age (Defendant)</label>
					<input type="text" />
				</div>
				<div class="six wide field">
					<label>Level of Education (Defendant)</label>
					<input type="text" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Secondary Actors</h4>
			<div class="fields">
				<div class="seven wide field">
					<label>Name (Plaintiff)</label>
					<input type="text" />
				</div>
				<div class="three wide field">
					<label>Age (Plaintiff)</label>
					<input type="text" />
				</div>
				<div class="six wide field">
					<label>Level of Education (Plaintiff)</label>
					<input type="text" />
				</div>
			</div>
			<div class="fields">
				<div class="seven wide field">
					<label>Name (Defendant)</label>
					<input type="text" />
				</div>
				<div class="three wide field">
					<label>Age (Defendant)</label>
					<input type="text" />
				</div>
				<div class="six wide field">
					<label>Level of Education (Defendant)</label>
					<input type="text" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Position</h4>
			<div class="fields">
				<div class="eight wide field">
					<input type="text" placeholder="Plaintiff" />
				</div>
				<div class="eight wide field">
					<input type="text" placeholder="Defendant" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Interests</h4>
			<div class="fields">
				<div class="eight wide field">
					<input type="text" placeholder="Plaintiff" />
				</div>
				<div class="eight wide field">
					<input type="text" placeholder="Defendant" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Needs</h4>
			<div class="fields">
				<div class="eight wide field">
					<input type="text" placeholder="Plaintiff" />
				</div>
				<div class="eight wide field">
					<input type="text" placeholder="Defendant" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Desires and Fears</h4>
			<div class="fields">
				<div class="eight wide field">
					<input type="text" placeholder="Plaintiff" />
				</div>
				<div class="eight wide field">
					<input type="text" placeholder="Defendant" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Causes &amp; Conflict Manifestation</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Causes</label>
					<input type="text" />
				</div>
				
				<div class="eight wide field">
					<label>Conflict Manifestation</label>
					<select class="ui dropdown">
						<option value="0">Latent</option>
						<option value="1">Escalation</option>
						<option value="2">Emergence</option>
						<option value="3">Settlement</option>
					</select>
				</div>
			</div>
			
			<h4 class="ui dividing header">Title Search</h4>
			<div class="fields">
				<div class="eight wide field">
					<input type="text" placeholder="Plaintiff" />
				</div>
				<div class="eight wide field">
					<input type="text" placeholder="Defendant" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Stakeholder Identification &amp; Potential Risk</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Stakeholder Identification</label>
					<input type="text" />
				</div>
				<div class="eight wide field">
					<label>Potential Risk</label>
					<input type="text" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Conflict Identification &amp; Economic Attraction</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Conflict Identification</label>
					<select class="ui dropdown">
						<option value="0">Land Dispute</option>
						<option value="1">Boundary Dispute</option>
						<option value="2">Easement</option>
						<option value="3">Ethnic</option>
						<option value="4">Values</option>
						<option value="5">Leadership</option>
						<option value="6">Personality</option>
						<option value="7">Interests</option>
						<option value="8">Style</option>
						<option value="9">Relationship</option>
					</select>
				</div>
				<div class="eight wide field">
					<label>Economic Attraction</label>
					<select class="ui dropdown">
						<option value="0">Oil/Gas</option>
						<option value="1">Mining</option>
						<option value="2">Beach</option>
						<option value="3">Tourism</option>
						<option value="4">Estate</option>
						<option value="5">Educational</option>
						<option value="6">Industrial</option>
						<option value="7">Recreational</option>
					</select>
				</div>
			</div>
			
			<h4 class="ui dividing header">Wish</h4>
			<div class="fields">
				<div class="eight wide field">
					<input type="text" placeholder="Plaintiff" />
				</div>
				<div class="eight wide field">
					<input type="text" placeholder="Defendant" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Type &amp; Size of Land</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Type of Land</label>
					<select class="ui dropdown">
						<option value="0">State Acquired</option>
						<option value="1">Vested</option>
						<option value="2">Stool/Skin</option>
						<option value="3">Family/Clan</option>
						<option value="4">Private</option>
						<option value="5">Common Property</option>
					</select>
				</div>
				<div class="eight wide field">
					<label>Size of Land</label>
					<select class="ui dropdown">
						<option value="0">Acres</option>
						<option value="1">Hectares</option>
					</select>
				</div>
			</div>
			
			<h4 class="ui dividing header">Type of Document &amp; Site Plan</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Type of Document (Plaintiff)</label>
					<select class="ui dropdown">
						<option value="0">Indenture</option>
						<option value="1">Power of Attorney</option>
						<option value="2">Police Extract</option>
						<option value="3">Declaration</option>
					</select>
				</div>
				<div class="eight wide field">
					<label>Type of Site Plan (Plaintiff)</label>
					<select class="ui dropdown">
						<option value="0">Cadastral</option>
						<option value="1">Compass</option>
						<option value="2">Layout</option>
					</select>
				</div>
			</div>
			<div class="fields">
				<div class="eight wide field">
					<label>Type of Document (Defendant)</label>
					<select class="ui dropdown">
						<option value="0">Indenture</option>
						<option value="1">Power of Attorney</option>
						<option value="2">Police Extract</option>
						<option value="3">Declaration</option>
					</select>
				</div>
				<div class="eight wide field">
					<label>Type of Site Pla (Defendant)</label>
					<select class="ui dropdown">
						<option value="0">Cadastral</option>
						<option value="1">Compass</option>
						<option value="2">Layout</option>
					</select>
				</div>
			</div>
			
			<h4 class="ui dividing header">Date of Acquisition</h4>
			<div class="fields">
				<div class="five wide field">
					<label>Plaintiff</label>
					<input type="text" placeholder="Day" />
				</div>
				<div class="six wide field">
					<label style="visibility: hidden">Plaintiff</label>
					<input type="text" placeholder="Month" />
				</div>
				<div class="five wide field">
					<label style="visibility: hidden">Plaintiff</label>
					<input type="text" placeholder="Year" />
				</div>
			</div>
			<div class="fields">
				<div class="five wide field">
					<label>Defendant</label>
					<input type="text" placeholder="Day" />
				</div>
				<div class="six wide field">
					<label style="visibility: hidden">Defendant</label>
					<input type="text" placeholder="Month" />
				</div>
				<div class="five wide field">
					<label style="visibility: hidden">Defendant</label>
					<input type="text" placeholder="Year" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Date of Settlement</h4>
			<div class="fields">
				<div class="five wide field">
					<label>Plaintiff</label>
					<input type="text" placeholder="Day" />
				</div>
				<div class="six wide field">
					<label style="visibility: hidden">Plaintiff</label>
					<input type="text" placeholder="Month" />
				</div>
				<div class="five wide field">
					<label style="visibility: hidden">Plaintiff</label>
					<input type="text" placeholder="Year" />
				</div>
			</div>
			<div class="fields">
				<div class="five wide field">
					<label>Defendant</label>
					<input type="text" placeholder="Day" />
				</div>
				<div class="six wide field">
					<label style="visibility: hidden">Defendant</label>
					<input type="text" placeholder="Month" />
				</div>
				<div class="five wide field">
					<label style="visibility: hidden">Defendant</label>
					<input type="text" placeholder="Year" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Detail of Ownership</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Plaintiff</label>
					<select class="ui dropdown">
						<option value="0">Allodial</option>
						<option value="1">Acquisition</option>
					</select>
				</div>
				<div class="eight wide field">
					<label>Defendant</label>
					<select class="ui dropdown">
						<option value="0">Allodial</option>
						<option value="1">Acquisition</option>
					</select>
				</div>
			</div>
			
			<h4 class="ui dividing header">Locality</h4>
			<div class="fields">
				<div class="five wide field">
					<input type="text" placeholder="Town" />
				</div>
				<div class="six wide field">
					<input type="text" placeholder="District" />
				</div>
				<div class="five wide field">
					<input type="text" placeholder="Region" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Intermediaries</h4>
			<div class="fields">
				<div class="five wide field">
					<input type="text" placeholder="Name" />
				</div>
				<div class="six wide field">
					<input type="text" placeholder="Business" />
				</div>
				<div class="five wide field">
					<input type="text" placeholder="Date of Commencement of Business" />
				</div>
			</div>
			
			<h4 class="ui dividing header">Method of Termination</h4>
			<div class="fields">
				<div class="eight wide field">
					<label>Method of Termination</label>
					<select class="ui dropdown">
						<option value="0">Expiry</option>
						<option value="1">Notice of Quit</option>
						<option value="2">Surrender</option>
						<option value="3">Merger</option>
						<option value="4">Disclaimer</option>
						<option value="5">Redemption</option>
						<option value="6">Enlargement</option>
						<option value="7">Frustration</option>
						<option value="8">Forfeiture</option>
					</select>
				</div>
				<div class="eight wide field">
					<label>Today's Date</label>
					<input type="date" />
				</div>
			</div>
			
			<button type="submit" class="ui button blue right floated">Save</button>
		</form>
	</section>
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/semantic.js"></script>
	<script src="js/script.js"></script>
</body>
</html>