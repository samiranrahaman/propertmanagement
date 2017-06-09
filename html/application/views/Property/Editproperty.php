<div class="content-wrapper" ng-controller="addpropertycontroller">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Add Property</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Property</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
        
	<div class="container">
			<div class="row row-centered">
			   <div class="col-xs-6 col-centered col-min">
			   
	           <form  id="addproperty" name="addproperty" ng-submit="addpropertyform()" novalidate >
                 <input type="hidden" class="form-control"  id="property_id" name="property_id" ng-model="property_id" ng-value="property_id" required>
				 
				<!--<div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.property_name.$invalid && !addproperty.property_name.$pristine }">
					<label for="sel1">Name:</label>
					<input type="text" class="form-control" placeholder="Property Name" id="property_name" name="property_name" ng-model="property_name" ng-value="property_name" required> 
					<p ng-show="addproperty.property_name.$invalid && !addproperty.property_name.$pristine" class="help-block">Name is required.</p>
					
				</div>-->
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.property_type.$invalid && !addproperty.property_type.$pristine }">
				  
							<label for="sel1">Building:</label>
							
						 <!--<select class="form-control"  id="property_type" name="property_type"  required ng-model="property_type" ng-value="property_type"
							ng-options="opt.id as opt.title for opt in propertylist">
						</select>-->
						<select class="form-control"  id="property_type" name="property_type"  required ng-model="property_type" ng-change="getbuildingval(property_type)" ng-value="property_type"
							ng-options="opt.id as opt.title for opt in buildinglist">
						</select>
						
					<p ng-show="addproperty.property_type.$invalid && !addproperty.property_type.$pristine" class="help-block">Property Type is required.</p>
				</div>
				 <div class="form-group"  ng-class="{ 'has-error' : addproperty.property_floor.$invalid && !addproperty.property_floor.$pristine }">
				  
							<label for="sel1">Floor:</label>
							
						 <select class="form-control"  id="property_floor" name="property_floor"  required ng-model="property_floor"
							ng-options="opt for opt in floorlist">
						</select>
						
					<p ng-show="addproperty.property_floor.$invalid && !addproperty.property_floor.$pristine" class="help-block">Property Type is required.</p>
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.flat_no.$invalid && !addproperty.flat_no.$pristine }">
				  
					<label for="sel1">Room/Flat No:</label>
					<input type="text" class="form-control" placeholder="Room/Flat No" id="flat_no" name="flat_no" ng-model="flat_no"required> 
					<p ng-show="addproperty.flat_no.$invalid && !addproperty.flat_no.$pristine" class="help-block">Name is required.</p>
				</div> 
				
				
				<div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.address.$invalid && !addproperty.address.$pristine }">
					<label for="sel1">Address:</label>
					<input type="text" class="form-control" placeholder="" id="address" name="address" ng-model="address" ng-value="address" required> 
					<p ng-show="addproperty.address.$invalid && !addproperty.address.$pristine" class="help-block">Property Address required.</p>
					
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.country.$invalid && !addproperty.country.$pristine }">
				  
							<label for="sel1">Country:</label>
							
						 <select class="form-control"  id="country" name="country"  required ng-model="country" ng-value="country"
							ng-options="opt.id as opt.name for opt in countrylists"
							ng-change='selectcountry()' >
						</select>
						
					<p ng-show="addproperty.country.$invalid && !addproperty.country.$pristine" class="help-block">Country is required.</p>
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.state.$invalid && !addproperty.state.$pristine }">
				  
							<label for="sel1">State:</label>
							
						 <select class="form-control"  id="state" name="state"  required ng-model="state"
						   ng-value="state"
							ng-options="opt.id as opt.name for opt in statelists"
							ng-change='selectcity()' >
						</select>
						
					<p ng-show="addproperty.state.$invalid && !addproperty.state.$pristine" class="help-block">State is required.</p>
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.city.$invalid && !addproperty.city.$pristine }">
				  
							<label for="sel1">City:</label>
							
						 <select class="form-control"  id="city" name="city"  required ng-model="city" ng-value="city" 
							ng-options="opt.id as opt.name for opt in citylists"
							>
						</select>
						
					<p ng-show="addproperty.city.$invalid && !addproperty.city.$pristine" class="help-block">City is required.</p>
				</div>
				<div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.zip.$invalid && !addproperty.zip.$pristine }">
					<label for="sel1">Postalcode/Zip:</label>
					<input type="text" class="form-control" placeholder="" id="zip" name="zip"  ng-model="zip" ng-value="zip"  required> 
					<p ng-show="addproperty.zip.$invalid && !addproperty.zip.$pristine" class="help-block">Postalcode/Zip required.</p>
					
				</div>
				
				  <div class="form-group">
					<div class="col-xs-4 pull-right">
							<button type="submit" class="btn btn-primary" ng-disabled="addproperty.$invalid">Update</button>
				   </div>
				  </div>
    </form>	
			   
			   
			   
			   </div>
			</div>
    </div>
	
    </section>
    <!-- /.content -->
  </div>
 <script>
 var app = angular.module("myApp",[]);
 app.controller('addpropertycontroller', function($scope,$http){
  $http({
			method : 'get',
			url : '<?php echo base_url();?>index.php/property/get_property_type',
	
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			}).success(function(data) {
				// alert(data.status);
			 console.log(data);

			 $scope.buildinglist=data;
			
			//$scope.property_type=$scope.buildinglist[1];
			//$scope.property_type=$scope.buildinglist[<?php echo $data[0]->property_type?>]
			
			
		});
	$http({
		 method:'post',
		 url:'<?php echo base_url();?>index.php/managecountry/get_allow_country',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
	     }).success(function(data){
		 console.log(data);
		 $scope.countrylists=data
		 
		 });
	$scope.selectcountry=function()
	{
		
		//alert($scope.country);
		$http({
		 method:'post',
		 url:'<?php echo base_url();?>index.php/managecountry/get_allow_state',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({country_id:$scope.country})
	     }).success(function(data){
		 console.log(data);
		 $scope.statelists=data
		 });
		 
	}	
	$scope.selectcity=function()
	{
		
		//alert($scope.state);
		if($scope.state>0)
		{
			$http({
			 method:'post',
			 url:'<?php echo base_url();?>index.php/managecountry/get_allow_city',
			 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			 data :JSON.stringify({state_id:$scope.state})
			 }).success(function(data){
			 console.log(data);
			 $scope.citylists=data
			 });
		}
		else
		{
				$scope.citylists=[
							{
							id: "",
							name: "",
							}
							];
		}
		
		 
	}	
	
	$scope.getbuildingval=function(item)
	{
	     //alert($scope.property_type);
		 $http({
		 method:'post',
		 url:'<?php echo base_url();?>index.php/property/get_building_floor_details',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({building_id:$scope.property_type})
	     }).success(function(data){
		 console.log(data);
		 $scope.floorlist=data
		 //$scope.property_floor='<?php echo $data[0]->floor_no?>';
		 });
	}
	 $scope.addpropertyform=function()
	 {
		 //alert($scope.property_name);
		 var property_name='';
		 // var building_name='';
		  $http({
		 method:'post',
		 url:'<?php echo base_url();?>index.php/property/get_building_details',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({building_id:$scope.property_type})
	     }).success(function(data){
		 console.log(data);
		  var property_name=data[0].title+'/'+$scope.property_floor+'/'+$scope.flat_no;
		  var building_name=data[0].title;
		
		    /* var property_name=$scope.property_type+'/'+$scope.property_floor+'/'+$scope.flat_no; */
		 
		 $http({
		 method:"post",
		 url:'<?php echo base_url();?>index.php/property/update_property_data',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({property_name:property_name,
		 property_type_id:$scope.property_type,
		 building_name:building_name,
		 floor_no:$scope.property_floor,
		 flat_no:$scope.flat_no,
		 address:$scope.address,
		 country:$scope.country,
		 state:$scope.state,
		 city:$scope.city,
		 zip:$scope.zip,
		 property_id:$scope.property_id})
		 }).success(function(data){
			 console.log(data);
			 if(data>0)
 				 {
					  window.location.href="<?php echo base_url();?>index.php/property";
				 }
		 }) 
		 
		 });
		 
		 //alert(property_name);
		 
		 
		
	 }
	 
	 $http({
		 method:'post',
		 url:'<?php echo base_url();?>index.php/property/get_building_floor_details',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({building_id:<?php echo $data[0]->property_type?>})
	     }).success(function(data){
		 console.log(data);
		 $scope.floorlist=data
		 $scope.property_floor=$scope.floorlist['<?php echo $data[0]->floor_no - 1?>'];
		 });
		 
		 
	 
	 $scope.property_name='<?php echo $data[0]->name?>';
	 $scope.property_type='<?php echo $data[0]->property_type?>';
	 $scope.flat_no='<?php echo $data[0]->flat_no?>';
	
	 
	 $scope.address='<?php echo $data[0]->address?>';
	  $scope.country='<?php echo $data[0]->country?>';
	  
	  $http({
		 method:'post',
		 url:'<?php echo base_url();?>index.php/managecountry/get_allow_state',
		 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		 data :JSON.stringify({country_id:$scope.country})
	     }).success(function(data){
		 console.log(data);
		 $scope.statelists=data
		 });
	  $scope.state='<?php echo $data[0]->state?>';
	  if($scope.state>0)
		{
			$http({
			 method:'post',
			 url:'<?php echo base_url();?>index.php/managecountry/get_allow_city',
			 headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			 data :JSON.stringify({state_id:$scope.state})
			 }).success(function(data){
			 console.log(data);
			 $scope.citylists=data
			 });
		}
		else
		{
				$scope.citylists=[
							{
							id: "",
							name: "",
							}
							];
		}
	    $scope.city='<?php echo $data[0]->city?>';
		$scope.zip='<?php echo $data[0]->zip?>';
		$scope.property_id='<?php echo $data[0]->id?>';
	 
 })
 </script>