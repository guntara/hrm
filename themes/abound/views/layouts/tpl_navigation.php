<?php $allAdmin = User::model()->getAdmin(); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">  GPB <small>HR Management</small></a>
          
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                        array('label'=>'Dashboard', 'url'=>array('/site/index')),
			array('label'=>'Admin <span class="caret"></span>', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,
				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
		                'items'=>array(
		                	array('label'=>'User Management', 'url'=>array('/user/admin'), 'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->role==="admin"),
					array('label'=>'Organization', 'url'=>array('/company/view/1')),
					array('label'=>'Jobs Category', 'url'=>array('/jobCategory/admin')),
					array('label'=>'Jobs Spesification', 'url'=>array('/job/admin')),
					array('label'=>'Department', 'url'=>array('/department/admin')),
					array('label'=>'Location', 'url'=>array('/location/admin')),
		                )),
			array('label'=>'Employee <span class="caret"></span>', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,
				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
		                'items'=>array(
		                	array('label'=>'Employee List', 'url'=>array('/employee/admin')),
					array('label'=>'Add Employee', 'url'=>array('/employee/create')),
		                )),
			array('label'=>'Time <span class="caret"></span>', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,
				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
		                'items'=>array(
					array('label'=>'Attendance'),
		                	array('label'=>'Employee Records', 'url'=>array('/attendance/admin')),
					array('label'=>'Attendance Summary', 'url'=>array('/attendance/summary')),
		                	array('label'=>'Import from Device', 'url'=>array('/importcsv')),
					array('label'=>'Leave'),
					array('label'=>'Add Entitlement', 'url'=>array('#')),
					array('label'=>'Employee Entitlements', 'url'=>array('#')),
		                	array('label'=>'Leave Records', 'url'=>array('#')),
		                )),
			array('label'=>'Performance <span class="caret"></span>', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,
				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
		                'items'=>array(
					array('label'=>'Add KPI', 'url'=>array('/kpi/create')),
					array('label'=>'KPI List', 'url'=>array('/kpi/admin')),
					array('label'=>'Add Review', 'url'=>array('#')),
					array('label'=>'Review List', 'url'=>array('#')),
		                )),
                        array('label'=>'My Account <span class="caret"></span>', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest,
				'itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"), 'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
		                'items'=>array(
		                	array('label'=>'My Inbox <span class="badge badge-warning pull-right">1126</span>', 'url'=>array('#')),
					array('label'=>'My Project <span class="badge badge-important pull-right">112</span>', 'url'=>array('#')),
		                )),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                )); ?>
    	</div>
    </div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
        
        	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>
           <form class="navbar-search pull-right" action="">
           	 
           <input type="text" class="search-query span2" placeholder="Search">
           
           </form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->
