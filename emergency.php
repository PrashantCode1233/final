<?php
    include"head.php";
    include"header.php";
    include"leftmenu.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Emergency</h1>
    <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">emergency</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Emergency</h3>
            </div>
            <div class="box-body">
                            
                            <table class="table table-bordered">
    			<thead>
    				<tr>
    					<th>Sr.No</th>
                        <th>Name</th>
    					<th>Phone</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Guardian Name</th>
                        <th>Guardian Ph.no</th>
                        <th>Edit</th>  
                        <th>Delete</th> 
                    
                        
                                           
    				</tr>
    			</thead>
                   
                
                            </table>                              
                
                        </div>
          </div>
        </div>
    </div>
    <!-- /.row -->
</section><!-- /.content -->

</div><!-- /.content-wrapper -->

<?php
    include"footer.php";
?>