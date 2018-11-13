var app = angular.module('admin',['angularUtils.directives.dirPagination']);
app.controller('AdminController', function($scope,$http){
	$scope.name="heloo";
	function get_prs(){
		$http.get('http://localhost/hoplongtech/api/product').then(function(res){
			$scope.prs = res.data;
			console.log($scope.prs);
		})
	}
	get_prs();

})
var myapp = angular.module("myApp",['angularUtils.directives.dirPagination']);
myapp.controller("checkboxCtrl",function($scope,$http){
	$scope.name="heloo";
	function get_prs(){
		$http.get('http://localhost/hoplongtech/api/filter').then(function(res){
			$scope.pros = res.data.data;
			console.log($scope.pros);
		})
	}

	get_prs();
	$scope.selection = function(ffff){
		$http.get('http://localhost/hoplongtech/api/filter/' + ffff).then(function(res){
			$scope.pros = res.data;
			console.log($scope.pros);
		})
	}

})