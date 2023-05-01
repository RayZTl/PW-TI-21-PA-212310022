

<?php $__env->startSection('content'); ?>

<div class="row mt-5">
        <div class="col-lg-8 col-xxl-8">
            <div class="card border-0">
                <div class="card-header bg-white border-0 px-4 py-3">
                    <div class="card-title">
                        <h5 class="fw-bolder text-gray-900 m-0">List of users</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle ">
                            <thead class="fs-6 fw-bold bg-light">
                                <tr class="fs-7">
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Fullname</th>
                                    <th width="20%">Address</th>
                                    <th>Birthdate</th>
                                    <th width="20%">Phone</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-6 text-secondary">
                                <?php if(count($users) > 0): ?>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($index + 1); ?></td>
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->fullname); ?></td>
                                            <td>
                                                <div style="height: 30px; overflow: hidden;">
                                                    <?php echo e($user->address); ?>

                                                </div>
                                            </td>
                                            <td> <?php echo e($user->birthdate); ?></td>
                                            <td> <?php echo e($user->phone); ?></td>
                                            <td><?php echo e(($user->gender) ? "M":"F"); ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button
                                                        class="btn btn-sm btn-danger"
                                                        title="Remove" type="button"
                                                        onclick="RemoveItem(<?php echo e($user->id); ?>)">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                    <button title="Edit"
                                                        class="btn btn-sm btn-primary"
                                                        type="button" onclick="EditItem(<?php echo e($user->id); ?>)">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6">No Record Found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xxl-4">
            <?php echo $__env->make('create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>


    <script>
        const RemoveItem = (id) => {
            if (confirm("Are you sure wants to remove this user ?")) {
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onload = function() {
                    var data = JSON.parse(this.response);
                    alert(data.message);
                    window.location.href = "<?php echo e(route('m_user')); ?>";
                }
                xmlhttp.open("GET", "<?php echo e(url('')); ?>/users/remove/" + id);
                xmlhttp.send();
            }
        }
        const EditItem = (id) => {
            var targetDiv = document.getElementById("form-user");
            let id_ = targetDiv.getElementsByClassName("id")[0];
            let email = targetDiv.getElementsByClassName("email")[0];
            let full = targetDiv.getElementsByClassName("fullname")[0];
            let add = targetDiv.getElementsByClassName("address")[0];
            let birthdate = targetDiv.getElementsByClassName("birthdate")[0];
            let phone = targetDiv.getElementsByClassName("phone")[0];
            let gender_M = targetDiv.getElementsByClassName("gender_M")[0];
            let gender_F = targetDiv.getElementsByClassName("gender_F")[0];
            const xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                var data = JSON.parse(this.response);
                id_.value = data.id;
                email.value = data.email;
                full.value = data.full;
                add.value = data.add;
                birthdate.value = data.birthdate;
                phone.value = data.phone;
                if(data.gender === 1){
                    gender_M.checked = true;
                }else{
                    gender_F.checked = true;
                }
            }
            xmlhttp.open("GET", "<?php echo e(url('')); ?>/users/edit/" + id);
            xmlhttp.send();
        }
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PW-212310022\Praktikum_6\resources\views/users.blade.php ENDPATH**/ ?>