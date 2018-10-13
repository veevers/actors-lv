<html>
    <head>
        <style>
            body {
                margin: 5%;
                background-color: #b3e8ca
            }
            table{
                border:none;
                padding: 2em;
            }
            tr.titles{
                background-color: red;
            }
            td{
                border: none;
            }
            
        </style>
    </head>
    <body>
        


	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> Vārds </td> 
			<td> Uzvārds </td>
			<td> Dz. datums </td>
                        <td> A / E </td>
			
		</tr>
	<?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr> 
			<td> <?php echo e($actor->actor_id); ?> </td>
			<td> <?php echo e($actor->actor_name); ?> </td>
			<td> <?php echo e($actor->actor_surname); ?> </td>
                        <td> <?php echo e($actor->birthday); ?> </td>
                        <td> <?php echo e($actor->actor_extra); ?> </td>
                </tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
<?php if(count($portfolios)==0): ?>
	<p color='red'> There is no info in the database!</p>
<?php else: ?>
	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> Epasts </td> 
			<td> Tel. nr </td>
			<td> Adrese </td>
                        <td> Izglītība </td>
                        <td> Pieredze </td>
                        <td> Atsauces </td>
		</tr>
	<?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr> 
			<td> <?php echo e($portfolio->actor_id); ?> </td>
			<td> <?php echo e($portfolio->email); ?> </td>
			<td> <?php echo e($portfolio->phone_number); ?> </td>
                        <td> <?php echo e($portfolio->address); ?> </td>
                        <td> <?php echo e($portfolio->education); ?> </td>
                        <td> <?php echo e($portfolio->experience); ?> </td>
                        <td> <?php echo e($portfolio->references); ?> </td>
		</td>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<?php endif; ?>

<?php if(count($physicals)==0): ?>
	<p color='red'> There is no info in the database!</p>
<?php else: ?>
	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> Augums (m) </td> 
			<td> Kājas izmērs </td>
			<td> Apģērbs </td>
                        <td> acu krāsa </td>
                        <td> matu krasa </td>
                        <td> miesasbūve </td>
		</tr>
	<?php $__currentLoopData = $physicals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $physical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr> 
			<td> <?php echo e($physical->actor_id); ?> </td>
			<td> <?php echo e($physical->height); ?> </td>
			<td> <?php echo e($physical->shoes); ?> </td>
                        <td> <?php echo e($physical->clothes); ?> </td>
                        <td> <?php echo e($physical->eyes); ?> </td>
                        <td> <?php echo e($physical->hair); ?> </td>
                        <td> <?php echo e($physical->body_type); ?> </td>
			
		</td>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<?php endif; ?>

<?php if(count($languages)==0): ?>
	<p color='red'> There is no info in the database!</p>
<?php else: ?>
	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> language </td> 
			<td> speaking </td>
			<td> writing </td>
                        <td> understanding </td>
		</tr>
	<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr> 
			<td> <?php echo e($language->actor_id); ?> </td>
			<td> <?php echo e($language->language); ?> </td>
			<td> <?php echo e($language->speaking); ?> </td>
                        <td> <?php echo e($language->writing); ?> </td>
                        <td> <?php echo e($language->understanding); ?> </td>
			
		</tr>
               
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<p> <input type="button" value="edit" onclick="deleteCity(<?php echo e($language->city_id); ?>)"> </p>
<?php endif; ?>


<script>
	function newCity(actorID) {
		window.location.href="/city/new/"+countryID;
	}
	function deleteCity(cityID) {
		window.location.href="/city/delete/"+cityID;
	}
</script>
        </body>
        </html>