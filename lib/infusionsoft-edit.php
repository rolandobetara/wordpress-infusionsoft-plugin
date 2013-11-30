<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>Edit Contact</h2>
	<br />
	<span>Search</span>
	<form action="<?php echo plugins_url('/process/search-process.php', dirname(__FILE__)) ?>" method="post" name="searcheditFrm" id="searcheditForm">
		<span>
			<input id="search" class="input-js" name="in_search" value="" placeholder="Search First Name." /> <input type='submit' class='button-primary' id='searchedit-btn' value="Search" name="Submit" /> 
    	</span>
    	<br/>
		<span class="status"></span>
	</form>
	<br />
	<h2>Edit Data</h2>
	<form action="<?php echo plugins_url('/process/edit-process.php', dirname(__FILE__)) ?>" method="post" name="updateFrm" id="updateForm">
		<input type="hidden" value="" id="id" name="id"/>
		<ul>
        	<li><label for="fname" class="lbl-style">First Name: </label><input id="fname" class="editinput-js" name="fname" value="" placeholder="Input your first name." /></li>   
            <li><label for="lname" class="lbl-style">Last Name: </label><input id="lname"class="editinput-js" name="lname" value="" placeholder="Input your last name." /></li>
            <li><label for="lname" class="lbl-style">Email: </label><input id="email" class="editinput-js"name="email" value="" placeholder="Input your email." /></li>
            <li><label for="lname" class="lbl-style">Lbstolose: </label><input id="Lbstolose" class="editinput-js" name="Lbstolose" value="" placeholder="Input your Lbstolose." /></li>
            <li><label for="lname" class="lbl-style">Lbs: </label><input id="Lbs" class="editinput-js" name="Lbs" value="" placeholder="Input your Lbs." /></li>
    	</ul>
		<input type='submit' class='button-primary' id='updatebutton' value="Update" name="Submit"  disabled="disabled" /> <span class="editstatus"></span>
	</form>
</div>
