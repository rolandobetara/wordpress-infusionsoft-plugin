<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>Add New Contact</h2>

	<form action="<?php echo plugins_url('/process/add-process.php', dirname(__FILE__)) ?>" method="post" name="addForm" id="addForm">
		<ul>
        	<li><label for="fname" class="lbl-style">First Name: </label><input id="fname" class="input-js" name="fname" value="" placeholder="Input your first name." /></li>   
            <li><label for="lname" class="lbl-style">Last Name: </label><input id="lname"class="input-js" name="lname" value="" placeholder="Input your last name." /></li>
            <li><label for="lname" class="lbl-style">Email: </label><input id="email" class="input-js"name="email" value="" placeholder="Input your email." /></li>
            <li><label for="lname" class="lbl-style">Lbstolose: </label><input id="Lbstolose" class="input-js" name="Lbstolose" value="" placeholder="Input your Lbstolose." /></li>
            <li><label for="lname" class="lbl-style">Lbs: </label><input id="Lbs" class="input-js" name="Lbs" value="" placeholder="Input your Lbs." /></li>
    	</ul>
		<input type='submit' class='button-primary' id='submitbutton' value="Submit" name="Submit" /> <span class="status"></span>
	</form>
</div>
