<template>
    <layout>
        <div>
            <h2>Users</h2>
            <div>
                <a href="/users/create" class="btn btn-primary" id="createUser">Create</a>
            </div>

            <table class="table table-responsive-lg table-striped">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td>{{ user.name }}</td>
                        <td>{{ user.email}}</td>
                        <td>
                            <inertia-link :href="`/users/${user.id}/edit`">Edit</inertia-link>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
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
            users:'',
        }
    }
</script>

<style>

</style>
