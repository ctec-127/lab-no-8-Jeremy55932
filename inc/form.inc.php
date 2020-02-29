<div class="container">
<div id="wrapper">
<div class="jumbotron mb-2">
    <h1 class="display-3">Temperature Converter
</h1>
    <p class="lead">CTEC 127 - PHP with SQL 1</p>
    <hr class="my-2">
    <p>Have fun!</p>
    
</div>
<div class="row">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="section col-xs-12 col-sm-12 " >
			<label for="temp">Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">
		</div>
        <div class="col-xs-12 col-sm-12">
		<p class="mt-1 mb-0">Convert</p>	
        <select name="originalunit" class="mt-1 custom-select" >
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
			<p class="mt-1 mb-0">to:</p>
            </div>
			<div class="col-xs-12 col-sm-12 ">	
			<select name="conversionunit" class="mt-1 custom-select" >
				<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select><br>
			</div>
		<input type="submit" value="Convert" class="btn btn-primary col-xs-12 col-sm-12 mt-2 ml-3"/>   
		<div class="section col-6 col-xs-12 col-sm-12 ">

			<label for="convertedtemp" class="mt-1">Converted Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
			name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">
		</div>
	
	</form>
    </div>
</div><!-- end wrapper div-->
</div>