<template>
    <layout>
        <div>
            <p>Create </p>

            <div class="col-md-6">
                <form action="/users" method="POST" class="my-5" @submit.prevent="createUser">
                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" v-model="form.name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" v-model="form.email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" v-model="form.password">
                    </div>

                    <div v-if="Object.keys(errors).length > 0" class="alert alert-danger mt-4">
                        {{ errors[Object.keys(errors)[0]][0] }}
                    </div>

                    <button type="submit" id="create" class="btn btn-primary float-right">Create User</button>

                </form>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '@/Shared/Layout'

    export default {
        components: {
            Layout,
        },
        props: {
            errors:'',
        },
        remember: {
            data: ['form'],
        },
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    password: '',
                }
            }
        },
        methods: {
            createUser() {
                this.$inertia.post('/users', this.form)
                    .then((response) => {
                        console.log(response);
                    });
            }
        }
    }
</script>

<style>

</style>
