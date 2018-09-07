<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="dist/css/bootstrap.css" />
	<link rel="stylesheet" href="dist/css/mystyle.css" />
</head>
<body>
	<div class="container navigation">
		<div class="row">
			<div class="container">
				<a href="img/ID.jpg" target="_blank"><img src="img/ID.jpg" alt="" class="moi"></a>
			</div>
		</div>
		<h1 class="head">Master Horoscope <sub>By MasterID</sub></h1>
		<div class="row">
			<form action="horoscope.php" method="POST">
				<div class="form-group">
					<label for="name">nom</label>
					<input type="text" id="name" name="Nom" class="form-control" required="">
				</div>
				<div class="form-group">
						<label for="surname">prénom</label>
						<input type="text" id="surname" name="Prenom" class="form-control" required="">
					</div>
					<div class="form-row align-items-center">
							<div class="col-auto my-1">
							  <label class="mr-sm-2" for="inlineFormCustomSelect">Jours</label>
							  <select class="custom-select mr-sm-2" name="Jours" id="inlineFormCustomSelect" required="">
								<option>choisir</option>
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							  </select>
									  <label class="mr-sm-2" for="inlineFormCustomSelect">mois</label>
									  <select class="custom-select mr-sm-2" name="Mois" id="inlineFormCustomSelect" required="">
										<option >choisir</option>
										<option value="1">01</option>
										<option value="2">02</option>
										<option value="3">03</option>
										<option value="4">04</option>
										<option value="5">05</option>
										<option value="6">06</option>
										<option value="7">07</option>
										<option value="8">08</option>
										<option value="9">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
						
									  </select>
									  <label class="mr-sm-2" for="inlineFormCustomSelect" required="">année</label>
									  <select class="custom-select mr-sm-2" name="Annee" id="inlineFormCustomSelect">
										<option >choisir</option>
										<option value="1970">1970</option>
                    
										<option value="1971">1971</option>
												 
			         					<option value="1972">1972</option>
									
										<option value="1973">1973</option>
						
										<option value="1974">1974</option>
												 
					    				<option value="1975">1975</option>
										
										<option value="1976">1976</option>
								
										<option value="1977">1977</option>
										 
										<option value="1978">1978</option>
										
										<option value="1979">1979</option>
									
										<option value="1980">1980</option>
								
										<option value="1981">1981</option>
										 
										<option value="1982">1982</option>
										
										<option value="1983">1983</option>
									
										<option value="1984">1984</option>
										
										<option value="1985">1985</option>
						
										<option value="1986">1986</option>
										
										<option value="1987">1987</option>
										
										<option value="1988">1988</option>
										
										<option value="1989">1989</option>
								
										<option value="1990">1990</option>
										
										<option value="1991">1991</option>
									
										<option value="1992">1992</option>
										
										<option value="1993">1993</option>
									 
										<option value="1994">1994</option>
								 
										<option value="1995">1995</option>
								
										<option value="1996">1996</option>
										
										<option value="1997">1997</option>
									
										<option value="1998">1998</option>
										 
										<option value="1999">1999</option>
								
										<option value="2000">2000</option>
												 
										<option value="2001">2001</option>
						
										<option value="2002">2002</option>
										
										<option value="2003">2003</option>
										
										<option value="2004">2004</option>
									
										<option value="2005">2005</option>
										
										<option value="2006">2006</option>
	 
										<option value="2007">2007</option>
								
										<option value="2008">2008</option>
												 
										<option value="2009">2009</option>
						
										<option value="2010">2010</option>
									
										<option value="2011">2011</option>
											 
										<option value="2012">2012</option>
							
										<option value="2013">2013</option>
										
										<option value="2014">2014</option>
								 
										<option value="2015">2015</option>
									
										<option value="2016">2016</option>
										
										 <option value="2017">2017</option>
										 
									</select>

									<label class="mr-sm-2" for="inlineFormCustomSelect" required="">heures</label>
									  <select name="Heures" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
										<option >choisir</option>
										<option value="0">00</option>
										<option value="01">01</option>
										<option value="02">02</option>												 
			         					<option value="03">03</option>									
										<option value="04">04</option>						
										<option value="05">05</option>												 
					    				<option value="06">06</option>										
										<option value="07">07</option>								
										<option value="08">08</option>										 
										<option value="09">09</option>										
										<option value="10">10</option>									
										<option value="11">11</option>								
										<option value="12">12</option>										 
										<option value="13">13</option>										
										<option value="14">14</option>									
										<option value="15">15</option>										
										<option value="16">16</option>						
										<option value="17">17</option>										
										<option value="18">18</option>										
										<option value="19">19</option>										
										<option value="20">20</option>								
										<option value="21">21</option>										
										<option value="22">22</option>									
										<option value="23">23</option>										
										<option value="24">24</option>
										</select>

										<label class="mr-sm-2" for="inlineFormCustomSelect" required="">minutes</label>
									  <select name="Minutes" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
										<option >choisir</option>
										<option value="0">00</option>
										<option value="01">01</option>
										<option value="02">02</option>												 
			         					<option value="03">03</option>									
										<option value="04">04</option>						
										<option value="05">05</option>												 
					    				<option value="06">06</option>										
										<option value="07">07</option>								
										<option value="08">08</option>										 
										<option value="09">09</option>										
										<option value="10">10</option>									
										<option value="11">11</option>								
										<option value="12">12</option>										 
										<option value="13">13</option>										
										<option value="14">14</option>									
										<option value="15">15</option>										
										<option value="16">16</option>						
										<option value="17">17</option>										
										<option value="18">18</option>										
										<option value="19">19</option>										
										<option value="20">20</option>								
										<option value="21">21</option>										
										<option value="22">22</option>									
										<option value="23">23</option>										
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>												 
			         					<option value="27">27</option>									
										<option value="28">28</option>						
										<option value="29">29</option>												 
					    				<option value="30">30</option>										
										<option value="31">31</option>								
										<option value="32">32</option>										 
										<option value="33">33</option>										
										<option value="34">34</option>									
										<option value="35">35</option>								
										<option value="36">36</option>										 
										<option value="37">37</option>										
										<option value="38">38</option>									
										<option value="39">39</option>										
										<option value="40">40</option>						
										<option value="41">41</option>										
										<option value="42">42</option>										
										<option value="43">43</option>										
										<option value="44">44</option>								
										<option value="45">45</option>										
										<option value="46">46</option>									
										<option value="47">47</option>										
										<option value="48">48</option>
										<option value="49">49</option>								
										<option value="50">50</option>										 
										<option value="51">51</option>										
										<option value="52">52</option>									
										<option value="53">53</option>										
										<option value="54">54</option>						
										<option value="55">55</option>										
										<option value="56">56</option>										
										<option value="57">57</option>										
										<option value="58">58</option>								
										<option value="59">59</option>										
										<option value="60">60</option>									
										</select>
							</div>
						</div>
						<div class="btn-contain">
							<button type="reset" class="btn btn-danger pull-left">Réinitialiser</button>
							<button type="submit" class="btn btn-primary pull-right">Soumettre</button>	
						</div>
							
			</form>
		</div> <!-- row navigation-->
	</div> <!-- container navigation-->
	<footer>
		<marquee>Copyright &copy; Ibrahim Diaby Alias MasterID</marquee>	
	</footer>
	

	<script type="text/javascript" src="dist/js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="dist/js/myScript.js"></script>
	<script type="text/javascript" src="dist/js/idscript.js"></script>
</body> 