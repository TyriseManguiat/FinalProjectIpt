<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.');  // When the component is mounted, log this message
    }
};
</script>

<style scoped>
/* Scoped styles for this component */
.card {
    margin-top: 20px;
}
</style>
