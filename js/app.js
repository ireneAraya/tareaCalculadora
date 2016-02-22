angular.module('calculatorApp', [])

	/**
     * Definimos un servicio que interactuará con el back-end.
     */

    .service('CalculatorService', ['$http',
        function($http) {
            /**
             * El método add toma dos enteros como parámetros.
             * @param firstValue
             * @param secondValue
             * @returns String
             */
            var adding = function adding(firstValue, secondValue) {
                var url = 'controller.php';
                url += '?firstValue=' + firstValue;
                url += '&secondValue=' + secondValue;
                url += '&operation=add';

                return $http({url: url});
            };

            return {
                adding: adding
            }
	}])    
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('CalculatorCtrl',
        ['$scope', 'CalculatorService',
            function ($scope, CalculatorService) {
            	    var firstValue = null,
                		secondValue = null;

                $scope.init = function() {	
                	$scope.output1 = '';
                    $scope.operationSymbol = '';
                    $scope.output2 = '';
                    $scope.result = '0';
            	};      

            $scope.updateOutput = function updateOutput(btn) { 
            		$scope.output1 == btn;
            		
            		$scope.output1 += String(btn);
            		firstValue == toNumber($scope.output1);
            	
				if ($scope.output1 && $scope.operationSymbol != '') {
            		$scope.output2 == btn;
            		$scope. output2 += String(btn);
            		secondValue == toNumber($scope.output2);
            	}	
            };

            $scope.updateSymbol = function updateSymbol(btn) {
            	$scope.operationSymbol = btn;
            };

            $scope.adding = function adding() {
            	var result = $scope.result;
            	
            	if (firstValue != null && secondValue != null && $scope.operationSymbol == '+') {
            		firstValue + secondValue;
            	}
            	return result;
            };

            $scope.clear = function clear() {
            	$scope.output1 = '';
            	$scope.output2 = '';
            	$scope.operationSymbol = '';
            	$scope.result = '0';
            };

            toNumber = function (numberString) {
        		var result = 0;
        		if (numberString) {
            		result = numberString * 1;
        		}
        		return result;
    		};

            $scope.init();

    }]);

