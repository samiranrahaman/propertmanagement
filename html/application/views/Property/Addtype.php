<script src="<?php echo base_url();?>css/angular-ui-bootstrap-modal.js"></script>
<div class="content-wrapper" class="content-wrapper" ng-controller="addtypecontroller">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <strong>Add Building</strong>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>  
        <li class="active">Building</li>
      </ol>
      <br/>       
    </section> 

 

    <!-- Main content -->
    <section class="content">
        
	<div class="container">
			<div class="row row-centered">
			     
				 
				 <div class="col-xs-8 col-centered col-min" style="position: absolute;">

			                <div modal="showModal" close="cancel()" class="modal-content" style="background-color: white;">
							      <form  id="addtypeedit" name="addtypeedit" novalidate >
									<div class="modal-header">
										<h4>Edit Property Type</h4>
									</div>
									<div class="modal-body">
										
										 <div class="form-group has-feedback" ng-class="{ 'has-error' : addtypeedit.title_edit.$invalid && !addtypeedit.title_edit.$pristine }">
											<input type="text" class="form-control" placeholder="Type Name" id="title_edit" name="title_edit" ng-model="title_edit" required> 
											<p ng-show="addtypeedit.title_edit.$invalid && !addtypeedit.title_edit.$pristine" class="help-block">Type name is required.</p>
											
										  </div>
										  <div class="form-group has-feedback" ng-class="{ 'has-error' : addtypeedit.no_of_floor_edit.$invalid && !addtypeedit.no_of_floor_edit.$pristine }">
											<input type="number" class="form-control" placeholder="No of Floor" id="no_of_floor_edit" name="no_of_floor_edit" ng-model="no_of_floor_edit" required> 
											<p ng-show="addtypeedit.no_of_floor_edit.$invalid && !addtypeedit.no_of_floor_edit.$pristine" class="help-block">Field is required.</p>
											
					  </div>
										  <input type="hidden" class="form-control"  id="type_id" name="type_id" ng-model="type_id" required> 
									</div>
									<div class="modal-footer">
									  <button class="btn btn-success" ng-disabled="addtypeedit.$invalid" ng-click="addtypeeditsubmit()">Update</button>
									  <button class="btn" ng-click="cancel()">Cancel</button>
									</div>
									
									</form>
									
			                </div>
		          </div>
			
			
			   <div class="col-xs-12 col-centered col-min">	
					<div class="row" style="padding: 0 0 39px 0;width: 95%;">
					<form  id="addtype" name="addtype" ng-submit="addtypesubmit()" novalidate >
				   
					  <div class="form-group has-feedback" ng-class="{ 'has-error' : addtype.title.$invalid && !addtype.title.$pristine }">
						<label for="sel1">Building Name:</label>
						<input type="text" class="form-control" placeholder="Type Name" id="title" name="title" ng-model="title" required> 
						<p ng-show="addtype.title.$invalid && !addtype.title.$pristine" class="help-block">Type name is required.</p>
						
					  </div>
					  <div class="form-group has-feedback" ng-class="{ 'has-error' : addtype.no_of_floor.$invalid && !addtype.no_of_floor.$pristine }">
											<input type="number" class="form-control" placeholder="No of Floor" id="no_of_floor" name="no_of_floor" ng-model="no_of_floor" required> 
											<p ng-show="addtype.no_of_floor.$invalid && !addtype.no_of_floor.$pristine" class="help-block">Field is required.</p>
											
					  </div>
					  <div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.address.$invalid && !addproperty.address.$pristine }">
					<label for="sel1">Address:</label>
					<input type="text" class="form-control" placeholder="" id="address" name="address" ng-model="address" required> 
					<p ng-show="addproperty.address.$invalid && !addproperty.address.$pristine" class="help-block">Property Address required.</p>
					
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.country.$invalid && !addproperty.country.$pristine }">
				  
							<label for="sel1">Country:</label>
							
						 <select class="form-control"  id="country" name="country"  required ng-model="country"
							ng-options="opt.id as opt.name for opt in countrylists"
							ng-change='selectcountry()' >
						</select>
						
					<p ng-show="addproperty.country.$invalid && !addproperty.country.$pristine" class="help-block">Country is required.</p>
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.state.$invalid && !addproperty.state.$pristine }">
				  
							<label for="sel1">State:</label>
							
						 <select class="form-control"  id="state" name="state"  required ng-model="state"
							ng-options="opt.id as opt.name for opt in statelists"
							ng-change='selectcity()' >
						</select>
						
					<p ng-show="addproperty.state.$invalid && !addproperty.state.$pristine" class="help-block">State is required.</p>
				</div>
				
				<div class="form-group"  ng-class="{ 'has-error' : addproperty.city.$invalid && !addproperty.city.$pristine }">
				  
							<label for="sel1">City:</label>
							
						 <select class="form-control"  id="city" name="city"  required ng-model="city"
							ng-options="opt.id as opt.name for opt in citylists"
							>
						</select>
						
					<p ng-show="addproperty.city.$invalid && !addproperty.city.$pristine" class="help-block">City is required.</p>
				</div>
				<div class="form-group has-feedback" ng-class="{ 'has-error' : addproperty.zip.$invalid && !addproperty.zip.$pristine }">
					<label for="sel1">Postalcode/Zip:</label>
					<input type="text" class="form-control" placeholder="" id="zip" name="zip" ng-model="zip" required> 
					<p ng-show="addproperty.zip.$invalid && !addtype.zip.$pristine" class="help-block">Postalcode/Zip required.</p>
					
				</div>
										  
						
					  
				   
					  
					  
					  <div class="form-group">
						<div class="col-xs-4 pull-right">
								<button type="submit" class="btn btn-primary" ng-disabled="addtype.$invalid">Create</button>
								|
								<a class="btn btn-primary" href="<?php echo base_url();?>index.php/property">Back</a>
					   </div>
					  </div>
					</form>	
			   
				    </div>
				  
			        <div style="clear:both"></div>
					<div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #3c8dbc;">
						
						  <div class="col-sm-3">Title</div>
						   <div class="col-sm-3">Floors</div>
						   <div class="col-sm-3">Creation Date</div>
							<div class="col-sm-3">Action</div>
							 
					</div>
					<div class="row " ng-repeat="item in property_type_list " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;">
						
						  <div class="col-sm-3">{{item.title}}</div>
						    <div class="col-sm-3">{{item.no_of_floor}}</div>
						  <div class="col-sm-3">{{item.created_at}}</div>
						  <div class="col-sm-3">
						  <button class="btn btn-primary" ng-click="delete(item.id)">Delete</button>|
						  <!--<button class="btn btn-primary" ng-click="edit(item.id,item.title,item.no_of_floor)">Edit</button>-->
						  <a class="btn btn-primary"  href="<?php echo base_url();?>index.php/property/edit_property_type_details/{{item.id}}">Edit</a></div>
							 
					</div>
					<div class="row " style="border: 1px solid #ecf0f5;padding: 11px 5px 17px 20px;background: #d1d7de;"ng-show="!property_type_list.length">No Result Found!</div>
			         
			   </div>
			   
			</div>
    </div>
	
    </section>
    <!-- /.content -->
  </div>
 <script>
var app = angular.module("myApp", ["ui.bootstrap.modal"]);
app.controller("addtypecontroller", function($scope,$http,$timeout,$window) {
            
			$scope.edit = function (id,name,no_of_floor) {
				  $scope.showModal = true;
				  console.log(no_of_floor);
				   $scope.title_edit =name;
				    $scope.no_of_floor_edit =parseInt(no_of_floor);
					$scope.type_id = id;
			  }
			  $scope.cancel = function() {
				  $scope.showModal = false;
				};
 	
            $http({
				method : 'get',
				url : '<?php echo base_url();?>index.php/property/get_property_type',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                //data :JSON.stringify({account_name:$scope.store.account_name, apikey:$scope.store.apikey,password:$scope.store.password,url:$scope.store.url})
			     }).success(function(data) {
					// alert(data.status);
				 console.log(data);

				 $scope.property_type_list =data;
				 
				
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
			
$scope.addtypesubmit=function()
{
	
	//alert($scope.title);
	 //alert($scope.productSelected.label);
		$http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/property/post_property_type',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({
				 title:$scope.title,
				 no_of_floor:$scope.no_of_floor,
				 address:$scope.address,
				 country:$scope.country,
				 state:$scope.state,
				 city:$scope.city,
				 zip:$scope.zip,
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
 
$scope.addtypeeditsubmit=function()
{
	
	//alert($scope.title);
	 //alert($scope.productSelected.label);
		$http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/property/update_property_type',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({title:$scope.title_edit,type_id:$scope.type_id,no_of_floor_edit:$scope.no_of_floor_edit})
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

$scope.delete = function (str) 
       {
		  // alert(str);
            var deleteUser = $window.confirm('Are you absolutely sure you want to delete?');

    if (deleteUser) {
      
	  
	  $http({
        method : 'POST',
        url : '<?php echo base_url();?>index.php/property/delete_property_type',
		
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				data :JSON.stringify({id:str})
			}).success(function(data) {
				 console.log(data);
				 //alert(data);
                if(data==1)
 				 {
					  //$scope.validationESuccess = true;
					   window.location.href="<?php echo base_url();?>index.php/property/add_property_type";
				 }
				 else
				 {
					 //$scope.validationError = true;
				 } 
				
			});
	  
      }   
			   
    }		
			
  
});
</script>