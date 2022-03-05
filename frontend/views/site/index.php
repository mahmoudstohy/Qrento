<?php

/* @var $this yii\web\View */

$this->title = 'Qatar Rento';
?>
<div class="site-index">
    <div class="body-content">
    
    <div class="page-header">
        <h1>QATAR RENTO</h1>
    </div>
    <blockquote>
    	<i class="fa fa-search"></i>
    	Qrento properties search engine based for qatar <small>Simple and inteligant</small>
    </blockquote>
    
		<div class="row" style="margin-top: 50px;">
			
			<div class="col-md-2"></div>
        	<div class="col-md-8">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Search</a></li>
                                <li><a href="#tab2default" data-toggle="tab">Agent</a></li>
                                <li><a href="#tab3default" data-toggle="tab">QID</a></li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                            	<div class="row">
                            		<div class="col-md-4">
                            			<div class="float30">Location</div>
                            			<div class="float70">
                                			<select class="form-control">
                                        		<option>Doha</option>
                                        		<option>Wakra</option>
                                        		<option>Wakieer</option>
                                        		<option>Lusil</option>
                                    		</select>
                            			</div>
                            		</div>
                            		<div class="col-md-4">
                            			<div class="float30">Property</div>
                            			<div class="float70">
                                			 <select class="form-control">
                                        		<option>Apartment</option>
                                        		<option>Villa</option>
                                        		<option>Studio</option>
                                        		<option>Shared</option>
                                        		<option>Commerical</option>
                                    		</select>
                                		</div>
                            		</div>
                            		<div class="col-md-4">
                            			<div class="float30">Bedroom</div>
                            			<div class="float70">
                            				<select class="form-control">
                                        		<option>1</option>
                                        		<option>2</option>
                                        		<option>3</option>
                                        		<option>4</option>
                                        		<option>5 or more</option>
                                			</select>
                                		</div>
                            		</div>
                            	</div>
                            	<div class="row" style="margin-top: 15px;">
                            		<div class="col-md-4">
                            			<div class="float30">Price</div>
                            			<div class="float70">
                            			<select class="form-control">
                                    		<option>1-5k</option>
                                    		<option>5-10k</option>
                                    		<option>10-15k</option>
                                    		<option>15-20k</option>
                                		</select>
                                		</div>
                            		</div>
                            		<div class="col-md-4">
                            			<div class="float30">Furnish</div>
                            			<div class="float70">
                            				<select class="form-control">
                                        		<option>Fully Furnished</option>
                                        		<option>Simi-Furnished</option>
                                        		<option>Unfurnished</option>
                                			</select>
                                		</div>
                            		</div>
                            		<div class="col-md-4">
                            			<div class="float30">Type</div>
                            			<div class="float70">
                            				<select class="form-control">
                                        		<option>Compound</option>
                                        		<option>Open Area</option>
                                        		<option>Building</option>
                                			</select>
                                		</div>
                            		</div>
                            	</div>
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                            	<div class="float30">Agent Name</div>
                            	<div class="float70">
                            		<select class="form-control">
                                    	<option>Ezdan Real State</option>
                                	</select>
                            	</div>
                            </div>
                            <div class="tab-pane fade" id="tab3default">
                            	<div class="float30">QID</div>
                            	<div class="float70">
                            		<input type="text" class="form-control">
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="col-md-2"></div>
        	
        </div>
        
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="right">
    			<a href="index.php?r=property/search"><button type="button" class="btn btn-default">
                    <i class="fa fa-search"></i> Search
                </button></a>
            </div>
            <div class="col-md-2"></div>	
        </div>
        
        <div class="row" style="margin-top: 160px;">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
    			<img src="img/toolbar.jpg" alt="" />
            </div>
            <div class="col-md-2"></div>	
        </div>
        
    </div>
</div>
