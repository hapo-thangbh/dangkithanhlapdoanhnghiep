<template>
    <div>
        <section class="content-header">
            <h1>List User</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">user</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- <button class="btn btn-success pull-right" data-toggle="modal" data-target="#add_member">
                        <i class="fa fa-user-plus"></i>
                    </button> -->

                    <button class="btn btn-success pull-right" @click="addModal">
                        <i class="fa fa-user-plus"></i>
                    </button>
                    <table class="table table-bordered table-striped table-hover table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    <label class="">
                                        <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                            <input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr v-for="user in users" :key="user.id">
                                <th>
                                    <label class="">
                                        <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;">
                                            <input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;">
                                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                </th>
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.type }}</td>
                                <td class="text-center">
                                    <a href="#" @click="editModal(user)">
                                        <i class="fa fa-edit blue"></i>
                                    </a>
                                    /
                                    <a href="#" @click="deleteUser(user.id)">
                                        <i class="fa fa-times red"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Add user -->
        <div class="modal fade" id="add_member" tabindex="-1" role="dialog" aria-labelledby="add_member"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-show="!editmode" class="modal-title" id="add_member">Add New Member</h5>
                        <h5 v-show="editmode" class="modal-title" id="add_member">Update Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Nếu editmode = true ==> updateUser -->
                    <form @submit.prevent="editmode ? updateUser() : createUser()" @keydown="form.onKeydown($event)">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input v-model="form.name" type="text" name="name" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Enter Name...">
                                <has-error :form="form" field="name"></has-error>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input v-model="form.email" type="email" name="email" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('email') }" placeholder="Enter Email...">
                                <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                                <label>Bio</label>
                                <textarea v-model="form.bio" type="text" name="bio" class="form-control" 
                                    :class="{ 'is-invalid': form.errors.has('bio') }" placeholder="Enter Bio..."></textarea>
                                <has-error :form="form" field="bio"></has-error>
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <select v-model="form.type" name="type" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('type') }" placeholder="Enter Type...">
                                    <option value="">--Select user role--</option>
                                    <option value="admin">Admin</option>
                                    <option value="standard user">Standard user</option>
                                    <option value="author">Author</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input v-model="form.password" type="password" name="password" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Enter Password...">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button v-show="!editmode" type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Create</button>
                            <button v-show="editmode" type="submit" class="btn btn-primary"> <i class="fa fa-upload"></i> Update</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-times"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- End add user -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users : {},
                form: new Form({
                    id:'',
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    avatar: ''
                }),
                editmode:false,
            }
        },
        methods:{
            //Show modal to add user
            addModal(){
                this.editmode = false;
                this.form.reset();
                $('#add_member').modal('show');
            },
            //Show modal to edit user
            editModal(user){
                this.editmode = true;
                this.form.reset();
                $('#add_member').modal('show');
                this.form.fill(user);
            },
            listUsers(){
                axios.get('api/user').then(({data}) => (this.users = data.data));
            },
            createUser(){
                //run php artisan route:list để xem phương thức store

                // this.$Progress.start();
                this.form.post('api/user')
				//Nếu không lỗi thì thực hiện .then và ngược lại
				.then(()=>{
					//Fire.$emit('AfterCreate');Customize Event
					toast.fire({
						type: 'success',
						title: 'User created in successfully!'
					});
                    // this.$Progress.finish();
                    $('#add_member').modal('hide');
				})
				.catch(()=>{
                    // this.$Progress.fail();
                    toast.fire({
						type: 'error',
						title: 'User created in failed!'
					});
				})
            },
            updateUser(id){
                // this.$Progress.start();
                this.form.put('api/user/'+this.form.id)
                .then(()=>{
                    $('#add_member').modal('hide');
                    swal.fire(
                        'Updated!',
                        'Update Successfully!.',
                        'success'
                    )
                })
                .catch(()=>{
                    // this.$Progress.fail();
                    toast.fire({
						type: 'error',
						title: 'User update in failed!'
					});
                });
            },
            deleteUser(id){
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    //Send request to the server
                    //php artisan route:list để xem xóa link nào
                    if (result.value) {
                        this.form.delete('api/user/'+id)
                        .then(()=>{
                            swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                        })
                        .catch(()=>{
                            swal.fire(
                            'Failed!',
                            'Delete user failed.',
                            'warning'
                            )
                        })
                    }
                })
            }
        },
        created(){
            this.listUsers();
			
			//Load lại giá trị khi thêm mới
			//Fire.$on('AfterCreate',()=>{
				//this.listUsers();
			//});
			setInterval(() => this.listUsers(),2000);
			//Load lại giá trị khi thêm mới sau 2s
        }
    }

</script>
