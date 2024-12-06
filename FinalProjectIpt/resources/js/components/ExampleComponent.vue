<template>
  <div class="example-component">
    <h2>Welcome to the Example Component!</h2>
    <p>This is a basic Vue component that you can use in your application.</p>
  </div>
</template>

<script>
export default {
  name: 'ExampleComponent', // Name of the component
  data() {
    return {
      message: 'This is a message from the ExampleComponent!',
    };
  },
  mounted() {
    console.log('ExampleComponent has been mounted');
  },
};
</script>

<style scoped>
.example-component {
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 8px;
  margin-top: 20px;
  text-align: center;
}

h2 {
  color: #2c3e50;
}

p {
  font-size: 18px;
  color: #34495e;
}
</style>
