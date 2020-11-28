<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Gender</td>
<td>Hobbies</td>
<td>Address</td>
<td>Branch Name</td>
<td>Image</td>
<td>Action</td>
</tr>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($user->id); ?></td>
<td><?php echo e($user->firstname); ?></td>
<td><?php echo e($user->lastname); ?></td>
<td><?php echo e($user->gender); ?></td>
<td><?php echo e($user->hobbies); ?></td>
<td><?php echo e($user->address); ?></td>
<td><?php echo e($user->branch_name); ?></td>
<td><?php echo e($user->image); ?></td>
<td><a href = 'delete/<?php echo e($user->id); ?>'>Delete</a>&nbsp;|&nbsp;
<a href = 'edit/<?php echo e($user->id); ?>'>Edit</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\student_form\resources\views/showdata.blade.php ENDPATH**/ ?>