<template>
    <layout>
        <div>
            <h2>Users</h2>
            {{ user }}
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
            user:'',
        }
    }
</script>

<style>

</style>
