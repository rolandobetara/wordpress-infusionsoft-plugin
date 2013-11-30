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
	<h2>View Data</h2>
	<form action="<?php echo plugins_url('/process/delete-process.php', dirname(__FILE__)) ?>" method="post" name="deleteFrm" id="deleteForm">
		<input type="hidden" value="" id="id" name="id"/>
		<ul>
        	<li><label for="fname" class="lbl-style">First Name: </label><input disabled="disabled" id="fname" class="editinput-js" name="fname" value="" placeholder="Input your first name." /></li>   
            <li><label for="lname" class="lbl-style">Last Name: </label><input disabled="disabled"id="lname"class="editinput-js" name="lname" value="" placeholder="Input your last name." /></li>
            <li><label for="lname" class="lbl-style">Email: </label><input disabled="disabled" id="email" class="editinput-js"name="email" value="" placeholder="Input your email." /></li>
            <li><label for="lname" class="lbl-style">Lbstolose: </label><input disabled="disabled" id="Lbstolose" class="editinput-js" name="Lbstolose" value="" placeholder="Input your Lbstolose." /></li>
            <li><label for="lname" class="lbl-style">Lbs: </label><input disabled="disabled" id="Lbs" class="editinput-js" name="Lbs" value="" placeholder="Input your Lbs." /></li>
    	</ul>
		<input type='submit' class='button-primary' id='deletebutton' value="Delete" name="Submit"  disabled="disabled" /> <span class="delstatus"></span>
	</form>
</div>
