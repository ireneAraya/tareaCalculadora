<?php
$nombre = "Calculator";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo($nombre); ?></title>

	<link rel="stylesheet" href="util/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="util/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body ng-app="calculatorApp" ng-controller="CalculatorCtrl">
	<div class="container">
		<div class="row">
			<div class="span12 calculator-container">
				<div class="row output">
					<div class="col-xs-3">
						<p class="text-center" name="output1">{{output1}}</p>
					</div>
					<div class="col-xs-3">
						<p class="text-center" name="operationSymbol">{{operationSymbol}}</p>
					</div>
					<div class="col-xs-3">
						<p class="text-center" name="output2">{{output2}}</p>
					</div>
					<div class="col-xs-3">
						<p class="text-right" name="result"> = {{result}}</p>
					</div>
				</div>
				<div class="row button-group">
					<div class="col-xs-6 nopadding">
						<button class="btn gray" name="clear" ng-click="clear()">AC</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="residual" ng-click="updateSymbol('%')">%</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn orange" name="split" ng-click="updateSymbol('÷')">÷</button>
					</div>
				</div>
				<div class="row button-group">
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-7" value="7" ng-click="updateOutput(7)">7</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-8" value="8" ng-click="updateOutput(8)">8</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-9" value="9" ng-click="updateOutput(9)">9</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn orange" name="multiply" ng-click="updateSymbol('x')">x</button>
					</div>
				</div>
				<div class="row button-group">
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-4" value="4" ng-click="updateOutput(4)">4</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-5" value="5" ng-click="updateOutput(5)">5</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-6" value="6" ng-click="updateOutput(6)">6</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn orange" name="substract" ng-click="updateSymbol('-')">-</button>
					</div>
				</div>
				<div class="row button-group">
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-1" value="1" ng-click="updateOutput(1)">1</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-2" value="2" ng-click="updateOutput(2)">2</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray" name="btn-3" value="3" ng-click="updateOutput(3)">3</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn orange" name="add" ng-click="updateSymbol('+')">+</button>
					</div>
				</div>
				<div class="row button-group">
					<div class="col-xs-6 nopadding">
						<button class="btn round-left gray" name="btn-0" value="0" ng-click="updateOutput(0)">0</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn gray">.</button>
					</div>
					<div class="col-xs-3 nopadding">
						<button class="btn round-right orange">=</button>
					</div>
				</div>
			</div>
		</div>

		<p>firstOutput:{{output1}}</p>
		<p>firstValue: {{firstValue}}</p>
		<p>secondOutput:{{output2}}</p>
	</div>

<script src="util/jquery/jquery.min.js"></script>
<script src="util/bootstrap/js/bootstrap.min.js"></script>	
<script src="util/angular/angular.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>