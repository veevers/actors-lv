<html>
    <head>
        <style>
            body{
                margin: 5%;
                position: center;
            }
            table{
                margin: 2em;
            }
        </style>
    </head>
    <body>
        <?php if(count($actors)==0): ?>
                <p color='red'> There is no record in the database!</p>
        <?php else: ?>
                <table border="1"> 
                        <tr> 
                                <td> Actor Id </td> 
                                <td> Actor Name </td> 
                                <td> Actor Surname </td>
                                <td> Birthday </td>
                                <td> A / E </td>

                        </tr>
                <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr> 
                                <td> <?php echo e($actor->actor_id); ?> </td>
                                <td> <?php echo e($actor->actor_name); ?> </td>
                                <td> <?php echo e($actor->actor_surname); ?> </td>
                                <td> <?php echo e($actor->birthday); ?> </td>
                                <td> <?php echo e($actor->actor_extra); ?> </td>
                                <td> <input type="button" value="Portfolio" onclick="showPortfolio(<?php echo e($actor->actor_id); ?>)"> </td>
                                <td> <input type="button" value="Delete" onclick="deleteActor(<?php echo e($actor->actor_id); ?>)"> </td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
                <table>

                    <td> <input type="button" value="New Actor" onclick="newActor()"> </td>
                </table>
        <?php endif; ?>


        <script>
                function showPortfolio(actorID) {
                        window.location.href="/portfolio/"+actorID;
                }
                function newActor() {
                        window.location.href="/actor/new/";
                }
                function deleteActor(actorID) {
                        window.location.href="/actor/delete/"+actorID;
                }
        </script>
    </body>
</html>