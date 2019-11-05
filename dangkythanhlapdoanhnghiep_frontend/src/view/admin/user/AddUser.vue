<template>
    <div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <h4>Add User</h4>
                            <router-link :to="{name: 'listUserAdmin'}">
                                <button class="btn btn-gradient-light mr-1"><i class="mdi mdi-backspace"></i> Back</button>
                            </router-link>
                        </div>
                        <form action="">
                            <div class="form-group row">
                                <label for="username" class="col-md-2">Username:</label>
                                <input type="text" id="username" class="form-control col-md-6">
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2">Name:</label>
                                <input type="text" id="name" class="form-control col-md-6">
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-2">Email:</label>
                                <input type="email" id="email" class="form-control col-md-6">
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-2">Password:</label>
                                <input type="password" id="password" class="form-control col-md-6">
                            </div>

                            <div class="row form-group">
                                <div class="col-md-8 text-center">
                                    

                                    <button type="reset" class="btn btn-gradient-dark mr-1"><i class="mdi mdi-refresh"></i> Reset</button>
                                    <button type="submit" class="btn btn-gradient-success"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>