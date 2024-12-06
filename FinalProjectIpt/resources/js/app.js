import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue'; // Import the component

const app = createApp({});
app.component('example-component', ExampleComponent); // Register the component globally

app.mount('#app'); // Mount the Vue app to an element with id "app"
