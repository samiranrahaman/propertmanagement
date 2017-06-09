<div class="content-wrapper" ng-controller="addpropertycontroller">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Edit Property</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Property</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
        <?php //echo "<pre>"; print_r($data);?>
	<div class="container">
			<div class="row row-centered">
			   <div class="col-xs-6 col-centered col-min">
			   
	           <form  id="addproperty" name="addproperty" ng-submit="addpropertyform()" novalidate >
                 <input type="hidden" class="form-control"  id="property_id" name="property_id" ng-model="property_id" ng-value="property_id" required>
				  <div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.title.$invalid && !addproperty.title.$pristine }">
						<label for="sel1">Building Name:</label>
						<input type="text" class="form-control" placeholder="Type Name" id="title" name="title" ng-model="title" required> 
						<p ng-show="addproperty.title.$invalid && !addproperty.title.$pristine" class="help-block">Type name is required.</p>
						
					  </div>
					  <div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.no_of_floor.$invalid && !addproperty.no_of_floor.$pristine }">
											<input type="number" class="form-control" placeholder="No of Floor" id="no_of_floor" name="no_of_floor" ng-model="no_of_floor" required> 
											<p ng-show="addproperty.no_of_floor.$invalid && !addtypeedit.no_of_floor.$pristine" class="help-block">Field is required.</p>
											
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
	
	
	 
	
	 
	 $scope.title='<?php echo $data[0]->title?>';
	 $scope.no_of_floor=parseInt(<?php echo $data[0]->no_of_floor?>);
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
		
		
		
$scope.addpropertyform=function()
{
	
	//alert($scope.title);
	 //alert($scope.productSelected.label);
		$http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/property/update_property_type',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({
				 title:$scope.title,
				 no_of_floor:$scope.no_of_floor,
				 address:$scope.address,
				 country:$scope.country,
				 state:$scope.state,
				 city:$scope.city,
				 zip:$scope.zip,
				 property_id:$scope.property_id,
				})
			}).success(function(data) {
				 console.log(data);
				// alert(data);
                if(data>0)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/property/add_property_type";
				 }
				 /* else
				 {
					 $scope.validationError = true;
				 }  */
				
			});
			
			
	
}
 })
 </script>